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
                                    <sub class="billing" id="wholesale_items_counter">0</sub> <sub class="billing">Item(s) Found</sub>
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
                            <div class="mt-1 billing text_color_7">In Stock: ` + quantity.value + ` ` + unit.value + `</div>
                            <div class="mt-1 billing text_color_8">` + product.account.business_account.state.state + `, ` + product.account.business_account.country.country + `</div>
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
    });




    function loadTopNavigation() {
        let cartIcon = '{{ asset('storage/images/default/common/icons8-shopping-cart-40.png') }}';
        let cartUrl = '{{ url('/cart') }}';
        $('.top_navigation').empty().append(`
            <div class="d-inline-block ms-2">
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
                    url: '{{ url('/account/panel/get/user') }}',
                    global: false,
                    success: function (result) {

                        let storagePath = '{{ asset('/storage') }}';
                        let bellIcon = '{{ asset('/storage/images/default/icons8-bell-30.png') }}';
                        let userAvatar;
                        if (result.payload.avatar !== null) {
                            userAvatar =  '<img src="' + storagePath + '/' + result.payload.avatar + '" style="height: 30px; width: 30px; border-radius: 50%; padding: 1px;">';
                        } else {
                            userAvatar =  '<img src="' + storagePath + '/images/default/icons8-user-circle-30.png" style="height: 30px; width: 30px;">';
                        }
                        let accountName, accountNameFirstPart;
                        let accountType;
                        if (result.payload.account.type === 'Personal') {
                            accountName = result.payload.account.personal_account.first_name + ' ' + result.payload.account.personal_account.last_name;
                            accountNameFirstPart = result.payload.account.personal_account.first_name;
                            accountType = 'Personal';
                        }
                        if (result.payload.account.type === 'Business') {
                            accountName = result.payload.account.business_account.name;
                            accountNameFirstPart = result.payload.account.business_account.name.split(' ')[0];
                            accountType = 'Business <sup>' + result.payload.account.business_account.type + '</sup>';
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
                                    <li><h6 class="dropdown-header billing">` + accountName + ` | ` + accountType + `</h6></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item billing text-primary" href="` + accountPanelOverviewUrl + `">My GoodGross</a></li>
                                    <li><a class="dropdown-item billing text-primary" href="` + accountPanelSettingUrl + `">Settings</a></li>
                                    <li><a class="dropdown-item billing text-primary" href="` + accountPanelSignOutUrl + `">Sign out</a></li>
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

                    },
                    error: function (xhr) {

                    }
                })
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
    }


</script>
