<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Femme Benediction ONG">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png')}}">
    <title>@yield('title')</title>
    <link href="#" rel="apple-touch-icon-precomposed">
    <link href="https://www.google-analytics.com/" rel="dns-prefetch">

    <!-- Fonts -->

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/node_modules/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <script>
        window.Laravel ={!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/spinners.css')}} " media="all">
    <link rel="stylesheet" href="{{asset('css/style.css')}} " media="all">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style-template.css')}} ">
    @yield('styles')

</head>
<body>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css')}} -->
<!-- ============================================================== -->
{{--<div class="preloader">--}}
{{--<div class="loader">--}}
{{--<div class="loader__figure"></div>--}}
{{--<p class="loader__label">ONG</p>--}}
{{--</div>--}}
{{--</div>--}}
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header -->
    <!-- ============================================================== -->
@include('header-footer-sidebar.header')
<!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="">
            <div class="default-margin"></div>

            @section('banner')
                <div class="banner" style=" background:url('@yield('banner-background')')  no-repeat ; height: 150px ">
                    <div class="layer">
                        <div class="container">
                            <div class="text-center section small ">
                                <h1 class="white-color uppercase"> @yield('banner-title') </h1>
                            </div>
                        </div>
                    </div>
                </div>
            @show

            @section('right-sidebar')
                <div class="section small">
                    <div class="container">
                        <div class="  formation ">
                            <div class="row text-center">
                                <div class="col-md-8">
                                    @yield('sidebar-content')
                                </div>

                                @section('right-sidebar-elements')
                                    <div class="col-md-4">
                                        @section('right-sidebar-element-contact')
                                            <div class="row right-sidebar">
                                                @include('frontend.include.contacts-min')
                                            </div>
                                        @show
                                        @section('sidebar-element-presentation')
                                            <div class="row hidden-xs hidden-sm right-sidebar ">
                                                @include('frontend.include.presentation')
                                            </div>
                                        @show
                                        @section('sidebar-element-mission')
                                            <div class="row hidden-xs hidden-sm right-sidebar">
                                                @include('frontend.include.mission-vision')
                                            </div>
                                        @show
                                    </div>
                                @show

                            </div>


                        </div>
                    </div>
                </div>
        @show

        <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
    @include('header-footer-sidebar.footer')
    <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
</div>

{{--@include('header-footer-sidebar.modal-form')--}}

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('assets/node_modules/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('assets/node_modules/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/node_modules/bootstrap/js/bootstrap.js')}}"></script>
<!-- My scripts -->
<script type="text/javascript" src="{{asset('js/scripts-template-frontend.js')}}"></script>

@yield('scripts')

</body>
</html>



