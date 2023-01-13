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
            <li><a href="{{ route('writer.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a href="{{ route('writer.registeration-article-page') }}"><i class="icon ti-clipboard"></i> <span>ثبت مقاله</span> </a></li>

            <li><a class="active"  href="{{ route('writer.status-articles') }}"><i class="icon ti-clipboard"></i> <span>وضعیت مقالات من</span> </a></li>

 
        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                @if(Session::exists("update-successfuly")) 
                    <a class="btn btn-info btn-block text-white">{{ Session::get("update-successfuly") }}</a>
                    <br><br>
                @endif
                
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="m-b-0">وضعیت مقاله های من</h5>
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
                                    <th>تاییدیه</th>
                                    <th>وضعیت</th>
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
                                                        <span class="avatar-title {{ $color_avatar[array_rand($color_avatar)] }} rounded-circle">{{ substr($article->title ,0 ,1) }}</span>
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="m-b-0 primary-font">{{ $article->title }}</h6>
                                                    <span class="text-muted small">نویسنده : {{ Auth::user()->name_and_family }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ jdate($article->updated_at)->format('H:i:s - Y/m/d') }}</td>
                                        <td>{{ $article->keywords }}</td>
                                        <td>
                                            
                                            @if ($article->failed == 0)
                                                <span class="badge badge-success">منتشر شده</span>
                                            @elseif($article->failed == 1)
                                                <span class="badge badge-danger">رد شده</span>
                                            @else
                                                <span class="badge badge-warning">منتشر نشده , در انتظار تاییدیه</span>
                                            @endif
                                            
                                        </td>

                                        <td>
                              
                                            @if(! $article->articleApprovalsChiefEditors->is_confirmation  &&  $article->failed == "null") 
                                                <span class="badge badge-warning">در انتظار تایید سردبیر</span>
                                            @elseif($article->articleApprovalsChiefEditors->is_confirmation  &&  $article->failed == "null" )
                                                <span class="badge badge-warning">در دست بررسی توسط داوران</span>
                                            @elseif($article->articleApprovalsChiefEditors->is_confirmation  &&  $article->failed == "1" )
                                                <span class="badge badge-danger">رد شده</span>
                                            @elseif($article->articleApprovalsChiefEditors->is_confirmation  &&  $article->failed == "0" )
                                                <span class="badge badge-success">توسط سردبیر تایید شده</span>
                                            @endif
                                        
                                        </td>


                                        <td>
                                      
                                            @if ((!$article->articleApprovalsChiefEditors->is_confirmation) || $article->failed == "1")
                                                <a class="btn btn-primary" href="{{ route('writer.edit-article' , $article->id) }}">ویرایش</a>
                                            @elseif (($article->articleApprovalsChiefEditors->is_confirmation) || $article->failed == "0")
                                                <a class="btn btn-primary" href="{{ route('writer.edit-article' , $article->id) }}">ویرایش</a>
                                            @else
                                                <span class="badge badge-danger">امکان ویرایش وجود ندارد</span>
                                            @endif
                                            
                                        </td>
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