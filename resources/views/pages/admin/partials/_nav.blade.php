<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-brand">
            <a href="index.html">
                <img src="{{asset('style/admin/assets/images/tz-logo-icon.svg')}}" alt="TZ Logo" class="img-responsive logo">
                <span class="name">admin</span>
            </a>
        </div>

        <div class="navbar-right">
            <ul class="list-unstyled clearfix mb-0">
                <li>
                    <div class="navbar-btn btn-toggle-show">
                        <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>
                    <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                </li>
                <li>
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                                <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <img class="rounded-circle" src="{{asset('style/admin/assets/images/user-small.png')}}" width="30" alt="">
                                </a>
                                <div class="dropdown-menu animated flipInY user-profile">
                                    <div class="d-flex p-3 align-items-center">
                                        <div class="drop-left m-r-10">
                                            <img src="{{asset('style/admin/assets/images/user-small.png')}}" class="rounded" width="50" alt="">
                                        </div>
                                        <div class="drop-right">
                                            <h4>Felhasználó neve</h4>
                                            <p class="user-name">teszt@email.hu</p>
                                        </div>
                                    </div>
                                    <div class="m-t-10 p-3 drop-list">
                                        <ul class="list-unstyled">
                                            <li><a href="page-profile.html"><i class="icon-user"></i>Profil</a></li>
                                                <li><a href="javascript:void(0);"><i class="icon-settings"></i>Beállítások</a></li>
                                            <li class="divider"></li>
                                            <li><a href="page-login.html"><i class="icon-power"></i>Kijelentkezés</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="leftsidebar" class="sidebar">
    <div class="sidebar-scroll">
        <nav id="leftsidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="heading">Fő beállítások</li>
                <li><a href="index.html"><i class="icon-home"></i><span>Irányítópult</span></a></li>
                <li class="active">
                    <a href="#Blog" class="has-arrow"><i class="icon-globe"></i><span>Blog</span></a>
                    <ul>
                        <li><a href="blog-dashboard.html">Blog irányítópult</a></li>
                        <li class="active"><a href="blog-post.html">Blog létrehozás</a></li>
                        <li><a href="blog-list.html">Blog lista</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
