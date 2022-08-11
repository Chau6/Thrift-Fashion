@extends('master')

<style>
    div .parallex{
        padding-top: 1000px;
    }
</style>

@section('content')
<div class="header-content-title">
</div>
<div id="information-contact" class="container">
    <ul class="breadcrumb">
        <li>
            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=common/home"><i class="material-icons">home</i></a>
        </li>
        <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/contact">Contact Us</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Contact Us</h1>
            <h3>Our Location</h3>
            <div class="panel panel-default contact-location">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-3 store-image">
                            <img src="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/image/cache/catalog/opc-storefront-570x380.jpg" alt="Your Store" title="Your Store" class="img-thumbnail" />
                        </div>
                        <div class="col-sm-3 store-address">
                            <div class="location-title"><i class="material-icons home-icon">home</i> Your Store</div>
                            <address class="location-detail">
                                Webzeel Services,<br />
                                4030, Central Bazar,<br />
                                Varachha Road,Surat
                            </address>
                            <a href="https://maps.google.com/maps?q=21.227628%2C72.8631923&hl=en-gb&t=m&z=15" target="_blank" class="btn btn-info"> <i class="material-icons location-on">location_on</i> View Google Map</a>
                        </div>
                        <div class="col-sm-3 store-contact">
                            <div class="location-title"><i class="material-icons icon-phone">phone</i> Telephone</div>
                            <div class="location-detail">123456789</div>
                            <div class="location-title"><i class="material-icons present-to-all">present_to_all</i> Fax</div>
                            <div class="location-detail">(000)-0000-000</div>
                        </div>
                        <div class="col-sm-3 store-status">
                            <div class="location-title"><i class="material-icons access-time">access_time</i> Opening Times</div>
                            <div class="location-detail">
                                Monday To Saturday<br />
                                9:00AM to 7:00PM
                            </div>
                            <div class="location-title"><i class="material-icons mode-comment">mode_comment</i> Comments</div>
                            <div class="location-detail">Demo Comment Description from Store Owners.</div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=information/contact" method="post" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>
                    <legend>Contact Us</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="Khưu" id="input-name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">Your email address</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" value="khuunhattin13@gmail.com" id="input-email" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
                        <div class="col-sm-10">
                            <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">
                        <input class="btn btn-primary" type="submit" value="Submit" />
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
@endsection

@section('js')
<script>
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
</script>
@endsection