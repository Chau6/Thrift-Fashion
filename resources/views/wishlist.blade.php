<!DOCTYPE html>
<!--[if IE]> <![endif]-->
<!--[if IE 8]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>My Wish List</title>
        <base href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/" />
        <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>
        <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400,400italic,500,500italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,400,400italic,500,500italic,700,700italic" rel="stylesheet" type="text/css" />

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

        <link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.css" rel="stylesheet" media="screen" />
        <link href="catalog/view/javascript/jquery/owl-carousel/owl.theme.default.min.css" rel="stylesheet" media="screen" />
        <link href="catalog/view/theme/OPC164_01/stylesheet/TemplateTrip/bootstrap.min.css" rel="stylesheet" media="screen" />
        <link href="catalog/view/theme/OPC164_01/stylesheet/stylesheet.css" rel="stylesheet" />
        <link href="catalog/view/theme/OPC164_01/stylesheet/TemplateTrip/ttblogstyle.css" rel="stylesheet" type="text/css" />
        <link href="catalog/view/theme/OPC164_01/stylesheet/TemplateTrip/newsletter.css" rel="stylesheet" type="text/css" />
        <link href="catalog/view/theme/OPC164_01/stylesheet/TemplateTrip/animate.css" rel="stylesheet" type="text/css" />
        <link href="catalog/view/theme/OPC164_01/stylesheet/TemplateTrip/ttcountdown.css" rel="stylesheet" type="text/css" />
        <link href="catalog/view/theme/OPC164_01/stylesheet/TemplateTrip/menu.css" rel="stylesheet" type="text/css" />
        <link href="catalog/view/theme/OPC164_01/stylesheet/TemplateTrip/lightbox.css" rel="stylesheet" type="text/css" />
        <script src="catalog/view/javascript/common.js"></script>

        <script src="catalog/view/javascript/TemplateTrip/addonScript.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/tt_quickview.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/inview.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/parallex.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/theia-sticky-sidebar.min.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/menu.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/ResizeSensor.min.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/lightbox-2.6.min.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/waypoints.min.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/bootstrap-notify.min.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/ttcountdown.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/backgroundVideo.js"></script>
        <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js"></script>

        <link href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/catalog/cart.png" rel="icon" />
        <script src="catalog/view/javascript/TemplateTrip/jquery.bpopup.min.js"></script>
        <script src="catalog/view/javascript/TemplateTrip/jquery.cookie.js"></script>
    </head>
    <body class="account-wishlist">
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
            <div id="account-wishlist" class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('client.homeindex')}}"><i class="material-icons">home</i></a>
                    </li>
                    <li><a href="{{route('client.account')}}">Account</a></li>
                    <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/wishlist">My Wish List</a></li>
                </ul>
                <div class="row">
                    <div id="content" class="col-sm-12">
                        <h2>My Wish List</h2>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center">Image</td>
                                    <td class="text-left">Product Name</td>
                                    <td class="text-left">Model</td>
                                    <td class="text-right">Stock</td>
                                    <td class="text-right">Unit Price</td>
                                    <td class="text-right">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <a href="">
                                            <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01-70x91.jpg" alt="aliquam quaerat voluptatem" title="aliquam quaerat voluptatem" />
                                        </a>
                                    </td>
                                    <td class="text-left"><a href="">aliquam quaerat voluptatem</a></td>
                                    <td class="text-left">Product 15</td>
                                    <td class="text-right">In Stock</td>
                                    <td class="text-right"><div class="price">$100.00</div></td>
                                    <td class="text-right">
                                        <button type="button" onclick="cart.add('42');" data-toggle="tooltip" title="Add to Cart" class="btn btn-primary"><i class="material-icons shopping-cart">shopping_cart</i></button>
                                        <a href="{{route('client.remove',['id'=>'product_compatible'])}}" data-toggle="tooltip" title="Remove" class="btn btn-danger">
                                            <i class="material-icons close-clear">clear</i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <div class="buttons clearfix">
                            <div class="pull-right"><a  class="btn btn-primary">Continue</a></div>
                        </div> --}}
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
            					text_no_matches: 'Your wish list is empty.',
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
