<?php

namespace App\Http\Controllers;

use App\Services\ViewService;
use App\Services\MediaService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $mediaService;
    protected $viewService;

    public function __construct( MediaService $mediaService, ViewService $viewService)
    {
        $this->mediaService = $mediaService;
        $this->viewService = $viewService;
    }
}
