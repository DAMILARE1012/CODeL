@extends('layouts.front')
@section('title')
    - Register
@endsection
@section('content')

    <section class="">
        <div class="container position-relative p-0 mt-90" style="max-width: 700px;">
            @foreach ($errors->all() as $error)
                <li class="btn btn-danger">{{ $error }}</li>
            @endforeach
            <h3 class="bg-theme-colored2 p-15 pt-10 mt-4 mb-0 text-white">Register Form</h3>
            <div class="section-content bg-white p-30">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Register Form Starts -->
                        <form id="reservation_form_popup" name="reservation_form"
                            class="reservation-form mb-0 bg-silver-light p-30" method="post"
                            action="{{ route('register') }}" novalidate="novalidate">
                            {{ csrf_field() }}
                            <h3 class="text-center mt-0 mb-30">Register here </h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group mb-10">
                                                <input placeholder="First Name" id="reservation_name" name="fname"
                                                    class="form-control" aria-required="true" type="text" required
                                                    autofocus>

                                                @if ($errors->has('fname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('fname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group mb-10">
                                                <input placeholder="Middle Name" id="reservation_name" name="mname"
                                                    class="form-control" aria-required="true" type="text" required
                                                    autofocus>

                                                @if ($errors->has('fname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('fname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group mb-10">
                                                <input placeholder="Last Name" id="lastName" name="lname"
                                                    class="form-control" aria-required="true" type="text" required
                                                    autofocus>
                                                @if ($errors->has('lname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('lname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group mb-30">
                                            <input type="date" name="dob" id="dob" class="form-control" required="">

                                            @if ($errors->has('dob'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('dob') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group mb-30">
                                            <select id="person_select" name="program" class="form-control" required="">
                                                <option value="">Choose Programme</option>
                                                <option value="Computer Science">Computer Science</option>
                                                <option value="Software Engineering">Software Engineering</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group mb-30">
                                            <input placeholder="Enter A Valid Email" id="reservation_email" name="email"
                                                class="form-control" required="" aria-required="true" type="email">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group mb-30">
                                            <input placeholder="Phone Number" id="reservation_email" name="phone"
                                                class="form-control" required="" aria-required="true" type="text">

                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group mb-30">
                                            <input placeholder="Enter Password" id="reservation_name" name="password"
                                                required="" class="form-control" aria-required="true" type="password"
                                                required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group mb-30">
                                            <input placeholder="Confirm Password" id="reservation_name"
                                                name="password_confirmation" required="" class="form-control"
                                                aria-required="true" type="password" required autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group mb-30">
                                            <select id="country" name="country" class="form-control" required="">
                                            </select>
                                        </div>
                                    </div>
                                    <div class=" col-sm-6 col-xs-12">
                                        <div class="form-group mb-30">
                                            <select name="state" id="state" class="form-control" required="">
                                                <option value="">Choose State</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            


                            <div class="col-sm-12">
                                <div class="form-group mb-30">
                                    <input type="hidden" id="count" name="count" value="0">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-30">
                                    <input type="hidden" id="role_id" name="role_id" value="2">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-0 mt-0">
                                    <input name="form_botcheck" class="form-control" value="" type="hidden">
                                    <button type="submit"
                                        class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat"
                                        data-loading-text="Please wait...">Submit Now</button>
                                </div>
                            </div>



                            <div class="col-sm-12">
                                <div class="form-group mt-15 text-center">
                                    <p>Already have an account? <a href="{{ route("login") }}" class="text-theme-colored2 text-underline">Sign
                                            In Here</a> </p>
                                </div>
                            </div>
                    </div>
                    </form>

                    <!-- Appointment Form Validation-->
                    <script type="text/javascript">
                        $("#popup_appointment_form").validate({
                            submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before(
                                    '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                );
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType: 'json',
                                    success: function(data) {
                                        if (data.status == 'true') {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function() {
                                            $(form_result_div).fadeOut('slow')
                                        }, 6000);
                                    }
                                });
                            }
                        });
                        THEMEMASCOT.initialize.TM_datePicker();

                    </script>
                </div>
            </div>
        </div>
        <button title="Close (Esc)" type="button" class="mfp-close font-36">×</button>
        </div>
    </section>

    <script>
        var uploadField = document.getElementById("file_upload");

        uploadField.onchange = function() {
            if (this.files[0].size > 2097152) {
                alert("File is too big!");
                this.value = "";
            };
        };

    </script>

    <script type="text/javascript" src="{{ asset('js/countries.js') }}"></script>

    <!-- Country and State Dropdown List -->

    <script language="javascript">
        populateCountries("country",
            "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
        populateCountries("country2");
        populateCountries("country2");

    </script>

@endsection
