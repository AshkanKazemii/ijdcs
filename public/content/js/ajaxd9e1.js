(function($){
	$(document).on( 'click', '.filter-block li a', function( event ) {
		$('.filter-block li a').removeClass('active');
		$('.horizontal-filter-posts li a').removeClass('active');
		$(this).addClass('active');
		var cat_id = $(this).attr('data-cat');
		event.preventDefault();
		$.ajax({
			url: ajaxurl,
			method: "POST",
			data: {
				action: 'hotmagazine_load_posts',
				cat: cat_id
			},
			success: function( response ){
				//alert(response);
				if( response != "" ){
					$('.posts-filtered-block.block-ha').addClass('loading');
					$('.posts-filtered-block.block-ha').html(response);
					setTimeout(function(){
						$('.posts-filtered-block.block-ha').removeClass('loading');
						
					}, 300);
					var owlWrap = $('.owl-wrapper');

					if (owlWrap.length > 0) {

						if (jQuery().owlCarousel) {
							owlWrap.each(function(){

								var carousel= $(this).find('.owl-carousel'),
									dataNum = $(this).find('.owl-carousel').attr('data-num'),
									dataNum2,
									dataNum3;

								if ( dataNum == 1 ) {
									dataNum2 = 1;
									dataNum3 = 1;
								} else if ( dataNum == 2 ) {
									dataNum2 = 2;
									dataNum3 = dataNum - 1;
								} else {
									dataNum2 = dataNum - 1;
									dataNum3 = dataNum - 2;
								}

								carousel.owlCarousel({
									autoPlay: 10000,
									navigation : true,
									items : dataNum,
									itemsDesktop : [1199,dataNum2],
									itemsDesktopSmall : [979,dataNum3]
								});

							});
						};
					};
				}
				else{
					
				}
				
			}
		});
	});

	$(document).on( 'click', '.horizontal-filter-posts li a', function( event ) {
		$('.filter-block li a').removeClass('active');
		$('.horizontal-filter-posts li a').removeClass('active');
		$(this).addClass('active');
		var cat_id = $(this).attr('data-cat');
		event.preventDefault();
		$.ajax({
			url: ajaxurl,
			method: "POST",
			data: {
				action: 'hotmagazine_load_posts',
				cat: cat_id
			},
			success: function( response ){
				//alert(response);
				if( response != "" ){
					$('.posts-filtered-block.block-full').addClass('loading');
					$('.posts-filtered-block.block-full').html(response);
					setTimeout(function(){
						$('.posts-filtered-block.block-full').removeClass('loading');
						
					}, 300);
					var owlWrap = $('.owl-wrapper');

					if (owlWrap.length > 0) {

						if (jQuery().owlCarousel) {
							owlWrap.each(function(){

								var carousel= $(this).find('.owl-carousel'),
									dataNum = $(this).find('.owl-carousel').attr('data-num'),
									dataNum2,
									dataNum3;

								if ( dataNum == 1 ) {
									dataNum2 = 1;
									dataNum3 = 1;
								} else if ( dataNum == 2 ) {
									dataNum2 = 2;
									dataNum3 = dataNum - 1;
								} else {
									dataNum2 = dataNum - 1;
									dataNum3 = dataNum - 2;
								}

								carousel.owlCarousel({
									autoPlay: 10000,
									navigation : true,
									items : dataNum,
									itemsDesktop : [1199,dataNum2],
									itemsDesktopSmall : [979,dataNum3]
								});

							});
						};
					};
				}
				else{
					
				}
				
			}
		});
	});


	$(document).on( 'click', '.category-filter-posts li a', function( event ) {
		$('.category-filter-posts li a').removeClass('active');
		$(this).addClass('active');
		var cat_id = $(this).attr('data-cat');
		var order = $(this).attr('data-order');
		event.preventDefault();
		$.ajax({
			url: ajaxurl,
			method: "POST",
			data: {
				action: 'hotmagazine_list_load_posts',
				cat: cat_id,
				order: order
			},
			success: function( response ){
				//alert(response);
				if( response != "" ){
					$('#list_load').addClass('loading');
					$('#list_load').html(response);
					setTimeout(function(){
						$('#list_load').removeClass('loading');
					}, 300);
					
				}
				else{
					
				}
				
			}
		});
	});
	
$(document).on( 'click', '.filter-slider-posts li a', function( event ) {
	$('.filter-slider-posts li a').removeClass('active');
		$(this).addClass('active');
		var cat_id = $(this).attr('data-cat');
		event.preventDefault();
		$.ajax({
			url: ajaxurl,
			method: "POST",
			data: {
				action: 'hotmagazine_slider_posts',
				cat: cat_id
			},
			success: function( response ){
				//alert(response);
				if( response != "" ){
					$('.slider-wrap').addClass('loading');
					$('.slider-wrap').html(response);
					setTimeout(function(){
						$('.slider-wrap').removeClass('loading');
					}, 500);
					
					$('.slider-call').bxSlider({
						pagerCustom: '#bx-pager'
					});

				}
				else{
					
				}
				
			}
		});
});

var offset = 0;
$(document).on( 'click', '.grid-box a.load-more2', function( event ) {
	var cat_id = $(this).attr('data-cat');
	var order = parseInt($(this).attr('data-load'));
	var found = parseInt($(this).attr('data-found'));
	offset = offset + order;
	if(offset < found){
		

		event.preventDefault();
		$.ajax({
			url: ajaxurl,
			method: "POST",
			data: {
				action: 'hotmagazine_load_posts2',
				cat: cat_id,
				order: order,
				offset: offset
			},
			success: function( response ){
				
				if( response != "" ){
					
					$('#cat_'+cat_id).append(response);
					setTimeout(function(){
						
					}, 200);
					
					

				}
				else{
					
				}
				
			}
		});


	}else{
		event.preventDefault();
		$(this).html('No post to load');
	}
		
});

$(document).on( 'click', '.article-box a.load-list2', function( event ) {
	
	var cat_id = $(this).attr('data-cat');
	var order = parseInt($(this).attr('data-load'));
	var found = parseInt($(this).attr('data-found'));
	offset = offset + order;
	if(offset < found){
		

		event.preventDefault();
		$.ajax({
			url: ajaxurl,
			method: "POST",
			data: {
				action: 'hotmagazine_load_postslist2',
				cat: cat_id,
				order: order,
				offset: offset
			},
			success: function( response ){
				
				if( response != "" ){
					
					$('#list2-'+cat_id).append(response);
					setTimeout(function(){
						
					}, 200);
					
					

				}
				else{
					
				}
				
			}
		});


	}else{
		event.preventDefault();
		$(this).html('No post to load');
	}
		
});


$(document).on( 'click', '.article-box a.load-morel', function( event ) {
	var cat_id = $(this).attr('data-cat');
	var order = parseInt($(this).attr('data-load'));
	var found = parseInt($(this).attr('data-found'));
	var thumb = parseInt($(this).attr('data-thumb'));
	offset = offset + order;
	if(offset < found){
		

		event.preventDefault();
		$.ajax({
			url: ajaxurl,
			method: "POST",
			data: {
				action: 'hotmagazine_load_postsl',
				cat: cat_id,
				order: order,
				offset: offset,
				thumb: thumb
			},
			success: function( response ){
				
				if( response != "" ){
					
					$('.article-box #cat_'+cat_id).append(response);
					setTimeout(function(){
						
					}, 200);
					
					

				}
				else{
					
				}
				
			}
		});


	}else{
		event.preventDefault();
		$(this).html('No post to load');
	}
		
});

$(document).on( 'click', '.masonry-box a.load-morem', function( event ) {
	//alert('sc');
	var cat_id = $(this).attr('data-cat');
	var order = parseInt($(this).attr('data-load'));
	var found = parseInt($(this).attr('data-found'));
	event.preventDefault();
	offset = offset + order;
	if(offset < found){
		

		event.preventDefault();
		$.ajax({
			url: ajaxurl,
			method: "POST",
			data: {
				action: 'hotmagazine_load_postsm',
				cat: cat_id,
				order: order,
				offset: offset,
				//thumb: thumb
			},
			success: function( response ){
				
				if( response != "" ){
					
					$('.masonry-box #cat_'+cat_id).append(response);
					setTimeout(function(){
						
					}, 200);
					var $container=$('.iso-call');
					$container.isotope('destroy');
					//$container.isotope('insert', response);
					//alert('s');

					var winDow = $(window);
					// Needed variables
					var $container=$('.iso-call');
					var $filter=$('.filter');

					try{
						$container.imagesLoaded( function(){
							// init
							winDow.trigger('resize');
							$container.isotope({
								filter:'*',
								layoutMode:'masonry',
								itemSelector: '.iso-call > div',
								masonry: {
								    columnWidth: '.default-size'
								},
								animationOptions:{
									duration:750,
									easing:'linear'
								}
							});
						});
					} catch(err) {
					}
					

				}
				else{
					
				}
				
			}
		});


	}else{
		event.preventDefault();
		$(this).html('No post to load');
	}
		
});
})(jQuery);