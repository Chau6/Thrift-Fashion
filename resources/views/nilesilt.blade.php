<!DOCTYPE html>
<!--[if IE]> <![endif]-->
<!--[if IE 8]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
    <!--<![endif]-->
    <head>
        @include('block.head-extra')
    </head>
    <body class="product-category-20_26">
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
                    <div class="full-header">
                        <div class="header-left">
                            <div id="logo">
                                <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=common/home">
                                    <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/catalog/logo.jpg" title="Your Store" alt="Your Store" class="img-responsive" />
                                </a>
                            </div>
                        </div>
                        <div class="header-top-right">
                            <div id="top-links" class="nav pull-right">
                                <ul class="list-inline">
                                    <li class="account-nav dropdown header_user_info">
                                        <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/account" title="Account" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="material-icons user">perm_identity</i><span class="ttuserheading">Account</span><i class="material-icons expand-more">expand_more</i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                                            <li>
                                                <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/register"><i class="material-icons ma-user">perm_identity</i>Register</a>
                                            </li>
                                            <li>
                                                <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/login"><i class="material-icons">lock_outline</i>Login</a>
                                            </li>
                                            <li>
                                                <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/wishlist" id="wishlist-total" title="Wish List (0)">
                                                    <i class="material-icons icon-wishlist">favorite_border</i><span class="hidden-sm hidden-md">Wish List (0)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="ttsearch">
                                        <div id="search" class="input-group">
                                            <span class="ttsearch_button">
                                                <i class="material-icons icon-search">search</i>
                                                <i class="material-icons icon-close">clear</i>
                                            </span>
                                            <div class="ttsearchtoggle">
                                                <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-lg"><i class="material-icons icon-search">search</i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ttcart">
                                        <div id="cart" class="btn-group">
                                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                                <i class="material-icons shopping-cart">shopping_cart</i>
                                                <span id="cart-total">0</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right header-cart-toggle">
                                                <li class="cart-btn">
                                                    <i class="material-icons">close</i>
                                                </li>
                                                <li>
                                                    <p class="text-center">Your shopping cart is empty!</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-top-left">
                            <div class="header-left-cms">
								<aside id="header-left">
									<div class="main-category-list">
									   <div class="TT-panel-heading">
										  <span>menu</span>
										  <span class="icon"><i class="material-icons icon-menu">menu</i></span>
									   </div>
									   <div class="tt-menu horizontal-menu tt-menu-bar" id="tt-menu-9478">
										  <ul class="ul-top-items">
											 <li class="li-top-item ">
												<a class="a-top-link" href="{{route('client.homeindex')}}">
												<span>Home</span>
												</a>
											 </li>
											 
											 {{-- Peluntse --}}
											 <li class="li-top-item mega-menu">
											   <a class="a-top-link" href="{{route('client.product.petuntse',['id'=>'all_petuntse'])}}">
											   <span>Petuntse</span>
											   </a>
											   <div class="mega-menu-container sub-menu-container ">
												  <div class="col-sm-2 sub-item2-content" data-cols="2">
													 <a class="a-mega-second-link" href="{{route('client.product.nilesilt',['id'=>'all_petuntse_1'])}}">
														<h4><strong>Nile silt</strong></h4>
													 </a>
													 <div class="sub_item3-content">
														<a class="a-mega-third-link" href="{{route('client.product.geopolymer',['id'=>'all_petuntse_2'])}}">
														   <h5>Geopolymer</h5>
														</a>
														<a class="a-mega-third-link" href="{{route('client.product.lumicera',['id'=>'all_petuntse_3'])}}">
														   <h5>Lumicera</h5>
														</a>
														<a class="a-mega-third-link" href="{{route('client.product.sea_pottery',['id'=>'all_petuntse_4'])}}">
														   <h5>Sea pottery</h5>
														</a>
													 </div>
												  </div>
												  <div class="col-sm-2 sub-item2-content" data-cols="2">
													 <a class="a-mega-second-link" href="{{route('client.product.jesmonite',['id'=>'all_jesmonite'])}}">
														<h4><strong>Jesmonite</strong></h4>
													 </a>
													 <div class="sub_item3-content">
														<a class="a-mega-third-link" href="{{route('client.product.nilesilt',['id'=>'all_jesmonite_1'])}}">
														   <h5>Nile silt</h5>
														</a>
														<a class="a-mega-third-link" href="{{route('client.product.petuntse',['id'=>'all_jesmonite_2'])}}">
														   <h5>Petuntse</h5>
														</a>
														<a class="a-mega-third-link" href="{{route('client.product.pitchers',['id'=>'all_jesmonite_3'])}}">
														   <h5>Pitchers</h5>
														</a>
													 </div>
												  </div>
											   </div>
											</li>
					   
											 {{-- Jean --}}
											 <li class="li-top-item mega-menu">
											   <a class="a-top-link" href="{{route('client.product.jeans',['id'=>"all"])}}">
											   <span>Jeans</span>
											   </a>
											   <div class="flyout-menu-container sub-menu-container">
												  <ul class="ul-second-items">
													 <li class="li-second-items">
													   <a  href="{{route('client.product.jeans',['id'=>"geopolymer"])}}" class="a-second-link a-item">
														<span class="a-second-title">Geopolymer</span>
														</a>
													 </li>
													 <li class="li-second-items">
													   <a href="{{route('client.product.jeans',['id'=>"petuntse"])}}" class="a-second-link a-item">
														<span class="a-second-title">Petuntse</span>
														<i class="material-icons chevron-right">chevron_right</i>
														</a>
														<div class="flyout-third-items">
														   <ul class="ul-third-items">
															  <li class="li-third-items">
																<a href="{{route('client.product.jeans',['id'=>"bonechina"])}}" class="a-third-link">  <span class="a-third-title">Bone china</span></a>
															  </li>
														   </ul>
														</div>
													 </li>
													 <li class="li-second-items">
													   <a href="{{route('client.product.jeans',['id'=>"gilrs"])}}" class="a-second-link a-item">
														<span class="a-second-title">Gilrs</span>
														</a>
													 </li>
													 <li class="li-second-items">
													   <a href="{{route('client.product.jeans',['id'=>"kurti"])}}" class="a-second-link a-item">
														<span class="a-second-title">Kurti</span>
														</a>
													 </li>
												  </ul>
											   </div>
											</li>
					   
											 {{-- Dress --}}
											 <li class="li-top-item">
												<a class="a-top-link" href="{{route('client.product.carrier',['id'=>'all'])}}">
												<span>Carrier Bag</span>
												</a>
											 </li>
										  </ul>
									   </div>
									</div>
								 </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header-content-title">
                <div style="background-image: url('image/catalog/demo/banners/breadcrumb-parallax.jpg'); background-position: 50% 78.1106%;" data-source-url="image/catalog/demo/banners/breadcrumb-parallax.jpg" class="parallex"></div>
            </div>
            <div id="product-category" class="container product-category">
                <ul class="breadcrumb">
                    <li>
                        <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=common/home"><i class="material-icons">home</i></a>
                    </li>
                    <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26">Nile silt</a></li>
                </ul>
                <div class="row">
                    <aside id="column-left" class="col-sm-3 hidden-xs">
                        <div class="left-right-inner">
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
                                                <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=43">
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
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=43">perspiciatis unde omnis</a></h4>
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
                                                        onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=43')"
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
                                                <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=40">
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
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=40">voluptate velit esse</a></h4>
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
                                                        onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=40')"
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
                                                <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42">
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
                                                    <h4><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42">aliquam quaerat voluptatem</a></h4>
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
                                                        onclick="tt_quickview.ajaxView('https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42')"
                                                    >
                                                        <i class="material-icons quick_view_icon">visibility</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar panel panel-default information-list">
                                <div class="panel-heading">Information</div>
                                <div class="list-group">
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=4" class="list-group-item">About Us</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=6" class="list-group-item">Delivery Information</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=3" class="list-group-item">Privacy Policy</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=5" class="list-group-item">Terms &amp; Conditions</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/contact" class="list-group-item">Contact Us</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/sitemap" class="list-group-item">Site Map</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div id="content" class="col-sm-9">
                        <h1 class="category-name">Nile silt</h1>
                        <div class="category-description">
                            <div class="row">
                                <div class="col-sm-12 category-image">
                                    <div class="category-bg">
                                        <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/banners/category-image-960x300.jpg" alt="Nile silt" title="Nile silt" class="img-thumbnail" />
                                    </div>
                                </div>
                                <div class="block-description col-sm-12">
                                    <div class="category-list">
                                        <h3>Refine Search</h3>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <ul>
                                                    <li>
                                                        <div class="subcategory-image"></div>
                                                        <h5><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26_85">Geopolymer</a></h5>
                                                    </li>
                                                    <li>
                                                        <div class="subcategory-image"></div>
                                                        <h5><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26_60">Lumicera</a></h5>
                                                    </li>
                                                    <li>
                                                        <div class="subcategory-image"></div>
                                                        <h5><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26_59">Petuntse</a></h5>
                                                    </li>
                                                    <li>
                                                        <div class="subcategory-image"></div>
                                                        <h5><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/category&amp;path=20_26_61">Sea pottery</a></h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="category-compare"><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/compare" id="compare-total">Product Compare (0)</a></p>
                                </div>
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
                @include('block.footer')
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
