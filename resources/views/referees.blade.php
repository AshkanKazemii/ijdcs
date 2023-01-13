@extends("layouts.app")


@section("content")

<body class="rtl home page-template page-template-template-home page-template-template-home-php page page-id-148 tech wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
	<div id="container">
		
        @include("partials.header")
        	<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 content-blocker">

						<div class="block-content">
							<div class="title-section">
							  <h1><span>داوران</span></h1>
							</div>
							<div class="single-post-box">
								<ul>
                                    @foreach ($referees as $referee)
                                        <li> {{ $referee->name_and_family }} ، {{ $referee->collage }} , {{ $referee->filed }}  {{ $referee->university }}</li>
                                    @endforeach  
                                </ul>
							</div>
						</div>
					</div>
					<div class="col-sm-4 sidebar-sticky">
                        <div class="sidebar theiaStickySidebar  ">
                            <aside id="search-5" class="widget widget_search">

                                <div class="search-widget">
                                    <form method="get" class="search-form" action="" >
                                        <input type="text" name="s" placeholder="جستجو در اینجا" />
                                        <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </aside>
                            <aside id="text-15" class="widget widget_text">			
                                <div class="textwidget">
                                    <div class="review-widget">
                                        <ul class="review-posts-list">
                                            @foreach ($quarterlies as $quarterly)
                                                <li>
                                                    <img src="{{ $quarterly->image }}" />{{ $quarterly->name }} حاسبات و سامانه های توزیع شده
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
		</section>

@endsection