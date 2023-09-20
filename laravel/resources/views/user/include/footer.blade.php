<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-bold me-1">{{ date('Y') }} ©</span>
            <a target="_blank" href="https://sophistec.dev/en" target="_blank" class="text-gray-800 text-hover-primary">Sophistec</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
            <li class="menu-item">
                <a target="_blank" href="{{ route('about', app()->getLocale())}}" target="_blank" class="menu-link px-2">About</a>
            </li>
            <li class="menu-item">
                <a target="_blank" href="{{ route('services', app()->getLocale())}}" target="_blank" class="menu-link px-2">Services</a>
            </li>
            <li class="menu-item">
                <a target="_blank" href="{{ route('pricing', app()->getLocale())}}" target="_blank" class="menu-link px-2">Pricing</a>
            </li>
            <li class="menu-item">
                <a target="_blank" href="{{ route('contact', app()->getLocale())}}" target="_blank" class="menu-link px-2">Contact Us</a>
            </li>
            <li class="menu-item">
                <a target="_blank" href="{{ route('faqs', app()->getLocale())}}" target="_blank" class="menu-link px-2">FAQ</a>
            </li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>