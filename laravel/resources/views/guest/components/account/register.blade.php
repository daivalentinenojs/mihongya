<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto" style="max-width: 60%">
                    <!--begin::Form-->
                    <form action="{{url()->current()}}" method="post" class="form w-100 mt-5" novalidate="novalidate" id="kt_sign_up_form">
                        @csrf         

                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Create an Account</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Already have an account?
                            <a href="{{ route('login', app()->getLocale())}}" class="link-primary fw-bolder">Sign in here</a></div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Action-->
                        <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                        <img alt="Logo" src="{{ url('assets/user/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Sign up with Google</button>
                        <!--end::Action-->
                        <!--begin::Separator-->
                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--end::Separator-->
                        
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
                        <div class="row fv-row mb-7">
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="firstname" autocomplete="off" />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="lastname" autocomplete="off" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 mt-2">
                            <label class="form-label fw-bolder text-dark fs-6">Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row mt-2" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->
                                <!--begin::Meter-->
                                <div class="d-flex align-items-center" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <!-- <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div> -->
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-3">
                            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm-password" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-3">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                            </label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center mb-5">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                                <span class="indicator-label">Submit</span>
                                <!-- <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span> -->
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</div>