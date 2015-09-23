
<div class="headerbar-right">
    <ul class="header-nav">
        @if(Request::url() === '/auth/register')
            <li><a href="/auth/login">Login</span></a></li>
        @elseif (Auth::guest())
            <li><a href="/auth/register"><span class="text-lg text-bold text-primary">Register</span></a></li>
    </ul>
    @else
        <ul class="header-nav header-nav-options">
            <li>
                <!-- Search form -->
                <form class="navbar-search" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                    </div>
                    <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                </form>
            </li>
            <li class="dropdown hidden-xs">
                <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                    <i class="fa fa-bell icon-tilt"></i><sup class="badge style-danger">4</sup>
                </a>
                <ul class="dropdown-menu animation-expand">
                    <li class="dropdown-header">Today's messages</li>
                    <li>
                        <a class="alert alert-callout alert-warning" href="javascript:void(0);">
                            <img class="pull-right img-circle dropdown-avatar" src="/img/lo.jpg" alt="" />
                            <strong>Client</strong><br/>
                            <small>Message abcdef</small>
                        </a>
                    </li>
                    <li>
                        <a class="alert alert-callout alert-info" href="javascript:void(0);">
                            <img class="pull-right img-circle dropdown-avatar" src="/img/lo.jpg" alt="" />
                            <strong>Client</strong><br/>
                            <small>Reviewing last changes...</small>
                        </a>
                    </li>
                    <li class="dropdown-header">Options</li>
                    <li><a href="#">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                </ul><!--end .dropdown-menu -->
            </li><!--end .dropdown -->
        </ul><!--end .header-nav-options -->
        <ul class="header-nav header-nav-profile">
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                    <img src="/img/lo.jpg" alt="" />
                                <span class="profile-info">
                                    {{ Auth::user()->last_name }}
                                    <small>Vendor</small>
                                </span>
                </a>
                <ul class="dropdown-menu animation-dock">
                    <li class="dropdown-header">Config</li>
                    @if (Auth::check())
                        <li @if (Request::is('profile*')) class="active" @endif>
                            <a href="/profile">My Profile</a>
                        </li>
                        <li @if (Request::is('admin/profile*')) class="active" @endif>
                            <a href="/admin/tag">Settings</a>
                        </li>
                    @endif
                    <li class="divider"></li>
                    <li><a href="/auth/logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                </ul><!--end .dropdown-menu -->
            </li><!--end .dropdown -->
        </ul><!--end .header-nav-profile -->
</div>
@endif