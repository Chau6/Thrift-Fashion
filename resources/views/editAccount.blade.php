<style>
    legend {
        height: 450px;
        margin-left: 10px;
        background: url({{asset("images/background.jpg")}});
    }

    .account {
        margin-left: 21%;
    }

    .continue {
        margin-right: 5px;
    }

    h1 {
        position: relative;
        top: 40%;
        color: white !important;
        font-size: 100px !important;
        font-family: Helvetica;
        padding-left: 300px;
    }

    .pull-left {
        margin-left: 230px;
    }

    label {
        position: relative;
        right: 100px;
    }

    input {
        position: relative;
        right: 100px;
    }
</style>
@extends('master') @section('content')
<div class="row">
    <div id="content" class="col-sm-12">
        <h1 class="h1"></h1>
        <legend><h1 class="account">Information</h1></legend>
        <form action="{{route('client.logined')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-firstname">First Name </label>
                <div class="col-sm-10">
                    <input type="text" name="firstname" value="Phạm" placeholder="First Name" id="input-firstname" class="form-control" />
                </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="lastname" value="Lợi" placeholder="Last Name" id="input-lastname" class="form-control" />
                </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-email">Your email address</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="phamphucloi460@gmail.com" placeholder="Your email address" id="input-email" class="form-control" />
                </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                <div class="col-sm-10">
                    <input type="tel" name="telephone" value="0923845387" placeholder="Telephone" id="input-telephone" class="form-control" />
                </div>
            </div>
            <div class="buttons clearfix">
                <div class="pull-left"><a href="{{route('client.account')}}" class="btn btn-default">Back</a></div>
                <div class="pull-right">
                    <input type="submit" value="Continue" class="btn btn-primary continue" />
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

@endsection
