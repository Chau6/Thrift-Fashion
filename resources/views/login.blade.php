@extends('master') @section('content')

<style>
    .page-title {
        /* background: red; */
        height: 450px;
        background: url({{asset("images/background.jpg")}});
    }

    .well {
        height: 380px;
    }

    .a {
        margin-top: 140px;
    }

    .login {
        position: relative;
        bottom: 30px;
        margin-left: 630px;
    }
</style>

<div id="account-login" class="container">
    <ul class="breadcrumb">
        <li>
            <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=common/home"><i class="material-icons">home</i></a>
        </li>
        <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/account">Account</a></li>
        <li><a href="{{route('client.about')}}">Login</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h2 class="page-title" style="position: relative; right: 335px; width: 1900px;"></h2>
            <div class="row">
                {{--
                <h1>Login</h1>
                --}}
                <h2 class="login">Login</h2>
                <div class="col-sm-6">
                    <div class="well">
                        <h2>New Customer</h2>
                        <p><strong>Register</strong></p>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                        <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/register" class="btn btn-primary a">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="well">
                        <h2>Returning Customer</h2>
                        <p><strong>I am a returning customer</strong></p>
                        <form action="{{route('client.logined')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="control-label" for="input-email">Your email address</label>
                                <input type="text" name="email" value="" placeholder="Your email address" id="input-email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-password">Password</label>
                                <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                                <a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/forgotten">Forgotten Password</a>
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
