 <!-- Quote Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">{{__('quote.info.subtitle')}}</h5>
                    <h1 class="mb-0">{{__('quote.info.title')}}</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="{{__('quote.info.point.p1.icon')}}"></i>{{__('quote.info.point.p1.info')}}</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="{{__('quote.info.point.p2.icon')}}"></i>{{__('quote.info.point.p2.info')}}</h5>
                    </div>
                </div>
                <p class="mb-4 justify">{{__('quote.info.description')}}</p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="{{__('quote.info.contact.icon')}}"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">{{__('quote.info.contact.info')}}</h5>
                        <h4 class="text-primary mb-0">{{__('company.info.phone')}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form id="quote_form" action="{{ route('send-quote', app()->getLocale())}}" method="post">
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
                                    <div class="sent-message d-block success-msg white" style="margin-left: 14px;">
                                        <i class="fa fa-check"></i>
                                        <strong>{{session('status')['status']}}</strong>
                                        {{session('status')['message']}}
                                    </div>                                     
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input id="name" value="{{ old('name') }}" name="name" minLength="3" maxlength="100" required type="text" class="form-control bg-light border-0" placeholder="{{__('quote.info.form.name')}}" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input id="email" value="{{ old('email') }}" name="email" minLength="8" maxlength="30" required type="email" class="form-control bg-light border-0" placeholder="{{__('quote.info.form.email')}}" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input id="phone" value="{{ old('phone') }}" name="phone" minLength="7" maxlength="14" required type="tel" class="form-control bg-light border-0 input-phone" placeholder="{{__('quote.info.form.phone')}}" style="height: 55px;" onkeypress="javascript:return IsNumeric(event)">
                            </div>
                            <div class="col-12">
                                <select id="service" name="service" value="{{ old('service') }}" required class="form-select bg-light border-0" style="height: 55px;">
                                    <option value="0" selected disabled>{{__('quote.info.form.service.title')}}</option>
                                    <option value="{{__('quote.info.form.service.s1')}}">{{__('quote.info.form.service.s1')}}</option>
                                    <option value="{{__('quote.info.form.service.s2')}}">{{__('quote.info.form.service.s2')}}</option>
                                    <option value="{{__('quote.info.form.service.s3')}}">{{__('quote.info.form.service.s3')}}</option>
                                    <option value="{{__('quote.info.form.service.s4')}}">{{__('quote.info.form.service.s4')}}</option>
                                    <option value="{{__('quote.info.form.service.s5')}}">{{__('quote.info.form.service.s5')}}</option>
                                    <option value="{{__('quote.info.form.service.s6')}}">{{__('quote.info.form.service.s6')}}</option>
                                    <option value="{{__('quote.info.form.service.s7')}}">{{__('quote.info.form.service.s7')}}</option>
                                    <option value="{{__('quote.info.form.service.s8')}}">{{__('quote.info.form.service.s8')}}</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea id="message" name="message" required class="form-control bg-light border-0" rows="3" placeholder="{{__('quote.info.form.message')}}"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">{{__('quote.info.button.request')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
    let form = document.querySelector('#quote_form');

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

        let service = document.querySelector('#service');
        let checkService = 0;
        if (service.value != 0) {
            checkService = 1;
        } else {
            checkService = 0;
        }

        let isFormValid =   checkName && checkMessage && checkService &&
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
            document.getElementById('quote_form').submit();
        } else {
            let output = "";

            if (checkName == 0) {                        
                output += "Name is required";
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
           
            if (checkService == 0) {
                if (output != "") {
                    output += ", service"
                } else {
                    output += "Service is required";
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
<!-- Quote End -->