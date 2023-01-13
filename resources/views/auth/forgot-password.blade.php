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
            <img class="img-fluid" src="{{ asset('panel/media/svg/login.svg') }}" alt="...">
        </div>

        <div class="col-lg-4 offset-lg-1 p-t-b-25">
                    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <p>فرم بازیابی رمز عبور</p>
            <form method="POST">
                @csrf
                <div class="form-group mb-4">
                    <input type="text" name="email" class="@error('email') is-invalid @enderror form-control form-control-lg" id="exampleInputEmail1" autofocus placeholder="ایمیل">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block btn-uppercase mb-4">بازیابی رمز عبور</button>
            </form>
        </div>
    </div>
</div>


@endsection


@section("js")
<script src="{{ asset('panel/vendors/bundle.js') }}"></script>

<script src="{{ asset('panel/js/app.js') }}"></script>
@endsection