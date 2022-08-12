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
    <body class="product-category-20_26_85">
        <div id="page">
            <div class="header-top-cms">
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
                    <li><a href="{{route('client.product.jeans',['id'=>"geopolymer"])}}">Geopolymer</a></li>
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
                                                    <h4><a>perspiciatis unde omnis</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$8.00</span>
                                                        <span class="price-old">$14.00</span>
                                                        <span class="price-tax">Ex Tax: $5.00</span>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('43')">
                                                        <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
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
                                                    <h4><a>voluptate velit esse</a></h4>
                                                    <div class="price">
                                                        $123.20
                                                        <span class="price-tax">Ex Tax: $101.00</span>
                                                    </div>
                                                </div>
                                                <div class="button-group">
                                                    <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('40')">
                                                        <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
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
                                                    <h4><a>aliquam quaerat voluptatem</a></h4>
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
                                                        <i class="material-icons">add</i><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
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
                            {{-- <div class="sidebar panel panel-default information-list">
                                <div class="panel-heading">Information</div>
                                <div class="list-group">
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=4" class="list-group-item">About Us</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=6" class="list-group-item">Delivery Information</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=3" class="list-group-item">Privacy Policy</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/information&amp;information_id=5" class="list-group-item">Terms &amp; Conditions</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/contact" class="list-group-item">Contact Us</a>
                                    <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/sitemap" class="list-group-item">Site Map</a>
                                </div>
                            </div> --}}
                        </div>
                    </aside>
                    <div id="content" class="col-sm-9">
                        <h1 class="category-name">Geopolymer</h1>
                        <div class="category-description">
                            <div class="row"></div>
                        </div>

                        <p class="text-empty">Your shopping cart is empty!</p>
                        <div class="buttons">
                            <div class="pull-right"><a href="{{route('client.homeindex')}}" class="btn btn-primary">Continue</a></div>
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
