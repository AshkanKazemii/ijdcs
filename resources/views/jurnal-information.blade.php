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
                                    <li>
                                        <strong>عنوان مجله : </strong>دوفصلنامه محاسبات و سامانه های توزیع شده
                                    </li>
                                    <li>
                                        <strong>عنوان انگلیسی : </strong>Journal of Distributed Computing and Systems (JDCS)
                                    </li>
                                    <li>
                                        <strong>نوع : </strong>دوفصلنامه الکترونیکی
                                    </li>
                                    <li>
                                        <strong>زبان : </strong>فارسی–انگلیسی
                                    </li>
                                    <li>
                                        <strong>شماره مجوز از وزارت ارشاد : </strong>80686 تاریخ صدور مجوز از فرهنگ وارشاد: 4/10/96
                                    </li>
                                    <li>
                                        <strong>شماره شاپا : </strong>4416-2645
                                    </li>
                                    <li>
                                        <strong>صاحب امتیاز : </strong> گروه تخصصی محاسبات و سامانه های توزیع شده انجمن انفورماتیک ایران
                                    </li>
                                    @foreach ($roles_jurnal as $role)
                                        <li>
                                            <strong> {{ $role->role   }} : </strong>
                                            
                                            @foreach ($role->persons as $person)
                                                {{ $person->name }}
                                            @endforeach
                                            
                                        </li>
                                    @endforeach
                                    
                                    <li>
                                        <strong>آدرس : </strong>قم، خیابان یادگار امام، بین کوچه 51 و 53، پلاک 159
                                    </li>
                                    <li>
                                        <strong>تلفن : </strong>02538868905
                                    </li>
                                    <li>
                                        <strong>ایمیل: </strong>dchpc2018@gmail.com
                                    </li>
                                    <li>
                                        <strong>واتس اپ : </strong>09374072042
                                    </li>
                                    
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
                        <!-- End sidebar -->
					</div>

				</div>

			</div>
		</section>

@endsection