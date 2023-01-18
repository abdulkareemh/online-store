<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> @yield('title') |  eCommerce </title>
    

    @include('layouts_main.head-css')
</head>

@section('body')
    <!-- <body data-sidebar="dark"> -->
@show

   <div id="hero_area">
        @include('layouts_main.navbar')
        @include('layouts_main.search')

   </div>
        <div>
        @yield('content')
        
         </div>
         @include('layouts_main.footer')
        <!-- end main content-->
    
    <!-- END layout-wrapper -->

    @include('layouts_main.js')
</body>

</html>
