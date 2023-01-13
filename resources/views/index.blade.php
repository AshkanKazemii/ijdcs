@extends("layouts.app")


@section("content")

<body class="rtl home page-template page-template-template-home page-template-template-home-php page page-id-148 tech wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
	<div id="container">
		
        @include("partials.header")

		<div class="vc_row wpb_row vc_row-fluid block-wrapper">
            <div class="container">
                <div class="row">
                    <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-lg-2 vc_col-md-2 vc_hidden-sm">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
	                            <div class="sidebar theiaStickySidebar wpb_widgetised_column wpb_content_element small-sidebar">
		                            <div class="wpb_wrapper">
			                            <aside id="text-4" class="widget widget_text">
                                            <div class="title-section">
                                                <h2>
                                                    <span>مشخصات نشریه</span>
                                                </h2>
                                            </div>			
                                            <div class="textwidget">
                                                <div class="review-widget">
                                                    <ul class="review-posts-list">
                                                        <li style="margin-top:-20px">
            
                                                            @foreach ($roles_jurnal as $role)

                                                                <h2 style="text-align:right;font-weight:italic">
                                                                    <img src="./uploads/purple-square-button-hi.png" 
                                                                        alt="" style="width:10px;height:10px">
                                                                        {{ $role->role }}
                                                                </h2>
                                                                @foreach ($role->persons as $person)
                                                                    <h2 style="text-align:center">
                                                                    <a href="{{ $person->link }}" target="_blank" style="font-size:10pt">
                                                                        {{ $person->name }}
                                                                    </a>
                                                                    <br/>
                                                                    <span style="font-size:7pt">
                                                                        {{ $person->job }}
                                                                    </span>
                                                                @endforeach
                                                                
                                                                <hr>
                                                            @endforeach
      
                                                        </li>     
                                                    </ul>
                                                </div>
                                            </div>
		                                </aside>
                                        <aside id="text-17" class="widget widget_text">
                                            <div class="title-section">
                                                <h2>
                                                    <span>نمایه ها</span>
                                                </h2>
                                            </div>			
                                            <div class="textwidget">
                                                <p>
                                                    <a class="customize-unpreviewable" href="https://www.magiran.com/magazine/7710" target="_blank" rel="noopener">
                                                        <img class="alignnone size-full wp-image-623" src="{{ asset('uploads/mag.jpg') }}" alt="" width="213" height="55" />
                                                    </a>
                                                    <br />
                                                    <a class="customize-unpreviewable" href="https://www.tpbin.com/journal/journalnumber/999" target="_blank" rel="noopener">
                                                        <img class="alignnone size-full wp-image-623" src="{{ asset('uploads/tpbin.jpg') }}" alt="" width="213" height="55" />
                                                    </a>
                                                </p>
                                                <p>
                                                    <a class="customize-unpreviewable" href="https://civilica.com/l/77217/" target="_blank" rel="noopener">
                                                        <img class="alignnone size-full wp-image-623" src="{{ asset('uploads/civilica.jpg') }}" alt="" width="213" height="55" />
                                                    </a>
                                                </p>
                                                <p>
                                                    <a class="customize-unpreviewable" href="https://dorl.net/" target="_blank" rel="noopener">
                                                        <img class="alignnone size-full wp-image-623" src="{{ asset('uploads/logo_dor10.png') }}" alt="" width="213" height="55" />
                                                    </a>
                                                    <br />
                                                    <a class="customize-unpreviewable" href="https://ricest.ac.ir/" target="_blank" rel="noopener">
                                                        <img class="alignnone size-full wp-image-623" src="{{ asset('uploads/ricest.png') }}" alt="" width="213" height="55" />
                                                    </a>
                                                </p>
                                            </div>
		                                </aside>
		                            </div>
	                            </div>

                                <div class="vc_empty_space"   style="height: 64px" >
                                    <span class="vc_empty_space_inner"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="block-content wpb_column vc_column_container vc_col-sm-8 vc_col-lg-7 vc_col-md-7">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">

                                @foreach ($quarterlies as $quarterly)

                                    <img src="{{ $quarterly->image }}" alt="">
                                    <div style="margin-top:12px" class="title-section">
                                        <h1>
                                            <span>
                                                {{ $quarterly->name }}
                                            </span>
                                        </h1>
                                    </div>

                                    <div class="article-box">
                                        @php $counter = 1 ; @endphp
                                        @foreach ($quarterly->articles->take(10) as $article)
                                            <div class="news-post standard-post2">
                                                <div class="post-gallery">
                                                    <img  alt="" src=""  class="img-responsive" > 
                                                </div>
                                                <div class="post-title">
                                                    <h2><a href="{{ route("show-article" , $article->id) }}">مقاله شماره {{ $counter++ }} : {{ $article->title }}</a></h2>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>  
                                @endforeach
                                
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-3 vc_col-md-3">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space"   style="height: 32px" >
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                        <a href="" target="_blank"> 
                                            <img src="{{ asset('uploads/anjoman.jpg') }}" alt="Anjoman"> 
                                        </a>
	                                    <div class="sidebar theiaStickySidebar wpb_widgetised_column wpb_content_element large-sidebar">
		                                    <div class="wpb_wrapper">
			
			                                    {{-- <aside id="search-5" class="widget widget_search">

	                                                <div class="search-widget">
                                                        <form method="get" class="search-form" action="" >
                                                            <input type="text" name="s" placeholder="جستجو در اینجا" />
                                                            <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                                                        </form>
	                                                </div>
                                                </aside> --}}
                                                <aside id="text-15" class="widget widget_text">			
                                                    <div class="textwidget">
                                                        <div class="review-widget">
                                                            <ul class="review-posts-list">
                                                                @foreach ($quarterlies as $quarterly)
                                                                    <li>
                                                                        <img src="{{ asset($quarterly->image) }}" />{{ $quarterly->name }} محاسبات و سامانه های توزیع شده</li>
                                                                        <h2></h2>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
		                                        </aside>
		                                    </div>
	                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		        @include("partials.footer")
	        </div>
@endsection