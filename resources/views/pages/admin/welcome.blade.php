@extends('pages.admin.index')
  @section ('title', " - Bejelentkezés")

    @section('content')
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="mobile-logo"><a href="index.html"><img src="{{asset('style/admin/assets/images/logo-icon.svg')}}" alt="Mplify"></a></div>
                    <div class="auth-left">
                        <div class="left-top">
                            <a href="index.html">
                                <img src="{{asset('style/admin/assets/images/logo-icon.svg')}}" alt="Mplify">
                                <span>Mplify</span>
                            </a>
                        </div>
                        <div class="left-slider">
                            <img src="{{asset('style/admin/assets/images/login/1.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="auth-right">
                        <div class="right-top">
                            <ul class="list-unstyled clearfix d-flex">
                                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li><a href="javascript:void(0);">Help</a></li>
                                <li><a href="javascript:void(0);">Contact</a></li>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="header">
                                <p class="lead">Log in</p>
                            </div>
                            <div class="body">
                                <form class="form-auth-small" action="index.html">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Email</label>
                                        <input type="email" class="form-control" id="signin-email" value="" placeholder="User Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" id="signin-password" value="" placeholder="Password">
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="fancy-checkbox element-left">
                                            <input type="checkbox">
                                            <span>Remember me</span>
                                        </label>								
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                    <div class="bottom">
                                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                                        <span>Don't have an account? <a href="page-register.html">Register</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
    @endsection