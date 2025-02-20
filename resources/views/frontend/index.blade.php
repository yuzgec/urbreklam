@extends('frontend.layout.app') 

@section('content')

@include('frontend.layout.slider')
<section class="services bg-dark-100 pt-4 pb-0">
    <ul class="grid_lines d-none d-md-flex justify-content-between">
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
    </ul>

    <div class="large_font">
        <h2 class="floating_element text-dark-200 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="3000">URBAN</h2>
    </div>
    <div class="container">
        <div class="section-header text-center has_line">
            <h1>{{ __('site.firma') }}</h1>
            <div class="section-desc row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <p>{{ __('site.hizmet_slogan') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($Service as $item)
            <div class="col-lg-4 mb-3 content" data-aos="fade-up" data-aos-duration="1000">
                <div class="card card-hover">

                    <div class="card-body">
                        <img class="card-img-top" src="{{ $item->getFirstMediaUrl('page', 'thumb') }}" alt="{{ $item->title }}">
                        <div class="icon_box mb-4 mt-3">
                            <img src="/urbanicon.png" alt="{{ $item->title }}" class="light" style="position: absolute;top: 25px;right: 25px;width: 50px;">
                        </div>
                        <h4 class="card-title"><a href="{{ route('servicedetail', $item->slug) }}" title="{{ $item->title }}">{{ $item->title }}</a></h4>
                        <p class="card-text">
                            {!! $item->short !!}
                        </p>
                        <div class="details_link">
                            <a href="{{ route('servicedetail', $item->slug) }}" title="{{ $item->title }}">
                                <span class="link_text">{{ __('site.devaminioku') }}</span>
                                <span class="link_icon">
                                    <span class="line"></span>
                                    <span class="circle"></span>
                                    <span class="dot"></span>
                                </span>
                            </a>
                        </div>                 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

<div>
    <div class="container" style="z-index: 1000;margin-top:100px">
        <div class=" text-center has_line">
            <h1>{{ __('site.referanslar') }}</h1>
            <div class="section-desc row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <p>{{ __('site.referans_alt_text') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach($References->getMedia('gallery')->random(12) as $item)

        <div class="col-md-2 col-4 mb-4 text-center">
            <div class="card">
                <div class="card-body">
                    <img src="{{ $item->getUrl('thumb') }}" alt="{{ __('site.firma')}}" class="img-fluid black-white-img">
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>

    <ul class="grid_lines d-none d-md-flex justify-content-between">
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
    </ul>
</div>

<section class="about bg-dark-100">
    <div class="large_font">
        <h2 class="floating_element text-dark-200 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">URBAN</h2>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5">
                <div class="about_image">
                    <img src="/frontend/hakkimizda.jpg" alt="{{ config('settings.siteTitle')}}">
                    <img src="/frontend/img/about/e1.svg" alt="{{ config('settings.siteTitle')}}" data-aos="fade-down" data-aos-duration="1000">
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="about_text_inner">
                    <div class="about_text">
                        <h2 class="text-white">{{ config('settings.siteTitle')}}</h2>
                       {!! $Hakkimizda->short !!}
                    </div>

                    <div class="about_icon_box">
                        <h3 class="text-dark mb-2">NEDEN URBAN REKLAM</h3>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-12 mb-2">
                                <h6>Yüksek Kalite:</h6>
                                <p>Tüm üretimlerimizde dayanıklı, uzun ömürlü ve hava koşullarına dayanıklı malzemeler kullanarak, markanız için en iyi kaliteyi sunuyoruz.</p>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>Özel Tasarım</h6>
                                <p>Kurumsal kimliğinize ve işletmenize özel özgün tasarımlar geliştirerek, rakiplerinizden farklı olmanızı sağlıyoruz. </p>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>Teknolojik Üretim</h6>
                                <p>CNC kesim, lazer kesim, UV baskı ve LED aydınlatma gibi en yeni teknolojileri kullanarak, modern ve şık tabela çözümleri üretiyoruz. </p>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>Hızlı Teslimat</h6>
                                <p>Üretim sürecimizi titizlikle planlayarak, projelerinizi zamanında teslim ediyor ve profesyonel montaj hizmeti sunuyoruz.</p>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>Uygun Fiyat</h6>
                                <p>Kaliteden ödün vermeden bütçenize uygun ekonomik çözümler sunarak, uzun vadeli ve maliyet avantajı sağlayan reklam uygulamaları yapıyoruz.</p>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>Müşteri Memnuniyeti</h6>
                                <p>Her projeyi titizlikle ele alıyor, iş ortaklarımıza güvenilir, profesyonel ve yüksek memnuniyet garantili hizmet sunuyoruz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="btn_group" data-aos="fade-down" data-aos-duration="1000">
                        <a href="{{ route('corporatedetail','hakkimizda') }}" class="btn gray">Devamını Oku </a>  
                    </div>
                </div>
                                    
            </div>
        </div>
    </div>

    <ul class="grid_lines d-none d-md-flex justify-content-between">
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
    </ul>
