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

        <div class="page-header">
            <div>
                <h3>داشبورد</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('chiefeditor.index') }}">داشبورد</a></li>

                    </ol>
                </nav>
            </div>
            
        </div>
       

        <div class="row">
            <div class="col-md-3">

                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-block icon-block-xl m-b-20 bg-info-gradient icon-block-floating">
                            <i class="fa fa-user-o"></i>
                        </div>
						<h3 class="font-weight-800 primary-font text-primary">{{ $number_of_all_articles }}</h3>
                        <p class="text-primary">مجموع  کل مقالات نوشته شده</p>
                    </div>
                </div>

            </div>
            
            <div class="col-md-3">

                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-block icon-block-xl m-b-20 bg-success-gradient icon-block-floating">
                            <i class="fa fa-smile-o"></i>
                        </div>
						<h3 class="font-weight-800 primary-font text-success">{{ $number_of_all_published_articles }}</h3>
                        <p class="text-success">مقالات منتشر شده</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">

                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-block icon-block-xl m-b-20 bg-danger-gradient icon-block-floating">
                            <i class="fa fa-star"></i>
                        </div>
						<h3 class="font-weight-800 primary-font text-danger">{{ $number_of_unverified_articles }}</h3>
                        <p class="text-danger">مقالات تایید نشده توسط سردبیر</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">

                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-block icon-block-xl m-b-20 bg-warning-gradient icon-block-floating">
                            <i class="fa fa-bar-chart"></i>
                        </div>
						<h3 class="font-weight-800 primary-font text-warning">{{ $articles_awaiting_referee_approval }}</h3>
                        <p class="text-warning">مقالات در انتظار تایید داوران</p>
                    </div>
                </div>

            </div>
        </div>

       

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                @php
                    $color_avatar = [
                        "bg-whatsapp" , 
                        "bg-primary" ,
                        "bg-success" ,
                        "bg-warning" ,
                        "bg-danger" ,
                        "bg-info" ,
                    ];

                @endphp
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">مقالات ارسالی دیده نشده</h5>
                        <div class="card-scroll">
                            <ul class="list-group list-group-flush">
                                @if (count($posted_articles) ==0)
                                    <h5 class="m-b-0 primary-font">تمام مقالات دیده شده اند (اگر مقاله ای را دیده اید ولی تایید نکرده اید به قسمت مقالات ارسال شده برای تایید بروید)</h5>
                                @endif
                                @foreach($posted_articles as $article)
                                    
                                
                                    <li class="list-group-item d-flex align-items-center p-l-r-0">
                                        <div>
                                            <figure class="avatar avatar-sm m-l-15">
                                                <span class="avatar-title {{ $color_avatar[array_rand($color_avatar)] }} rounded-circle">
                                                    {{ substr($article->article->title , 0 , 1) }}
                                                </span>
                                            </figure>
                                        </div>
                                        <div>
                                            <h6 class="m-b-0 primary-font">{{ $article->article->title }}</h6>
                                            <span class="text-muted small">منتشر کننده : {{ $article->article->user->name_and_family }}</span>
                                        </div>
                                        <a href="#" class="mr-auto btn btn-primary btn-sm">
                                            <i class="ti-eye m-l-5"></i> مشاهده
                                        </a>
                                    </li>
                        
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>

    </div>

</main>
@endsection

{{-- {{ substr($article->title , 0 , 1) }} --}}
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

