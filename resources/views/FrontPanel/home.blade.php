@extends('layouts.front_panel')
@section('content')


    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mx-auto" id="main_content">

                <div class="d-flex flex-column flex-xl-row mt-4">
                    <div id="retail_wrapper" class="me-0 me-xl-4">
                        <div class="text-dark font-weight-bold text-center retail_title" style="background-color: #f3f3f3; color: #636363; font-size: 1.2rem; padding: 3px 0; border-bottom: 1px solid #ffffff;">Retail Market</div>
                        <div id="retail_categories"></div>
                    </div>
                    <div id="wholesale_wrapper" class="flex-grow-1">
                        <div class="text-dark font-weight-bold text-center wholesale_title" style="background-color: #f3f3f3; color: #636363; font-size: 1.2rem; padding: 3px 0;">Manufacturers & Suppliers</div>
                        <div id="wholesale_categories"></div>
                    </div>
                </div>

                <div class="mt-3">
                    <div class="fs-5 text_color_7 fw-bold">Hot Deals</div>
                    <div class="pt-4 pb-5 px-3" style="background: azure;"><div class="hot_deal_items m-auto" style="width: 95%;"></div></div>
                </div>

                <div class="mt-3">
                    <div class="fs-5 text_color_7 fw-bold">Featured Products</div>
                    <div class="pt-4 pb-5 px-3" style="background: azure;"><div class="featured_product_items m-auto" style="width: 95%;"></div></div>
                </div>


            </div>
        </div>
    </div>


    <div class="overlay" style="display: none; z-index: 199; width: 100%; height: 100%; position: fixed; top: 0; right: 0; bottom: 0; left: 0; background: rgba(0,0,0,0.25); overflow-x: hidden;"></div>


    <div style="height: 25px;"></div>
    <script type="text/javascript">
        $(document).ready(function () {
            document.title = 'Home | GoodGross';

        });




    </script>



    <script type="text/javascript">



        $(document).mouseup(function(e) {
            if ($(e.target).closest('.retail_top_ul').length === 0 &&
                $(e.target).closest('.wholesale_col_1_top_ul').length === 0 &&
                $(e.target).closest('.wholesale_col_2_top_ul').length === 0 &&
                $(e.target).closest('.wholesale_col_3_top_ul').length === 0) {
                $('.retail_li_level_1').children('div').removeClass('retail_div_level_1_show').addClass('retail_div_level_1_hide');
                $('.wholesale_col_1_li_level_1').children('div').removeClass('wholesale_col_1_div_level_1_show').addClass('wholesale_col_1_div_level_1_hide');
                $('.wholesale_col_2_li_level_1').children('div').removeClass('wholesale_col_2_div_level_1_show').addClass('wholesale_col_2_div_level_1_hide');
                $('.wholesale_col_3_li_level_1').children('div').removeClass('wholesale_col_3_div_level_1_show').addClass('wholesale_col_3_div_level_1_hide');
                $('.overlay').hide();
            }
        });

        $(document).on('click', '.retail_li_level_1', function () {

            $('#retail_wrapper').css({'z-index': '200'});
            $('.wholesale_title').css({'z-index': '100'});
            $('#wholesale_1').css({'z-index': '100'});
            $('#wholesale_2').css({'z-index': '100'});
            $('#wholesale_3').css({'z-index': '100'});
            $('.wholesale_col_1_li_level_1').children('div').removeClass('wholesale_col_1_div_level_1_show').addClass('wholesale_col_1_div_level_1_hide');
            $('.wholesale_col_2_li_level_1').children('div').removeClass('wholesale_col_2_div_level_1_show').addClass('wholesale_col_2_div_level_1_hide');
            $('.wholesale_col_3_li_level_1').children('div').removeClass('wholesale_col_3_div_level_1_show').addClass('wholesale_col_3_div_level_1_hide');
            if ($(this).children('div').hasClass('retail_div_level_1_hide')) {
                $('.retail_li_level_1').children('div').removeClass('retail_div_level_1_show').addClass('retail_div_level_1_hide');
                let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
                $(this).children('div').removeClass('retail_div_level_1_hide').addClass('retail_div_level_1_show').height($('.retail_top_ul').innerHeight()).css({'top': top});
                $('.overlay').show();
            } else {
                $('.retail_li_level_1').children('div').removeClass('retail_div_level_1_show').addClass('retail_div_level_1_hide');
                $('.overlay').hide();
            }

        });

        $(document).on('mouseover', '.retail_li_level_2', function () {
            $('.retail_li_level_2').children('div').removeClass('retail_div_level_2_show').addClass('retail_div_level_2_hide');
            let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
            $(this).children('div').addClass('retail_div_level_2_show').height($('.retail_top_ul').height()).css({'top': top});
            if ($(this).has('div').length) {
                $(this).parent().parent().css({'border-top-right-radius': '0', 'border-bottom-right-radius': '0'});
            }
        });

        $(document).on('click', '.retail_li_level_2', function () {
            $('.retail_li_level_2').children('div').removeClass('retail_div_level_2_show').addClass('retail_div_level_2_hide');
            let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
            $(this).children('div').addClass('retail_div_level_2_show').height($('.retail_top_ul').height()).css({'top': top});
            if ($(this).has('div').length) {
                $(this).parent().parent().css({'border-top-right-radius': '0', 'border-bottom-right-radius': '0'});
                return false;
            } else {
                location = $(this).children('a').attr('href');
            }
        });

        $(document).on('mouseout', '.retail_li_level_2', function () {
            $(this).children('div').removeClass('retail_div_level_2_show').addClass('retail_div_level_2_hide');
            $(this).parent().parent().css({'border-top-right-radius': '5px', 'border-bottom-right-radius': '5px'});
        });

        $(document).on('click', '.retail_li_level_3', function () {
            location = $(this).children('a').attr('href');
        });




        $(document).on('click', '.wholesale_col_1_li_level_1', function () {

            $('#retail_wrapper').css({'z-index': '100'});
            $('.wholesale_title').css({'z-index': '201'});
            $('#wholesale_1').css({'z-index': '200'});
            $('#wholesale_2').css({'z-index': '100'});
            $('#wholesale_3').css({'z-index': '100'});
            $('.retail_li_level_1').children('div').removeClass('retail_div_level_1_show').addClass('retail_div_level_1_hide');
            $('.wholesale_col_2_li_level_1').children('div').removeClass('wholesale_col_2_div_level_1_show').addClass('wholesale_col_2_div_level_1_hide');
            $('.wholesale_col_3_li_level_1').children('div').removeClass('wholesale_col_3_div_level_1_show').addClass('wholesale_col_3_div_level_1_hide');
            if ($(this).children('div').hasClass('wholesale_col_1_div_level_1_hide')) {
                $('.wholesale_col_1_li_level_1').children('div').removeClass('wholesale_col_1_div_level_1_show').addClass('wholesale_col_1_div_level_1_hide');

                let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
                console.log(top);
                $(this).children('div').removeClass('wholesale_col_1_div_level_1_hide').addClass('wholesale_col_1_div_level_1_show').height($('.wholesale_col_1_top_ul').innerHeight()).css({'top': top});
                $('.overlay').show();
            } else {
                $('.wholesale_col_1_li_level_1').children('div').removeClass('wholesale_col_1_div_level_1_show').addClass('wholesale_col_1_div_level_1_hide');
                $('.overlay').hide();
            }

        });


        $(document).on('mouseover', '.wholesale_col_1_li_level_2', function () {
            $('.wholesale_col_1_li_level_2').children('div').removeClass('wholesale_col_1_div_level_2_show').addClass('wholesale_col_1_div_level_2_hide');
            let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
            $(this).children('div').addClass('wholesale_col_1_div_level_2_show').height($('.wholesale_col_1_top_ul').height()).css({'top': top});
            if ($(this).has('div').length) {
                $(this).parent().parent().css({'border-top-right-radius': '0', 'border-bottom-right-radius': '0'});
            }
        });

        $(document).on('click', '.wholesale_col_1_li_level_2', function () {
            $('.wholesale_col_1_li_level_2').children('div').removeClass('wholesale_col_1_div_level_2_show').addClass('wholesale_col_1_div_level_2_hide');
            let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
            $(this).children('div').addClass('wholesale_col_1_div_level_2_show').height($('.wholesale_col_1_top_ul').height()).css({'top': top});
            if ($(this).has('div').length) {
                $(this).parent().parent().css({'border-top-right-radius': '0', 'border-bottom-right-radius': '0'});
                return false;
            } else {
                location = $(this).children('a').attr('href');
            }
        });

        $(document).on('mouseout', '.wholesale_col_1_li_level_2', function () {
            $(this).children('div').removeClass('wholesale_col_1_div_level_2_show').addClass('wholesale_col_1_div_level_2_hide');
            $(this).parent().parent().css({'border-top-right-radius': '5px', 'border-bottom-right-radius': '5px'});
        });


        $(document).on('click', '.wholesale_col_1_li_level_3', function () {
            location = $(this).children('a').attr('href');
        });

        $(document).on('click', '.wholesale_col_2_li_level_1', function () {
            $('#retail_wrapper').css({'z-index': '100'});
            $('.wholesale_title').css({'z-index': '201'});
            $('#wholesale_1').css({'z-index': '100'});
            $('#wholesale_2').css({'z-index': '200'});
            $('#wholesale_3').css({'z-index': '100'});
            $('.retail_li_level_1').children('div').removeClass('retail_div_level_1_show').addClass('retail_div_level_1_hide');
            $('.wholesale_col_1_li_level_1').children('div').removeClass('wholesale_col_1_div_level_1_show').addClass('wholesale_col_1_div_level_1_hide');
            $('.wholesale_col_3_li_level_1').children('div').removeClass('wholesale_col_3_div_level_1_show').addClass('wholesale_col_3_div_level_1_hide');
            if ($(this).children('div').hasClass('wholesale_col_2_div_level_1_hide')) {
                $('.wholesale_col_2_li_level_1').children('div').removeClass('wholesale_col_2_div_level_1_show').addClass('wholesale_col_2_div_level_1_hide');
                let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
                $(this).children('div').removeClass('wholesale_col_2_div_level_1_hide').addClass('wholesale_col_2_div_level_1_show').height($('.wholesale_col_2_top_ul').innerHeight()).css({'top': top});
                $('.overlay').show();
            } else {
                $('.wholesale_col_2_li_level_1').children('div').removeClass('wholesale_col_2_div_level_1_show').addClass('wholesale_col_2_div_level_1_hide');
                $('.overlay').hide();
            }

        });

        $(document).on('mouseover', '.wholesale_col_2_li_level_2', function () {
            $('.wholesale_col_2_li_level_2').children('div').removeClass('wholesale_col_2_div_level_2_show').addClass('wholesale_col_2_div_level_2_hide');
            let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
            $(this).children('div').addClass('wholesale_col_2_div_level_2_show').height($('.wholesale_col_2_top_ul').height()).css({'top': top});
            if ($(this).has('div').length) {
                $(this).parent().parent().css({'border-top-right-radius': '0', 'border-bottom-right-radius': '0'});
            }
        });

        $(document).on('click', '.wholesale_col_2_li_level_2', function () {
            $('.wholesale_col_2_li_level_2').children('div').removeClass('wholesale_col_2_div_level_2_show').addClass('wholesale_col_2_div_level_2_hide');
            let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
            $(this).children('div').addClass('wholesale_col_2_div_level_2_show').height($('.wholesale_col_2_top_ul').height()).css({'top': top});
            if ($(this).has('div').length) {
                $(this).parent().parent().css({'border-top-right-radius': '0', 'border-bottom-right-radius': '0'});
                return false;
            } else {
                location = $(this).children('a').attr('href');
            }
        });

        $(document).on('mouseout', '.wholesale_col_2_li_level_2', function () {
            $(this).children('div').removeClass('wholesale_col_2_div_level_2_show').addClass('wholesale_col_2_div_level_2_hide');
            $(this).parent().parent().css({'border-top-right-radius': '5px', 'border-bottom-right-radius': '5px'});
        });

        $(document).on('click', '.wholesale_col_2_li_level_3', function () {
            location = $(this).children('a').attr('href');
        });



        $(document).on('click', '.wholesale_col_3_li_level_1', function () {
            $('#retail_wrapper').css({'z-index': '100'});
            $('.wholesale_title').css({'z-index': '201'});
            $('#wholesale_1').css({'z-index': '100'});
            $('#wholesale_2').css({'z-index': '100'});
            $('#wholesale_3').css({'z-index': '200'});
            $('.retail_li_level_1').children('div').removeClass('retail_div_level_1_show').addClass('retail_div_level_1_hide');
            $('.wholesale_col_1_li_level_1').children('div').removeClass('wholesale_col_1_div_level_1_show').addClass('wholesale_col_1_div_level_1_hide');
            $('.wholesale_col_2_li_level_1').children('div').removeClass('wholesale_col_2_div_level_1_show').addClass('wholesale_col_2_div_level_1_hide');
            if ($(this).children('div').hasClass('wholesale_col_3_div_level_1_hide')) {
                $('.wholesale_col_3_li_level_1').children('div').removeClass('wholesale_col_3_div_level_1_show').addClass('wholesale_col_3_div_level_1_hide');
                let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
                $(this).children('div').removeClass('wholesale_col_3_div_level_1_hide').addClass('wholesale_col_3_div_level_1_show').height($('.wholesale_col_3_top_ul').innerHeight()).css({'top': top});
                $('.overlay').show();
            } else {
                $('.wholesale_col_3_li_level_1').children('div').removeClass('wholesale_col_3_div_level_1_show').addClass('wholesale_col_3_div_level_1_hide');
                $('.overlay').hide();
            }

        });


        $(document).on('mouseover', '.wholesale_col_3_li_level_2', function () {
            $('.wholesale_col_3_li_level_2').children('div').removeClass('wholesale_col_3_div_level_2_show').addClass('wholesale_col_3_div_level_2_hide');
            let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
            $(this).children('div').addClass('wholesale_col_3_div_level_2_show').height($('.wholesale_col_3_top_ul').height()).css({'top': top});
            if ($(this).has('div').length) {
                $(this).parent().parent().css({'border-top-right-radius': '0', 'border-bottom-right-radius': '0'});
            }
        });

        $(document).on('click', '.wholesale_col_3_li_level_2', function () {
            $('.wholesale_col_3_li_level_2').children('div').removeClass('wholesale_col_3_div_level_2_show').addClass('wholesale_col_3_div_level_2_hide');
            let top = $(this).prevAll().length === 0 ? 0 : (parseFloat($(this).prevAll().innerHeight()) * $(this).prevAll().length * -1)  - $(this).prevAll().length;
            $(this).children('div').addClass('wholesale_col_3_div_level_2_show').height($('.wholesale_col_3_top_ul').height()).css({'top': top});
            if ($(this).has('div').length) {
                $(this).parent().parent().css({'border-top-right-radius': '0', 'border-bottom-right-radius': '0'});
                return false;
            } else {
                location = $(this).children('a').attr('href');
            }
        });

        $(document).on('mouseout', '.wholesale_col_3_li_level_2', function () {
            $(this).children('div').removeClass('wholesale_col_3_div_level_2_show').addClass('wholesale_col_3_div_level_2_hide');
            $(this).parent().parent().css({'border-top-right-radius': '5px', 'border-bottom-right-radius': '5px'});
        });


        $(document).on('click', '.wholesale_col_3_li_level_3', function () {
            location = $(this).children('a').attr('href');
        });



        $.ajax({
            method: 'get',
            url: '{{ url('/get/category/types') }}',
            cache: false,
            success: function (result) {
                console.log(result);
                $('#retail_categories').empty();
                $('#wholesale_categories').empty();

                let screenWidth = $(window).width();

                let retailRootCategories = [];
                let retailChildCategories = [];


                let wholesaleRootCategories = [];
                let wholesaleChildCategories = [];


                $.each(result.payload, function (typeKey, categoryType) {
                    console.log(categoryType.category_type)
                    if (categoryType.category_type === 'Retail') {
                        $.each(categoryType.categories, function (categoryKey, category) {
                            if (parseInt(category.root_id) === 0) {
                                retailRootCategories.push(category);
                            } else {
                                retailChildCategories.push(category);
                            }
                        });
                        if (parseFloat(screenWidth) < 1400) {
                            $('#retail_categories').append('<ul id="category_type_id_' + categoryType.id + '" class="nav flex-column flex-nowrap overflow-hidden"></ul>');
                            let categoryTitle;
                            $.each(retailRootCategories, function (retailRootKey, retailRootObj) {
                                categoryTitle = retailRootObj.category;
                                if (retailChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(retailRootObj.id); })) {
                                    $('#category_type_id_' + retailRootObj.category_type_id).append(
                                        '<li class="nav-item retail_top_li">' +
                                        '<a href="#nav_id_' + retailRootObj.id + '" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nav_id_' + retailRootObj.id + '" class="nav-link collapsed text-truncate">' +
                                        '<span>' + categoryTitle + '</span><span class="area_expanded_indicator">[+]</span>' +
                                        '</a>' +
                                        '<div class="collapse retail_child_element_container" id="nav_id_' + retailRootObj.id + '">' +
                                        '<ul id="category_id_' + retailRootObj.id + '" class="flex-column pl-4 nav"></ul>' +
                                        '</div>' +
                                        '</li>'
                                    );
                                    $('.nav-link').on('click', function () {
                                        if ($(this).hasClass('collapsed')) {
                                            $(this).find('.area_expanded_indicator').text('[-]');
                                        } else {
                                            $(this).find('.area_expanded_indicator').text('[+]');
                                        }

                                    });
                                } else {
                                    let url = '{{ url('/retail/category') }}/' + retailRootObj.slug;
                                    $('#category_type_id_' + retailRootObj.category_type_id).append('<li class="nav-item retail_top_li"><a href="' + url + '" class="nav-link text-truncate"><span>' + categoryTitle + '</span></a></li>');
                                }
                            });
                        } else {
                            $('#retail_categories').append('<ul class="retail_top_ul"></ul>');
                            let categoryTitle;

                            let categoryIcon;
                            let categoryIconSource;
                            $.each(retailRootCategories, function (retailRootKey, retailRootObj) {
                                categoryTitle = retailRootObj.category;
                                categoryIconSource = '{{ asset('storage') }}/' + retailRootObj.icon;
                                categoryIcon = retailRootObj.icon === null ? '' : '<img src="' + categoryIconSource + '" alt="' + retailRootObj.category + '">';
                                if (retailChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(retailRootObj.id); })) {
                                    $('.retail_top_ul').append('<li class="retail_li_level_' + retailRootObj.level + '">' + categoryIcon + '<a href="javascript:void(0)">' + categoryTitle + '</a><svg height="10" width="7" style="position: absolute; top: 7px; right: 5px;"><line x1="0" y1="0" x2="5" y2="5" style="stroke:rgb(51,51,51);stroke-width:1;"/><line x1="5" y1="5" x2="0" y2="10" style="stroke:rgb(51,51,51);stroke-width:1;"/></svg><div class="retail_div_level_' + retailRootObj.level + ' retail_div_level_' + retailRootObj.level + '_hide"><ul id="category_id_' + retailRootObj.id + '" class="retail_ul_level_' + retailRootObj.level + '"></ul></div></li>');
                                } else {

                                    let url = '{{ url('/retail/category') }}/' + retailRootObj.slug;
                                    $('.retail_top_ul').append('<li class="retail_li_level_' + retailRootObj.level + '">' + categoryIcon + '<a href="' + url + '">' + categoryTitle + '</a></li>');
                                }
                            });
                        }

                        loadRetailChildCategories(retailChildCategories);

                    }
                    if (categoryType.category_type === 'Wholesale') {
                        $.each(categoryType.categories, function (categoryKey, category) {
                            if (parseInt(category.root_id) === 0) {
                                wholesaleRootCategories.push(category);
                            } else {
                                wholesaleChildCategories.push(category);
                            }
                        });

                        wholesaleRootCategories.sort(function (a, b) {
                            return parseFloat(a.sequence) - parseFloat(b.sequence);
                        });
                        wholesaleChildCategories.sort(function (a, b) {
                            return parseFloat(a.sequence) - parseFloat(b.sequence);
                        });

                        let i = 0;
                        $('#wholesale_categories').append('<div class="row mt-2"><div id="wholesale_1" class="col-12 col-xl-4"></div><div id="wholesale_2" class="col-12 col-xl-4"></div><div class="col-12 col-xl-4" id="wholesale_3"></div></div>');

                        let categoryTitle;
                        $.each(wholesaleRootCategories, function (wholesaleRootKey, wholesaleRootObj) {
                            categoryTitle = wholesaleRootObj.category;

                            if (screenWidth < 1400) {
                                if (i < 15) {
                                    if (i === 0) {
                                        $('#wholesale_1').append('<ul id="wholesale_category_type_id_1" class="nav flex-column flex-nowrap overflow-hidden"></ul>');
                                    }
                                    if (wholesaleChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(wholesaleRootObj.id); })) {
                                        $('#wholesale_category_type_id_1').append(
                                            '<li class="nav-item wholesale_top_li">' +
                                            '<a href="#nav_id_' + wholesaleRootObj.id + '" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nav_id_' + wholesaleRootObj.id + '" class="nav-link collapsed text-truncate">' +
                                            '<span>' + categoryTitle + '</span><span class="area_expanded_indicator">[+]</span>' +
                                            '</a>' +
                                            '<div class="collapse wholesale_child_element_container" id="nav_id_' + wholesaleRootObj.id + '">' +
                                            '<ul id="category_id_' + wholesaleRootObj.id + '" class="flex-column pl-2 nav"></ul>' +
                                            '</div>' +
                                            '</li>'
                                        );
                                        $('.nav-link').on('click', function () {
                                            if ($(this).hasClass('collapsed')) {
                                                $(this).find('.area_expanded_indicator').text('[-]');
                                            } else {
                                                $(this).find('.area_expanded_indicator').text('[+]');
                                            }
                                        });
                                    } else {
                                        let url = '{{ url('/wholesale/category') }}/' + wholesaleRootObj.slug;
                                        $('#wholesale_category_type_id_1').append('<li class="nav-item wholesale_top_li"><a href="' + url + '" class="nav-link text-truncate"><span>' + categoryTitle + '</span></a></li>');
                                    }
                                } else if (i < 29) {
                                    if (i === 15) {
                                        $('#wholesale_2').append('<ul id="wholesale_category_type_id_2" class="nav flex-column flex-nowrap overflow-hidden"></ul>');
                                    }

                                    if (wholesaleChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(wholesaleRootObj.id); })) {
                                        $('#wholesale_category_type_id_2').append(
                                            '<li class="nav-item wholesale_top_li">' +
                                            '<a href="#nav_id_' + wholesaleRootObj.id + '" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nav_id_' + wholesaleRootObj.id + '" class="nav-link collapsed text-truncate">' +
                                            '<span>' + categoryTitle + '</span><span class="area_expanded_indicator">[+]</span>' +
                                            '</a>' +
                                            '<div class="collapse wholesale_child_element_container" id="nav_id_' + wholesaleRootObj.id + '">' +
                                            '<ul id="category_id_' + wholesaleRootObj.id + '" class="flex-column pl-2 nav"></ul>' +
                                            '</div>' +
                                            '</li>'
                                        );
                                        $('.nav-link').on('click', function () {
                                            if ($(this).hasClass('collapsed')) {
                                                $(this).find('.area_expanded_indicator').text('[-]');
                                            } else {
                                                $(this).find('.area_expanded_indicator').text('[+]');
                                            }
                                        });
                                    } else {
                                        let url = '{{ url('/wholesale/category') }}/' + wholesaleRootObj.slug;
                                        $('#wholesale_category_type_id_2').append('<li class="nav-item wholesale_top_li"><a href="' + url + '" class="nav-link text-truncate"><span>' + categoryTitle + '</span></a></li>');
                                    }
                                } else if (i >= 29) {
                                    if (i === 29) {
                                        $('#wholesale_3').append('<ul id="wholesale_category_type_id_3" class="nav flex-column flex-nowrap overflow-hidden"></ul>');
                                    }

                                    if (wholesaleChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(wholesaleRootObj.id); })) {
                                        $('#wholesale_category_type_id_3').append(
                                            '<li class="nav-item wholesale_top_li">' +
                                            '<a href="#nav_id_' + wholesaleRootObj.id + '" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nav_id_' + wholesaleRootObj.id + '" class="nav-link collapsed text-truncate">' +
                                            '<span>' + categoryTitle + '</span><span class="area_expanded_indicator">[+]</span>' +
                                            '</a>' +
                                            '<div class="collapse wholesale_child_element_container" id="nav_id_' + wholesaleRootObj.id + '">' +
                                            '<ul id="category_id_' + wholesaleRootObj.id + '" class="flex-column pl-2 nav"></ul>' +
                                            '</div>' +
                                            '</li>'
                                        );
                                        $('.nav-link').on('click', function () {
                                            if ($(this).hasClass('collapsed')) {
                                                $(this).find('.area_expanded_indicator').text('[-]');
                                            } else {
                                                $(this).find('.area_expanded_indicator').text('[+]');
                                            }
                                        });
                                    } else {
                                        let url = '{{ url('/wholesale/category') }}/' + wholesaleRootObj.slug;
                                        $('#wholesale_category_type_id_3').append('<li class="nav-item wholesale_top_li"><a href="' + url + '" class="nav-link text-truncate"><span>' + categoryTitle + '</span></a></li>');
                                    }
                                }
                            } else {
                                if (i < 5) {
                                    if (i === 0) {
                                        $('#wholesale_1').append('<ul id="wholesale_category_type_id_1" class="wholesale_col_1_top_ul"></ul>');
                                    }

                                    if (wholesaleChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(wholesaleRootObj.id); })) {
                                        $('#wholesale_category_type_id_1').append('<li class="wholesale_col_1_li_level_' + wholesaleRootObj.level + '"><a href="javascript:void(0)">' + categoryTitle + '</a><svg height="10" width="7" style="position: absolute; top: 14px; right: 5px;"><line x1="0" y1="0" x2="5" y2="5" style="stroke:rgb(51,51,51);stroke-width:1;"/><line x1="5" y1="5" x2="0" y2="10" style="stroke:rgb(51,51,51);stroke-width:1;"/></svg><div class="wholesale_col_1_div_level_' + wholesaleRootObj.level + ' wholesale_col_1_div_level_' + wholesaleRootObj.level + '_hide"><ul id="category_id_' + wholesaleRootObj.id + '" class="wholesale_col_1_ul_level_' + wholesaleRootObj.level + '"></ul></div></li>');
                                    } else {
                                        let url = '{{ url('/wholesale/category') }}/' + wholesaleRootObj.slug;
                                        $('#wholesale_category_type_id_1').append('<li class="wholesale_col_1_li_level_' + wholesaleRootObj.level + '"><a href="' + url + '">' + categoryTitle + '</a></li>');
                                    }
                                } else if (i < 10) {
                                    if (i === 5) {
                                        $('#wholesale_2').append('<ul id="wholesale_category_type_id_2" class="wholesale_col_2_top_ul"></ul>');
                                    }

                                    if (wholesaleChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(wholesaleRootObj.id); })) {
                                        $('#wholesale_category_type_id_2').append('<li class="wholesale_col_2_li_level_' + wholesaleRootObj.level + '"><a href="javascript:void(0)">' + categoryTitle + '</a><svg height="10" width="7" style="position: absolute; top: 14px; right: 5px;"><line x1="0" y1="0" x2="5" y2="5" style="stroke:rgb(51,51,51);stroke-width:1;"/><line x1="5" y1="5" x2="0" y2="10" style="stroke:rgb(51,51,51);stroke-width:1;"/></svg><div class="wholesale_col_2_div_level_' + wholesaleRootObj.level + ' wholesale_col_2_div_level_' + wholesaleRootObj.level + '_hide"><ul id="category_id_' + wholesaleRootObj.id + '" class="wholesale_col_2_ul_level_' + wholesaleRootObj.level + '"></ul></div></li>');
                                    } else {
                                        let url = '{{ url('/wholesale/category') }}/' + wholesaleRootObj.slug;
                                        $('#wholesale_category_type_id_2').append('<li class="wholesale_col_2_li_level_' + wholesaleRootObj.level + '"><a href="' + url + '">' + categoryTitle + '</a></li>');
                                    }
                                } else if (i >= 10) {
                                    if (i === 10) {
                                        $('#wholesale_3').append('<ul id="wholesale_category_type_id_3" class="wholesale_col_3_top_ul"></ul>');
                                    }

                                    if (wholesaleChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(wholesaleRootObj.id); })) {
                                        $('#wholesale_category_type_id_3').append('<li class="wholesale_col_3_li_level_' + wholesaleRootObj.level + '"><a href="javascript:void(0)">' + categoryTitle + '</a><svg height="10" width="7" style="position: absolute; top: 14px; right: 5px;"><line x1="0" y1="0" x2="5" y2="5" style="stroke:rgb(51,51,51);stroke-width:1;"/><line x1="5" y1="5" x2="0" y2="10" style="stroke:rgb(51,51,51);stroke-width:1;"/></svg><div class="wholesale_col_3_div_level_' + wholesaleRootObj.level + ' wholesale_col_3_div_level_' + wholesaleRootObj.level + '_hide"><ul id="category_id_' + wholesaleRootObj.id + '" class="wholesale_col_3_ul_level_' + wholesaleRootObj.level + '"></ul></div></li>');
                                    } else {
                                        let url = '{{ url('/wholesale/category') }}/' + wholesaleRootObj.slug;
                                        $('#wholesale_category_type_id_3').append('<li class="wholesale_col_3_li_level_' + wholesaleRootObj.level + '"><a href="' + url + '">' + categoryTitle + '</a></li>');
                                    }
                                }
                            }
                            i++;
                        });
                        loadWholesaleChildCategories(wholesaleChildCategories);
                    }
                });
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });


        function loadRetailChildCategories(retailChildCategories) {
            let screenWidth = $(window).width();
            let categoryTitle;
            if (screenWidth < 1200) {
                $.each(retailChildCategories, function (retailChildKey, retailChildObj) {
                    categoryTitle = retailChildObj.category;
                    if (retailChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(retailChildObj.id); })) {
                        $('#category_id_' + retailChildObj.root_id).append(
                            '<li class="nav-item">' +
                            '<a href="#nav_id_' + retailChildObj.id + '" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nav_id_' + retailChildObj.id + '" class="nav-link collapsed py-1">' +
                            '<span>' + categoryTitle + '</span><span class="area_expanded_indicator">[+]</span>' +
                            '</a>' +
                            '<div class="collapse" style="border-bottom: 1px solid #f0f0f0;" id="nav_id_' + retailChildObj.id + '">' +
                            '<ul id="category_id_' + retailChildObj.id + '" class="flex-column nav pl-4"></ul>' +
                            '</div>' +
                            '</li>'
                        );
                        $('.nav-link').on('click', function () {
                            if ($(this).hasClass('collapsed')) {
                                $(this).find('.area_expanded_indicator').text('[-]');
                            } else {
                                $(this).find('.area_expanded_indicator').text('[+]');
                            }
                        });
                    } else {
                        let url = '{{ url('/retail/category') }}/' + retailChildObj.slug;
                        $('#category_id_' + retailChildObj.root_id).append('<li class="nav-item"><a href="' + url + '" class="nav-link"><span>' + categoryTitle + '</span></a></li>');
                    }
                });
            } else {
                $.each(retailChildCategories, function (retailChildKey, retailChildObj) {
                    categoryTitle = retailChildObj.category;
                    if (retailChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(retailChildObj.id); })) {
                        $('#category_id_' + retailChildObj.root_id).append('<li class="retail_li_level_' + retailChildObj.level + '"><a href="javascript:void(0)">' + categoryTitle + '</a><svg height="10" width="7" style="position: absolute; top: 7px; right: 5px;"><line x1="0" y1="0" x2="5" y2="5" style="stroke:rgb(51,51,51);stroke-width:1;"/><line x1="5" y1="5" x2="0" y2="10" style="stroke:rgb(51,51,51);stroke-width:1;"/></svg><div class="retail_div_level_' + retailChildObj.level + ' retail_div_level_' + retailChildObj.level + '_hide"><ul id="category_id_' + retailChildObj.id + '" class="retail_ul_level_' + retailChildObj.level + '"></ul></div></li>');
                    } else {
                        let url = '{{ url('/retail/category') }}/' + retailChildObj.slug;
                        $('#category_id_' + retailChildObj.root_id).append('<li class="retail_li_level_' + retailChildObj.level + '"><a href="' + url + '">' + categoryTitle + '</a></li>');
                    }

                });
            }


        }

        function loadWholesaleChildCategories(wholesaleChildCategories) {
            let screenWidth = $(window).width();
            let categoryTitle;
            if (screenWidth < 1200) {
                $.each(wholesaleChildCategories, function (wholesaleChildKey, wholesaleChildObj) {
                    categoryTitle = wholesaleChildObj.category;
                    if (wholesaleChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(wholesaleChildObj.id); })) {
                        $('#category_id_' + wholesaleChildObj.root_id).append(
                            '<li class="nav-item">' +
                            '<a href="#nav_id_' + wholesaleChildObj.id + '" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nav_id_' + wholesaleChildObj.id + '" class="nav-link collapsed py-1">' +
                            '<span>' + categoryTitle + '</span><span class="area_expanded_indicator">[+]</span>' +
                            '</a>' +
                            '<div class="collapse" id="nav_id_' + wholesaleChildObj.id + '" aria-expanded="false" style="border-bottom: 1px solid #f0f0f0;">' +
                            '<ul id="category_id_' + wholesaleChildObj.id + '" class="flex-column nav pl-4"></ul>' +
                            '</div>' +
                            '</li>'
                        );
                        $('.nav-link').on('click', function () {
                            if ($(this).hasClass('collapsed')) {
                                $(this).find('.area_expanded_indicator').text('[-]');
                            } else {
                                $(this).find('.area_expanded_indicator').text('[+]');
                            }
                        });
                    } else {
                        let url = '{{ url('/wholesale/category') }}/' + wholesaleChildObj.slug;
                        $('#category_id_' + wholesaleChildObj.root_id).append('<li class="nav-item"><a href="' + url + '" class="nav-link"><span>' + categoryTitle + '</span></a></li>');
                    }
                });
            } else {
                $.each(wholesaleChildCategories, function (wholesaleChildKey, wholesaleChildObj) {
                    categoryTitle = wholesaleChildObj.category;
                    let columnIdentity = $('#category_id_' + wholesaleChildObj.root_id).attr('class').split('_')[2];
                    if (wholesaleChildCategories.some(function (obj) { return parseInt(obj['root_id']) === parseInt(wholesaleChildObj.id); })) {
                        $('#category_id_' + wholesaleChildObj.root_id).append('<li class="wholesale_col_' + columnIdentity + '_li_level_' + wholesaleChildObj.level + '"><a href="javascript:void(0)">' + categoryTitle + '</a><svg height="10" width="7" style="position: absolute; top: 14px; right: 5px;"><line x1="0" y1="0" x2="5" y2="5" style="stroke:rgb(51,51,51);stroke-width:1;"/><line x1="5" y1="5" x2="0" y2="10" style="stroke:rgb(51,51,51);stroke-width:1;"/></svg><div class="wholesale_col_' + columnIdentity + '_div_level_' + wholesaleChildObj.level + ' wholesale_col_' + columnIdentity + '_div_level_' + wholesaleChildObj.level + '_hide"><ul id="category_id_' + wholesaleChildObj.id + '" class="wholesale_col_' + columnIdentity + '_ul_level_' + wholesaleChildObj.level + '"></ul></div></li>');
                    } else {
                        let url = '{{ url('/wholesale/category') }}/' + wholesaleChildObj.slug;
                        $('#category_id_' + wholesaleChildObj.root_id).append('<li class="wholesale_col_' + columnIdentity + '_li_level_' + wholesaleChildObj.level + '"><a href="' + url + '">' + categoryTitle + '</a></li>');
                    }
                });
            }


        }
    </script>


@endsection
