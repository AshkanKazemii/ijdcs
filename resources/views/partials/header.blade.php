<header class="clearfix">
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<ul class="top-line-list">
									<li><span class="time-now"> date</span></li>	
								</ul>
							</div>	
							<div class="col-md-3">
								<ul class="social-icons"></ul>
							</div>	
						</div>
					</div>
				</div>

				<div class="logo-advertisement">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand"  href="index.html" title="">
								<img src="{{ asset('uploads/bannertop.png') }}" alt="">
							</a>
						</div>

					</div>
				</div>
			
				<div class="nav-list-container">
					<div class="container">
		
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul data-breakpoint="800" id="menu-main-menu" class="nav navbar-nav navbar-left">
                                <li id="menu-item-162" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-148 current_page_item menu-item-162 page-148 active">
                                    <a title="صفحه اصلی" href="{{ route('index') }}">صفحه اصلی</a>
                                </li>
                                <li id="menu-item-582" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-582 page-569">
                                    <a title="اهداف و محورهای مجله" href="{{ route('objectives-and-axes') }}">اهداف و محورهای مجله</a>
                                </li>
                                <li id="menu-item-579" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-579 page-575">
                                    <a title="اطلاعات مجله" href="{{ route('jurnal-information') }}">اطلاعات مجله</a>
                                </li>
                                <li id="menu-item-1049" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1049 drop">
                                    <a title="آرشیو" href="#" class=" dropdown-toggle" data-hover="dropdown">آرشیو<i class="fa fa-angle-down"></i></a>

                                    <ul role="menu" class=" dropdown">
										@foreach ($quarterlies as $quarterly)
                                        	<li id="menu-item-1289" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1289 page-1271"><a title="" href="">{{ $quarterly->name }}</a></li>
											
										@endforeach
                                        
                                    </ul>
                                </li>

                                {{-- <li id="menu-item-581" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-581 page-571">
                                    <a title="اعضای هیئت تحریریه" href="">اعضای هیئت تحریریه</a>
                                </li>
                                <li id="menu-item-580" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-580 page-573">
                                    <a title="نمایه ها" href="">نمایه ها</a>
                                </li> --}}
                                <li id="menu-item-1015" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1015 page-1008">
                                    <a title="داوران" href="{{ route('referees') }}">داوران</a>
                                </li>
                                <li id="menu-item-685" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-685 page-683 drop">
                                    <a title="کنفرانس ها" href="#" class="dropdown-toggle" data-hover="dropdown">کنفرانس ها<i class="fa fa-angle-down"></i></a>
                                    {{-- <ul role="menu" class=" dropdown">
                                        <li id="menu-item-688" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-688"><a title="test" href="">test</a></li>
                                    </ul> --}}
                                </li>
                                <li id="menu-item-535" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-535 page-532">
                                    <a title="ارسال مقاله" href="{{ route('panel') }}">ارسال مقاله</a>
                                </li>
                                <li id="menu-item-1019" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1019">
                                    <a title="درباره ما" href="{{ asset('uploads/About-Us.pdf') }}" download>درباره ما</a>
                                </li>
                            </ul>							
							 
							<form method="get" class="navbar-form navbar-right" action="" >
								<input type="text" name="s" placeholder="جستجو در اینجا" />
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>

						</div>
					</div>
				</div>
			</nav>
		</header>