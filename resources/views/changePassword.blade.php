<style>
    legend {
        height: 450px;
        margin-left: 10px;
        background: url({{asset("images/background.jpg")}});
    }

    .account {
        margin-left: 20px;
    }

    .continue {
        margin-right: 15px;
    }

    label {
        position: relative;
        right: 80px;
    }

    input {
        position: relative;
        right: 80px;
    }

    .input {
        margin-right: 5px;
    }

    .pull-left {
        margin-left: 250px;
    }

    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
    }
</style>
@extends('master') @section('content')

<div class="row">
    <div id="content" class="col-sm-12">
        <form action="{{route('client.logined')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf {{--
            <fieldset>
                --}}
                <legend></legend>
                <h1>Change Password</h1>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-password">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                    </div>
                </div>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                    <div class="col-sm-10">
                        <input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control" />
                    </div>
                </div>
                {{--
            </fieldset>
            --}}
            <div class="buttons clearfix">
                <div class="pull-left"><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/account" class="btn btn-default">Back</a></div>
                <div class="pull-right">
                    <input type="submit" value="Continue" class="btn btn-primary input" />
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
