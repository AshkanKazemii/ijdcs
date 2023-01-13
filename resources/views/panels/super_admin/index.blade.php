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
            <li><a class="active" href="{{ route('superadmin.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a href="{{ route('superadmin.create-user') }}"><i class="icon ti-home"></i> <span>ساخت حساب کاربری جدید</span> </a></li>
            <li><a href="{{ route('superadmin.create-quarterly') }}"><i class="icon ti-home"></i> <span>ساخت فصلنامه جدید</span> </a></li>
            <li><a href="{{ route('superadmin.defining-role-jurnal') }}"><i class="icon ti-home"></i> <span></span>ساخت مقام برای نشریه</a></li>
            <li><a href="{{ route('superadmin.defining-persons-jurnal') }}"><i class="icon ti-home"></i> <span></span>تعریف اعضای نشریه</a></li>
        
            <li><a href="{{ route('superadmin.published-article-list') }}"><i class="icon ti-home"></i> <span></span>مقالات منتشر شده</a></li>
            <li><a href="{{ route('superadmin.rejected-article-list') }}"><i class="icon ti-home"></i> <span></span>مقالات رد شده</a></li>

        </ul>
    </div> 
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    <div class="container-fluid">

     
        <div class="page-header">
            <div>
                <h3>درخواست های نویسندگان برای انتشار مقاله</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('writer.index') }}">داشبورد</a></li>
                    </ol>
                </nav>
            </div>
            
        </div>
       

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>نام مقاله</th>
                                    <th>تاریخ ارسال مقاله</th>
                                    <th>تاریخ تایید سردبیر</th>
                                    <th>تاریخ تایید داوران</th>
                                    <th class="text-danger">انتخاب فصلنامه</th>
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
                                        
                                        @php
                                            $existsNotConfirmation = DB::table("article_approvals_referees")->where("article_id" , "=" , $article->article_id)->where("is_confirmation" , "=" , 0)->exists();

                                            if($existsNotConfirmation) 
                                            {
                                                continue ;
                                            } 
                                        @endphp
                                    
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
                                                    <span class="text-muted small">نویسنده : {{ $article->user->name_and_family }}</span>

                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <h6 class="m-b-0 primary-font"> {{ jdate($article->article->updated_at)->format('H:i:s - Y/m/d') }}</h6>
                                        </td>

                                        <td>
                                            <h6 class="m-b-0 primary-font">{{  jdate($article->updated_at)->format('H:i:s - Y/m/d') }} </h6>
                                        </td>

                                        <td>
                                            <h6 class="m-b-0 primary-font">
                                                @foreach ($article->chiefEditorArticleApprovalsReferee as $referee)
                                                    {{ $referee->user->name_and_family . " = " }}
                                                    {{  jdate($referee->updated_at)->format('H:i:s - Y/m/d') }} 
                                                    <br>
                                                @endforeach
                                            </h6>
                                        </td>

                                        <td>
                                            <form method="POST" action="{{ route('superadmin.published-article' , $article->article_id) }}">
                                                @csrf
                                                <div class="col-md-8">
                                                    <select name="quarterly" class="custom-select custom-select-md">
                                                        @foreach ($quarterlies as $quarterly)
                                                            <option value="{{ $quarterly->id }}">{{ $quarterly->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn btn-success" >انتشار</button>
                                                </div>
                                            </form>
                                        </td>

                                        <td>
                                            <form method="POST" action="{{ route('superadmin.rejected-article' , $article->article_id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger" >رد</button>
                                            </form>
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

