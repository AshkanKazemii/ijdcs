<!DOCTYPE html>

<html dir="rtl" lang="fa-IR">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield("title")</title>
<script src="{{ asset('./js/index.js') }}"></script>
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel="stylesheet" href="{{ asset('./css/index.css') }}">

<link rel='stylesheet' id='dashicons-css'  href="{{ asset('includes/css/dashicons.mind9e1.css?ver=4.9.22') }}" type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href="{{ asset('font/font-awesome.min1849.css?ver=4.7.0') }}" type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href="{{ asset('content/css/bootstrap.mind9e1.css?ver=4.9.22') }}" type='text/css' media='all' />
<link rel='stylesheet' id='bxslider-css'  href="{{ asset('content/css/jquery.bxsliderd9e1.css?ver=4.9.22') }}" type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href="{{ asset('content/css/magnific-popupd9e1.css?ver=4.9.22') }}" type='text/css' media='all' />
<link rel='stylesheet' id='owl.carousel-css'  href="{{ asset('content/css/owl.carouseld9e1.css?ver=4.9.22') }}" type='text/css' media='all' />
<link rel='stylesheet' id='owl.theme-css'  href="{{ asset('content/css/owl.themed9e1.css?ver=4.9.22') }}" type='text/css' media='all' />
<link rel='stylesheet' id='hotmagazine-hotmagazine-css'  href="{{ asset('content/css/style-techd9e1.css?ver=4.9.22') }}" type='text/css' media='all' />
<link rel='stylesheet' id='hotmagazine-style-css'  href="{{ asset('content/style3804.css?ver=2015-11-26') }}" type='text/css' media='all' />
<link rel='stylesheet' id='hotmagazine-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C300%26subset%3Dlatin%2Clatin-ext&amp;ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href="{{ asset('compress/css/js_composer.min8b06.css?ver=5.4.7') }}" type='text/css' media='all' />
<script type='text/javascript' src="{{ asset('includes/js/jquery/jqueryb8ff.js?ver=1.12.4') }}"></script>
<script type='text/javascript' src="{{ asset('includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}"></script> 
<link rel="stylesheet" href="{{ asset('content/rtl.css') }}" type="text/css" media="screen" />

@yield("css")

<style type="text/css" media="screen">
	@font-face {
	  font-family: "header-font";
	  src: url("{{ asset('fonts/BNikaTheme.ttf') }}");
	}
	@font-face {
	  font-family: "body-font";
	  src: url("{{ asset('fonts/BNikaTheme.ttf') }}");
	}
	@font-face {
	  font-family: "lists-font";
	  src: url("{{ asset('fonts/BNikaTheme.ttf') }}");
	}h1, h2, h3, h4, h5, h6, h7	{
	font-family: "header-font"!important;
	}p, em, div	{
		font-family: "body-font"!important;
	}
	li	{
		font-family: "lists-font"!important;
	}
</style>


<style type="text/css" id="wp-custom-css">
			.post-gallery{
	display:none
}
.post-tags{
	display:none
}
.post-content{
		display:none

}
.news-post{
	margin:1px !important
	;padding:1px !important

}
.post-title a{
font-size:11pt !important
;line-height:1.6
}
.post-title {
padding:5px !important
}

.widget_recent_entries{
	text-align:justify
}

.title-post h1{
	font-size:13pt !important
;line-height:1.5 !important
}

.article-box{
	margin-top:-25px
}		</style>


	<style type="text/css" title="dynamic-css" class="options-output">
        body{
            font-family:Lato;
            line-height:20px;
            font-weight:400;
            font-style:normal;
            color:#666666;
            font-size:14px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }
        .wf-loading body,{
            opacity: 0;
        }
        .ie.wf-loading body,{
            visibility: hidden;
        }
    </style>
    
    
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1659603458057{
            background-image: url("asset('uploads/logo58eb5.png?id=733')") !important;
        }
        .vc_custom_1659603416800{
            background-image: url("{{ asset('uploads/logo5.png?id=733') }}") !important;
        }
        .vc_custom_1659603467008{
            background-image: url("{{ asset('uploads/logo5.png?id=733') }}") !important;
        }
    </style>
<noscript>
    <style type="text/css"> 
        .wpb_animate_when_almost_visible { 
            opacity: 1; 
        }
        </style>

</noscript>

</head>


    @yield("content")


    @yield("js")

<script type='text/javascript' src="{{ asset('./js/script.js') }}"></script>
<script type='text/javascript' src="{{ asset('content/js/bootstrap.mind9e1.js?ver=4.9.22') }}"></script>
<script type='text/javascript' src="{{ asset('content/js/jquery.bxslider.mind9e1.js?ver=4.9.22') }}"></script>
<script type='text/javascript' src="{{ asset('content/js/jquery.magnific-popup.mind9e1.js?ver=4.9.22') }}"></script>
<script type='text/javascript' src="{{ asset('includes/js/imagesloaded.min55a0.js?ver=3.2.0') }}"></script>
<script type='text/javascript' src="{{ asset('compress/js/dist/isotope.pkgd.min8b06.js?ver=5.4.7') }}"></script>
<script type='text/javascript' src="{{ asset('content/js/owl.carousel.mind9e1.js?ver=4.9.22') }}"></script>
<script type='text/javascript' src="{{ asset('content/js/ajaxd9e1.js?ver=4.9.22') }}"></script>
<script type='text/javascript' src="{{ asset('content/js/stickyd9e1.js?ver=4.9.22') }}"></script>
<script type='text/javascript' src="{{ asset('content/js/theia-sticky-sidebard9e1.js?ver=4.9.22') }}"></script>
<script type='text/javascript' src="{{ asset('content/js/scriptd9e1.js?ver=4.9.22') }}"></script>
<script type='text/javascript' src="{{ asset('includes/js/wp-embed.mind9e1.js?ver=4.9.22') }}"></script>
<script type='text/javascript' src="{{ asset('compress/js/dist/js_composer_front.min8b06.js?ver=5.4.7') }}"></script>
</body>
</html>