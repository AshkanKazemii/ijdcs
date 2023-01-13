@extends("layouts.panel")


@section("css")
    <link rel="stylesheet" href="{{ asset('panel/vendors/bundle.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('panel/css/app.css') }}" type="text/css">

	<link rel="shortcut icon" href="{{ asset('panel/media/image/favicon.png') }}">

	<meta name="theme-color" content="#3f51b5" />
@endsection



@section("content")


<div class="container h-100-vh">
    <div class="row align-items-center h-100-vh">
        <div class="col-lg-6 d-none d-lg-block p-t-b-25">
            <img class="img-fluid" src="{{ asset('panel/media/svg/register.svg') }}" alt="...">
        </div>
        <div class="col-lg-4 offset-lg-1 p-t-25 p-b-10">
            <h3>ثبت نام</h3>
            <p>ایجاد حساب کاربری جدید</p>
            <form method="POST">
                @csrf
                <div class="form-group mb-4">
                    <input type="text" name="name_and_family" class="form-control form-control-lg" autofocus placeholder="نام کاربری">
                </div>

                <div class="form-group mb-4">
                    <input name="email" class="form-control form-control-lg" placeholder="ایمیل">
                </div>

                <div class="form-group mb-4">
                    <input name="password" class="form-control form-control-lg" placeholder="رمز عبور">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <input name="university" class="form-control form-control-lg" placeholder="دانشگاه">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <input name="college" class="form-control form-control-lg" placeholder="دانشکده">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <input name="field" class="form-control form-control-lg" placeholder="رشته">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-4">
                            <input name="mobile" class="form-control form-control-lg" placeholder="شماره تماس">
                        </div>
                    </div>
                </div>

                {{-- <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch" checked>
                        <label class="custom-control-label" for="customSwitch">با قوانین و مقررات موافقم.</label>
                    </div>
                </div> --}}
                <button class="btn btn-primary btn-lg btn-block btn-uppercase mb-4">ایجاد حساب</button>
                <p class="text-left">
                    <a href="{{ route('login') }}" class="text-underline">حساب کاربری دارید؟</a>
                </p>
            </form>
        </div>
    </div>
</div>


@endsection


@section("js")
<script src="{{ asset('panel/vendors/bundle.js') }}"></script>

<script src="{{ asset('panel/js/app.js') }}"></script>
@endsection