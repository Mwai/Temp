<!DOCTYPE html>
<html>
<head>

    <title>{{ config('site.title') }} Vendor</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="/css/theme-default/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="/css/custom.css" />
    <link type="text/css" rel="stylesheet" href="/css/theme-default/materialadmin.css" />
    <link type="text/css" rel="stylesheet" href="/css/theme-default/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/theme-default/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="/css/default-skin.css">
    <link rel="stylesheet" href="/css/photoswipe.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" />


    @yield('styles')
</head>
<body>

<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand" >
                    <div class="brand-holder">
                        @if (Auth::guest())
                            <a href="#">
                                <img class"img-responsive" src="/img/logo-pink.png" alt="Blissful" />
                            </a>
                        @else
                            <a href="#">
                                <img class"img-responsive" src="/img/logo-pink.png" alt="Blissful" /> Vendor
                            </a>
                        @endif

                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        @include('admin.partials.navbar')
                <!--end #header-navbar-collapse -->
    </div>
</header>
@yield('content')
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<script src="/js/response.min.js"></script>
<script src="/js/book.js"></script>
<script src="/js/photoswipe.min.js"></script>
<script src="/js/photoswipe-ui-default.min.js"></script>
<script src="/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="/js/libs/spin.js/spin.min.js"></script>
<script src="/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="/js/core/source/App.js"></script>
<script src="/js/core/source/AppNavigation.js"></script>
<script src="/js/core/source/AppOffcanvas.js"></script>
<script src="/js/core/source/AppCard.js"></script>
<script src="/js/core/source/AppForm.js"></script>
<script src="/js/core/source/AppNavSearch.js"></script>
<script src="/js/core/source/AppVendor.js"></script>
<script src="/js/core/demo/Demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js"></script>

@yield('scripts')

</body>
</html>
