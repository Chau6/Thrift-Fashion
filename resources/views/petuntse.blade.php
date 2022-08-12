<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        @include('block.head-extra')
    </head>
    <body class="product-category-20">
        <div id="page">
            <div class="header-top-cms">
                <aside id="header-top">
                    <div class="html-content">
                        <div class="box-content">
                            <div id="ttcmsheader">
                                <div class="headerservice-close"></div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <header>
                <div class="header">
                    @include('block.header')
                </div>
            </header>
            <div class="header-content-title">
                <div style="background-image: url('image/catalog/demo/banners/breadcrumb-parallax.jpg'); background-position: 50% 78.1106%;" data-source-url="image/catalog/demo/banners/breadcrumb-parallax.jpg" class="parallex"></div>
            </div>
            <div id="product-category" class="container product-category">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('client.homeindex')}}"><i class="material-icons">home</i></a>
                    </li>
                    <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20">Petuntse</a></li>
                </ul>
                <div class="row">
                    <aside id="column-left" class="col-sm-3 hidden-xs">
                        <div class="left-right-inner">
                            <div class="panel panel-default option-filter">
                                <div class="panel-heading">Refine Search</div>
                                <div class="list-group option-filter-box">
                                    <div class="list-group">
                                        <div class="list-group-items">
                                            <a class="list-group-item">Colors</a>
                                            <div class="list-group-item">
                                                <div id="filter-group1">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="filter[]" value="1" />
                                                            Black
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="filter[]" value="2" />
                                                            White
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="filter[]" value="3" />
                                                            Silver
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-items">
                                            <a class="list-group-item">Price</a>
                                            <div class="list-group-item">
                                                <div id="filter-group2">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="filter[]" value="4" />
                                                            $100 and belov
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="filter[]" value="5" />
                                                            $100 to $200
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="filter[]" value="6" />
                                                            $200 and more
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-items">
                                            <a class="list-group-item">Size</a>
                                            <div class="list-group-item">
                                                <div id="filter-group3">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="filter[]" value="7" />
                                                            Large
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="filter[]" value="8" />
                                                            Medium
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="filter[]" value="9" />
                                                            Small
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer text-right">
                                        <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $("#button-filter").on("click", function () {
                                    //				$('#content .category-description .option-filter-box').appendTo('#column-left .option-filter');
                                    //				$('#content .category-description .option-filter-box').appendTo('#column-right .option-filter');

                                    filter = [];
                                    $("input[name^='filter']:checked").each(function (element) {
                                        filter.push(this.value);
                                    });
                                    href = "https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&path=20&filter=" + filter.join(",");
                                    div = " #content";
                                    load_href = href + div;
                                    $(div).load(load_href, function () {
                                        $(this).children(":first").unwrap();

                                        jQuery(document).ready(function ($) {
                                            $(".item-countdown").each(function () {
                                                var date = $(this).data("date");
                                                $(this).lofCountDown({
                                                    TargetDate: date,
                                                    DisplayFormat: "<div>%%D%% <span>Days</span></div><div>%%H%% <span>Hours</span></div><div>%%M%% <span>Min</span></div><div>%%S%% <span>Sec</span></div>",
                                                });
                                            });
                                        });

                                        // Product List
                                        $("#list-view").click(function () {
                                            $("#grid-view").removeClass("active");
                                            $("#short-view").removeClass("active");
                                            $("#list-view").addClass("active");
                                            $("#content .product-grid > .clearfix").remove();
                                            $("#content .product-sort > .clearfix").remove();

                                            $("#content .row > .product-grid").attr("class", "product-layout product-list col-xs-12");
                                            $("#content .row > .product-sort").attr("class", "product-layout product-list col-xs-12");
                                            $("#content .row > .product-list .product-thumb .image").attr("class", "image col-xs-5 col-sm-4 col-md-4");
                                            $("#content .row > .product-list .product-thumb .thumb-description").attr("class", "thumb-description col-xs-7 col-sm-8 col-md-8");
                                            $(".product-layout.product-list .product-thumb .image .rating").each(function () {
                                                $(this).insertAfter($(this).parent().parent().parent().find(".thumb-description .caption .product-description > h4"));
                                            });
                                            $(".product-layout.product-list .product-thumb .thumb-description .caption .product-description .product-countdown").each(function () {
                                                $(this).appendTo($(this).parent().parent().parent().parent().find(".image"));
                                            });
                                            localStorage.setItem("display", "list");
                                        });

                                        // Product Grid
                                        $("#grid-view").click(function () {
                                            // What a shame bootstrap does not take into account dynamically loaded columns
                                            $("#list-view").removeClass("active");
                                            $("#short-view").removeClass("active");
                                            $("#grid-view").addClass("active");
                                            var cols = $("#column-right, #column-left").length;

                                            if (cols == 2) {
                                                $("#content .product-list").attr("class", "product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12");
                                                $("#content .product-sort").attr("class", "product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12");
                                            } else if (cols == 1) {
                                                $("#content .product-list").attr("class", "product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12");
                                                $("#content .product-sort").attr("class", "product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12");
                                            } else {
                                                $("#content .product-list").attr("class", "product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12");
                                                $("#content .product-sort").attr("class", "product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12");
                                            }
                                            $("#content .row > .product-grid .product-thumb .image").attr("class", "image col-xs-12");
                                            $("#content .row > .product-grid .product-thumb .thumb-description").attr("class", "thumb-description col-xs-12");

                                            $(".product-layout.product-grid .product-thumb .thumb-description .caption .product-description > .rating").each(function () {
                                                $(this).appendTo($(this).parent().parent().parent().parent().parent().find(".image"));
                                            });
                                            $(".product-layout.product-grid .product-thumb .thumb-description .caption .product-description .product-countdown").each(function () {
                                                $(this).appendTo($(this).parent().parent().parent().parent().find(".image"));
                                            });
                                            localStorage.setItem("display", "grid");
                                        });

                                        // Product Sort
                                        $("#short-view").click(function () {
                                            // What a shame bootstrap does not take into account dynamically loaded columns
                                            $("#grid-view").removeClass("active");
                                            $("#list-view").removeClass("active");
                                            $("#short-view").addClass("active");
                                            var cols = $("#column-right, #column-left").length;

                                            if (cols == 2) {
                                                $("#content .product-gird").attr("class", "product-layout product-sort col-xs-12");
                                                $("#content .product-list").attr("class", "product-layout product-sort col-xs-12");
                                            } else if (cols == 1) {
                                                $("#content .product-gird").attr("class", "product-layout product-sort col-xs-12");
                                                $("#content .product-list").attr("class", "product-layout product-sort col-xs-12");
                                            } else {
                                                $("#content .product-gird").attr("class", "product-layout product-sort col-xs-12");
                                                $("#content .product-list").attr("class", "product-layout product-sort col-xs-12");
                                            }
                                            $("#content .row > .product-sort .product-thumb .image").attr("class", "image col-xs-3 col-sm-3 col-md-2");
                                            $("#content .row > .product-sort .product-thumb .thumb-description").attr("class", "thumb-description col-xs-9 col-sm-9 col-md-10");
                                            $(".product-layout.product-sort .product-thumb .image .rating").each(function () {
                                                $(this).insertAfter($(this).parent().parent().parent().find(".thumb-description .caption .product-description > h4"));
                                            });
                                            $(".product-layout.product-sort .product-thumb .image .product-countdown").each(function () {
                                                $(this).appendTo($(this).parent().parent().parent().find(".thumb-description .caption .product-description"));
                                            });
                                            localStorage.setItem("display", "sort");
                                        });

                                        if (localStorage.getItem("display") == "grid") {
                                            jQuery("#grid-view").trigger("click");
                                        } else if (localStorage.getItem("display") == "list") {
                                            jQuery("#list-view").trigger("click");
                                        } else if (localStorage.getItem("display") == "sort") {
                                            jQuery("#short-view").trigger("click");
                                        } else {
                                            jQuery("#grid-view").trigger("click");
                                        }
                                    });
                                    setLocation(href);

                                    //					optionFilter();
                                    return false;
                                });
                                function setLocation(curLoc) {
                                    try {
                                        history.pushState(null, null, curLoc);
                                        return;
                                    } catch (e) {}
                                    location.hash = "#" + curLoc;
                                }
                            </script>
                            <div class="swiper-viewport">
                                <div id="banner0" class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="#"><img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/banners/left-banner-300x450.jpg" alt="Left-Banner" class="img-responsive" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                <!--
                                $('#banner0').swiper({
                                	effect: 'fade',
                                	autoplay: 2500,
                                    autoplayDisableOnInteraction: false
                                });
                                -->
                            </script>
                            <div class="featured-carousel products-list">
                                <div class="box-heading"><h3>Featured</h3></div>
                                <div class="featured-items products-carousel row">
                                    <div class="product-layouts">
                                        <div class="product-thumb transition">
                                            <div class="image">
                                                <a href="">
                                                    <img
                                                        class="image_thumb"
                                                        src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/09-70x91.jpg"
                                                        title="perspiciatis unde omnis"
                                                        alt="perspiciatis unde omnis"
                                                    />
                                                    <img
                                                        class="image_thumb_swap"
                                                        src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/09--70x91.jpg"
                                                        title="perspiciatis unde omnis"
                                                        alt="perspiciatis unde omnis"
                                                    />
                                                </a>
                                                <div class="sale-icon">Sale</div>
                                                <span class="percent">-50%</span>
                                            </div>
                                            <div class="thumb-description">
                                                <div class="caption">
                                                    <h4><a href="">perspiciatis unde omnis</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$8.00</span>
                                                        <span class="price-old">$14.00</span>
                                                        <span class="price-tax">Ex Tax: $5.00</span>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('43')">
                                                        <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span>
                                                    </button>
                                                    <button class="btn-wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><i class="material-icons icon-wishlist">favorite</i></button>
                                                    <button class="btn-compare" type="button" data-toggle="tooltip" title="Add to compare" onclick="compare.add('43');"><i class="material-icons icon-exchange">equalizer</i></button>
                                                    <button
                                                        class="btn-quickview"
                                                        type="button"
                                                        title=""
                                                        onclick="tt_quickview.ajaxView('')"
                                                    >
                                                        <i class="material-icons quick_view_icon">visibility</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-layouts">
                                        <div class="product-thumb transition">
                                            <div class="image">
                                                <a href="">
                                                    <img
                                                        class="image_thumb"
                                                        src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/19-70x91.jpg"
                                                        title="voluptate velit esse"
                                                        alt="voluptate velit esse"
                                                    />
                                                    <img
                                                        class="image_thumb_swap"
                                                        src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/19--70x91.jpg"
                                                        title="voluptate velit esse"
                                                        alt="voluptate velit esse"
                                                    />
                                                </a>
                                            </div>
                                            <div class="thumb-description">
                                                <div class="caption">
                                                    <h4><a href="">voluptate velit esse</a></h4>
                                                    <div class="price">
                                                        $123.20
                                                        <span class="price-tax">Ex Tax: $101.00</span>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('40')">
                                                        <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span>
                                                    </button>
                                                    <button class="btn-wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><i class="material-icons icon-wishlist">favorite</i></button>
                                                    <button class="btn-compare" type="button" data-toggle="tooltip" title="Add to compare" onclick="compare.add('40');"><i class="material-icons icon-exchange">equalizer</i></button>
                                                    <button
                                                        class="btn-quickview"
                                                        type="button"
                                                        title=""
                                                        onclick="tt_quickview.ajaxView('')"
                                                    >
                                                        <i class="material-icons quick_view_icon">visibility</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-layouts">
                                        <div class="product-thumb transition">
                                            <div class="image">
                                                <a href="">
                                                    <img
                                                        class="image_thumb"
                                                        src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01-70x91.jpg"
                                                        title="aliquam quaerat voluptatem"
                                                        alt="aliquam quaerat voluptatem"
                                                    />
                                                    <img
                                                        class="image_thumb_swap"
                                                        src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01--70x91.jpg"
                                                        title="aliquam quaerat voluptatem"
                                                        alt="aliquam quaerat voluptatem"
                                                    />
                                                </a>
                                            </div>
                                            <div class="thumb-description">
                                                <div class="caption">
                                                    <h4><a href="">aliquam quaerat voluptatem</a></h4>
                                                    <div class="rating">
                                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                                    </div>
                                                    <div class="price">
                                                        $122.00
                                                        <span class="price-tax">Ex Tax: $100.00</span>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('42')">
                                                        <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span>
                                                    </button>
                                                    <button class="btn-wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="material-icons icon-wishlist">favorite</i></button>
                                                    <button class="btn-compare" type="button" data-toggle="tooltip" title="Add to compare" onclick="compare.add('42');"><i class="material-icons icon-exchange">equalizer</i></button>
                                                    <button
                                                        class="btn-quickview"
                                                        type="button"
                                                        title=""
                                                        onclick="tt_quickview.ajaxView('')"
                                                    >
                                                        <i class="material-icons quick_view_icon">visibility</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div id="content" class="col-sm-9">
                        <h1 class="category-name">Petuntse</h1>
                        <div class="category-description">
                            <div class="row">
                                <div class="col-sm-12 category-image">
                                    <div class="category-bg">
                                        <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/banners/category-image-960x300.jpg" alt="Petuntse" title="Petuntse" class="img-thumbnail" />
                                    </div>
                                </div>
                                <div class="block-description col-sm-12">
                                    <div class="category-content">
                                        <p>
                                            Example of category description text
                                        </p>
                                        <p>
                                            This category includes all the basics of your wardrobe and much more:<br />
                                            shoes, accessories, printed t-shirts, feminine dresses, women's jeans!
                                        </p>
                                    </div>

                                    <div class="category-list">
                                        <h3>Refine Search</h3>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <ul>
                                                    <li>
                                                        <div class="subcategory-image">
                                                            <a href="{{route('client.product.nilesilt',['id'=>'nilesilt_2'])}}">
                                                                <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/banners/category-image-129x40.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <h5><a href="{{route('client.product.nilesilt',['id'=>'nilesilt_2'])}}">Nile silt</a></h5>
                                                    </li>
                                                    <li>
                                                        <div class="subcategory-image">
                                                            <a href="{{route('client.product.jesmonite',['id'=>'jesmonite_2'])}}">
                                                                <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/banners/category-image-129x40.jpg" alt="" />
                                                            </a>
                                                        </div>
                                                        <h5><a href="{{route('client.product.jesmonite',['id'=>'jesmonite_2'])}}">Jesmonite</a></h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="category-compare"><a href="{{route('client.product.product_compatible',$id='all')}}" id="compare-total">Product Compare (0)</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="category-filter">
                            <div class="col-md-2 filter-grid-list">
                                <div class="btn-group">
                                    <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="material-icons grid-on">grid_on</i></button>
                                    <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="material-icons list-on"> format_list_bulleted</i></button>
                                    <button type="button" id="short-view" class="btn btn-default" data-toggle="tooltip" title="Short"><i class="material-icons">dehaze </i></button>
                                </div>
                            </div>

                            <div class="filter-show">
                                <div class="col-md-4 text-right filter-text">
                                    <label class="input-group-addon control-label" for="input-limit">Show:</label>
                                </div>
                                <div class="col-md-8 text-right filter-selection">
                                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;limit=9" selected="selected">9</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;limit=25">25</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;limit=50">50</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;limit=75">75</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;limit=100">100</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-sort-by">
                                <div class="col-md-3 text-right filter-text">
                                    <label class="input-group-addon control-label" for="input-sort">Sort By:</label>
                                </div>
                                <div class="col-md-9 text-right filter-selection">
                                    <select id="input-sort" class="form-control" onchange="location = this.value;">
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;sort=rating&amp;order=DESC">Rating (Highest)</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                        <option value="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;sort=p.model&amp;order=DESC">Model (Z - A)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="category-products">
                            <div class="row">
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb row">
                                        <div class="image">
                                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=42">
                                                <img
                                                    class="image_thumb"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01-371x482.jpg"
                                                    title="aliquam quaerat voluptatem"
                                                    alt="aliquam quaerat voluptatem"
                                                />
                                                <img
                                                    class="image_thumb_swap"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01--371x482.jpg"
                                                    title="aliquam quaerat voluptatem"
                                                    alt="aliquam quaerat voluptatem"
                                                />
                                            </a>
                                            <div class="rating">
                                                <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                            </div>
                                        </div>
                                        <div class="thumb-description">
                                            <div class="caption">
                                                <div class="product-description">
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=42">aliquam quaerat voluptatem</a></h4>
                                                    <p class="description">Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare ..</p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    <div class="price">$122.00 <span class="price-tax">Ex Tax: $100.00</span></div>
                                                </div>
                                                <div class="ttproducthover">
                                                    <div class="ttcart">
                                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('42')">
                                                            <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span><span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('42');">
                                                            <i class="material-icons icon-wishlist">favorite</i>
                                                            <span title="Add to Wish List">Add to Wish List</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('42');">
                                                            <i class="material-icons icon-exchange">equalizer</i>
                                                            <span title="Add to compare">Add to compare</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button
                                                            class="btn-quickview"
                                                            type="button"
                                                            title=""
                                                            onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=42')"
                                                        >
                                                            <i class="material-icons quick_view_icon">visibility</i>
                                                            <span title=""></span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb row">
                                        <div class="image">
                                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=30">
                                                <img
                                                    class="image_thumb"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/02-371x482.jpg"
                                                    title="aliquam quaerat voluptem"
                                                    alt="aliquam quaerat voluptem"
                                                />
                                                <img
                                                    class="image_thumb_swap"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/02--371x482.jpg"
                                                    title="aliquam quaerat voluptem"
                                                    alt="aliquam quaerat voluptem"
                                                />
                                            </a>
                                        </div>
                                        <div class="thumb-description">
                                            <div class="caption">
                                                <div class="product-description">
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=30">aliquam quaerat voluptem</a></h4>
                                                    <p class="description">Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're n..</p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    <div class="price">$122.00 <span class="price-tax">Ex Tax: $100.00</span></div>
                                                </div>
                                                <div class="ttproducthover">
                                                    <div class="ttcart">
                                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('30')">
                                                            <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span><span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('30');">
                                                            <i class="material-icons icon-wishlist">favorite</i>
                                                            <span title="Add to Wish List">Add to Wish List</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('30');">
                                                            <i class="material-icons icon-exchange">equalizer</i>
                                                            <span title="Add to compare">Add to compare</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button
                                                            class="btn-quickview"
                                                            type="button"
                                                            title=""
                                                            onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=30')"
                                                        >
                                                            <i class="material-icons quick_view_icon">visibility</i>
                                                            <span title=""></span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb row">
                                        <div class="image">
                                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=47">
                                                <img
                                                    class="image_thumb"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/03-371x482.jpg"
                                                    title="aliquam quat voluptatem"
                                                    alt="aliquam quat voluptatem"
                                                />
                                                <img
                                                    class="image_thumb_swap"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/03--371x482.jpg"
                                                    title="aliquam quat voluptatem"
                                                    alt="aliquam quat voluptatem"
                                                />
                                            </a>
                                            <div class="sale-icon">Sale</div>
                                            <span class="percent">-20%</span>
                                        </div>
                                        <div class="thumb-description">
                                            <div class="caption">
                                                <div class="product-description">
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=47">aliquam quat voluptatem</a></h4>
                                                    <p class="description">Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Mon..</p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    <div class="price"><span class="price-new">$98.00</span> <span class="price-old">$122.00</span> <span class="price-tax">Ex Tax: $80.00</span></div>
                                                </div>
                                                <div class="ttproducthover">
                                                    <div class="ttcart">
                                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('47')">
                                                            <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span><span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('47');">
                                                            <i class="material-icons icon-wishlist">favorite</i>
                                                            <span title="Add to Wish List">Add to Wish List</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('47');">
                                                            <i class="material-icons icon-exchange">equalizer</i>
                                                            <span title="Add to compare">Add to compare</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button
                                                            class="btn-quickview"
                                                            type="button"
                                                            title=""
                                                            onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=47')"
                                                        >
                                                            <i class="material-icons quick_view_icon">visibility</i>
                                                            <span title=""></span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb row">
                                        <div class="image">
                                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=28">
                                                <img
                                                    class="image_thumb"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/04-371x482.jpg"
                                                    title="aspetur autodit autfugit"
                                                    alt="aspetur autodit autfugit"
                                                />
                                                <img
                                                    class="image_thumb_swap"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/04--371x482.jpg"
                                                    title="aspetur autodit autfugit"
                                                    alt="aspetur autodit autfugit"
                                                />
                                            </a>
                                            <div class="sale-icon">Sale</div>
                                            <span class="percent">-80%</span>
                                        </div>
                                        <div class="thumb-description">
                                            <div class="caption">
                                                <div class="product-description">
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=28">aspetur autodit autfugit</a></h4>
                                                    <p class="description">HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high defin..</p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    <div class="price"><span class="price-new">$26.00</span> <span class="price-old">$122.00</span> <span class="price-tax">Ex Tax: $20.00</span></div>
                                                </div>
                                                <div class="ttproducthover">
                                                    <div class="ttcart">
                                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('28')">
                                                            <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span><span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('28');">
                                                            <i class="material-icons icon-wishlist">favorite</i>
                                                            <span title="Add to Wish List">Add to Wish List</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('28');">
                                                            <i class="material-icons icon-exchange">equalizer</i>
                                                            <span title="Add to compare">Add to compare</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button
                                                            class="btn-quickview"
                                                            type="button"
                                                            title=""
                                                            onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=28')"
                                                        >
                                                            <i class="material-icons quick_view_icon">visibility</i>
                                                            <span title=""></span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb row">
                                        <div class="image">
                                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=41">
                                                <img
                                                    class="image_thumb"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/05-371x482.jpg"
                                                    title="magni dolores eosquies"
                                                    alt="magni dolores eosquies"
                                                />
                                                <img
                                                    class="image_thumb_swap"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/05--371x482.jpg"
                                                    title="magni dolores eosquies"
                                                    alt="magni dolores eosquies"
                                                />
                                            </a>
                                            <div class="rating">
                                                <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                                <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                                <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                            </div>
                                        </div>
                                        <div class="thumb-description">
                                            <div class="caption">
                                                <div class="product-description">
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=41">magni dolores eosquies</a></h4>
                                                    <p class="description">Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo pro..</p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    <div class="price">$122.00 <span class="price-tax">Ex Tax: $100.00</span></div>
                                                </div>
                                                <div class="ttproducthover">
                                                    <div class="ttcart">
                                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('41')">
                                                            <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span><span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('41');">
                                                            <i class="material-icons icon-wishlist">favorite</i>
                                                            <span title="Add to Wish List">Add to Wish List</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('41');">
                                                            <i class="material-icons icon-exchange">equalizer</i>
                                                            <span title="Add to compare">Add to compare</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button
                                                            class="btn-quickview"
                                                            type="button"
                                                            title=""
                                                            onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=41')"
                                                        >
                                                            <i class="material-icons quick_view_icon">visibility</i>
                                                            <span title=""></span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb row">
                                        <div class="image">
                                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=36">
                                                <img
                                                    class="image_thumb"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/06-371x482.jpg"
                                                    title="neque porro quisquam"
                                                    alt="neque porro quisquam"
                                                />
                                                <img
                                                    class="image_thumb_swap"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/06--371x482.jpg"
                                                    title="neque porro quisquam"
                                                    alt="neque porro quisquam"
                                                />
                                            </a>
                                        </div>
                                        <div class="thumb-description">
                                            <div class="caption">
                                                <div class="product-description">
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=36">neque porro quisquam</a></h4>
                                                    <p class="description">Video in your pocket. Its the small iPod with one very big idea: video. The worlds most popula..</p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    <div class="price">$122.00 <span class="price-tax">Ex Tax: $100.00</span></div>
                                                </div>
                                                <div class="ttproducthover">
                                                    <div class="ttcart">
                                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('36')">
                                                            <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span><span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('36');">
                                                            <i class="material-icons icon-wishlist">favorite</i>
                                                            <span title="Add to Wish List">Add to Wish List</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('36');">
                                                            <i class="material-icons icon-exchange">equalizer</i>
                                                            <span title="Add to compare">Add to compare</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button
                                                            class="btn-quickview"
                                                            type="button"
                                                            title=""
                                                            onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=36')"
                                                        >
                                                            <i class="material-icons quick_view_icon">visibility</i>
                                                            <span title=""></span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb row">
                                        <div class="image">
                                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=34">
                                                <img
                                                    class="image_thumb"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/07-371x482.jpg"
                                                    title="neque porro quisquamest"
                                                    alt="neque porro quisquamest"
                                                />
                                                <img
                                                    class="image_thumb_swap"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/07--371x482.jpg"
                                                    title="neque porro quisquamest"
                                                    alt="neque porro quisquamest"
                                                />
                                            </a>
                                        </div>
                                        <div class="thumb-description">
                                            <div class="caption">
                                                <div class="product-description">
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=34">neque porro quisquamest</a></h4>
                                                    <p class="description">Born to be worn. Clip on the worlds most wearable music player and take up to 240 songs with y..</p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    <div class="price">$122.00 <span class="price-tax">Ex Tax: $100.00</span></div>
                                                </div>
                                                <div class="ttproducthover">
                                                    <div class="ttcart">
                                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('34')">
                                                            <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span><span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('34');">
                                                            <i class="material-icons icon-wishlist">favorite</i>
                                                            <span title="Add to Wish List">Add to Wish List</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('34');">
                                                            <i class="material-icons icon-exchange">equalizer</i>
                                                            <span title="Add to compare">Add to compare</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button
                                                            class="btn-quickview"
                                                            type="button"
                                                            title=""
                                                            onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=34')"
                                                        >
                                                            <i class="material-icons quick_view_icon">visibility</i>
                                                            <span title=""></span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb row">
                                        <div class="image">
                                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=32">
                                                <img
                                                    class="image_thumb"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/08-371x482.jpg"
                                                    title="nostrum exercitationem"
                                                    alt="nostrum exercitationem"
                                                />
                                                <img
                                                    class="image_thumb_swap"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/08--371x482.jpg"
                                                    title="nostrum exercitationem"
                                                    alt="nostrum exercitationem"
                                                />
                                            </a>
                                        </div>
                                        <div class="thumb-description">
                                            <div class="caption">
                                                <div class="product-description">
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=32">nostrum exercitationem</a></h4>
                                                    <p class="description">Revolutionary multi-touch interface. iPod touch features the same multi-touch screen technology as..</p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    <div class="price">$122.00 <span class="price-tax">Ex Tax: $100.00</span></div>
                                                </div>
                                                <div class="ttproducthover">
                                                    <div class="ttcart">
                                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('32')">
                                                            <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span><span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('32');">
                                                            <i class="material-icons icon-wishlist">favorite</i>
                                                            <span title="Add to Wish List">Add to Wish List</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('32');">
                                                            <i class="material-icons icon-exchange">equalizer</i>
                                                            <span title="Add to compare">Add to compare</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button
                                                            class="btn-quickview"
                                                            type="button"
                                                            title=""
                                                            onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=32')"
                                                        >
                                                            <i class="material-icons quick_view_icon">visibility</i>
                                                            <span title=""></span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-layout product-list col-xs-12">
                                    <div class="product-thumb row">
                                        <div class="image">
                                            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=43">
                                                <img
                                                    class="image_thumb"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/09-371x482.jpg"
                                                    title="perspiciatis unde omnis"
                                                    alt="perspiciatis unde omnis"
                                                />
                                                <img
                                                    class="image_thumb_swap"
                                                    src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/09--371x482.jpg"
                                                    title="perspiciatis unde omnis"
                                                    alt="perspiciatis unde omnis"
                                                />
                                            </a>
                                            <div class="sale-icon">Sale</div>
                                            <span class="percent">-50%</span>
                                        </div>
                                        <div class="thumb-description">
                                            <div class="caption">
                                                <div class="product-description">
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=43">perspiciatis unde omnis</a></h4>
                                                    <p class="description">Intel Core 2 Duo processor Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, t..</p>
                                                </div>
                                                <div class="product-price-and-shipping">
                                                    <div class="price"><span class="price-new">$8.00</span> <span class="price-old">$14.00</span> <span class="price-tax">Ex Tax: $5.00</span></div>
                                                </div>
                                                <div class="ttproducthover">
                                                    <div class="ttcart">
                                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('43')">
                                                            <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart </span><span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('43');">
                                                            <i class="material-icons icon-wishlist">favorite</i>
                                                            <span title="Add to Wish List">Add to Wish List</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('43');">
                                                            <i class="material-icons icon-exchange">equalizer</i>
                                                            <span title="Add to compare">Add to compare</span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                        <button
                                                            class="btn-quickview"
                                                            type="button"
                                                            title=""
                                                            onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;path=20&amp;product_id=43')"
                                                        >
                                                            <i class="material-icons quick_view_icon">visibility</i>
                                                            <span title=""></span>
                                                            <span class="loading"><i class="material-icons">cached</i></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    jQuery(document).ready(function ($) {
                                        $(".item-countdown").each(function () {
                                            var date = $(this).data("date");
                                            $(this).lofCountDown({
                                                TargetDate: date,
                                                DisplayFormat: "<div>%%D%% <span>text_days</span></div><div>%%H%% <span>text_hours</span></div><div>%%M%% <span>text_minutes</span></div><div>%%S%% <span>text_seconds</span></div>",
                                            });
                                        });
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="category-pagination">
                            <div class="col-xs-6 text-left">Showing 1 to 9 of 17 (2 Pages)</div>
                            <div class="col-xs-6 text-right">
                                <ul class="pagination">
                                    <li class="active"><span>1</span></li>
                                    <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;page=2">2</a></li>
                                    <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;page=2">&gt;</a></li>
                                    <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20&amp;page=2">&gt;|</a></li>
                                </ul>
                            </div>
                        </div>

                        <script>
                            var Tawk_API = {},
                                $_Tawk_LoadStart = new Date();
                            (function () {
                                var s1 = document.createElement("script"),
                                    s0 = document.getElementsByTagName("script")[0];
                                s1.async = true;
                                s1.src = "https://embed.tawk.to/5fa664720a68960861bc9308/default";
                                s1.charset = "UTF-8";
                                s1.setAttribute("crossorigin", "*");
                                s0.parentNode.insertBefore(s1, s0);
                            })();
                        </script>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer-container">
                    @include('block.footer-container')
                </div>
                <div class="bottom-footer">
                    <div class="container bottom-to-top hb-animate-element">
                        <div class="footer-bottom col-sm-5">
                            <p>Powered By <a href="">OpenCart</a> Your Store &copy; 2022</p>
                        </div>
                        <div class="block-social col-sm-7">
                            <div class="footer-bottom-cms">
                                <aside id="footer-bottom">
                                    <div class="html-content">
                                        <div class="box-content">
                                            <div id="ttcmspaymentlogo" class="col-sm-3">
                                                <h5 class="toggle">Payment Methods</h5>
                                                <div id="ttpayment">
                                                    <div class="payment_logo_block">
                                                        <div class="payment-title">Accepted Payment Methods</div>
                                                        <ul class="payment-list list-unstyled">
                                                            <li class="google">
                                                                <a href="#"> <img src="image/catalog/demo/banners/google.png" alt="google" /></a>
                                                            </li>
                                                            <li class="maestro">
                                                                <a href="#"> <img src="image/catalog/demo/banners/maestro.png" alt="maestro" /></a>
                                                            </li>
                                                            <li class="mastercard">
                                                                <a href="#"> <img src="image/catalog/demo/banners/mastercard.png" alt="mastercard" /></a>
                                                            </li>
                                                            <li class="paypal">
                                                                <a href="#"> <img src="image/catalog/demo/banners/paypal.png" alt="paypal" /></a>
                                                            </li>
                                                            <li class="visa">
                                                                <a href="#"> <img src="image/catalog/demo/banners/visa.png" alt="visa" /></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="html-content">
                                        <div class="box-content">
                                            <div class="follow-us col-sm-3">
                                                <h5>Follow us</h5>
                                                <ul class="list-unstyled">
                                                    <li class="facebook">
                                                        <a href="#"><p>Facebook</p></a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a href="#"><p>Twitter</p></a>
                                                    </li>
                                                    <li class="youtube">
                                                        <a href="#"><p>YouTube</p></a>
                                                    </li>
                                                    <li class="googleplus">
                                                        <a href="#"><p>Google +</p></a>
                                                    </li>
                                                    <li class="pinterest">
                                                        <a href="#"><p>Pinterest</p></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script>
            <!--
            				var tt_live_search = {
            					selector: '#search input[name=\'search\']',
            					text_no_matches: 'There are no products to list in this category.',
            					height: '50px'
            				}

            				$(document).ready(function() {
            					var html = '';
            					html += '<div class="live-search">';
            					html += '	<ul>';
            					html += '	</ul>';
            					html += '<div class="result-text"></div>';
            					html += '</div>';

            					//$(tt_live_search.selector).parent().closest('div').after(html);
            					$(tt_live_search.selector).after(html);

            					$(tt_live_search.selector).autocomplete({
            						'source': function(request, response) {
            							var filter_name = $(tt_live_search.selector).val();
            							var cat_id = 0;
            							var module_tt_live_search_min_length = '1';
            							if (filter_name.length < module_tt_live_search_min_length) {
            								$('.live-search').css('display','none');
            							}
            							else{
            								var html = '';
            								html += '<li style="text-align: center;height:10px;">';
            								html +=	'<img class="loading" src="image/catalog/demo/banners/loading.gif" />';
            								html +=	'</li>';
            								$('.live-search ul').html(html);
            								$('.live-search').css('display','block');

            								$.ajax({
            									url: 'index.php?route=extension/module/tt_live_search&filter_name=' +  encodeURIComponent(filter_name),
            									dataType: 'json',
            									success: function(result) {
            										var products = result.products;
            										$('.live-search ul li').remove();
            										$('.result-text').html('');
            										if (!$.isEmptyObject(products)) {
            											var show_image = 1;
            											var show_price = 1;
            											var show_description = 0;
            											$('.result-text').html('<a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/search&amp;search='+filter_name+'" class="view-all-results">       View all results        ('+result.total+')</a>');

            											$.each(products, function(index,product) {
            												var html = '';

            												html += '<li>';
            												html += '<a href="' + product.url + '" title="' + product.name + '">';
            												if(product.image && show_image){
            													html += '	<div class="product-image col-sm-4"><img alt="' + product.name + '" src="' + product.image + '"></div>';
            												}
            												html += '<div class="search-description col-sm-8 col-xs-8">';
            												html += '	<div class="product-name">' + product.name ;
            												if(show_description){
            													html += '<p>' + product.extra_info + '</p>';
            												}
            												html += '</div>';
            												if(show_price){
            													if (product.special) {
            														html += '	<div class="product-price"><span class="price">' + product.special + '</span><span class="special">' + product.price + '</span></div>';
            													} else {
            														html += '	<div class="product-price"><span class="price">' + product.price + '</span></div>';
            													}
            												}
            												html += '</div>';
            												html += '<span style="clear:both"></span>';
            												html += '</a>';
            												html += '</li>';
            												$('.live-search ul').append(html);
            											});
            										} else {
            											var html = '';
            											html += '<li style="text-align: center;height:10px;">';
            											html +=	tt_live_search.text_no_matches;
            											html +=	'</li>';

            											$('.live-search ul').html(html);
            										}
            										$('.live-search').css('display','block');
            										return false;
            									}
            								});
            							}
            						},
            						'select': function(product) {
            							$(tt_live_search.selector).val(product.name);
            						}
            					});

            					$(document).bind( "mouseup touchend", function(e){
            					  var container = $('.live-search');
            					  if (!container.is(e.target) && container.has(e.target).length === 0)
            					  {
            					    container.hide();
            					  }
            					});
            				});
            			//-->
        </script>
    </body>
</html>