</section>

<section class="funfacts bg_1" id="funfacts">
    <div class="container">
        <div class="row">
            <div class="col">
             
                <div class="funfacts_inner">
                    <div class="funfact2 d-flex align-items-center">
                        <div class="fun_img">
                            <img src="/urbanicon.png" alt="{{ config('settings.siteTitle')}}" class="light" style="width: 50px;">
                        </div>
                        <div class="funfact_content">
                            <p>YAPILAN İŞLER</p>
                            <div class="d-flex align-items-center"><h2 class="fun-number">300</h2><span>+</span></div>                                
                        </div>
                    </div>                            
                    <div class="funfact2 d-flex align-items-center">
                        <div class="fun_img">
                            <img src="/urbanicon.png" alt="{{ config('settings.siteTitle')}}" class="light" style="width: 50px;">
                        </div>
                        <div class="funfact_content">
                            <p>MÜŞTERİ MEMNUNİYETİ</p>
                            <div class="d-flex align-items-center"><h2 class="fun-number">100%</h2></div>
                        </div>
                    </div>                            
                    <div class="funfact2 d-flex align-items-center">
                        <div class="fun_img">
                            <img src="/urbanicon.png" alt="{{ config('settings.siteTitle')}}" class="light" style="width: 50px;">
                        </div>
                        <div class="funfact_content">
                            <p>YENİ ÜRÜNLER</p>
                            <div class="d-flex align-items-center"><h2 class="fun-number">15</h2><span>+</span></div>
                        </div>
                    </div>                            
                    <div class="funfact2 d-flex align-items-center">
                        <div class="fun_img">
                            <img src="/urbanicon.png" alt="{{ config('settings.siteTitle')}}" class="light" style="width: 50px;">
                        </div>
                        <div class="funfact_content">
                            <p>DEVAM EDEN İŞLER</p>
                            <div class="d-flex align-items-center"><h2 class="fun-number">2</h2><span>+</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="projects packery">
    <ul class="grid_lines d-none d-md-flex justify-content-between">
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
    </ul>
    <div class="large_font">
        <h2 class="floating_element text-dark-200 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">URBAN</h2>
    </div>
    <div class="container">
        <div class="section-header text-center has_line">
            <h2 class="text-white">YAPILAN İŞLER</h2>
            <div class="section-desc row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <p>Urban Reklam olarak gerçekleştirdiğimiz referans projeler, kalite ve estetiği ön planda tutarak her müşterimizin kurumsal kimliğine özel çözümler sunduğumuzu göstermektedir. Her projede zamanında teslimat ve kusursuz işçilik anlayışıyla hareket ederek, sektördeki güvenilirliğimizi ve profesyonelliğimizi pekiştirmeye devam ediyoruz.
                    </p>
                </div>
            </div>
        </div>

        <div class="portfolio-filters-content">
            <div class="filters-button-group">
                <button class="button" data-slug="">Hepsi</button>
                @foreach($Services as $item)
                    <button class="button {{ $item->id == 1 ? 'is-checked' : '' }}" data-slug="{{ $item->translate('tr')->slug }}">
                        {{$item->translate('tr')->title}}
                        <sup class="filter-count">{{ $imageCounts[$item->translate('tr')->slug] ?? 0 }}</sup>
                    </button>
                @endforeach
            </div>
        </div>

        <div class="grid gutter-20 clearfix"> 
            <div class="grid-sizer"></div>
            <div id="gallery-container">
                @include('frontend.partials.gallery-items', ['images' => $galleryImages])
            </div>
        </div>
        <div class="btn_group mt-4 w-100 text-center">
            <a href="{{ route('project') }}" class="btn olive w-100">Bütün Projeleri Gör</a>
        </div>
    </div>
