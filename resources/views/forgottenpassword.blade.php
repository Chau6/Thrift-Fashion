<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Forgot Your Password?</title>
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
        <style>
            ::-webkit-scrollbar {
    width: 12px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
        </style>
    </head>
    <body class="account-forgotten">
        <div id="page">
            <header>
                <div class="header">
                    @include('block.header')
                </div>
            </header>
            <div class="header-content-title">
                <div style="background-image: url('image/catalog/demo/banners/breadcrumb-parallax.jpg'); background-position: 50% 78.1106%;" data-source-url="image/catalog/demo/banners/breadcrumb-parallax.jpg" class="parallex"></div>
            </div>
            <div id="account-forgotten" class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{route('client.homeindex')}}"><i class="material-icons">home</i></a>
                    </li>
                    <li><a href="{{route('client.account')}}">Account</a></li>
                    <li><a href="{{route('client.forgottenpassword')}}">Forgotten Password</a></li>
                </ul>
                <div class="row">
                    <div id="content" class="col-sm-12">
                        <h1>Forgot Your Password?</h1>
                        <p>Enter the e-mail address associated with your account. Click submit to have a password reset link e-mailed to you.</p>
                        <form action="{{route('client.login')}}" method="get" enctype="multipart/form-data" class="form-horizontal">
                            <fieldset>
                                <legend>Your E-Mail Address</legend>
                                <div class="form-group required">
                                    <label class="col-sm-2 control-label" for="input-email">Your email address</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" value="" placeholder="Your email address" id="input-email" class="form-control" />
                                    </div>
                                </div>
                            </fieldset>
                            <div class="buttons clearfix">
                                <div class="pull-left"><a href="{{route('client.login')}}" class="btn btn-default">Back</a></div>
                                <div class="pull-right">
                                    <input type="submit" value="Continue" class="btn btn-primary" />
                                </div>
                            </div>
                        </form>
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
            					text_no_matches: '',
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
