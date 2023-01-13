@extends("layouts.panel")

@section("title" , "Developer : Ashkan Kazemi")
@section("css")
    <link rel="stylesheet" href="{{ asset('panel/vendors/bundle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/vendors/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('panel/css/custom.css') }}" type="text/css">
	<link rel="shortcut icon" href="{{ asset('panel/media/image/favicon.png') }}">
@endsection



@section("content")


<main class="main-content">

        <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('uploads/bg5.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body text-center m-t-70-minus">
                        <figure class="avatar avatar-xl m-b-20">
                            <img src="{{ asset('uploads/user.png') }}" class="rounded-circle" alt="ashkan kazemi">
                        </figure>
                        <h5 class="primary-font">اشکان کاظمی</h5>
                        <p class="text-muted small">طراح سیستم های اطلاعاتی و ادمین دیتابیس</p>

                        <a href="https://t.me/Ashkan_Kazemii" target="_blank" class="btn btn-outline-primary">
                            <i class="fa fa- m-l-5"></i>ارتباط از طریق تلگرام
                        </a>
                        <a href="mailto:ashkan.kazemi.pln@gmail.com" target="_blank" class="btn btn-outline-primary">
                            <i class="fa fa- m-l-5"></i>ارتباط از طریق ایمیل
                        </a>

                        <div class="row m-t-30">
                            <div class="col-4 text-info">
								<h5 class="primary-font">7</h5>
                                <span>پروژه موفق</span>
                            </div>
                            <div class="col-4 text-success">
								<h5 class="primary-font">2</h5>
                                <span>تجربه پروژه خارجی</span>
                            </div>
                            <div class="col-4 text-warning">
								<h5 class="primary-font">4</h5>
                                <span>سابقه (سال)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5"></div>
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

