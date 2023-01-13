
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
            <li><a class="active" href="{{ route('referee.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    @if(Session::exists("submission_article")) 
        <a class="btn btn-warning btn-block text-white">{{ Session::get("submission_article") }}</a>
        <br><br>
    @endif

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>فرم ثبت نظر</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('writer.index') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active" aria-current="page">فرم ثبت نظر</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"> نظردهی به مقاله {{ $article->title }}</h5>

                                    <div class="row">
                                    
                                        <div class="col-md-4">
                                            <p>کیفیت کلی مقاله : </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="good" id="overall_quality1" name="overall_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="overall_quality1">خوب</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="acceptable" id="overall_quality2" name="overall_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="overall_quality2">قابل قبول</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="rejection" id="overall_quality3" name="overall_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="overall_quality3">رد</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <p>نوآوری : </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="good" id="innovation1" name="innovation" class="custom-control-input">
                                                <label class="custom-control-label" for="innovation1">خوب</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="acceptable" id="innovation2" name="innovation" class="custom-control-input">
                                                <label class="custom-control-label" for="innovation2">قابل قبول</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="rejection" id="innovation3" name="innovation" class="custom-control-input">
                                                <label class="custom-control-label" for="innovation3">رد</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <p>کیفیت چکیده : </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="good" id="abstract_quality1" name="abstract_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="abstract_quality1">خوب</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="acceptable" id="abstract_quality2" name="abstract_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="abstract_quality2">قابل قبول</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="rejection" id="abstract_quality3" name="abstract_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="abstract_quality3">رد</label>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <hr>

                                    
                                    <div class="row">

                                        <div class="col-md-4">
                                            <p>کیفیت منابع : </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="good" id="resources_quality1" name="resources_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="resources_quality1">خوب</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="acceptable" id="resources_quality2" name="resources_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="resources_quality2">قابل قبول</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="rejection" id="resources_quality3" name="resources_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="resources_quality3">رد</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <p>اصول نوشتاری : </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="good" id="priciples_writing1" name="principles_writing" class="custom-control-input">
                                                <label class="custom-control-label" for="priciples_writing1">خوب</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="acceptable" id="priciples_writing2" name="principles_writing" class="custom-control-input">
                                                <label class="custom-control-label" for="priciples_writing2">قابل قبول</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="rejection" id="priciples_writing3" name="principles_writing" class="custom-control-input">
                                                <label class="custom-control-label" for="priciples_writing3">رد</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <p>کیفیت نتیجه گیری : </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="good" id="conclusion_quality1" name="conclusion_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="conclusion_quality1">خوب</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="acceptable" id="conclusion_quality2" name="conclusion_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="conclusion_quality2">قابل قبول</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="rejection" id="conclusion_quality3" name="conclusion_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="conclusion_quality3">رد</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>


                                    <div class="row">
                                    
                                        <div class="col-md-4">
                                            <p>کیفیت ارائه : </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="good" id="presentation_quality1" name="presentation_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="presentation_quality1">خوب</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="acceptable" id="presentation_quality2" name="presentation_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="presentation_quality2">قابل قبول</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="rejection" id="presentation_quality3" name="presentation_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="presentation_quality3">رد</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <p>کیفیت بهره گیری : </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="good" id="utilization_quality1" name="utilization_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="utilization_quality1">خوب</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="acceptable" id="utilization_quality2" name="utilization_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="utilization_quality2">قابل قبول</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="rejection" id="utilization_quality3" name="utilization_quality" class="custom-control-input">
                                                <label class="custom-control-label" for="utilization_quality3">رد</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <p>نظرکلی : </p>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="good" id="general_opinion1" name="general_opinion" class="custom-control-input">
                                                <label class="custom-control-label" for="general_opinion1">خوب</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="acceptable" id="general_opinion2" name="general_opinion" class="custom-control-input">
                                                <label class="custom-control-label" for="general_opinion2">قابل قبول</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" value="rejection" id="general_opinion3" name="general_opinion" class="custom-control-input">
                                                <label class="custom-control-label" for="general_opinion3">رد</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <hr>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea6">توضیحات کلی </label>
                                        <textarea class="form-control" name="general_description" id="exampleFormControlTextarea6" rows="3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success btn-lg btn-block" value="ثبت نظر">
                                    </div>
                                </div>
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