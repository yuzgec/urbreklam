<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\PageCategoryTranslation;
use App\Models\PageGallery;
use App\Models\PageTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PageController extends Controller
{

    public function index()
    {
        $All = Page::with('getCategory')->orderBy('rank')->get();
        $Kategori = PageCategory::all();
        return view('backend.page.index', compact('All', 'Kategori'));
    }

    public function create()
    {
        $Kategori = PageCategory::all();
        return view('backend.page.create',compact('Kategori'));
    }


    public function store(PageRequest $request)
    {
        $create = Page::create($request->except('_token', 'image', 'gallery'));

        $this->mediaService->handleMediaUpload(
            $create, 
            $request->file('image'),
            'page',
            false
        );

        $this->mediaService->handleMediaUpload(
            $create, 
            $request->file('cover'),
            'cover',
            false
        );

        if ($request->hasFile('gallery')) {
            $files = $request->file('gallery');
            
            $this->mediaService->handleMultipleMediaUpload(
                $create,
                $files,
                'gallery',
            );
        }

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('page.index');

    }


    public function show($id)
    {
        $Show = Page::findOrFail($id);
        return view('frontend.page.index', compact('Show'));
    }

    public function edit($id)
    {
        $Edit = Page::findOrFail($id);
        $Kategori = PageCategory::all();
        return view('backend.page.edit', compact('Edit', 'Kategori'));
    }

    public function update(Request $request, Page $update)
    {
       //dd($request->all());
        $update->update($request->except('_token', '_method', 'image', 'gallery'));

        
        $this->mediaService->updateMedia(
            $update, 
            $request->file('image'),
            'page',
            false
        );

        $this->mediaService->updateMedia(
            $update, 
            $request->file('cover'),
            'cover',
            false
        );

        if ($request->hasFile('gallery')) {
            $files = $request->file('gallery');
            
            $this->mediaService->handleMultipleMediaUpload(
                $update,
                $files,
                'gallery',
                false
            );

        }
        toast(SWEETALERT_MESSAGE_UPDATE,'success');
        return redirect()->route('page.index');

    }

    public function destroy(Page $Delete)
    {
        $Delete->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('page.index');
    }

    public function getTrash(){
        $Trash = Page::onlyTrashed()->orderBy('deleted_at','desc')->get();
        return view('backend.page.trash', compact('Trash'));
    }

    public function getOrder(Request $request){
        foreach($request->get('page') as  $key => $rank ){
            Page::where('id',$rank)->update(['rank'=>$key]);
        }
    }

    public function getSwitch(Request $request){
        $update=Page::findOrFail($request->id);
        $update->status = $request->status == "true" ? 1 : 0 ;
        $update->save();
    }

    public function postUpload(Request $request)
    {

        if($request->hasFile('upload')) {
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filenametostore = Str::slug($filename, '-').time().'.'.$extension;
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Resim Yüklendi';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function deleteGaleriDelete($id){

        $Delete = Page::find($id);
        $Delete->media()->where('id', \request('image_id'))->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('page.edit', $id);

    }
}
