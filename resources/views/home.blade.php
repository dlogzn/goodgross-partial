<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }} | {{ env('APP_NAME') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/storage/images/default/icon.png') }}">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('/assets/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/Common/jquery.toast.min.css') }}">
</head>
<body>
<video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="{{ asset('/assets/video/bg.mp4') }}" type="video/mp4"></video>
<div class="masthead">
    <div class="masthead-content text-white">
        <div class="container-fluid px-4 px-lg-0">
            <img src="{{ asset('/storage/images/default/logo.png') }}" height="60" class="img-fluid">
            <h1 class="fst-italic lh-1 mb-4 mt-5">Our Website is Coming Soon</h1>
            <p class="mb-5">We're working hard to finish the development of this site. Sign up below to receive updates and to be notified when we launch!</p>
            <form id="subscriber_form">
                <div class="row input-group-newsletter">
                    <div class="col"><input class="form-control" name="email" type="email" placeholder="Enter email address..."></div>
                    <div class="col-auto"><button class="btn btn-primary" type="submit" style="background-color: #000 !important;">Notify Me!</button></div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="social-icons">
    <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/assets/js/scripts.js') }}"></script>
<script src="{{ asset('/assets/js/Common/jquery.toast.min.js') }}"></script>
<script>
    $(document).on('submit', '#subscriber_form', function (event) {
        event.preventDefault();
        let formData = new FormData(this);
        formData.append('_token', '{{ csrf_token() }}');
        $.ajax({
            method: 'post',
            url: '{{ url('/save/subscriber') }}',
            data: formData,
            processData: false,
            contentType: false,
            success: function (result) {
                console.log(result);
                $('#subscriber_form').trigger('reset');
                $.toast({
                    heading: 'Success',
                    text : result.message,
                    showHideTransition : 'slide',
                    icon: 'success',
                    hideAfter: 5000,
                    position : 'bottom-right'
                });
            },
            error: function (xhr) {
                console.log(xhr);
                $.toast({
                    heading: 'Error',
                    text : xhr.responseJSON.message,
                    showHideTransition : 'slide',
                    icon: 'error',
                    hideAfter: 5000,
                    position : 'bottom-right'
                });

            }
        })
    });
</script>
</body>
</html>
