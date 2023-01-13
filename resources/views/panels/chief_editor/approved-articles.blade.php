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
            <li><a href="{{ route('chiefeditor.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a href="{{ route('chiefeditor.submitted-articles-for-approval') }}"><i class="icon ti-home"></i> <span>مقالات ارسال شده برای تایید <span  class="btn btn-danger py-0 px-1">{{ $number_of_unverified_articles }}</span></span> </a></li>
            <li><a class="active" href="{{ route('chiefeditor.approved-articles') }}"><i class="icon ti-home"></i> <span>مقالات تایید شده (ارسال شده به داوران)</span> </a></li>
            
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
                            <h5 class="m-b-0">مدیریت وضعیت مقالات ارسالی به داوران</h5>
                        </div>
                        <div class="card-controls">
                            <a href="{{ route('writer.status-articles') }}" class="js-card-refresh">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
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
                                                    <span class="text-muted small">نویسنده : {{ Auth::user()->name_and_family }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ jdate($article->article->created_at)->format('H:i:s - Y/m/d') }}</td>
                                        <td>{{ $article->article->keywords }}</td>

                                        <td>
                                            <a href="#" alt="kon">
                                                {{ DB::table("article_approvals_referees")->where("article_id" , "=" , $article->article->id)->where("is_confirmation",  "=" , 1)->count() }}
                                                داور برای این مقاله نظر ثبت کرده اند    
                                            </a>
                                        </td>

                                        <td>
                                            <a class="btn btn-info" href="{{ route('chiefeditor.view_comments_referees' , $article->article->id) }}">نظرات داوران</a>
                                        </td>

                                        <td>
                                            <a class="btn btn-warning" href="">دیدن مقاله</a>
                                        </td>

                                        <td>
                                            <a class="btn btn-danger" href="{{ route("chiefeditor.rejection.articles-approved" , $article->article->id) }}">رد</a>
                                        </td>

                                        {{-- <td class="text-left">
                                            <div class="dropdown">
                                                <a class="btn btn-outline-primary btn-sm" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">عمل</a>
                                                    <a href="#" class="dropdown-item">عمل دیگر</a>
                                                    <a href="#" class="dropdown-item">یک عمل دیگر</a>
                                                </div>
                                            </div>
                                        </td> --}}
                                    </tr>

                                @endforeach
                                
                                </tbody>
                            </table>
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