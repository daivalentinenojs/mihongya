<!-- Meta Tags -->
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="{{__('company.info.keywords')}}" name="keywords">
<meta content="{{__('company.info.meta')}}" name="description">
<meta content="{{__('company.info.brand.title')}}" name="author"/>

<meta property="og:title" content="{{__('company.info.brand.title')}}" />
<meta property="og:url" content="{{ route('home', app()->getLocale())}}" />
<meta property="og:description" content="{{__('company.info.meta')}}" />
<meta property="og:image:secure_url"
    content="{{asset(__('company.info.logo.icon'))}}" />
<meta property="og:image"
    content="{{asset(__('company.info.logo.icon'))}}" />
<meta property="profile:username" content="{{__('company.info.brand.title')}}" />
<meta name="twitter:card" content="Summary" />
<meta name="twitter:title" content="{{__('company.info.brand.title')}}" />
<meta name="twitter:image"
    content="{{asset(__('company.info.logo.icon'))}}" />
<meta name="twitter:url" content="{{ route('home', app()->getLocale())}}" />
<link rel="preload" as="image"
    href="{{asset(__('company.info.logo.icon'))}}" />

<!-- Favicon -->
<link href="{{ asset('assets/guest/images/favicon.png') }}" rel="icon">

<!-- Google Web Fonts -->
<link href="{{ asset('assets/guest/css/swap.css') }}" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="{{ asset('assets/guest/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/guest/css/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/guest/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('assets/guest/js/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/guest/js/animate/animate.min.css') }}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('assets/guest/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('assets/guest/css/style.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('assets/guest/css/shortcodes.css') }}" rel="stylesheet"> -->