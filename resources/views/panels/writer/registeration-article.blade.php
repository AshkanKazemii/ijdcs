
@extends("layouts.panel")

@section("css")
    <link rel="stylesheet" href="{{ asset('panel/vendors/bundle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/css/custom.css') }}" type="text/css">
	<link rel="shortcut icon" href="{{ asset('panel/media/image/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('panel/vendors/tagsinput/bootstrap-tagsinput.css') }}" type="text/css">
@endsection

@section("content")

<div class="side-menu">
    <div class="side-menu-body">
        <ul>
            <li class="side-menu-divider">فهرست</li>
            <li><a href="{{ route('writer.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a class="active" href="{{ route('writer.registeration-article-page') }}"><i class="icon ti-clipboard"></i> <span>ثبت مقاله</span> </a></li>
            <li><a href="{{ route('writer.status-articles') }}"><i class="icon ti-clipboard"></i> <span>وضعیت مقالات من</span> </a></li>

        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    @if(Session::exists("submission_article")) 
        <a class="btn btn-success btn-block text-white">{{ Session::get("submission_article") }}</a>
        <br><br>
    @endif

    <div class="container-fluid">

        <div class="page-header">
            <div>
                <h3>فرم ثبت مقاله</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('writer.index') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active" aria-current="page">فرم ثبت مقاله</li>
                    </ol>
                </nav>
            </div>
            
        </div>
       
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">کنترل های فرم</h5>
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">عنوان مقاله</label>
                                <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" id="exampleFormControlInput1" >
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlInput2">زبان مقاله</label>
                                <input type="text" name="lang" class="@error('lang') is-invalid @enderror form-control" id="exampleFormControlInput2" >
                                @error('lang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">چکیده مقاله به زبان فارسی</label>
                                <textarea class="@error('fa_abstract') is-invalid @enderror form-control" name="fa_abstract" id="exampleFormControlTextarea3" rows="3"></textarea>
                                @error('fa_abstract')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea4">چکیده مقاله به زبان انگلیسی</label>
                                <textarea class="@error('en_abstract') is-invalid @enderror form-control" name="en_abstract" id="exampleFormControlTextarea4" rows="3"></textarea>
                                @error('en_abstract')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput5">منابع</label>
                                <input type="text" class="@error('resources') is-invalid @enderror form-control" name="resources" id="exampleFormControlInput5" >
                                @error('resources')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <h5 class="card-title">کلمات کلیدی مقاله</h5>
                                <input type="text" class="@error('keywords') is-invalid @enderror form-control tagsinput " name="keywords"  placeholder="برچسب ها" value="">
                                @error('keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlTextarea6">توضیحات کلی مقاله</label>
                                <textarea class="@error('description') is-invalid @enderror form-control" name="description" id="exampleFormControlTextarea6" rows="3"></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            

                            <div class="form-group">
                                <label for="exampleFormControlFile7">ورودی فایل مقاله</label>
                                <input type="file" name="file" class="@error('file') is-invalid @enderror form-control-file" id="exampleFormControlFile7">
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success btn-lg btn-block" value="ثبت مقاله">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


@section("js")

<script src="{{ asset('panel/vendors/bundle.js') }}"></script>
<script src="{{ asset('panel/js/custom.js') }}"></script>
<script src="{{ asset('panel/js/app.js') }}"></script>
<script src="{{ asset('panel/vendors/tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('panel/js/examples/tagsinput.js') }}"></script>
@endsection