</section>

<section class="testimonial box_padding pb-0">
    <ul class="grid_lines d-none d-md-flex justify-content-between">
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
        <li class="grid_line"></li>
    </ul>
    <div class="has_line_lg"></div>
    <div class="testimonial_inner bg-black">
        <div class="swiper swiper_testimonial">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-block text-center">
                        <p>"İşini iyi yapmayan insan, zamanı boşa harcar."</p>
                        <h6 class="text-olive">Albert Einstein</h6>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-block text-center">
                        <p>"Bir işin başlangıcı kadar bitişi de önemlidir."</p>
                        <h6 class="text-olive"> Confucius (Konfüçyüs)</h6>
                    </div>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="blog pt-lg bg-dark-100">
    <div class="large_font">
        <h2 class="floating_element text-dark-200 d-flex justify-content-center">URBAN</h2>
    </div>
    <div class="container">
        <div class="section-header text-center has_line">
            <h2 class="text-white">BLOG YAZILARI</h2>
        </div>
        <div class="row">
            @foreach($Blog->take(6) as $item)
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="blog-post">
                            <a href="{{ route('blogdetail', $item->slug) }}" class="post-image" title="{{ $item->title }}">
                                <div class="image-overlay"></div>
                                <span class="post-date">{{ $item->created_at }}</span>
                                <img src="{{ $item->getFirstMediaUrl('page', 'thumb') }}" alt="{{ $item->title }}">
                            </a>
                            <h5><a href="{{route('blogdetail', $item->slug)}}" class="text-dark" title="{{ $item->title }}">{{ $item->title }}</a></h5>
                            <p>{{ $item->short }}</p>
                            <div class="details_link">
                                <a href="{{route('blogdetail', $item->slug)}}" title="{{ $item->title }}">
                                    <span class="link_text">
                                        Devamını Oku</span>
                                    <span class="link_icon">
                                        <span class="line"></span>
                                        <span class="circle"></span>
                                        <span class="dot"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>


