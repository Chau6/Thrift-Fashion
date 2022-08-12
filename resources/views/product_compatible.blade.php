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
        <title>Product Comparison</title>
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
    <body class="product-compare">
        <div id="page">
            <div class="header-top-cms">

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
                                                <a href="{{route('client.wishlist',['id'=>'order'])}}" id="wishlist-total" title="Wish List (1)">
                                                    <i class="material-icons icon-wishlist">favorite_border</i><span class="hidden-sm hidden-md">Wish List (1)</span>
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
            <div id="product-compare" class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('client.homeindex')}}"><i class="material-icons">home</i></a>
                    </li>
                    <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/compare">Product Comparison</a></li>
                </ul>
                <div class="row">
                    <div id="content" class="col-sm-12">
                        <h1>Product Comparison</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td colspan="2"><strong>Product Details</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Product</td>
                                    <td>
                                        <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=product/product&amp;product_id=42"><strong>aliquam quaerat voluptatem</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td class="text-center table-product-image">
                                        <img
                                            src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/demo/product/01-371x482.jpg"
                                            alt="aliquam quaerat voluptatem"
                                            title="aliquam quaerat voluptatem"
                                            class="img-thumbnail"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td class="price">$122.00</td>
                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td>Product 15</td>
                                </tr>
                                <tr>
                                    <td>Brands</td>
                                    <td>Apple</td>
                                </tr>
                                <tr>
                                    <td>Availability</td>
                                    <td>In Stock</td>
                                </tr>
                                <tr>
                                    <td>Rating</td>
                                    <td class="rating">
                                        <span class="fa fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        Based on 1 reviews.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Summary</td>
                                    <td class="description">
                                        Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Susp..
                                    </td>
                                </tr>
                                <tr>
                                    <td>Weight</td>
                                    <td>12.50kg</td>
                                </tr>
                                <tr>
                                    <td>Dimensions (L x W x H)</td>
                                    <td>1.00cm x 2.00cm x 3.00cm</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <td colspan="2"><strong>Processor</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Clockspeed</td>
                                    <td>100mhz</td>
                                </tr>
                            </tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <a href="{{route('client.shopping_cart.details',['id'=>'all'])}}"><input type="button" value="Add to Cart" class="btn btn-primary btn-block"/></a>
                                    <button class="btn btn-primary btn-wishlist" type="button" data-toggle="tooltip" onclick="wishlist.add('42');"><i class="material-icons icon-favorite">favorite</i></button>
                                    <a href="{{route('client.remove',['id'=>'product_compatible'])}}" class="btn btn-danger btn-block">Remove</a>
                                </td>
                            </tr>
                        </table>
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
                            <p>Powered By <a href="https://www.opencart.com">OpenCart</a> Your Store &copy; 2022</p>
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
            					text_no_matches: 'You have not chosen any products to compare.',
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
