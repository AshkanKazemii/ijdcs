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
            <li><a class="active" href="{{ route('referee.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
 
            
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
                        <div class="card-title d-flex align-items-center">
                            <h5 class="m-b-0">مقالات ارسالی</h5>
                        </div>
                        <div class="card-controls">
                            <a href="{{ route('referee.index') }}" class="js-card-refresh">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">

                                @if(count($articles) == 0) 

                                    <h3 class="text-warning text-center">مقاله ای برای نظردهی وجود ندارد</h3>
                                        
                                @else

                                    <thead>
                                        <tr>
                                            <th>عنوان مقاله</th>
                                            <th>تاریخ</th>
                                            <th>کلمات کلیدی</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $color_avatar = [
                                                "bg-success" ,
                                                "bg-danger" , 
                                                "bg-info" ,
                                                "bg-warning"
                                            ] ;
                            
                                        @endphp

                                        @foreach ($articles as $article)
                                            
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <figure class="avatar avatar-sm m-l-15">
                                                                <span class="avatar-title {{ $color_avatar[array_rand($color_avatar)] }} rounded-circle">{{ substr($article->article->title ,0 ,1) }}</span>
                                                            </figure>
                                                        </div>
                                                        <div>
                                                            <h6 class="m-b-0 primary-font">{{ $article->article->title }}</h6>
                                                            <span class="text-muted small">نویسنده : {{ $article->article->user->name_and_family }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ jdate($article->article->created_at)->format('H:i:s - Y/m/d') }}</td>
                                                <td>{{ $article->article->keywords }}</td>


                                                <td>
                                                    <a class="btn btn-info" href="{{ route("referee.commenting-to-article" , $article->article->id) }}">نظر دادن</a>
                                                </td>

                                                <td>
                                                    <a class="btn btn-warning" href="{{ route('referee.view-test-articles-for-approval' , $article->article->id) }}">دیدن مقاله</a>
                                                </td>

                                            </tr>

                                        @endforeach
                                
                                    </tbody>
                                @endif
                            </table>
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

