
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        @include('block.head_css_script')
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

    <body class="common-home">
        <div id="page">
            <header>
                <div class="header">
                    @include('block.header')
                </div>
            </header>

            @yield('content')

            <footer>
                @include('block.footer')
            </footer>
        </div>
        @include('block.script_footer') @yield('js')
    </body>
    <!-- Mirrored from opencart.templatetrip.com/OPC06/OPC164_peter/OPC01/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Aug 2022 05:02:41 GMT -->
</html>
