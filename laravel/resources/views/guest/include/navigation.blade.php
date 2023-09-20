<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{__('company.info.address.short')}}</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{__('company.info.phone')}}</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{__('company.info.email')}}</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a target="_blank" class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{__('company.social.facebook.url')}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a target="_blank" class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{__('company.social.instagram.url')}}"><i class="fab fa-instagram fw-normal"></i></a>
                <a target="_blank" class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{__('company.social.linkedin.url')}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a target="_blank" class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="{{__('company.social.youtube.url')}}"><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav id="menuzord-right" class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('home', app()->getLocale())}}" class="menuzord-brand pull-left flip navbar-brand m-0 p-0">
            <img id="logo-header" class="logo-header" src="{{url(__('company.info.logo.header'))}}" alt="{{__('company.info.brand.title')}}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home', app()->getLocale())}}" class="nav-item nav-link 
                            {{{(
                                request()->routeIs('home')                                
                                ? 'active' : ''
                            )}}}">{{__('navigation.home.header')}}</a>
                <div class="nav-item dropdown">
                    <a href="{{ route('about', app()->getLocale())}}" class="nav-link dropdown-toggle 
                            {{{(
                                request()->routeIs('about') || request()->routeIs('team') ||
                                request()->routeIs('testimonials') || request()->routeIs('faqs')                            
                                ? 'active' : ''
                            )}}}" 
                            data-bs-toggle="dropdown">{{__('navigation.about.header')}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('about', app()->getLocale())}}" class="dropdown-item">{{__('navigation.about.children.grapho')}}</a>
                        <a href="{{ route('team', app()->getLocale())}}" class="dropdown-item">{{__('navigation.about.children.team')}}</a>
                        <a href="{{ route('testimonials', app()->getLocale())}}" class="dropdown-item">{{__('navigation.about.children.testimonials')}}</a>
                        <a href="{{ route('faqs', app()->getLocale())}}" class="dropdown-item">{{__('navigation.about.children.faqs')}}</a>
                    </div>
                </div>
                <a href="{{ route('services', app()->getLocale())}}" class="nav-item nav-link
                            {{{(
                                request()->routeIs('services')                                
                                ? 'active' : ''
                            )}}}">{{__('navigation.services.header')}}</a>
                <!-- <a href="" class="nav-item nav-link">{{__('navigation.portfolios.header')}}</a> -->
                <!-- <a href="" class="nav-item nav-link">{{__('navigation.gallery.header')}}</a> -->
                <a href="{{ route('pricing', app()->getLocale())}}" class="nav-item nav-link
                            {{{(
                                request()->routeIs('pricing')                                
                                ? 'active' : ''
                            )}}}">{{__('navigation.pricing.header')}}</a>
                <!-- <a href="" class="nav-item nav-link">{{__('navigation.events.header')}}</a> -->
                <!-- <a href="" class="nav-item nav-link">{{__('navigation.blog.header')}}</a> -->
                <a href="{{ route('contact', app()->getLocale())}}" class="nav-item nav-link
                            {{{(
                                request()->routeIs('contact')                                
                                ? 'active' : ''
                            )}}}">{{__('navigation.contact.header')}}</a>
                <a href="{{ route('login', app()->getLocale())}}" class="nav-item nav-link
                            {{{(
                                request()->routeIs('contact')                                
                                ? 'active' : ''
                            )}}}">{{__('navigation.account.children.login')}}</a>
                <div class="nav-item dropdown">
                    <a href="{{ route(Route::currentRouteName(), 'id') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('navigation.language.header')}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route(Route::currentRouteName(), 'id') }}" class="dropdown-item">{{__('navigation.language.children.id')}}</a>
                        <a href="{{ route(Route::currentRouteName(), 'en') }}" class="dropdown-item">{{__('navigation.language.children.en')}}</a>
                        <a href="{{ route(Route::currentRouteName(), 'zh-tw') }}" class="dropdown-item">{{__('navigation.language.children.zh-tw')}}</a>
                    </div>
                </div>
            </div>
            <a href="{{ route('services', app()->getLocale())}}" class="btn btn-primary py-2 px-4 ms-3">{{__('navigation.quote.header')}}</a>
        </div>
    </nav>

    @yield('banner')
</div>
<!-- Navbar & Carousel End -->
<script src="{{ asset('assets/guest/js/jquery-3.6.0.min.js') }}"></script>
<script>
$(document).ready(function() {
    var nav = $(".navbar-brand");
    var logo = $("#logo-header");
    var navPosition = nav.offset().top;
    var windowWidth = $(window).width();
    var logoSticky = "/public/assets/guest/images/logo/logo-sticky.png";
    var logoHeader = "/public/assets/guest/images/logo/logo-header.png";

    if (windowWidth <= 900) {
        logo.attr("src", logoSticky);
    } else {
        logo.attr("src", logoHeader);
    }

  $(window).scroll(function() {
    var scrollPosition = $(window).scrollTop();

    if (scrollPosition >= navPosition) {
        logo.attr("src", logoSticky);
    } else {
        var windowWidth = $(window).width();

        if (windowWidth <= 900) {
            logo.attr("src", logoSticky);
        } else {
            logo.attr("src", logoHeader);
        }
    }
  });
});
</script>