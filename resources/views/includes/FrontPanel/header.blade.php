<div class="container-fluid background_color_default">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto">

            <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block py-4">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 pt-1" id="logo">
                        <a href="{{ url('/') }}"><span style="cursor: pointer; height: 30px;"><img src="{{ asset('/storage/images/default/logo.png') }}" height="30"></span></a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="input-group">
                                    <div class="input-group-text" style="background-color: #ffffff;">
                                        <select class="form-select category_type">
                                            <optgroup>
                                                <option value="All">All</option>
                                                <option value="Retail">Retail</option>
                                                <option value="Wholesale">Wholesale</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control search_input" placeholder="Search GoodGross..." style="border-left: none; border-right: none;">
                                    <div class="input-group-text search_icon" style="background-color: #ffffff; cursor: pointer;">
                                        <img src="{{ asset('/storage/images/default/icons8-search-25.png') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">

                                <div class="row justify-content-end">
                                    <div class="col-sm-auto">
                                        <a href="{{ url('/post-product') }}" class="btn" style="box-shadow: inset 0 0 2px 0 rgba(0,0,0,.25); padding: 5px 15px; background: #09bd06b0; font-size: 14px; border-radius: 0; margin-top: 5px; color: seashell;">Post a Product</a>
                                    </div>
                                    <div class="col-sm-auto" style="padding-top: 6px;">
                                        <div class="top_navigation"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-none d-sm-none d-md-block d-lg-block d-xl-none d-xxl-none py-3">
                <div class="row mb-3">
                    <div class="col-4">
                        <a href="{{ url('/') }}"><span style="cursor: pointer;"><img src="{{ asset('/storage/images/default/logo.png') }}" height="25"></span></a>
                    </div>
                    <div class="col-8 text-end">
                        <div class="d-inline-block me-3">
                            <a href="{{ url('/post-product') }}" class="text-decoration-none" style="box-shadow: inset 0 0 2px 0; padding: 8px 15px; background: #09bd06b0; font-size: 14px; border-radius: 0; margin-top: 5px; color: seashell;">Post a Product</a>
                        </div>
                        <div class="top_navigation d-inline-block"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-text"  style="padding: .175rem .75rem !important; background-color: #ffffff;">
                                <select class="form-select category_type">
                                    <optgroup>
                                        <option value="All">All</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Wholesale">Wholesale</option>
                                    </optgroup>
                                </select>
                            </div>
                            <input class="form-control search_input" type="text" placeholder="Search GoodGross..." style="padding: 0.175rem 0.75rem !important; border-left: none; border-right: none;">
                            <div class="input-group-text"  style="padding: .175rem .75rem !important; background-color: #ffffff; cursor: pointer;">
                                <i class="fas fa-search text_color_default search_icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-none d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none py-3">
                <div class="row mb-3">
                    <div class="col-4">
                        <a href="{{ url('/') }}"><span style="cursor: pointer;"><img src="{{ asset('/storage/images/default/logo.png') }}" height="20"></span></a>
                    </div>
                    <div class="col-8 text-end">
                        <div class="d-inline-block me-3">
                            <a href="{{ url('/post-product') }}" class="text-decoration-none" style="box-shadow: inset 0 0 2px 0; padding: 5px 15px; background: #09bd06b0; font-size: 14px; border-radius: 0; margin-top: 5px; color: seashell;">Post a Product</a>
                        </div>
                        <div class="top_navigation d-inline-block"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-text" style="padding: .175rem .75rem !important; background-color: #ffffff;">
                                <select class="form-select category_type">
                                    <optgroup>
                                        <option value="All">All</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Wholesale">Wholesale</option>
                                    </optgroup>

                                </select>
                            </div>

                            <input class="form-control search_input" type="text" placeholder="Search GoodGross..." style="padding: 0.175rem 0.75rem !important; border-left: none; border-right: none;">
                            <div class="input-group-text"  style="padding: .175rem .75rem !important; background-color: #ffffff; cursor: pointer;">
                                <i class="fas fa-search text_color_default search_icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-block d-sm-none d-md-none d-lg-none d-xl-none d-xxl-none py-3">
                <div class="row mb-3">
                    <div class="col-6">
                        <a href="{{ url('/') }}"><span style="cursor: pointer;"><img src="{{ asset('/storage/images/default/logo.png') }}" height="20"></span></a>
                    </div>
                    <div class="col-6 text-end">

                        <div class="d-inline-block">
                            <a href="{{ url('post/product') }}" class="text-decoration-none" style="box-shadow: inset 0 0 2px 0; padding: 5px 15px; background: #09bd06b0; font-size: 14px; border-radius: 0; margin-top: 5px; color: seashell;">Post a Product</a>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col text-center">
                        <div class="top_navigation"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-text" style="padding: .175rem .75rem !important; background-color: #ffffff;">
                                <select class="form-select category_type">
                                    <optgroup>
                                        <option value="All">All</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Wholesale">Wholesale</option>
                                    </optgroup>
                                </select>
                            </div>
                            <input class="form-control search_input" type="text" placeholder="Search GoodGross..." style="padding: 0.175rem 0.75rem !important; border-left: none; border-right: none;">
                            <div class="input-group-text" style="padding: .175rem .75rem !important; background-color: #ffffff; cursor: pointer;">
                                <i class="fas fa-search text_color_default search_icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="search_sign_in_modal">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="text-center mb-3">
                    <img src="{{ asset('storage/images/default/icons8-sign-in-100.png') }}">
                </div>
                <div class="text-center border-bottom pb-3" style="border-color: #e8f3ed !important;">
                    <div class="h4">Sign in to GoodGross</div>
                </div>
                <div class="row my-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 px-lg-5 border-end" style="border-color: #e8f3ed !important;">
                        <div id="search_sign_in_form_message" class="text-center text-danger billing" style="height: 30px;">{{ session()->get('provider_error') }}</div>
                        <form id="search_sign_in_form">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="email" id="search_email" placeholder="Email" autocomplete="off">
                                <label for="search_email">Email</label>
                            </div>
                            <div class="input-group mb-4">
                                <div class="form-floating" style="width: 70%;">
                                    <input type="password" class="form-control" name="password" id="search_password" placeholder="Password" autocomplete="off" style="border-right: 0; border-bottom-right-radius: 0; border-top-right-radius: 0;">
                                    <label for="search_password">Password</label>
                                </div>
                                <div class="input-group-text" style="width: 30%; justify-content: flex-end; border-left: 0;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="search_password_show_hide">
                                        <label class="form-check-label billing" for="search_password_show_hide">Show</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="search_remember_me">
                                        <label class="form-check-label" for="search_remember_me">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col text-end" style="font-size: 14px;">
                                    <a href="{{ url('/forgotten-password') }}" class="text-decoration-none" style="color: #636363;">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn_default pr-3 pl-3" id="search_sign_in_form_submit">
                                        <span id="search_sign_in_form_submit_text">Sign in</span>
                                        <div id="search_sign_in_form_submit_processing" class="d-flex align-items-center sr-only">
                                            <span>Processing...</span>
                                            <div class="spinner-border spinner-border-sm ms-auto" role="status" aria-hidden="true"></div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 px-lg-5">
                        <div class="mt-3">Or, Sign in with</div>
                        <div class="d-grid my-4">
                            <a href="{{ url('/auth/redirect/to/google/dashboard') }}" class="btn btn_google px-2">
                                <i class="icon fab fa-google"></i> Google
                            </a>
                        </div>
                        <div class="d-grid mb-4">
                            <a href="{{ url('/auth/redirect/to/facebook/dashboard') }}" class="btn btn_facebook px-2">
                                <i class="icon fab fa-facebook-f"></i> Facebook
                            </a>
                        </div>
                        <div class="d-grid">
                            <a href="{{ url('/auth/redirect/to/twitter/dashboard') }}" class="btn btn_twitter px-2">
                                <i class="icon fab fa-twitter"></i> Twitter
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col text-center">
                        <span class="me-3" style="font-size: 14px;">Need an account with GoodGross?</span>
                        <a class="btn btn-outline-info" href="{{ url('/register') }}" style="color: #328C59;">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).on('click', '#search_password_show_hide', function () {
        if ($(this).prop('checked') === true) {
            $('#search_password').attr('type', 'text');
        } else {
            $('#search_password').attr('type', 'password');
        }
    });
