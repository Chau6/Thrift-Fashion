<style>
    h1 {
        background: url({{asset("background.jpg")}});
    }
</style>

@extends('master') @section('content')
<div class="header-content-title">
    <div style="background-image: url('image/catalog/demo/banners/breadcrumb-parallax.jpg'); background-position: 50% 78.1106%;" data-source-url="image/catalog/demo/banners/breadcrumb-parallax.jpg" class="parallex"></div>
</div>
<div id="account-newsletter" class="container">
    <ul class="breadcrumb">
        <li>
            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=common/home"><i class="material-icons">home</i></a>
        </li>
        <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/account">Account</a></li>
        <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/newsletter">Newsletter</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Newsletter Subscription</h1>
            <form action="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/newsletter" method="post" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Subscribe</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <h1></h1>
                                <input type="radio" name="newsletter" value="1" checked="checked" />
                                Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="newsletter" value="0" />
                                No
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons clearfix">
                    <div class="pull-left"><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/account" class="btn btn-default">Back</a></div>
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
@endsection
