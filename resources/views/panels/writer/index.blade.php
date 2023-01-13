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
            <li><a class="active" href="{{ route('writer.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a href="{{ route('writer.registeration-article-page') }}"><i class="icon ti-clipboard"></i> <span>ثبت مقاله</span> </a></li>

            <li><a href="{{ route('writer.status-articles') }}"><i class="icon ti-clipboard"></i> <span>وضعیت مقالات من</span> </a></li>

            
            
            
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
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('writer.index') }}">داشبورد</a></li>
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
						<h3 class="font-weight-800 primary-font text-primary">{{ count($view_statistics["getNumberOfAllUserArticles"]) }}</h3>
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
						<h3 class="font-weight-800 primary-font text-success">{{ count($view_statistics["getNumberOfPublishedArticles"]) }}</h3>
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
						<h3 class="font-weight-800 primary-font text-danger">{{ count($view_statistics["getNumberOfFailedArticles"]) }}</h3>
                        <p class="text-danger">مقالات رد شده</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">

                <div class="card text-center">
                    <div class="card-body">
                        <div class="icon-block icon-block-xl m-b-20 bg-warning-gradient icon-block-floating">
                            <i class="fa fa-bar-chart"></i>
                        </div>
						<h3 class="font-weight-800 primary-font text-warning">{{ count($view_statistics["getNumberOfPendingArticles"]) }}</h3>
                        <p class="text-warning">مقالات در انتظار</p>
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
                        <h5 class="card-title">مقالات منتشر شده</h5>
                        <div class="card-scroll">
                            <ul class="list-group list-group-flush">

                                @foreach ($published_articles as $article)
                                    <li class="list-group-item d-flex align-items-center p-l-r-0">
                                        <div>
                                            <figure class="avatar avatar-sm m-l-15">
                                                <span class="avatar-title {{ $color_avatar[array_rand($color_avatar)] }} rounded-circle">{{ substr($article->title , 0 , 1) }}</span>
                                            </figure>
                                        </div>
                                        <div>
                                            <h6 class="m-b-0 primary-font">{{ $article->title }}</h6>
                                            <span class="text-muted small">منتشر کننده : {{ Auth::user()->name_and_family }}</span>
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

