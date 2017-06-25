<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span><img alt="image" class="img-circle" src="{{url('img/profile_small.jpg')}}"/></span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Hello Vietnam</strong>
                            </span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">ABCDXYZ</a></li>
                        <li class="divider"></li>
                        <li><a href="#">ABCDXYZ</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ Navigation::isActiveRoute('home') }}">
                <a href="#">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">QR code</span>
                </a>
            </li>
            <li class="{{ Navigation::isActiveRoute('ABCD') }}">
                <a href="#">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">QR code</span>
                </a>
            </li>
        </ul>

    </div>
</nav>