</script>


<script type="text/javascript">

    let searchViewLayout, searchKey, searchCategoryType, searchProductSlug;

    $(document).ready(function () {
        loadTopNavigation();
        searchViewLayout = 'grid';

    });

    $(document).on('keyup', '.search_input', function (event) {
        if (event.key === 'Enter' || event.keyCode === 13) {
            searchKey = $(this).val();
            searchCategoryType = $('.category_type').val();
            getSearchResult();
        }
    });

    $(document).on('click', '.search_icon', function () {
        searchKey = $('.search_input').val();
        searchCategoryType = $('.category_type').val();
        getSearchResult();
    });

    function getSearchResult() {
        $.ajax({
            method: 'get',
            url: '{{ url('/search') }}',
            data: {
                'search_key': searchKey,
                'category_type': searchCategoryType
            },
            success: function (result) {
                console.log(result);
                $('#main_content').empty();
                if (result.payload.length > 0) {
                    if (searchCategoryType === 'All') {
                        $('#main_content').append(`
                            <div class="alert alert-info mt-4 d-flex justify-content-between">
                                <div>
                                    <span class="fw-bold">Retail Products</span>
                                    <sub class="" id="retail_items_counter">0</sub> <sub class="">Item(s) Found</sub>
                                </div>
                                <div style="font-size: 16px;">
                                    <div class="d-inline-block px-1 me-2 py-1" id="retail_grid_view" style="cursor: pointer;">
                                        <i class="fas fa-th"></i>
                                    </div>
                                    <div class="d-inline-block px-1 py-1" id="retail_list_view" style="cursor: pointer;">
                                        <i class="fas fa-th-list"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="retail_items_container"></div>
                        `);
                        $('#main_content').append(`
                            <div class="alert alert-info mt-4 d-flex justify-content-between">
                                <div>
                                    <span class="fw-bold">Wholesale Products</span>
                                    <sub class="" id="wholesale_items_counter">0</sub> <sub class="">Item(s) Found</sub>
                                </div>
                                <div style="font-size: 16px;">
                                    <div class="d-inline-block px-1 me-2 py-1" id="wholesale_grid_view" style="cursor: pointer;">
                                        <i class="fas fa-th"></i>
                                    </div>
                                    <div class="d-inline-block px-1 py-1" id="wholesale_list_view" style="cursor: pointer;">
                                        <i class="fas fa-th-list"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="wholesale_items_container"></div>
                        `);
                    }

                    if (searchCategoryType === 'Retail') {
                        $('#main_content').append(`
                            <div class="alert alert-info mt-4 d-flex justify-content-between">
                                <div>
                                    <span class="fw-bold">Retail Products</span>
                                    <sub class="" id="retail_items_counter">0</sub> <sub class="">Item(s) Found</sub>
                                </div>
                                <div style="font-size: 16px;">
                                    <div class="d-inline-block px-1 me-2 py-1" id="retail_grid_view" style="cursor: pointer;">
                                        <i class="fas fa-th"></i>
                                    </div>
                                    <div class="d-inline-block px-1 py-1" id="retail_list_view" style="cursor: pointer;">
                                        <i class="fas fa-th-list"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="retail_items_container"></div>
                        `);
                    }
                    if (searchCategoryType === 'Wholesale') {
                        $('#main_content').append(`
                            <div class="alert alert-info mt-4 d-flex justify-content-between">
                                <div>
                                    <span class="fw-bold">Wholesale Products</span>
                                    <sub class="" id="wholesale_items_counter">0</sub> <sub class="">Item(s) Found</sub>
                                </div>
                                <div style="font-size: 16px;">
                                    <div class="d-inline-block px-1 me-2 py-1" id="wholesale_grid_view" style="cursor: pointer;">
                                        <i class="fas fa-th"></i>
                                    </div>
                                    <div class="d-inline-block px-1 py-1" id="wholesale_list_view" style="cursor: pointer;">
                                        <i class="fas fa-th-list"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="wholesale_items_container"></div>
                        `);
                    }

                    $.each(result.payload, function (key, value) {
                        if (value.category.category_type.category_type === 'Retail') {
                            $('#retail_items_counter').text(parseInt($('#retail_items_counter').text()) + 1);
                            if (searchViewLayout === 'grid') {
                                $('#retail_list_view').find('i').removeClass('text_color_default');
                                $('#retail_grid_view').find('i').addClass('text_color_default');
                                loadRetailGridView(value);
                            } else {
                                $('#retail_grid_view').find('i').removeClass('text_color_default');
                                $('#retail_list_view').find('i').addClass('text_color_default');
                                loadRetailListView(value);
                            }
                        }
                        if (value.category.category_type.category_type === 'Wholesale') {
                            $('#wholesale_items_counter').text(parseInt($('#wholesale_items_counter').text()) + 1);
                            if (searchViewLayout === 'grid') {
                                $('#wholesale_list_view').find('i').removeClass('text_color_default');
                                $('#wholesale_grid_view').find('i').addClass('text_color_default');
                                loadWholesaleGridView(value);
                            } else {
                                $('#wholesale_grid_view').find('i').removeClass('text_color_default');
                                $('#wholesale_list_view').find('i').addClass('text_color_default');
                                loadWholesaleListView(value);
                            }
                        }
                    });
                    if (parseInt($('#retail_items_counter').text()) === 0) {
                        $('#retail_grid_view').parent().remove();
                        $('#retail_items_container').append(`
                            <div class="col text-center text-danger">No Item Found</div>
                        `);
                    }
                    if (parseInt($('#wholesale_items_counter').text()) === 0) {
                        $('#wholesale_grid_view').parent().remove();
                        $('#wholesale_items_container').append(`
                            <div class="col text-center text-danger">No Item Found</div>
                        `);
                    }
                } else {
                    $('#main_content').append(`
                        <div class="alert alert-danger text-center mt-4">No Items Found!</div>
                    `);
                }

            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    }

    function loadRetailGridView(product) {
        console.log(product)
        let title, images, price, shippingCost, shippingTime, daysIncreased, additionalDetails, watchElement;
        title = product.product_properties.find(obj => obj.property.property === 'Title');
        images = product.product_properties.find(obj => obj.property.property === 'Images');
        price = product.product_properties.find(obj => obj.property.property === 'Price');
        shippingCost = product.product_properties.find(obj => obj.property.property === 'Shipping Cost');
        shippingTime = product.product_properties.find(obj => obj.property.property === 'Shipping Time');
        daysIncreased = shippingTime.value === 'Same Business Day' ? 0 : shippingTime.value === '1 Business Days - 10 Business Days' ? 10 : shippingTime.value === '15 Business Days' ? 15 : shippingTime.value === '20 Business Days' ? 20 : 30;
        additionalDetails = '';
        additionalDetails += (parseFloat(shippingCost.value) === 0) ? '<span style="font-size: 10px;">Free Shipping</span><span style="font-size: 10px;"> | </span><span style="font-size: 10px;">Free Return</span><span style="font-size: 10px;"> | </span>' : '<span style="font-size: 10px;">Free Return</span><span style="font-size: 10px;"> | </span>';
        additionalDetails += '<span style="font-size: 10px;">Delivery By ' + $.datepicker.formatDate('M d, y', new Date(new Date().setDate(new Date().getDate() + daysIncreased))) + '</span>';
        watchElement = product.watched_products.length > 0 ? '<i class="fas fa-heart text_color_default"></i>' : '<i class="far fa-heart text_color_default search_add_to_watch" data-product_slug="' + product.slug + '" style="cursor: pointer;"></i>';
        $('#retail_items_container').append(
            '<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3 px-xl-4 px-xxl-3 mb-4">' +
            '<div class="card border-0" style="background-color: rgb(0 255 255 / 1%); box-shadow: 0px 0px 1px 0px darkolivegreen;">' +
            '<div class="card-header border-0" style="background: none !important;">' +
            '<div class="pt-2" id="retail_product_' + product.id + '"></div>' +
            '</div>' +
            '<div class="card-body pt-2">' +
            '<div class="row">' +
            '<div class="col-10"><div class="h6 text_color_default retail_product" data-slug="' + product.slug + '" style="height: 30px; cursor: pointer;">' + title.value + '</div></div>' +
            '<div class="col-2 text-end">' + watchElement + '</div>' +
            '</div>' +
            '<div class="card-text mt-2">' +
            '<div>' +
            '<div class="d-inline-block me-1 text_color_default" style="font-size: 12px;"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>' +
            '<div class="d-inline-block me-2" style="color: #cdcdcd; font-size: 12px;">(0)</div> | ' +
            '<div class="d-inline-block ms-2" style="color: #ff0000; font-size: 12px;">0 Sold</div>' +
            '</div>' +
            '<div class="mt-1" style="color: #363636;"><span style="font-weight: 600; font-size: 16px;">US $' + price.value + '</span></div>' +
            '<div class="" style="">' + additionalDetails + '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'
        );
        let imagePaths = images.value.split(',');
        $.each(imagePaths, function (imagePathKey, imagePathValue) {
            let imgSrc = '{{ asset('storage') }}/' + imagePathValue.replace('original', 'resized');
            $('#retail_product_' + product.id).append('<div><img class="img-fluid rounded retail_product" data-slug="' + product.slug + '" style="cursor: pointer;" src="' + imgSrc + '" alt="' + title.value + '"></div>');
        });
        $('#retail_product_' + product.id).slick({
            infinite: true,
            dots: true,
            arrows:false,
            autoplay:false,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    }

    function loadRetailListView(product) {
        let title, images, price, shippingCost, shippingTime, daysIncreased, additionalDetails, watchElement;
        title = product.product_properties.find(obj => obj.property.property === 'Title');
        images = product.product_properties.find(obj => obj.property.property === 'Images');
        price = product.product_properties.find(obj => obj.property.property === 'Price');
        shippingCost = product.product_properties.find(obj => obj.property.property === 'Shipping Cost');
        shippingTime = product.product_properties.find(obj => obj.property.property === 'Shipping Time');
        daysIncreased = shippingTime.value === 'Same Business Day' ? 0 : shippingTime.value === '1 Business Days - 10 Business Days' ? 10 : shippingTime.value === '15 Business Days' ? 15 : shippingTime.value === '20 Business Days' ? 20 : 30;
        additionalDetails = '';
        additionalDetails += (parseFloat(shippingCost.value) === 0) ? '<span style="font-size: 10px;">Free Shipping</span><span style="font-size: 10px;"> | </span><span style="font-size: 10px;">Free Return</span><span style="font-size: 10px;"> | </span>' : '<span style="font-size: 10px;">Free Return</span><span style="font-size: 10px;"> | </span>';
        additionalDetails += '<span style="font-size: 10px;">Delivery By ' + $.datepicker.formatDate('M d, y', new Date(new Date().setDate(new Date().getDate() + daysIncreased))) + '</span>';
        watchElement = product.watched_products.length > 0 ? '<i class="fas fa-heart text_color_default"></i>' : '<i class="far fa-heart text_color_default search_add_to_watch" data-product_slug="' + product.slug + '" style="cursor: pointer;"></i>';
        $('#retail_items_container').append(
            '<div class="col-12 px-xl-4 px-xxl-3 mb-4">' +
            '<div class="card border-0" style="background-color: rgb(0 255 255 / 1%); box-shadow: 0px 0px 1px 0px darkolivegreen;">' +
            '<div class="row g-0">' +
            '<div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 col-xxl-3">' +
            '<div class="card-header border-0 pl-3 pt-2 pb-0" style="background: none !important;">' +
            '<div id="retail_product_' + product.id + '"></div>' +
            '</div>' +
            '</div>' +
            '<div class="col-12 col-sm-6 col-md-7 col-lg-8 col-xl-9 col-xxl-9">' +
            '<div class="card-body pt-2 pt-sm-4 pt-md-4 pt-lg-4 pt-xl-4 pt-xxl-4">' +
            '<div class="row">' +
            '<div class="col-10"><div class="h6 text_color_default retail_product" data-slug="' + product.slug + '" style="height: 30px; cursor: pointer;">' + title.value + '</div></div>' +
            '<div class="col-2 text-end">' + watchElement + '</div>' +
            '</div>' +
            '<div class="card-text">' +
            '<div>' +
            '<div class="d-inline-block me-1 text_color_default" style="font-size: 12px;"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>' +
            '<div class="d-inline-block me-2" style="color: #cdcdcd; font-size: 12px;">(0)</div> | ' +
            '<div class="d-inline-block ms-2" style="color: #ff0000; font-size: 12px;">0 Sold</div>' +
            '</div>' +
            '<div class="mt-1" style="color: #363636;"><span style="font-weight: 600; font-size: 16px;">US $' + price.value + '</span></div>' +
            '<div class="" style="">' + additionalDetails + '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'
        );

        let imagePaths = images.value.split(',');
        $.each(imagePaths, function (imagePathKey, imagePathValue) {
            let imgSrc = '{{ asset('storage') }}/' + imagePathValue.replace('original', 'resized');
            $('#retail_product_' + product.id).append('<div><img class="img-fluid rounded retail_product" data-slug="' + product.slug + '" style="cursor: pointer;" src="' + imgSrc + '" alt="' + title.title + '"></div>');
        });

        $('#retail_product_' + product.id).slick({
            infinite: true,
            dots: true,
            arrows:false,
            autoplay:false,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }

    $(document).on('click', '#retail_list_view', function () {
        $('#retail_grid_view').find('i').removeClass('text_color_default');
        $('#retail_list_view').find('i').addClass('text_color_default');
        searchViewLayout = 'list';
        getSearchResult();
    });

    $(document).on('click', '#retail_grid_view', function () {
        $('#retail_list_view').find('i').removeClass('text_color_default');
        $('#retail_grid_view').find('i').addClass('text_color_default');
        searchViewLayout = 'grid';
        getSearchResult();
    });

    $(document).on('click', '.retail_product', function () {
        location = '{{ url('/retail/product') }}/' + $(this).data('slug');
    });


    function loadWholesaleGridView(product) {
        let title, images, price, shippingCost, shippingTime, daysIncreased, additionalDetails, watchElement, priceDefinition, quantity, unit;
        title = product.product_properties.find(obj => obj.property.property === 'Title');
        images = product.product_properties.find(obj => obj.property.property === 'Images');
        priceDefinition = product.product_properties.find(obj => obj.property.property === 'Price Definition');
        quantity = product.product_properties.find(obj => obj.property.property === 'Quantity');
        unit = product.product_properties.find(obj => obj.property.property === 'Unit');
        watchElement = product.watched_products.length > 0 ? '<i class="fas fa-heart text_color_default"></i>' : '<i class="far fa-heart text_color_default search_add_to_watch" data-product_slug="' + product.slug + '" style="cursor: pointer;"></i>';
        $('#wholesale_items_container').append(`
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-3 px-xl-4 px-xxl-3 mb-4">
                <div class="card border-0" style="background-color: rgb(0 255 255 / 1%); box-shadow: 0px 0px 1px 0px darkolivegreen;">
                    <div class="card-header border-0" style="background: none !important;">
                        <div class="pt-2" id="wholesale_product_` + product.id + `"></div>
                    </div>
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col-10"><div class="h6 text_color_default wholesale_product" data-slug="` + product.slug + `" style="height: 30px; cursor: pointer;">` + title.value + `</div></div>
                            <div class="col-2 text-end">` + watchElement + `</div>
                        </div>
                        <div class="card-text mt-2">
                            <div>
                                <div class="d-inline-block me-1 text_color_default" style="font-size: 12px;"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                <div class="d-inline-block me-2" style="color: #cdcdcd; font-size: 12px;">(0)</div> |
                                <div class="d-inline-block ms-2" style="color: #ff0000; font-size: 12px;">0 Sold</div>
                            </div>
                            <div class="mt-1"><span class="fw-bold text_color_3">US $` + JSON.parse(priceDefinition.value)['price'][JSON.parse(priceDefinition.value)['price'].length - 1] + `-$` + JSON.parse(priceDefinition.value)['price'][0] + `</span></div>
                            <div class="mt-1  text_color_7">In Stock: ` + quantity.value + ` ` + unit.value + `</div>
                            <div class="mt-1  text_color_8">` + product.account.business_account.state.state + `, ` + product.account.business_account.country.country + `</div>
                        </div>
                    </div>
                </div>
            </div>
        `);
        let imagePaths = images.value.split(',');
        $.each(imagePaths, function (imagePathKey, imagePathValue) {
            let imgSrc = '{{ asset('storage') }}/' + imagePathValue.replace('original', 'resized');
            $('#wholesale_product_' + product.id).append('<div><img class="img-fluid rounded wholesale_product" data-slug="' + product.slug + '" style="cursor: pointer;" src="' + imgSrc + '" alt="' + title.value + '"></div>');
        });
        $('#wholesale_product_' + product.id).slick({
            infinite: true,
            dots: true,
            arrows:false,
            autoplay:false,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    }

    function loadWholesaleListView(product) {
        let title, images, price, shippingCost, shippingTime, daysIncreased, additionalDetails, watchElement;
        title = product.product_properties.find(obj => obj.property.property === 'Title');
        images = product.product_properties.find(obj => obj.property.property === 'Images');
        price = product.product_properties.find(obj => obj.property.property === 'Price');
        shippingCost = product.product_properties.find(obj => obj.property.property === 'Shipping Cost');
        shippingTime = product.product_properties.find(obj => obj.property.property === 'Shipping Time');
        daysIncreased = shippingTime.value === 'Same Business Day' ? 0 : shippingTime.value === '1 Business Days - 10 Business Days' ? 10 : shippingTime.value === '15 Business Days' ? 15 : shippingTime.value === '20 Business Days' ? 20 : 30;
        additionalDetails = '';
        additionalDetails += (parseFloat(shippingCost.value) === 0) ? '<span style="font-size: 10px;">Free Shipping</span><span style="font-size: 10px;"> | </span><span style="font-size: 10px;">Free Return</span><span style="font-size: 10px;"> | </span>' : '<span style="font-size: 10px;">Free Return</span><span style="font-size: 10px;"> | </span>';
        additionalDetails += '<span style="font-size: 10px;">Delivery By ' + $.datepicker.formatDate('M d, y', new Date(new Date().setDate(new Date().getDate() + daysIncreased))) + '</span>';
        watchElement = product.watched_products.length > 0 ? '<i class="fas fa-heart text_color_default"></i>' : '<i class="far fa-heart text_color_default search_add_to_watch" data-product_slug="' + product.slug + '" style="cursor: pointer;"></i>';
        $('#wholesale_items_container').append(`

        `);

        let imagePaths = images.value.split(',');
        $.each(imagePaths, function (imagePathKey, imagePathValue) {
            let imgSrc = '{{ asset('storage') }}/' + imagePathValue.replace('original', 'resized');
            $('#wholesale_product_' + product.id).append('<div><img class="img-fluid rounded wholesale_product" data-slug="' + product.slug + '" style="cursor: pointer;" src="' + imgSrc + '" alt="' + title.title + '"></div>');
        });

        $('#wholesale_product_' + product.id).slick({
            infinite: true,
            dots: true,
            arrows:false,
            autoplay:false,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }

    $(document).on('click', '#wholesale_list_view', function () {
        $('#wholesale_grid_view').find('i').removeClass('text_color_default');
        $('#wholesale_list_view').find('i').addClass('text_color_default');
        searchViewLayout = 'list';
        getSearchResult();
    });

    $(document).on('click', '#wholesale_grid_view', function () {
        $('#wholesale_list_view').find('i').removeClass('text_color_default');
        $('#wholesale_grid_view').find('i').addClass('text_color_default');
        searchViewLayout = 'grid';
        getSearchResult();
    });

    $(document).on('click', '.wholesale_product', function () {
        location = '{{ url('/wholesale/product') }}/' + $(this).data('slug');
    });


    $(document).on('click', '.search_add_to_watch', function () {
        searchProductSlug = $(this).data('product_slug');
        $.ajax({
            method: 'get',
            url: '{{ url('/check/account/login/status') }}',
            success: function (result) {
                console.log(result);
                if (result.payload.login_status === true) {
                    $.ajax({
                        method: 'get',
                        url: '{{ url('/add/product/to/watch') }}',
                        data: {
                            product_slug: searchProductSlug
                        },
                        cache: false,
                        success: function (result) {
                            console.log(result);
                            loadTopNavigation();
                            getSearchResult();
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
                            loadTopNavigation();
                            getSearchResult();
                            $.toast({
                                heading: xhr.status === 500 ? 'Error' : 'Warning',
                                text : xhr.responseJSON.message,
                                showHideTransition : 'slide',
                                icon: xhr.status === 500 ? 'error' : 'warning',
                                hideAfter: 5000,
                                position : 'bottom-right'
                            });
                        }
                    });
                } else {
                    $('#search_sign_in_modal').modal('show');
                }
            },
            error: function (xhr) {
                console.log(xhr)
            }
        });
    });

    $(document).on('submit', '#search_sign_in_form', function(event) {
        event.preventDefault();
        $('#search_sign_in_form_submit').addClass('disabled');
        $('#search_sign_in_form_submit_text').addClass('sr-only');
        $('#search_sign_in_form_submit_processing').removeClass('sr-only');
        $('#search_sign_in_form_message').empty();
        let formData = new FormData(this);
        formData.append('remember_me', $('#search_remember_me').prop('checked') ? 1 : 0);
        $.ajax({
            method: 'post',
            url: '{{ url('/authenticate/sign/in') }}',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            global: false,
            success: function (result) {
                console.log(result);
                $('#search_sign_in_form_submit').removeClass('disabled');
                $('#search_sign_in_form_submit_text').removeClass('sr-only');
                $('#search_sign_in_form_submit_processing').addClass('sr-only');
                $('#search_sign_in_modal .btn-close').trigger('click');
                $.ajax({
                    method: 'get',
                    url: '{{ url('/search/add/product/to/watch') }}',
                    data: {
                        product_slug: searchProductSlug
                    },
                    cache: false,
                    success: function (result) {
                        console.log(result);
                        loadTopNavigation();
                        getSearchResult();
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
                        loadTopNavigation();
                        getSearchResult();
                        $.toast({
                            heading: xhr.status === 500 ? 'Error' : 'Warning',
                            text : xhr.responseJSON.message,
                            showHideTransition : 'slide',
                            icon: xhr.status === 500 ? 'error' : 'warning',
                            hideAfter: 5000,
                            position : 'bottom-right'
                        });
                    }
                });
            },
            error: function (xhr) {
                console.log(xhr);
                $('#search_sign_in_form_submit').removeClass('disabled');
                $('#search_sign_in_form_submit_text').removeClass('sr-only');
                $('#search_sign_in_form_submit_processing').addClass('sr-only');
                if (xhr.status === 500) {
                    $('#search_sign_in_form_message').text('Internal Server Error!');
                }
                if (xhr.status === 422) {
                    $('#search_sign_in_form_message').text('Unauthorized Access!');
                }
                if (xhr.status === 401) {
                    if (xhr.responseJSON.message === 'Pending Account') {
                        location = '{{ url('/email-verification') }}/' + xhr.responseJSON.payload.verification_token;
                    } else {
                        $('#search_sign_in_form_message').text(xhr.responseJSON.message);
                    }
                }
            }
        });
    });


    function loadTopNavigation() {
        let cartIcon = '{{ asset('storage/images/default/common/icons8-shopping-cart-40.png') }}';
        let cartUrl = '{{ url('/cart') }}';
        $('.top_navigation').empty().append(`
            <div class="d-inline-block ms-3">
                <a href="` + cartUrl + `">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <img src="` + cartIcon + `" style="cursor: pointer; margin-top: -5px;">
                        </div>
                        <div class="flex-grow-1">
                            <span class="badge bg-danger" id="cart_counter" style="margin-left: -10px; font-size: 10px;"></span>
                        </div>
                    </div>
                </a>
            </div>
        `);

        $.ajax({
            method: 'get',
            url: '{{ url('/count/cart/items') }}',
            global: false,
            success: function (result) {
                console.log(result);
                if (result.payload !== null && parseInt(result.payload) > 0) {
                    $('#cart_counter').text(result.payload);
                }
                $.ajax({
                    method: 'get',
                    url: '{{ url('/check/account/login/status') }}',
                    global: false,
                    success: function (result) {
                        console.log(result);
                        if (result.payload.login_status === true) {

                            let storagePath = '{{ asset('/storage') }}';
                            let bellIcon = '{{ asset('/storage/images/default/icons8-bell-30.png') }}';
                            let userAvatar;
                            if (result.payload.user.avatar !== null) {
                                userAvatar =  '<img src="' + storagePath + '/' + result.payload.user.avatar + '" style="height: 30px; width: 30px; border-radius: 50%; padding: 1px;">';
                            } else {
                                userAvatar =  '<img src="' + storagePath + '/images/default/icons8-user-circle-30.png" style="height: 30px; width: 30px;">';
                            }

                            let accountName, accountNameFirstPart;
                            let accountType;
                            if (result.payload.user.account.type === 'Personal') {
                                accountName = result.payload.user.account.personal_account.first_name + ' ' + result.payload.user.account.personal_account.last_name;
                                accountNameFirstPart = result.payload.user.account.personal_account.first_name;
                                accountType = 'Personal';
                            }
                            if (result.payload.user.account.type === 'Business') {
                                accountName = result.payload.user.account.business_account.name;
                                accountNameFirstPart = result.payload.user.account.business_account.name.split(' ')[0];
                                accountType = 'Business <sup>' + result.payload.user.account.business_account.type + '</sup>';
                            }

                            if (accountNameFirstPart.length > 6) {
                                accountNameFirstPart = accountNameFirstPart.substring(0, 4) + '...'
                            }

                            let accountPanelOverviewUrl = '{{ url('/account/panel/overview') }}';
                            let accountPanelSettingUrl = '{{ url('/account/panel/settings') }}';
                            let accountPanelSignOutUrl = '{{ url('/account/panel/sign/out') }}';
                            let notificationUrl = '{{ url('/account/panel/notification') }}';
                            $('.top_navigation').append(`
                                <div class="dropdown d-inline-block ms-1">
                                    <button class="dropdown-toggle user_dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: transparent; border: 0;">
                                        <div class="d-flex align-items-center" style="padding-right: 5px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-top-left-radius: 15px; border-bottom-left-radius: 15px; box-shadow: 0px 0px 5px 0px #00ff8994;">
                                            <div class="flex-shrink-0">
                                                ` + userAvatar + `
                                            </div>
                                            <div class="flex-grow-1 text-white text-uppercase ms-1" style="font-size: 10px;">` + accountNameFirstPart + `</div>
                                        </div>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><h6 class="dropdown-header ">` + accountName + ` | ` + accountType + `</h6></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item  text-primary" href="` + accountPanelOverviewUrl + `">My GoodGross</a></li>
                                        <li><a class="dropdown-item  text-primary" href="` + accountPanelSettingUrl + `">Settings</a></li>
                                        <li><a class="dropdown-item  text-primary" href="` + accountPanelSignOutUrl + `">Sign out</a></li>
                                    </ul>
                                </div>
                            `);
                            $('.top_navigation').prepend(`
                                <div class="d-inline-block">
                                    <a href="` + notificationUrl  + `">
                                        <img src="` + bellIcon + `" style="cursor: pointer;">
                                        <span class="badge bg-danger" id="notification_counter" style="margin-left: -15px; padding: .25em .5em; font-size: 10px;"></span>
                                    </a>
                                </div>

                            `);

                        } else {
                            let signInUrl = '{{ url('/sign-in') }}';
                            let registerUrl = '{{ url('/register') }}';
                            $('.top_navigation').prepend(`
                                <div class="d-inline-block">
                                    <a href="` + signInUrl + `" class="text-decoration-none text-white">Sign in</a>
                                </div>
                                <div class="d-inline-block ms-3">
                                    <a href="` + registerUrl + `" class="text-decoration-none text-white">Register</a>
                                </div>
                            `);

                        }
                    },
                    error: function (xhr) {
                        console.log(xhr)
                    }
                });
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    }


</script>
