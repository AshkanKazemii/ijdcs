@extends("layouts.app")


@section("content")

<body class="rtl post-template-default single single-post postid-1166 single-format-standard tech wpb-js-composer js-comp-ver-5.4.7 vc_responsive">

	<!-- Container -->
	<div id="container">
		
        @include("partials.header")

        <div class="list-line-posts">
            <div class="container">

                <div class="owl-wrapper">
                    <div class="owl-carousel" data-num="3" data-rtl="true">
                                                                                        
                    </div>
                </div>

            </div>
        </div>

		<section class="block-wrapper ">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-0">
	                    <div class="sidebar small-sidebar">
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
                                                        <img src="{{ asset('uploads/purple-square-button-hi.png') }}" 
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

					<div class="col-md-7 col-sm-8">
                        <div class="block-content content-blocker">

							<div class="single-post-box">

								<div class="title-post">
									<h1>مقاله شماره {{ $article->id }} :  {{ $article->title }}</h1>
								</div>
																

								<div class="the-content">

									 <p><strong>چکیده</strong></p>
                                    <p>{{ $article->fa_abstract }}</p>
                                    <hr />

                                    <p><strong>کلیدواژه ها:</strong></p>
                                    @php
                                        $keywords = explode("," , $article->keywords) ;
                                    @endphp

                                    @foreach ($keywords as $keyword)
                                        <p><strong>{{ $keyword }}</strong></p>
                                    @endforeach
                                    <hr />

                                    <p><strong>نویسندگان:</strong></p>
                                    
                                    <p>
                                        {{ $article->user->name_and_family }} , 
                                        {{ $article->user->college }} , 
                                        {{ $article->user->field }} , 
                                        {{ $article->user->university }} , 
                                        ایران
                                    </p>
                                    <hr />

            
                                    <p>
                                        <strong>منابع : </strong> 
                                        {{ $article->resources }}
                                        
                                        <hr>                      
                                        <a class="btn btn-primary" href="{{ asset($article->file) }}"  download>
                                            <strong>دانلود فایل مقاله</strong>
                                        </a>
                                    </p>
				                </div>
																																

                                {{-- <div class="comment-area-box">
                                    <div class="title-section">
                                        <h1><span>بدون دیدگاه</span></h1>
                                    </div>
                                    <ul class="comment-tree"></ul>
                                </div> --}}

                                {{-- <div class="contact-form-box">
                                    <div id="respond" class="comment-respond">
                                        <h3 id="reply-title" class="comment-reply-title">
                                            <span>ارسال دیدگاه</span> 
                                            <small>
                                                <a rel="nofollow" id="cancel-comment-reply-link" href="" style="display:none;">لغو پاسخ</a>
                                            </small>
                                        </h3>			
                                        <form action="" method="post" id="commentform" class="comment-form" novalidate>
                                            <span class="email-not-published">آدرس ایمیل شما منتشر نخواهد شد.</span>
                                            <label for="comment">دیدگاه*</label>
                                            <textarea    id="comment"   name="comment" aria-required='true'></textarea>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="name">نام*</label>
                                                    <input type="text" name="author"   id="name" value=""  aria-required='true' />
                                                </div>
                                    
                                                <div class="col-md-4">
                                                    <label for="mail">ایمیل*</label>
                                                    <input id="mail" name="email"   type="text" value=""  aria-required='true' />
                                                </div>

                                                <div class="col-md-4"><label for="website">وب سایت</label>
                                                    <input id="website" name="url"   type="text" value=""  />
                                                </div>
                                            </div>
                                    
                                            <p class="form-submit">
                                                <input name="submit" type="submit" id="submit" class="submit" value="دیدگاه پست" /> 
                                                <input type='hidden' name='comment_post_ID' value='1166' id='comment_post_ID' />
                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                            </p>			
                                        </form>
                                    </div>
                            
                            
                            
                                </div> --}}

							</div>
						</div>
					</div>

					<div class="col-md-3 col-sm-4 sidebar-sticky">

                        <div class="sidebar large-sidebar ">
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
		</section>

		@include("partials.footer")

	</div>

</body>

@endsection