<div class="container " style="z-index: 1000;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3 mt-3">
                
                <div class="card-body">
                    <div class="card-header ">
                        <h4 class="card-title">URBAN REKLAM VE TABELA İMALATI</h4>
                    </div>
                    <p>
                        İşletmenizin dış dünyaya açılan yüzü olan tabelalar, marka bilinirliğinizi artırmanın ve müşterilerinize profesyonel bir imaj sunmanın en etkili yollarından biridir. Urban Reklam olarak, İstanbul’da tabela imalatı, dijital baskı çözümleri ve reklam uygulamaları alanında profesyonel hizmet sunuyoruz. Işıklı ve ışıksız tabelalardan, kutu harf ve totem tabelalara kadar geniş ürün yelpazemizle işletmenizin tanıtım gücünü artırıyoruz.
                    </p>
                        
                        <li><b>Işıklı Tabela İmalatı:</b> Işıklı tabelalar, özellikle gece saatlerinde işletmenizin görünürlüğünü artırmak için en etkili reklam çözümlerindendir. </li>
                        <li><b>Işıksız Tabela İmalatı:</b> Minimalist ve sade bir tasarım isteyen işletmeler için ışıksız tabela modellerimiz, estetik ve kurumsal bir görünüm sunar. İç mekan ve dış mekan kullanımına uygun, dayanıklı malzemelerle üretilir.</li>
                        <li><b>Kutu Harf Tabela:</b> Üç boyutlu ve dikkat çekici bir görünüm sağlayan kutu harf tabelalarımız, özellikle kurumsal firmalar için prestijli bir tercih sunar.</li>
                        <li><b>Totem Tabela:</b> Totem tabelalar, yol kenarlarında veya geniş alanlarda uzun mesafelerden görünürlüğü sağlamak için en uygun tabela modelidir.</li>
                        <li><b>Pleksi Tabela:</b> Şeffaf, parlak ve modern bir görünüm sunan pleksi tabelalar, iç ve dış mekanlarda estetik bir reklam alanı oluşturur.</li>
                        <li><b>Dijital Baskı ve Araç Giydirme:</b> Urban Reklam, sadece tabela imalatı değil, aynı zamanda dijital baskı, araç giydirme ve iç mekan reklam çözümleri ile de işletmenizin tanıtım gücünü artırır.</li>
                    </ul>
                    <div class="card-header mt-3">
                        <h4 class="card-title">Urban Reklam ile Tabela İmalat Süreci</h4>
                    </div>
                    
                    <p>Urban Reklam olarak, tabela imalat sürecinde her aşamada profesyonel ve müşteri odaklı bir yaklaşımla çalışıyoruz. Sürecimiz şu adımlardan oluşur:</p>
                    <ul>
                        <li><b>Talep ve İstek:</b> Müşterilerimizin ihtiyaçlarını anlamak ve onlara en uygun çözümleri sunmak için ilk adım.</li>
                        <li><b>Tasarım ve Tasarım:</b> Müşteri ihtiyaçlarına uygun tasarım çalışmaları yapıyoruz.</li>
                        <li><b>Üretim:</b> Tasarımınızı gerçekleştirmek için gerekli üretim süreci.</li>
                        <li><b>Montaj:</b> Üretim tamamlandıktan sonra, tabelalarınızı monte etmek için gerekli işler.</li>
                    </ul>
                   
                    <div class="card-header mt-3">
                        <h4 class="card-title">İstanbul’da Tabela Fiyatları</h4>
                    </div>
                    <p>İstanbul'da tabela fiyatları; kullanılan malzeme, tabela boyutu, ışıklandırma türü ve montaj hizmeti gibi faktörlere göre değişiklik göstermektedir. Urban Reklam olarak, işletmenize özel fiyatlandırma ile en uygun tabela çözümlerini sunuyoruz.                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('customCSS')


<style>
.loading {
    position: relative;
    min-height: 200px;
}
.loading:after {
    content: 'Yükleniyor...';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.grid-sizer {
    width: 49%;
}

.grid-item {
    margin-bottom: 20px;
}

.grid-item.width-50 {
    width: 49%;
}

.grid-item.width-100 {
    width: 99%;
}

/* Sağ-sol yerleşimi için */
.grid-item.width-50:nth-of-type(2n+1) { /* Tek sayılı elemanlar */
    margin-right: 1%;
}

.grid-item.width-50:nth-of-type(2n) { /* Çift sayılı elemanlar */
    margin-left: 1%;
}

.thumb img {
    width: 100%;
    height: auto;
    display: block;
}

@media (max-width: 768px) {
    .grid-sizer,
    .grid-item.width-50,
    .grid-item.width-100 {
        width: 100%;
        margin-left: 0;
        margin-right: 0;
    }
}
</style>
@endsection


