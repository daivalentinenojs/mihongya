<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">{{__('contact.form.subtitle')}}</h5>
            <h1 class="mb-0">{{__('contact.form.title')}}</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="{{__('contact.form.info.i1.icon')}}"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">{{__('contact.form.info.i1.title')}}</h5>
                        <h5 class="text-primary mb-0">{{__('company.info.phone')}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="{{__('contact.form.info.i2.icon')}}"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">{{__('contact.form.info.i2.title')}}</h5>
                        <h5 class="text-primary mb-0">{{__('company.info.email')}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="{{__('contact.form.info.i3.icon')}}"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">{{__('contact.form.info.i3.title')}}</h5>
                        <h5 class="text-primary mb-0">{{__('company.info.address.office')}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s"> 
                <form id="contact_form" action="{{url()->current()}}" method="post">
                    @csrf 

                    @if ($errors->any())
                    <div class="error-message d-block">
                        <strong class="text-red"> {{__('contact.form.label.sorry')}} </strong> <span class="text-red"> {{__('contact.form.label.error-message')}} <span>
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
                    
                    <div class="row g-3">
                        <div class="col-md-12">
                            <input id="name" value="{{ old('name') }}" name="name" minLength="3" maxlength="100" required type="text" class="form-control border-0 bg-light px-4" placeholder="{{__('contact.form.label.name.label')}}" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input id="email" value="{{ old('email') }}" name="email" minLength="8" maxlength="30" required type="email" class="form-control border-0 bg-light px-4" placeholder="{{__('contact.form.label.email.label')}}" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input id="phone" value="{{ old('phone') }}" name="phone" minLength="7" maxlength="14" required type="tel" class="form-control border-0 bg-light px-4 input-phone" placeholder="{{__('contact.form.label.phone.label')}}" style="height: 55px;" onkeypress="javascript:return IsNumeric(event)">
                        </div>
                        <div class="col-12">
                            <input id="subject" value="{{ old('subject') }}" name="subject" minLength="3" maxlength="100" required type="text" class="form-control border-0 bg-light px-4" placeholder="{{__('contact.form.label.subject.label')}}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea id="message" name="message" required class="form-control border-0 bg-light px-4 py-3" rows="5" placeholder="{{__('contact.form.label.message.label')}}"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">{{__('contact.form.button.send.label')}}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.376547336788!2d112.68255641744383!3d-7.311526799999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd3362cd8035%3A0xe949658f06235d18!2sCitraLand%20Vittorio%20-%20Wiyung%20Surabaya!5e0!3m2!1sid!2stw!4v1688896882594!5m2!1sid!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

@push('script')
<script src="https://cdn.jsdelivr.net/npm/cleave.js@latest/dist/cleave.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cleave.js@latest/dist/addons/cleave-phone.id.js"></script>

<script>
var cleave = new Cleave('#phone', {
    phone: true,
    phoneRegionCode: 'ID'
});
</script>

<script type="text/javascript">
    var specialKeys = new Array();
    specialKeys.push(8); //Backspace
    function IsNumeric(e) {
        var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
        return ret;
    }      
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
</script>

<script>
    let form = document.querySelector('#contact_form');

    form.addEventListener('submit', function (e) {
        // prevent the form from submitting
        e.preventDefault();
        
        let name = document.querySelector('#name');
        let checkName = 0;
        if (name.value != "") {
            checkName = 1;
        } else {
            checkName = 0;
        }

        let subject = document.querySelector('#subject');
        let checkSubject = 0;
        if (subject.value != "") {
            checkSubject = 1;
        } else {
            checkSubject = 0;
        }

        let message = document.querySelector('#message');
        let checkMessage = 0;
        if (message.value != "") {
            checkMessage = 1;
        } else {
            checkMessage = 0;
        }

        let email = document.querySelector('#email');
        let checkEmail = 0;
        if (validateEmail(email.value)) {
            checkEmail = 1;
        } else {
            checkEmail = 0;
        }

        let phone = document.querySelector('#phone');
        let checkNumberValue = 0;
        let checkZeroNumber = 0;
        if (phone.value != "" && phone.value.length > 7 || phone.value == "") {
            checkNumberValue = 1;
        } else {
            checkNumberValue = 0;
        }
        if (phone.value != "" && phone.value[0] == "0" || phone.value == "") {
            checkZeroNumber = 1;
        } else {
            checkZeroNumber = 0;
        }

        

        let isFormValid =   checkName && checkSubject && checkMessage &&
                            checkEmail && checkNumberValue && checkZeroNumber;

        if (isFormValid) {
            Swal.fire({
                text: 'Please Wait...',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            document.getElementById('contact_form').submit();
        } else {
            let output = "";

            if (checkName == 0) {                        
                output += "Name is required";
            }

            if (checkSubject == 0) {                        
                output += "Subject is required";
            }

            if (checkMessage == 0) {                        
                output += "Message is required";
            }

            if (checkEmail == 0) {
                if (output != "") {
                    output += ", email"
                } else {
                    output += "Email is required";
                }
            }
           
            if (checkZeroNumber == 0) {
                if (output != "")
                    output += ", please fill in the mobile number in the correct format (starting from 0)"
                else
                    output += "Please fill in the mobile number in the correct format (starting from 0)";
            }

            if (checkNumberValue == 0) {
                if (output != "")
                    output += ", minimum mobile number is 8 digits"
                else
                    output += "Minimum mobile number is 8 digits";
            }

            if (output != "")
                    output += ".";
            
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: output,
            })
        }
    });
</script>
@endpush
<!-- Contact End -->