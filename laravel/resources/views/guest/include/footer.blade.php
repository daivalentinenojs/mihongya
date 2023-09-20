<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-12 col-md-6">
                <div class="row gx-5 mt-small-5">
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title-sm position-relative pb-5 mb-4">
                            <a href="{{ route('home', app()->getLocale())}}" class="menuzord-brand pull-left flip navbar-brand m-0 p-0">
                                <img id="logo-header" class="logo-header" src="{{url(__('company.info.logo.header'))}}" alt="{{__('company.info.brand.title')}}">
                            </a>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <div class="justify">
                                <span> {{__('company.info.description.d1')}} </span>
                            </div>
                            <div class="justify">
                                <span> {{__('company.info.description.d2')}} </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">{{__('layout.footer.touch.header')}}</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0 justify">{{__('company.info.address.full')}}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">{{__('company.info.email')}}</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">{{__('company.info.phone')}}</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a target="_blank" class="btn btn-primary btn-square me-2" href="{{__('company.social.facebook.url')}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a target="_blank" class="btn btn-primary btn-square me-2" href="{{__('company.social.instagram.url')}}"><i class="fab fa-instagram fw-normal"></i></a>
                            <a target="_blank" class="btn btn-primary btn-square me-2" href="{{__('company.social.linkedin.url')}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a target="_blank" class="btn btn-primary btn-square" href="{{__('company.social.youtube.url')}}"><i class="fab fa-youtube fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">{{__('layout.footer.links.header')}}</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ route('home', app()->getLocale())}}"><i class="bi bi-arrow-right text-primary me-2"></i>{{__('navigation.home.header')}}</a>
                            <a class="text-light mb-2" href="{{ route('about', app()->getLocale())}}"><i class="bi bi-arrow-right text-primary me-2"></i>{{__('navigation.about.header')}}</a>
                            <a class="text-light mb-2" href="{{ route('services', app()->getLocale())}}#"><i class="bi bi-arrow-right text-primary me-2"></i>{{__('navigation.services.header')}}</a>
                            <a class="text-light mb-2" href="{{ route('team', app()->getLocale())}}"><i class="bi bi-arrow-right text-primary me-2"></i>{{__('navigation.about.children.team')}}</a>
                            <a class="text-light mb-2" href="{{ route('pricing', app()->getLocale())}}"><i class="bi bi-arrow-right text-primary me-2"></i>{{__('navigation.pricing.header')}}</a>
                            <a class="text-light" href="{{ route('contact', app()->getLocale())}}"><i class="bi bi-arrow-right text-primary me-2"></i>{{__('navigation.contact.header')}}</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">{{__('layout.footer.hour.header')}}</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <div>
                                <span> {{__('layout.footer.hour.info.day1')}} </span>
                                <div class="mb-10 pull-right"> {{__('layout.footer.hour.info.hour1')}}</div>
                            </div>
                            <div>
                                <span> {{__('layout.footer.hour.info.day2')}} </span>
                                <div class="mb-10 pull-right"> {{__('layout.footer.hour.info.hour2')}}</div>
                            </div>
                            <div>
                                <span> {{__('layout.footer.hour.info.day3')}} </span>
                                <div class="mb-10 pull-right"> {{__('layout.footer.hour.info.hour3')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-12 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">
                        {{__('layout.footer.copyright.reserved')}} &copy; {{ now()->year }}
                        <a class="text-white border-bottom" href="{{ route('home', app()->getLocale())}}">{{__('company.info.brand.title')}}</a> {{__('layout.footer.copyright.end')}}
                        {{__('layout.footer.copyright.supported')}}
                        <a target="_blank" class="text-white border-bottom" href="{{__('layout.footer.copyright.sophistec.url')}}">{{__('layout.footer.copyright.sophistec.header')}}</a> {{__('layout.footer.copyright.end')}}
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>