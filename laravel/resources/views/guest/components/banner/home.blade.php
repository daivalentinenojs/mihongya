<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{url(__('banner.home.slider1.picture'))}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{__('banner.home.slider1.subtitle')}}</h5>
                    <h2 class="display-1 text-white mb-md-4 animated zoomIn text-banner">
                        {{__('banner.home.slider1.title.t1')}} <br>
                        {{__('banner.home.slider1.title.t2')}}
                    </h2>
                    <a href="{{ route('services', app()->getLocale())}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{__('banner.home.slider1.button.quote')}}</a>
                    <a href="{{ route('contact', app()->getLocale())}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{__('banner.home.slider1.button.contact')}}</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{url(__('banner.home.slider2.picture'))}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{__('banner.home.slider2.subtitle')}}</h5>
                    <h3 class="display-1 text-white mb-md-4 animated zoomIn text-banner">
                        {{__('banner.home.slider2.title.t1')}} <br>
                        {{__('banner.home.slider2.title.t2')}}
                    </h3>
                    <a href="{{ route('services', app()->getLocale())}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{__('banner.home.slider2.button.quote')}}</a>
                    <a href="{{ route('contact', app()->getLocale())}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{__('banner.home.slider2.button.contact')}}</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{url(__('banner.home.slider3.picture'))}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{__('banner.home.slider3.subtitle')}}</h5>
                    <h3 class="display-1 text-white mb-md-4 animated zoomIn text-banner">
                        {{__('banner.home.slider3.title.t1')}} <br>
                        {{__('banner.home.slider3.title.t2')}}
                    </h3>
                    <a href="{{ route('services', app()->getLocale())}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{__('banner.home.slider2.button.quote')}}</a>
                    <a href="{{ route('contact', app()->getLocale())}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">{{__('banner.home.slider2.button.contact')}}</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{__('banner.home.button.previous')}}</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{__('banner.home.button.next')}}</span>
    </button>
</div>