@extends('pages.admin.index')
    @section ('title', " - Blog létrehozás")

    @section('stylesheets')
    <link rel="stylesheet" href="{{asset('style/admin/assets/vendor/summernote/dist/summernote.css')}}"/>
    <link rel="stylesheet" href="{{asset('style/admin/assets/vendor/parsleyjs/css/parsley.css')}}">
    @endsection

@section('preload')
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('style/admin/assets/images/thumbnail.png')}}" width="48" height="48" alt="Mplify"></div>
        <p>Töltés...</p>
    </div>
</div>
<div class="overlay" style="display: none;"></div>
@endsection
@section('content')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>Blog létrehozás</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog létrehozás</li>
                        </ul>
                    </div>
                </div>
            </div>
            {!! Form::open(array('route'=>'blog.store', 'data-parsley-validate novalidate'))!!}
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="form-group">
                                {{ Form::text('title',null,array('class'=>'form-control', 'placeholder'=>'Blog címe','required', 'data-parsley-length'=>'[5,60]'))}}
                            </div>
                            {{-- <select class="form-control show-tick">
                                <option>Select Category</option>
                                <option>Web Design</option>
                                <option>Photography</option>
                                <option>Technology</option>
                                <option>Lifestyle</option>
                                <option>Sports</option>
                            </select> --}}
                            {{-- <div class="form-group m-t-20 m-b-20">
                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Maximális képfelbontás 750x450px.</small>
                            </div> --}}
                            <div id="body-errors"></div>
                            {{ form::textarea('body',null,array('id'=>'ckeditor'))}}
                            {{ form::submit('Új blog',array('class'=>'btn btn-block btn-primary m-t-20'))}}
                        </div>
                    </div>
                </div>            
            </div>
            {!! Form::close()!!}
        </div>
    </div>
@endsection
@section('scripts')
<!-- Javascript -->
<script src="{{asset('style/admin/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('style/admin/assets/bundles/vendorscripts.bundle.js')}}"></script>
{!! Html::script('style/admin/assets/vendor/parsleyjs/js/parsley.min.js')!!}
{!! Html::script('style/admin/assets/vendor/parsleyjs/i18n/hu.js')!!}
{!! Html::script('style/admin/assets/vendor/parsleyjs/i18n/hu.extra.js')!!}

<script src="{{asset('style/admin/assets/vendor/ckeditor/ckeditor.js')}}"></script> <!-- Ckeditor --> 

<script src="{{asset('style/admin/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('style/admin/assets/bundles/morrisscripts.bundle.js')}}"></script>
<script src="{{asset('style/admin/assets/js/pages/forms/editors.js')}}"></script>

@endsection
