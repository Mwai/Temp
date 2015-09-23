@extends('admin.layout')
@section('title')
Dashboard
@stop
@section('content')

    <div id="content">

        <!-- BEGIN BLANK SECTION -->
        <section id="section">
            <div class="container-fluid">
                <div class="section-header" id="section-header">

                    <div class="card card-underline" id="menu-header">
                        <div class="card-head" id="menu-card">

                            <ul class="nav nav-tabs pull-right" id="nav-tabs" data-toggle="tabs">
                                <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <strong>My Dash</strong></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <strong>Messages</strong></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> <strong>Calendar</strong></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <strong>Settings</strong></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end .section-header -->
                <!--end .section-body -->
                <section id="cards-section">
                    <div class="section-body" id="section-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="card" id="profile-card">
                                    <div class="card-body"id="profile-card-body">
                                        <h3>{{ Auth::user()->last_name }}</h3>

                                        <img class="img-responsive user-img" src="/img/lo.jpg" alt="" />
                                    </div><!--end .card-body -->
                                    <div class="card-actionbar">
                                        <div class="card-actionbar-row" id="profile-bar">
                                            <a href="#" class="pull-left "><h4>Rating:<span>7</span>.5/10 </h4></a>
                                            <a href="#" class="pull-right stick-bottom-right">Edit Profile</a></button>
                                        </div>
                                    </div>
                                </div><!--end .card -->
                            </div> <!-- end gallery -->
                            <div class="col-md-6 col-sm-6">
                                <div class="card" id="updates-card">
                                    <div class="card-head">
                                        <header>Updates <span class="badge style-danger hidden-md hidden-lg">1</span></header>
                                        <div class="tools">
                                            <div class="btn-group">
                                                <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                                                <a class="btn btn-icon-toggle btn-collapse hidden-md hidden-lg"><i class="fa fa-angle-down"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body" id="updates-card-body">
                                        <div class="alert alert-success alert-callout alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong>Setup for ABC...</strong>
                                            <a href="#" class="alert-link"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>  View Event</a>
                                        </div>
                                        <div class="alert alert-success alert-callout alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong>Upcoming event for XYZ..</strong>
                                            <a href="#" class="alert-link"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>  View Event</a>
                                        </div>
                                    </div><!--end .card-body -->
                                </div><!--end .card -->
                            </div> <!-- end gallery -->
                            <div class="col-md-3 col-sm-3">
                                <div class="card" id="notification-card">
                                    <div class="card-head">
                                        <header>Notifications <span class="badge style-danger hidden-md hidden-lg">1</span></header>
                                        <div class="tools">
                                            <div class="btn-group">
                                                <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                                                <a class="btn btn-icon-toggle btn-collapse hidden-md hidden-lg"><i class="fa fa-angle-down"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body hidden-xs" id="more">
                                        <ul class="list-group notifs">
                                            <li class="list-group-item"> Profile: <span>30% complete</span> <div class="progress" id="progress"><div class="progress-bar progress-bar-success aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 30%""></div></div></li>
                                    <li class="list-group-item"><span class="glyphicon glyphicon-info-sign"></span>Check your updated settings</li>
                                    </ul>
                                    <a href="#">View all Notifications <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a>
                                </div>
                            </div><!--end .card -->
                        </div> <!-- end gallery -->
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="card" id="notification-card">
                                <div class="card-head">
                                    <header>Gallery <span class="badge style-danger hidden-md hidden-lg">1</span></header>
                                    <div class="tools">
                                        <div class="btn-group">
                                            <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                                            <a class="btn btn-icon-toggle btn-collapse hidden-md hidden-lg"><i class="fa fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                                    <div class="card-body">
                                    @if ($galleries->count() > 0)
                                

                                    @foreach ($galleries as $gallery)
                                    <h4>{{$gallery->name}}</h4>
                                    <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

                                        @foreach ($gallery->images as $image)
                                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                            <a href="{{url($image->file_path)}}" itemprop="contentUrl" data-size="1024x1024">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <img src="{{url('gallery/images/thumbs/' .$image->file_name)}}" itemprop="thumbnail" alt="Image description" />
                                            </a>
                                            <figcaption itemprop="caption description">Image caption 2.1</figcaption>
                                        </figure>
                                        @endforeach
                                    </div>
                                    @endforeach
                                    <!-- Root element of PhotoSwipe. Must have class pswp. -->
                                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                        <!-- Background of PhotoSwipe.
                                             It's a separate element, as animating opacity is faster than rgba(). -->
                                        <div class="pswp__bg"></div>

                                        <!-- Slides wrapper with overflow:hidden. -->
                                        <div class="pswp__scroll-wrap">

                                            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                            <div class="pswp__container">
                                                <div class="pswp__item"></div>
                                                <div class="pswp__item"></div>
                                                <div class="pswp__item"></div>
                                            </div>

                                            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                            <div class="pswp__ui pswp__ui--hidden">

                                                <div class="pswp__top-bar">

                                                    <!--  Controls are self-explanatory. Order can be changed. -->

                                                    <div class="pswp__counter"></div>

                                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                                    <button class="pswp__button pswp__button--share" title="Share"></button>

                                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                                    <!-- element will get class pswp__preloader--active when preloader is running -->
                                                    <div class="pswp__preloader">
                                                        <div class="pswp__preloader__icn">
                                                            <div class="pswp__preloader__cut">
                                                                <div class="pswp__preloader__donut"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                    <div class="pswp__share-tooltip"></div>
                                                </div>

                                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                                </button>

                                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                                </button>

                                                <div class="pswp__caption">
                                                    <div class="pswp__caption__center"></div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                @endif          
                                <a href="{{url('gallery/list')}}">Manage galleries <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a>
                                </div>
                                
                            </div><!--end .card -->
                        </div> <!-- end gallery -->
                        <div class="col-md-5 col-sm-5">
                            <div class="card" id="notification-card">
                                <div class="card-head">
                                    <header>Messages <span class="badge style-danger hidden-md hidden-lg">1</span></header>
                                    <div class="tools">
                                        <div class="btn-group">
                                            <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                                            <a class="btn btn-icon-toggle btn-collapse hidden-md hidden-lg"><i class="fa fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-comments">
                                        <li>
                                            <div class="card style-default-light message-unread">
                                                <div class="comment-avatar"><i class="glyphicon glyphicon-user opacity-50"></i></div>
                                                <div class="card-body">
                                                    <h4 class="comment-title">John Doe <small>20/06/2013 at 4:02 pm</small></h4>
                                                    <a class="btn btn-icon-toggle btn-close stick-top-right"><i class="md md-close"></i></a>
                                                    <a class="btn btn-flat-dark  btn-sm stick-bottom-right" href="#">Reply <span class="glyphicon glyphicon-share-alt"></span></a>

                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="card style-default-light" id="message-box">
                                                <div class="comment-avatar"><i class="glyphicon glyphicon-user opacity-50"></i></div>
                                                <div class="card-body">
                                                    <h4 class="comment-title">Jane Doe <small>20/06/2013 at 4:38 pm</small></h4>
                                                    <a class="btn btn-icon-toggle btn-close stick-top-right"><i class="md md-close"></i></a>
                                                    <a class="btn btn-flat-dark btn-sm stick-bottom-right" href="#"> Reply <span class="glyphicon glyphicon-share-alt"></span></a>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#">View all Messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div> <!-- end gallery -->
                    </div>
            </div>
        </section>
    </div>
    </section>

    <!-- BEGIN BLANK SECTION -->
    </div><!--end #content-->
@stop