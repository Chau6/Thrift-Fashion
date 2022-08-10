<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.block.head')
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('admin.block.aside')

                @include('admin.block.top_nav')

                @yield('content')

                @include('admin.block.footer')
            </div>
        </div>

        @include('admin.block.script')
    </body>
</html>
