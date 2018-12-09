@extends('main')

  @section ('title', " - Főoldal")

  @section('content')
  <section class="blank">
    <h1>FŐOLDAL</h1>
  </section>
  @endsection

  @section ('scripts')
    <!-- vendor js -->
    <script src="{{ asset('plugins/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('plugins/popper/popper.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- theme js -->
    <script src="{{ asset('js/theme.min.js')}}"></script>
  @endsection