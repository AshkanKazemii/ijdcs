
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
            <li><a href="{{ route('superadmin.defining-role-jurnal') }}"><i class="icon ti-home"></i> <span></span>ساخت مقام برای نشریه</a></li>
            <li><a class="active" href="{{ route('superadmin.defining-persons-jurnal') }}"><i class="icon ti-home"></i> <span></span>تعریف اعضای نشریه</a></li>
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

      
        <div class="page-header">
            <div>
                <h3>فرم مدیریت اعضای نشریه</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('writer.index') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active" aria-current="page">فرم مدیریت اعضای نشریه</li>
                    </ol>
                </nav>
            </div>
            
        </div>
   
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
                                        <label for="exampleFormControlInput1">نام عضو نشریه</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" >
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">مشخصات عضو نشریه</label>
                                        <input type="text" name="job" class="form-control @error('job') is-invalid @enderror" id="exampleFormControlInput1" >
                                        @error('job')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>


                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">لینک رزومه یا معرفی عضو نشریه</label>
                                        <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" id="exampleFormControlInput1" >
                                        @error('link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="role" class="custom-select custom-select-md">
                                            <option >نقش را انتخاب کنید</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
            
                            <br>

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
                                        <input type="submit" value="ساختن عضو"   class="btn btn-success btn-lg btn-block">
                                        
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            
                        </form>
                        


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>نام عضو نشریه</th>
                                    <th>مشخصات عضو نشریه</th>
                                    <th>مقام عضو نشریه</th>
                                    <th>لینک معرفی عضو نشریه</th>
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

                                @foreach ($persons as $person)
                                        
                                    
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <figure class="avatar avatar-sm m-l-15">
                                                        <span class="avatar-title {{ $color_avatar[array_rand($color_avatar)] }} rounded-circle">{{ substr($person->name ,0 ,1) }}</span>
                                                    </figure>
                                                </div>
                                                <div>
                                                    <h6 class="m-b-0 primary-font">{{ $person->name }}</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <h6 class="m-b-0 primary-font">{{ $person->job }}</h6>
                                        </td>

                                        <td>
                                            <h6 class="m-b-0 primary-font">{{ $person->role->role }}</h6>
                                        </td>

                                        <td>
                                            <h6 class="m-b-0 primary-font">
                                                <a href="{{ $person->link }}" target="__blank">دیدن لینک</a>
                                            </h6>
                                        </td>

                                        <td>
                                            <form method="POST" action="{{ route('superadmin.delete-persons-jurnal' , $person->id) }}">
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


