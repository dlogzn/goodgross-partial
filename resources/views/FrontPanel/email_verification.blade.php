@extends('layouts.front_panel')
@section('content')

    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto" id="main_content">
                <div class="text-center mt-5 mb-3">
                    <i class="fas fa-envelope-open-text text_color_default fa-3x"></i>
                </div>
                <div class="text-center border-bottom pb-3" style="border-color: #e8f3ed !important;">
                    <div class="h4 text_color_5">
                        Just one more step. Let's verify your email.
                    </div>
                    <div class="text-center text_color_9 ">
                        Don't worry. It's only one time. Once your email is verified, you don't need to do this anymore.
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto">
                        <div class="my-4 text-center  text_color_5">
                            We already sent a verification code to your email address. Please check your email inbox and enter the code you received in the form below to verity your email.
                        </div>
                        <div id="email_verification_form_message" class="text-center text-danger " style="height: 30px;"></div>
                        <form id="email_verification_form">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="verification_code" id="verification_code" placeholder="Verification Code">
                                <label for="verification_code">Verification Code</label>
                            </div>
                            <div class="d-grid mb-4">
                                <button type="submit" class="btn btn_default" id="email_verification_form_submit">
                                    <span id="email_verification_form_submit_text">Continue</span>
                                    <div id="email_verification_form_submit_processing" class="d-flex align-items-center sr-only">
                                        <span>Processing...</span>
                                        <div class="spinner-border spinner-border-sm ms-auto" role="status" aria-hidden="true"></div>
                                    </div>
                                </button>
                            </div>
                            <div class="my-5 text-center">
                                <span class="me-3" style="font-size: 14px;">Didn't you get the code?</span>
                                <a class="btn btn-outline-info" href="javascript:void(0)" id="resend_verification_code">Resend</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function () {
            document.title = 'Email Verification | GoodGross';
        });

        $(document).on('click', '#resend_verification_code', function () {
            $.ajax({
                method: 'get',
                url: '{{ url('/resend/verification/code/for/pending/account') }}',
                success: function (result) {
                    $.toast({
                        heading: 'Success',
                        text : 'Verification Code has been resent successfully. Please check your email inbox.',
                        showHideTransition : 'slide',
                        icon: 'success',
                        hideAfter: 5000,
                        position : 'bottom-right'
                    });
                },
                error: function (xhr) {
                    if (xhr.status === 500) {
                        $.toast({
                            heading: 'Error',
                            text : 'Internal server error.',
                            showHideTransition : 'slide',
                            icon: 'error',
                            hideAfter: 5000,
                            position : 'bottom-right'
                        });
                    }
                }
            })
        });


        $(document).on('submit', '#email_verification_form', function(event) {

            event.preventDefault();
            $('#email_verification_form_submit').addClass('disabled');
            $('#email_verification_form_submit_text').addClass('sr-only');
            $('#email_verification_form_submit_processing').removeClass('sr-only');
            $('#email_verification_form_message').empty();
            let formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                method: 'post',
                url: '{{ url('/verify/email') }}',
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                global: false,
                success: function (result) {
                    console.log(result);
                    $('#email_verification_form_submit').removeClass('disabled');
                    $('#email_verification_form_submit_text').removeClass('sr-only');
                    $('#email_verification_form_submit_processing').addClass('sr-only');
                    location = '{{ url('/account/panel/overview') }}';
                },
                error: function (xhr) {
                    console.log(xhr);
                    $('#email_verification_form_submit').removeClass('disabled');
                    $('#email_verification_form_submit_text').removeClass('sr-only');
                    $('#email_verification_form_submit_processing').addClass('sr-only');
                    if (xhr.status === 500) {
                        $('#email_verification_form_message').text('Internal server error.');
                    }
                    if (xhr.status === 422) {
                        $('#email_verification_form_message').text('Incorrect verification code.');
                    }
                }
            });

        });
    </script>
@endsection
