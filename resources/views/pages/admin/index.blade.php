@extends('main')

  @section ('title', " - Admin bejelentkezés")

  @section('content')

  <!-- main -->
  <section class="bg-image bg-image-sm" style="background-image: url('img/bg/bg-login.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-4 mx-auto">
          <div class="card m-b-0">
            <div class="card-header">
              <h4 class="card-title"><i class="fa fa-sign-in"></i>Bejelentkezés</h4>
            </div>
            <div class="card-block">
              <form action="profile.html">
                <div class="form-group input-icon-left m-b-10">
                  <i class="fa fa-user"></i>
                  <input type="email" class="form-control form-control-secondary" placeholder="Felhasználónév">
                </div>
                <div class="form-group input-icon-left m-b-15">
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control form-control-secondary" placeholder="Jelszó">
                </div>
                <label class="custom-control custom-checkbox custom-checkbox-primary">
                <input type="checkbox" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Emlékezzen rám</span>
              </label>
                <button type="submit" class="btn btn-primary btn-block m-t-10">Bejelentkezés <i class="fa fa-sign-in"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /main -->

  @endsection

  @section ('scripts')
    <!-- vendor js -->
    <script src="{{ asset('plugins/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('plugins/popper/popper.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- theme js -->
    <script src="{{ asset('js/theme.min.js')}}"></script>
  @endsection