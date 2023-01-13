@extends("layouts.app")


@section("content")

<body class="rtl home page-template page-template-template-home page-template-template-home-php page page-id-148 tech wpb-js-composer js-comp-ver-5.4.7 vc_responsive">
	<div id="container">
		
        @include("partials.header")

        
        	<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 content-blocker">

						<!-- block content -->
						<div class="block-content">
							<div class="title-section">
							  <h1><span>اهداف و محورهای مجله</span></h1>
							</div>
							<div class="single-post-box">
								<h4 style="color:red">اهداف</h4>
                                <p>
                                با توجه به گسترش کاربردهای سیستم های توزیع شده درصنعت امروزه سیستم های توزیع شده با کارایی بالا به یکی از مهمترین بسترهای علمی -پژوهشی و کاربردی درحوزه علوم کامپیوتر وتکنولوژی اطلاعات وارتباطات تبدیل شده است.
مهمترین شاخه های سیستم های توزیع شده با کارایی بالا شامل محاسبات خوشه ای و گریدی، رایانش ابری، اینترنت اشیا، Big Data، محاسبات فراگیر و شبکه های اجتماعی است که هریک به طور چشم گیری درحال توسعه وگسترش است.
بنابراین مطالعه و پژوهش های هدفمند در این راستا یکی از مهمترین ضرورتهای علمی در عرصه صنعت وتکنولوژی می باشد.
دوفصلنامه محاسبات وسامانه های توزیع شده به همکاری جمعی از اساتید متخصص در حوزه مرتبط با هدف نشر پژوهش های نوین در این حوزه درسال ۱۳۹۶ تاسیس گردیده است این دوفصلنامه در ۲ نوبت در سال (مرداد و اسفند) چاپ میشود.
                                <p>

                                <h4 style="color:red">محورهای پذیرش مقالات</h4>
                                <p>
                                محاسبات توزیع شده (Distributed Computing)<br>
                                سیستم های توزیع شده (ِDistributed System)<br>
                                محاسبات خوشه ای (Cluster Computing)<br>
                                محاسبات ابری (Cloud Computing)<br>
                                محاسبات توری (Grid Computing)<br>
                                محاسبات مه (Fog Computing)<br>
                                محاسبات لبه (Edge Computing)<br>
                                اینترنت اشیا (Internet of Thing)<br>
                                الگوریتم های موازی(Parallel Algorithms)<br>
                                محاسبات نرم (Soft Computing) (محاسبات تکاملی ، سیستم های فازی، شبکه های عصبی ) با رویکرد محاسبات توزیعی
                                داده های حجیم (Big Data)<br>
                                پایگاه داده توزیعی (Distributed Database)
                                <br>علم سنجی در حوزه محاسبات و سیستم های توزیعی
                                <br>وسایر موضوعات مرتبط دیگر
                                </p>
							</div>
							
						</div>
						<!-- End block content -->
					</div>

					<div class="col-sm-4 sidebar-sticky">

                        <!-- sidebar -->
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