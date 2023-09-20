<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">{{__('about.info.subtitle')}}</h5>
                    <h1 class="mb-0">{{__('about.info.title')}}</h1>
                </div>
                <p class="mb-4 justify">{{__('about.info.description')}}</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{__('about.info.point.p1')}}</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{__('about.info.point.p2')}}</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{__('about.info.point.p3')}}</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>{{__('about.info.point.p4')}}</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">{{__('about.info.contact.title')}}</h5>
                        <h4 class="text-primary mb-0">{{__('company.info.phone')}}</h4>
                    </div>
                    <div class="ps-4">
                    </div>
                </div>
                <a href="{{ route('services', app()->getLocale())}}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">{{__('about.info.contact.button')}}</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{url(__('about.info.image'))}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->