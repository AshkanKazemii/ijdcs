@extends("layouts.panel")


@section("css")
    <link rel="stylesheet" href="{{ asset('panel/vendors/bundle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/vendors/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/css/custom.css') }}" type="text/css">
	<link rel="shortcut icon" href="{{ asset('panel/media/image/favicon.png') }}">
@endsection


@section("content")

<div class="side-menu">
    <div class="side-menu-body">
        <ul>
            <li class="side-menu-divider">فهرست</li>
            <li><a class="active" href="{{ route('chiefeditor.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a href="{{ route('chiefeditor.submitted-articles-for-approval') }}"><i class="icon ti-home"></i> <span>مقالات ارسال شده برای تایید <span  class="btn btn-danger py-0 px-1">{{ $number_of_unverified_articles }}</span></span> </a></li>
            <li><a href="{{ route('chiefeditor.approved-articles') }}"><i class="icon ti-home"></i> <span>مقالات تایید شده (ارسال شده به داوران)</span> </a></li>
            
            <li><a href="{{ route('chiefeditor.articles-commented-by-referees') }}"><i class="icon ti-home"></i> <span>مقالات نظردهی شده توسط داوران</span> </a></li>
            

            <li><a href="{{ route('chiefeditor.published-articles') }}"><i class="icon ti-home"></i> <span>مقالات منتشر شده</span> </a></li>
            
            
            
        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="m-b-0">وضعیت مقالات  </h5>
                        </div>
                        <div class="card-controls">
                            <a href="{{ route('writer.status-articles') }}" class="js-card-refresh">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </div>

                        <div class="col-md-12">
                            @php
                            $translate_score = [
                                "good" => "خوب" , 
                                "rejection" => "رد" , 
                                "acceptable" => "قابل قبول" , 
                                "نظردهی نشده" => "نظردهی نشده"
                            ] ;

                            @endphp
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"> نظرات داوران درباره مقاله : ( {{ $comments[0]->article->title }} )</h5>
                                    <div class="accordion accordion-success custom-accordion">

                                        @foreach ($comments as $comment)

                                            <div class="accordion-row">
                                                <a href="#" class="accordion-header">
                                                    <span>{{ $comment->user->name_and_family }}</span>
                                                    <i class="accordion-status-icon close fa fa-plus"></i>
                                                    <i class="accordion-status-icon open fa fa-close"></i>
                                                </a>
                                                <div class="accordion-body">
                                                    <p>کیفیت کلی مقاله : {{ $translate_score[$comment->refereeOpinion->overall_quality] }}</p>
                                                    <p>نوآوری : {{ $translate_score[$comment->refereeOpinion->innovation] }}</p>
                                                    <p> کیفیت چکیده : {{ $translate_score[$comment->refereeOpinion->abstract_quality] }}</p>
                                                    <p>کیفیت منابع : {{ $translate_score[$comment->refereeOpinion->resources_quality] }}</p>
                                                    <p>اصول نوشتاری : {{ $translate_score[$comment->refereeOpinion->principles_writing] }}</p>
                                                    <p>کیفیت نتیجه گیری : {{ $translate_score[$comment->refereeOpinion->conclusion_quality] }}</p>
                                                    <p>کیفیت ارائه : {{ $translate_score[$comment->refereeOpinion->presentation_quality] }}</p>
                                                    <p>کیفیت بهره گیری : {{ $translate_score[$comment->refereeOpinion->utilization_quality] }}</p>
                                                    <p> توضیحات کلی : {{ $comment->refereeOpinion->general_description }}</p>
                                                    <h4><strong class="text-primary">نظر کلی : {{ $translate_score[$comment->refereeOpinion->general_opinion] }}</strong></h4>
                                                    
                                                    @if (!$comment->is_confirmation)
                                                        <form method="POST" action="{{ route('chiefeditor.Abstain-from-the-referee' , [$comment->article_id , $comment->user_id]) }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="text-danger">به هر دلیلی داور مورد نظر نظر خود را ارسال نکرده با فشردن دکمه زیر از طرف او میتوانید مقاله را تایید و به سردبیر ارسال کنید</label>
                                                                <input type="submit" class="form-control  btn-primary" value="تایید">
                                                            </div>
                                                        </form>
                                                    @endif
                                                    
                                                </div>
                                                
                                            </div>
                                        
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection




@section("js")
<script src="{{ asset('panel/vendors/bundle.js') }}"></script>

<script src="{{ asset('panel/vendors/charts/chart.min.js') }}"></script>
<script src="{{ asset('panel/vendors/charts/sparkline.min.js') }}"></script>
<script src="{{ asset('panel/vendors/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('panel/js/examples/charts.js') }}"></script>

<script src="{{ asset('panel/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('panel/js/examples/swiper.js') }}"></script>

<script src="{{ asset('panel/js/custom.js') }}"></script>
<script src="{{ asset('panel/js/app.js') }}"></script>
@endsection