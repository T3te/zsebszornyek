@extends('main')

  @section ('title', " - Blog létrehozás")
  @section ('stylesheet')
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/switchery/switchery.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/flatpickr/flatpickr.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  @endsection
  @section('content')

  <!-- main -->
  <section class="breadcrumbs">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/admin">Admin</a></li>
        <li><a href="/admin/blog">Blog</a></li>
        <li class="active">Blog létrehozás</li>
      </ol>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#blog" aria-controls="blog" role="tab" data-toggle="tab">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#beallitasok" aria-controls="beallitasok" role="tab" data-toggle="tab">Beállítások</a></li>
          </ul>

          <form class="tab-content p-t-20">
            <div class="tab-pane active" id="blog" role="tabpanel">
              <!-- form -->
              <div class="form-group">
                <label for="title">Blog címe</label>
                <input type="text" class="form-control" id="title" placeholder="Blog címe">
                <small class="form-text">(max 50 karakter).</small>
              </div>
              <div class="form-group">
                  <label>Upload Image</label>
                  <div class="input-group">
                      <span class="input-group-btn">
                              Browse… <input type="file" id="imgInp">
                      </span>
                  </div>
                  <img id='img-upload'/>
                  <small class="form-text">(750x450 px).</small>
              </div>
              <div class="form-group">
                <label for="description">Meta Description</label>
                <input type="text" class="form-control" id="description" placeholder="Description">
                <small class="form-text">(max 165 karakter).</small>
              </div>
              <div class="form-group">
                <label for="select">Kategória:</label>
                <select id="select" class="select2 form-control" multiple="multiple">
                    <option value="teszt-1" selected>Teszt 1</option>
                    <option value="teszt-2">Teszt 2</option>
                    <option value="teszt-3">Teszt 3</option>
                    <option value="teszt-4">Teszt 4</option>
                    <option value="teszt-5">Teszt 5</option>
                </select>
                <small class="form-text">Több kategória is kiválasztható.</small>
              </div>
              <div class="form-group m-t-25">
                <div id="summernote"></div>
              </div>
            </div>

            <div class="tab-pane" id="beallitasok" role="tabpanel">
              <div class="form-group row">
                <div class="col-6">
                  <label for="date">Későbbi közzététel:</label>
                  <input type="text" class="form-control flatpickr flatpickr-input active" id="date" placeholder="Válasz dátumot">
                </div>
              </div>
            </div>
            <div class="m-t-30">
              <button class="btn btn-primary btn-rounded btn-shadow float-right" type="submit" name="save">Kész</button>
            </div>
          </form>
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
    <script src="{{ asset('js/imgupload.js')}}"></script>
	<script src="{{ asset('plugins/select2/js/select2.min.js')}}"></script>
	<script src="{{ asset('plugins/summernote/summernote-bs4.js')}}"></script>
	<script src="{{ asset('plugins/flatpickr/flatpickr.min.js')}}"></script>
	<script type="text/javascript">
		(function($) {
			"use strict";
			$('#summernote').summernote({
				height: 200,
				styleTags: ['h1', 'h2', 'h3', 'h4', 'h5', 'h6']
			});
			$(".flatpickr").flatpickr();
			$('.select2').select2({
				placeholder: "Válasz kategóriát"
			});
		})(jQuery);
	</script>
  @endsection