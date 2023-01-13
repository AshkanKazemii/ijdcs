
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
            <li><a href="{{ route('superadmin.index') }}"><i class="icon ti-home"></i> <span>داشبورد</span> </a></li>
            <li><a href="{{ route('superadmin.create-user') }}"><i class="icon ti-home"></i> <span>ساخت حساب کاربری جدید</span> </a></li>
            <li><a href="{{ route('superadmin.create-quarterly') }}"><i class="icon ti-home"></i> <span>ساخت فصلنامه جدید</span> </a></li>
            <li><a class="active" href="{{ route('superadmin.defining-role-jurnal') }}"><i class="icon ti-home"></i> <span></span>ساخت مقام برای نشریه</a></li>
            <li><a href="{{ route('superadmin.defining-persons-jurnal') }}"><i class="icon ti-home"></i> <span></span>تعریف اعضای نشریه</a></li>
            <li><a href="{{ route('superadmin.published-article-list') }}"><i class="icon ti-home"></i> <span></span>مقالات منتشر شده</a></li>
            <li><a href="{{ route('superadmin.rejected-article-list') }}"><i class="icon ti-home"></i> <span></span>مقالات رد شده</a></li>

        </ul>
    </div>
</div>

@include("partials.panels.writer.nav")

<main class="main-content">

    @if(Session::exists("create-user")) 
        <a class="btn btn-success btn-block text-white">{{ Session::get("create-user") }}</a>
        <br><br>
    @endif

    <div class="container-fluid">

        <!-- begin::page header -->
        <div class="page-header">
            <div>
                <h3>فرم مدیریت نقش های نشریه</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('writer.index') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active" aria-current="page">فرم مدیریت نقش های نشریه</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!-- end::page header -->

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                       
                        <form method="POST" >
                            @csrf

                            <div class="row">

                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">نقش</label>
                                        <input type="text" name="role" class="form-control @error('role') is-invalid @enderror" id="exampleFormControlInput1" >
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3"></div>
                            </div>
            
                            <br>

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
                                        <input type="submit" value="ساختن نقش"   class="btn btn-success btn-lg btn-block">
                                        
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            
                        </form>


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>عنوان نقش</th>
                                    
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

                                @foreach ($roles as $role)
                                        
                                    
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <figure class="avatar avatar-sm m-l-15">
                                                        <span class="avatar-title {{ $color_avatar[array_rand($color_avatar)] }} rounded-circle">{{ substr($role->role ,0 ,1) }}</span>
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="m-b-0 primary-font">{{ $role->role }}</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <form method="POST" action="{{ route('superadmin.delete-role-jurnal' , $role->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger" >حذف</button>
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
<script src="{{ asset('panel/js/custom.js') }}"></script>
<script src="{{ asset('panel/js/app.js') }}"></script>
<script src="{{ asset('panel/vendors/tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('panel/js/examples/tagsinput.js') }}"></script>
@endsection