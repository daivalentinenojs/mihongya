<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto" style="max-width: 60%">
                    <form action="{{url()->current()}}" method="post" class="form w-60 mt-5" novalidate="novalidate" id="kt_sign_in_form">
                        @csrf      

                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Log In to Grapho Hunter</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">New Here?
                            <a href="{{ route('register', app()->getLocale())}}" class="link-primary fw-bolder">Create an Account</a></div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->

                        @if ($errors->any())
                        <div class="error-message d-block">
                            <strong class="text-red"> Sorry! </strong> <span class="text-red"> You have some errors.<span>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if(session()->has('status'))
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-3">                                    
                                    <div class="sent-message d-block success-msg" style="margin-left: 14px;">
                                        <i class="fa fa-check"></i>
                                        <strong class="text-green">{{session('status')['status']}}</strong>
                                        {{session('status')['message']}}
                                    </div>                                     
                                </div>
                            </div>
                        </div>
                        @endif
                        
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <!--end::Label-->    
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid mb-2" type="password" name="password" autocomplete="off" />
                            <!--end::Input-->
                            <!--begin::Link-->
                            <div class="d-flex flex-stack mb-2">
                                <a href="{{ route('forget-password', app()->getLocale())}}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continue</span>
                                <!-- <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span> -->
                            </button>
                            <!--end::Submit button-->
                            <!--begin::Separator-->
                            <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                            <!--end::Separator-->
                            <!--begin::Google link-->
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                            <img alt="Logo" src="{{ url('assets/user/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Continue with Google</a>
                            <!--end::Google link-->
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>