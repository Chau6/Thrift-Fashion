@extends('master') @section('content')
<style>
    .target {
        position: relative;
        bottom: 20px;
        height: 450px;
        background: url({{asset("images/background.jpg")}});
    }

    h1.page-title {
        position: relative;
        top: 200px;
        font-size: 150px !important;
        /* color: red; */
        z-index: 1;
    }
</style>
<div id="content" class="col-sm-12">
    <h1 class="page-title">My Account</h1>
    <h1 class="target"></h1>
    <div class="a-link-list">
        <div class="a-link-heading"><h2>My Account</h2></div>
        <div class="a-link-content">
            <ul class="list-unstyled">
                <li><a href="{{route('client.editAccout')}}">Edit your account information</a></li>
                <li><a href="{{route('client.changePassword')}}">Change your password</a></li>
            </ul>
        </div>
    </div>
</div>
{{--
<div class="a-link-list">
    <div class="a-link-heading"><h2>My Affiliate Account</h2></div>
    <div class="a-link-content">
        <ul class="list-unstyled">
            <li><a href="https://opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/index.php?route=account/affiliate/add">Register for an affiliate account</a></li>
        </ul>
    </div>
</div>
--}} {{--
<div class="a-link-list">
    <div class="a-link-heading"><h2>Newsletter</h2></div>
    <div class="a-link-content">
        <ul class="list-unstyled">
            <li><a href="{{route('client.history_order')}}">Newsletter</a></li>
        </ul>
    </div>
</div>
--}} @endsection
