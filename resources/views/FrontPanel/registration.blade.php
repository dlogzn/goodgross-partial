@extends('layouts.front_panel')
@section('content')

<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto" id="main_content">
            <div class="text-center mt-4 mb-3">
                <img src="{{ asset('/storage/images/default/FrontPanel/icons8-register-100.png') }}" style="height: 100px; width: 100px;">
            </div>
            <div class="text-center border-bottom pb-3" style="border-color: #e8f3ed !important;">
                <div class="h4 text_color_7">Create an account with GoodGross</div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-12 col-md-11 col-lg-10 col-xl-9 col-xxl-8 mx-auto">


                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4" id="account_pros">
                            <div class="row mt-0 mt-xl-5">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-12">
                                    <div class="text_color_default h5">Pros of a Personal Account</div>
                                    <ul class="list-group list-group-numbered">
                                        <li class="list-group-item border-0 ps-0">Convenient for buying products</li>
                                        <li class="list-group-item border-0 ps-0">Specially designed for selling personal stuffs</li>
                                        <li class="list-group-item border-0 ps-0">Limited Liability</li>
                                        <li class="list-group-item border-0 ps-0">Easy to get paid</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-12">
                                    <div class="text_color_default h5 mt-4 mt-sm-0 mt-md-0 mt-lg-0 mt-xl-4">Pros of a Business Account</div>
                                    <ul class="list-group list-group-numbered">
                                        <li class="list-group-item border-0 ps-0">Convenient for selling products</li>
                                        <li class="list-group-item border-0 ps-0">Specially designed for manufacturers and suppliers</li>
                                        <li class="list-group-item border-0 ps-0">Direct transactions with manufacturers</li>
                                        <li class="list-group-item border-0 ps-0">Get paid in multi-dimension</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 col-xxl-8 ps-3 ps-sm-3 ps-md-3 ps-lg-3 ps-xl-5">

                            <div class="row mt-4 mt-sm-4 mt-md-4 mt-lg-4 mt-xl-0">
                                <div class="col-6">
                                    <div class="form-check" style="width: 100%; padding: 10px 0 10px 35px;">
                                        <input type="radio" class="form-check-input" id="personal_account" name="account_type">
                                        <label class="form-check-label h6 text_color_default" for="personal_account">Personal Account</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check" style="width: 100%; padding: 10px 0 10px 35px;">
                                        <input type="radio" class="form-check-input" id="business_account" name="account_type">
                                        <label class="form-check-label h6 text_color_default" for="business_account">Business Account</label>
                                    </div>
                                </div>
                            </div>

                            <div id="personal_account_content">

                                <div id="registration_form_message_for_personal_account" class="text-center font_size_12 text-danger" style="height: 30px;"></div>
                                <form id="registration_form_for_personal_account">
                                    @if($userCountry)
                                        <input type="hidden" name="country_id" value="{{ $userCountry->id }}">
                                    @else
                                        <input type="hidden" name="country_id" value="223">
                                    @endif

                                    <div class="row mb-4">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-4 mb-sm-4 mb-md-4 mb-lg-4 mb-xl-0">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="first_name" id="first_name_for_personal_account" placeholder="First Name">
                                                <label for="first_name_for_personal_account">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="last_name" id="last_name_for_personal_account" placeholder="Last Name">
                                                <label for="last_name_for_personal_account">Last Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-4 mb-sm-4 mb-md-4 mb-lg-4 mb-xl-0">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="email" id="email_for_personal_account" placeholder="Email">
                                                <label for="email_for_personal_account">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                            <div id="phone_field_holder_for_personal_account">
                                                @if($userCountry)
                                                    <div class="input-group">
                                                        <div class="input-group-text w-25">
                                                            <img src="{{ $userCountry->flag }}" style="height: 20px;">
                                                            <span class="">{{ $userCountry->dialling_code }}</span>
                                                        </div>
                                                        <div class="form-floating w-75">
                                                            <input type="text" class="form-control" name="phone" id="phone_for_personal_account" placeholder="Phone">
                                                            <label for="phone_for_personal_account">Phone</label>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" name="phone" id="phone_for_personal_account" placeholder="Phone">
                                                        <label for="phone_for_personal_account">Phone</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group d-flex mb-4">
                                        <div class="form-floating flex-grow-1">
                                            <input type="password" class="form-control" name="password" id="password_for_personal_account" placeholder="Password" autocomplete="off" style="border-right: 0; border-bottom-right-radius: 0; border-top-right-radius: 0;">
                                            <label for="password_for_personal_account">Password</label>
                                        </div>
                                        <div class="input-group-text border-start-0">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="password_show_hide_for_personal_account">
                                                <label class="form-check-label " for="password_show_hide_for_personal_account">Show</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group d-flex mb-4">
                                        <div class="form-floating flex-grow-1">
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation_for_personal_account" placeholder="Retype Password" autocomplete="off" style="border-right: 0; border-bottom-right-radius: 0; border-top-right-radius: 0;">
                                            <label for="password_confirmation_for_personal_account">Retype Password</label>
                                        </div>
                                        <div class="input-group-text border-start-0">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="password_confirmation_show_hide_for_personal_account">
                                                <label class="form-check-label " for="password_confirmation_show_hide_for_personal_account">Show</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="terms_of_service_for_personal_account">
                                        <label class="form-check-label font_size_13" for="terms_of_service_for_personal_account">I agree to GoodGross's <a href="{{ url('/terms-of-service') }}" class="text-decoration-none text_color_default">Terms of Service</a></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="privacy_policy_for_personal_account">
                                        <label class="form-check-label font_size_13" for="privacy_policy_for_personal_account">I accept GoodGross's use of my data for the service and everything else described in the <a href="{{ url('/privacy-policy') }}" class="text-decoration-none text_color_default">Privacy Policy</a></label>
                                    </div>

                                    <div class="d-grid my-4">
                                        <button type="submit" class="btn btn_default" id="registration_form_submit_for_personal_account">
                                            <span id="registration_form_submit_text_for_personal_account">Register</span>
                                            <div id="registration_form_submit_processing_for_personal_account" class="d-flex align-items-center sr-only">
                                                <span>Processing...</span>
                                                <div class="spinner-border spinner-border-sm ms-auto" role="status" aria-hidden="true"></div>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="text-center">
                                        <span class="me-3 font_size_14">Already have an account?</span>
                                        <a class="btn btn-outline-info" href="{{ url('/sign-in') }}">Sign in</a>
                                    </div>
                                </form>
                            </div>




                            <div id="business_account_content">

                                <div id="registration_form_message_for_business_account" class="text-center font_size_12 text-danger" style="height: 30px;"></div>
                                <form id="registration_form_for_business_account">
                                    <div class="row mb-4">
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-6 mb-4 mb-sm-4 mb-md-4 mb-lg-4 mb-xl-0">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="name" id="name_for_business_account" placeholder="Business Name">
                                                <label for="name_for_business_account">Business Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <select class="form-select" name="type" id="type_for_business_account">
                                                    <option value="">Select Business Type</option>
                                                    <option value="Retail">Retail</option>
                                                    <option value="Wholesale">Wholesale</option>
                                                </select>
                                                <label for="type_for_business_account">Business Type</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-4 mb-sm-4 mb-md-4 mb-lg-4 mb-xl-0">
                                            <div class="form-floating">
                                                <select class="form-select" name="country_id" id="country_id_for_business_account">
                                                    <option value="">Select Country</option>
                                                    @foreach($countries as $country)
                                                        @if($userCountry && $country->country === $userCountry->country)
                                                            <option value="{{ $country->id }}" selected>{{ $country->country }}</option>
                                                        @else
                                                            <option value="{{ $country->id }}">{{ $country->country }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <label for="country_id_for_business_account">Country</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                            <div id="state_or_city_field_holder_for_business_account">
                                                <div class="form-floating">
                                                    @if($userCountry && $userCountry->country === 'United States')
                                                        <select class="form-select" name="state_id" id="state_id_for_business_account">
                                                            <option value="">Select State</option>
                                                            @foreach($states as $state)
                                                                @if($state->state === $userState->state)
                                                                    <option value="{{ $state->id }}" selected>{{ $state->state }}</option>
                                                                @else
                                                                    <option value="{{ $state->id }}">{{ $state->state }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    @else
                                                        <input type="text" class="form-control" name="city" id="city_for_business_account" placeholder="City">
                                                    @endif
                                                    @if($userCountry && $userCountry->country === 'United States')
                                                        <label for="state_id_for_business_account">State</label>
                                                    @else
                                                        <label for="city_for_business_account">City</label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-4 mb-sm-4 mb-md-4 mb-lg-4 mb-xl-0">
                                            <div id="phone_field_holder_for_business_account">
                                                @if($userCountry)
                                                    <div class="input-group d-flex">
                                                        <div class="input-group-text flex-shrink-0">
                                                            <img src="{{ $userCountry->flag }}" style="height: 20px;">
                                                            <span class="">{{ $userCountry->dialling_code }}</span>
                                                        </div>
                                                        <div class="form-floating flex-grow-1">
                                                            <input type="text" class="form-control" name="phone" id="phone_for_business_account" placeholder="Business Phone">
                                                            <label for="phone_for_business_account">Business Phone</label>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" name="phone" id="phone_for_business_account" placeholder="Business Phone">
                                                        <label for="phone_for_business_account">Business Phone</label>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="email" id="email_for_business_account" placeholder="Business Email">
                                                <label for="email_for_business_account">Business Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group d-flex mb-4">
                                        <div class="form-floating flex-grow-1">
                                            <input type="password" class="form-control" name="password" id="password_for_business_account" placeholder="Password" autocomplete="off" style="border-right: 0; border-bottom-right-radius: 0; border-top-right-radius: 0;">
                                            <label for="password_for_business_account">Password</label>
                                        </div>
                                        <div class="input-group-text border-start-0">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="password_show_hide_for_business_account">
                                                <label class="form-check-label " for="password_show_hide_for_business_account">Show</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group d-flex mb-4">
                                        <div class="form-floating flex-grow-1">
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation_for_business_account" placeholder="Retype Password" autocomplete="off" style="border-right: 0; border-bottom-right-radius: 0; border-top-right-radius: 0;">
                                            <label for="password_confirmation_for_business_account">Retype Password</label>
                                        </div>
                                        <div class="input-group-text border-start-0">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="password_confirmation_show_hide_for_business_account">
                                                <label class="form-check-label " for="password_confirmation_show_hide_for_business_account">Show</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="terms_of_service_for_business_account">
                                        <label class="form-check-label font_size_13" for="terms_of_service_for_business_account">I agree to GoodGross's <a href="{{ url('/terms-of-service') }}" class="text-decoration-none text_color_default">Terms of Service</a></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="privacy_policy_for_business_account">
                                        <label class="form-check-label font_size_13" for="privacy_policy_for_business_account">I accept GoodGross's use of my data for the service and everything else described in the <a href="{{ url('/privacy-policy') }}" class="text-decoration-none text_color_default">Privacy Policy</a></label>
                                    </div>
                                    <div class="d-grid my-4">
                                        <button type="submit" class="btn btn_default" id="registration_form_submit_for_business_account">
                                            <span id="registration_form_submit_text_for_business_account">Register</span>
                                            <div id="registration_form_submit_processing_for_business_account" class="d-flex align-items-center sr-only">
                                                <span>Processing...</span>
                                                <div class="spinner-border spinner-border-sm ms-auto" role="status" aria-hidden="true"></div>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="text-center">
                                        <span class="me-3" style="font-size: 14px;">Already have an account?</span>
                                        <a class="btn btn-outline-info" href="{{ url('/sign-in') }}">Sign in</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 75px;"></div>
        </div>
    </div>
</div>




<script type="text/javascript">

    $(document).ready(function () {
        document.title = 'Register | GoodGross';
        let user = JSON.parse('{!! $user !!}');
        if (user) {
            if (user.account.type === 'Personal') {
                $('#first_name_for_personal_account').val(user.account.personal_account.first_name).prop('disabled', true);
                $('#last_name_for_personal_account').val(user.account.personal_account.last_name).prop('disabled', true);
                $('#phone_for_personal_account').val(user.account.personal_account.phone).prop('disabled', true);
                $('#email_for_personal_account').val(user.account.personal_account.email).prop('disabled', true);
                $('#personal_account').prop('checked', true);
                $('#business_account').prop('checked', false);
                $('#personal_account_content').removeClass('sr-only');
                $('#business_account_content').addClass('sr-only');
            } else if (user.account.type === 'Business') {
                $('#name_for_business_account').val(user.account.business_account.name).prop('disabled', true);
                $('#type_for_business_account').val(user.account.business_account.type).prop('disabled', true);
                $('#phone_for_business_account').val(user.account.business_account.phone).prop('disabled', true);
                $('#email_for_business_account').val(user.account.business_account.email).prop('disabled', true);
                $('#personal_account').prop('checked', false);
                $('#business_account').prop('checked', true);
                $('#personal_account_content').addClass('sr-only');
                $('#business_account_content').removeClass('sr-only');
            }
        } else {
            $('#personal_account').attr('checked', true);
            $('#business_account').attr('checked', false);
            $('#personal_account_content').removeClass('sr-only');
            $('#business_account_content').addClass('sr-only');
        }
    });

    $(document).on('click', '#personal_account', function () {
        $('#personal_account').attr('checked', true);
        $('#business_account').attr('checked', false);
        $('#personal_account_content').removeClass('sr-only');
        $('#business_account_content').addClass('sr-only');
    });

    $(document).on('click', '#business_account', function () {
        $('#personal_account').attr('checked', false);
        $('#business_account').attr('checked', true);
        $('#personal_account_content').addClass('sr-only');
        $('#business_account_content').removeClass('sr-only');
    });

    $(document).on('click', '#password_show_hide_for_personal_account', function () {
        if ($(this).prop('checked') === true) {
            $('#password_for_personal_account').attr('type', 'text');
        } else {
            $('#password_for_personal_account').attr('type', 'password');
        }
    });

    $(document).on('click', '#password_confirmation_show_hide_for_personal_account', function () {
        if ($(this).prop('checked') === true) {
            $('#password_confirmation_for_personal_account').attr('type', 'text');
        } else {
            $('#password_confirmation_for_personal_account').attr('type', 'password');
        }
    });

    $(document).on('click', '#password_show_hide_for_business_account', function () {
        if ($(this).prop('checked') === true) {
            $('#password_for_business_account').attr('type', 'text');
        } else {
            $('#password_for_business_account').attr('type', 'password');
        }
    });

    $(document).on('click', '#password_confirmation_show_hide_for_business_account', function () {
        if ($(this).prop('checked') === true) {
            $('#password_confirmation_for_business_account').attr('type', 'text');
        } else {
            $('#password_confirmation_for_business_account').attr('type', 'password');
        }
    });

    $(document).on('submit', '#registration_form_for_personal_account', function(event) {
        event.preventDefault();
        $('#registration_form_message_for_personal_account').empty();
        $('#registration_form_submit_for_personal_account').addClass('disabled');
        $('#registration_form_submit_text_for_personal_account').addClass('sr-only');
        $('#registration_form_submit_processing_for_personal_account').removeClass('sr-only');
        $('#registration_form_for_personal_account').find('.is-invalid').removeClass('is-invalid');
        $('#registration_form_for_personal_account').find('.invalid-feedback').remove();
        let formData = new FormData(this);
        formData.append('terms_of_service', $('#terms_of_service_for_personal_account').prop('checked'));
        formData.append('privacy_policy', $('#privacy_policy_for_personal_account').prop('checked'));
        formData.append('user', '{!! $user !!}');
        formData.append('_token', '{{ csrf_token() }}');
        $.ajax({
            method: 'post',
            url: '{{ url('/register/personal/account') }}',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            global: false,
            success: function (result) {
                console.log(result);
                $('#registration_form_submit_for_personal_account').removeClass('disabled');
                $('#registration_form_submit_text_for_personal_account').removeClass('sr-only');
                $('#registration_form_submit_processing_for_personal_account').addClass('sr-only');
                location = '{{ url('/email-verification') }}';
            },
            error: function (xhr) {
                console.log(xhr);
                $('#registration_form_submit_for_personal_account').removeClass('disabled');
                $('#registration_form_submit_text_for_personal_account').removeClass('sr-only');
                $('#registration_form_submit_processing_for_personal_account').addClass('sr-only');

                if (xhr.status === 500) {
                    $('#registration_form_message_for_personal_account').text('Internal Server Error!');
                }
                if (xhr.status === 422) {
                    if (xhr.responseJSON.hasOwnProperty('errors')) {
                        $.each(xhr.responseJSON.errors, function (key, value) {
                            if (key !== 'password' && key !== 'password_confirmation') {
                                if (key === 'terms_of_service' || key === 'privacy_policy') {
                                    $('#' + key + '_for_personal_account').parent().after('<div class="invalid-feedback  d-block ' + key + '_for_personal_account mb-4"></div>');
                                    $.each(value, function (k, v) {
                                        $('#registration_form_for_personal_account').find('.' + key + '_for_personal_account').append('<div>' + v + '</div>');
                                    });
                                } else {
                                    $('#' + key + '_for_personal_account').after('<div class="invalid-feedback "></div>');
                                    $('#' + key + '_for_personal_account').addClass('is-invalid');
                                    $.each(value, function (k, v) {
                                        $('#' + key + '_for_personal_account').parent().find('.invalid-feedback').append('<div>' + v + '</div>');
                                    });
                                }
                            } else {
                                $('#' + key + '_for_personal_account').parent().parent().after('<div style="margin-top: -15px;" class="invalid-feedback  d-block mb-4 ' + key + '_for_personal_account"></div>');
                                $('#' + key + '_for_personal_account').addClass('is-invalid');
                                $.each(value, function (k, v) {
                                    $('#registration_form_for_personal_account').find('.' + key + '_for_personal_account').append('<div>' + v + '</div>');
                                });
                            }
                        });
                    }
                }
                if (xhr.status === 400) {
                    $('#registration_form_message_for_personal_account').text(xhr.responseJSON.message);
                }
            }
        });

    });


    $(document).on('change', '#country_id_for_business_account', function () {
        let countryId = $(this).val();
        $.ajax({
            method: 'get',
            url: '{{ url('/get/states/by/country/id') }}',
            data: {
                country_id: countryId
            },
            cache: false,
            success: function (result) {
                console.log(result);
                $('#state_or_city_field_holder_for_business_account').empty();
                if (result.payload.length > 0) {
                    $('#state_or_city_field_holder_for_business_account').append('<div class="form-floating"><select class="form-select" name="state_id" id="state_id_for_business_account"><option value="">Select State</option></select><label for="state_id_for_business_account">State</label></div>');
                    $.each(result.payload, function (key, state) {
                        $('#state_id_for_business_account').append('<option value="' + state.id + '">' + state.state + '</option>');
                    });
                } else {
                    $('#state_or_city_field_holder_for_business_account').append('<div class="form-floating"><input type="text" class="form-control" name="city" id="city_for_business_account" placeholder="City"><label for="city_for_business_account">City</label></div>');
                }
                $.ajax({
                    method: 'get',
                    url: '{{ url('/get/country/by/id') }}',
                    data: {
                        id: countryId
                    },
                    cache: false,
                    success: function (result) {
                        console.log(result);
                        $('#phone_field_holder_for_business_account').empty();
                        if (result.payload !== null) {
                            $('#phone_field_holder_for_business_account').append(`
                                    <div class="input-group d-flex">
                                        <div class="input-group-text flex-shrink-0">
                                            <img src="` + result.payload.flag + `" style="height: 20px;">
                                            <span class="">` + result.payload.dialling_code + `</span>
                                        </div>
                                        <div class="form-floating flex-grow-1">
                                            <input type="text" class="form-control" name="phone" id="phone_for_business_account" placeholder="Business Phone">
                                            <label for="phone_for_business_account">Business Phone</label>
                                        </div>
                                    </div>
                                `);
                        } else {
                            $('#phone_field_holder_for_business_account').append('<div class="form-floating"><input type="text" class="form-control" name="phone" id="phone_for_business_account" placeholder="Business Phone"><label for="phone_for_business_account">Business Phone</label></div>');
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr);
                    }
                });
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    });

    $(document).on('submit', '#registration_form_for_business_account', function(event) {
        event.preventDefault();

        $('#registration_form_message_for_business_account').empty();
        $('#registration_form_submit_for_business_account').addClass('disabled');
        $('#registration_form_submit_text_for_business_account').addClass('sr-only');
        $('#registration_form_submit_processing_for_business_account').removeClass('sr-only');
        $('#registration_form_for_business_account').find('.is-invalid').removeClass('is-invalid');
        $('#registration_form_for_business_account').find('.invalid-feedback').remove();

        let formData = new FormData(this);
        formData.append('terms_of_service', $('#terms_of_service_for_business_account').prop('checked'));
        formData.append('privacy_policy', $('#privacy_policy_for_business_account').prop('checked'));
        formData.append('_token', '{{ csrf_token() }}');

        formData.append('user', '{!! $user !!}');
        formData.append('user_country', '{{ $userCountry }}');
        $.ajax({
            method: 'post',
            url: '{{ url('/register/business/account') }}',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            global: false,
            success: function (result) {
                console.log(result);
                $('#registration_form_submit_for_business_account').removeClass('disabled');
                $('#registration_form_submit_text_for_business_account').removeClass('sr-only');
                $('#registration_form_submit_processing_for_business_account').addClass('sr-only');
                location = '{{ url('/email-verification') }}';
            },
            error: function (xhr) {
                console.log(xhr);
                $('#registration_form_submit_for_business_account').removeClass('disabled');
                $('#registration_form_submit_text_for_business_account').removeClass('sr-only');
                $('#registration_form_submit_processing_for_business_account').addClass('sr-only');
                if (xhr.status === 500) {
                    $('#registration_form_message_for_business_account').text('Internal Server Error!');
                }
                if (xhr.status === 422) {
                    if (xhr.responseJSON.hasOwnProperty('errors')) {
                        $.each(xhr.responseJSON.errors, function (key, value) {
                            if (key !== 'password' && key !== 'password_confirmation' && key !== 'phone') {
                                if (key === 'terms_of_service' || key === 'privacy_policy') {
                                    $('#' + key + '_for_business_account').parent().append('<div class="invalid-feedback d-block pb-2"></div>');
                                    $.each(value, function (k, v) {
                                        $('#' + key + '_for_business_account').parent().find('.invalid-feedback').append('<div>' + v + '</div>');
                                    });
                                } else {
                                    $('#' + key + '_for_business_account').after('<div class="invalid-feedback"></div>');
                                    $('#' + key + '_for_business_account').addClass('is-invalid');
                                    $.each(value, function (k, v) {
                                        $('#' + key + '_for_business_account').parent().find('.invalid-feedback').append('<p>' + v + '</p>');
                                    });
                                }
                            } else {
                                $('#' + key + '_for_business_account').parent().parent().addClass('has-validation');
                                $('#' + key + '_for_business_account').parent().parent().append('<div class="invalid-feedback d-block pb-2"></div>');
                                $('#' + key + '_for_business_account').addClass('is-invalid');
                                $.each(value, function (k, v) {
                                    $('#' + key + '_for_business_account').parent().parent().find('.invalid-feedback').append('<div>' + v + '</div>');
                                });
                            }
                        });
                    }
                }

                if (xhr.status === 400) {
                    $('#registration_form_message_for_business_account').text(xhr.responseJSON.message);
                }
            }
        });
    });

</script>
@endsection
