
<?php
// $var="";
// $var = 'http://localhost/phptask/youku.html?url=https://www.youtube.com/embed/ItXS8v';

// $parts = parse_url($var);
// parse_str($parts['query'], $query);
// // echo $query['url'];
// echo file_get_contents($query['url']);

// 	// echo file_get_contents('');
// die;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="bootstrap.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700&display=swap" rel="stylesheet">

	<style type="text/css">
		<style type="text/css">
		._article_iframe iframe {
			width: 100%;
			height: 100%;
		}
		._article_popup_overlay {
			background-color: rgba(0, 0, 0, 0.9);
			height: 100%;
			width: 100%;
			position: fixed;
			left: 0px;
			top: 0px;
			z-index: 9;
			-webkit-transition: all 300ms ease-out 100ms;
			-moz-transition: all 300ms ease-out 100ms;
			-o-transition: all 300ms ease-out 100ms;
			transition: all 300ms ease-out 100ms;
		}
		._article_popopup_slider_thumbnail {
			width: 220px;
			height: 125px;
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		._article_iframe_thumbanail {
		    width: 100%;
			height: 100%;
			position: relative;
			text-align: center;
			display: block;
		}
		._article_iframe_thumbanail button.video_poster {
			opacity: 0.8;
			color: #FFFFFF;
			font-family: "Font Awesome 5 Pro";
			font-size: 18px;
			position: absolute;
			top: calc( 60% - 40px );
		    left: calc( 60% - 50px );
			background: transparent;
			border: 0;
			outline:0;
			z-index: 9;
		}
		._article_iframe_thumbanail iframe {
			width: 100%;
			height: 100%;
		}
		.carousel-thumbs li.list-inline-item ._article_popopup_slider_thumbnail {
			width: 100%;
    		height: 100%;
    		cursor: pointer;
		}
		.carousel-thumbs {
			padding: 0;
			margin-top: 20px;
		    overflow: scroll;
		    white-space: nowrap;
		    overflow-y: hidden;
		}
		
		.carousel-thumbs li.list-inline-item {
			position: relative;
    		text-align: center;
			display: inline-block;
		    width: 220px;
		    height: 125px;
		    vertical-align: middle;
    		margin-right: 34px !important;
		}
		._no_scrollbar {
			scrollbar-width: none;
		}
		._no_scrollbar::-webkit-scrollbar {
			display: none;
		}
		._no_scrollbar::-moz-scrollbars {
			display: none;
		}
		._no_scrollbar::-o-scrollbar {
			display: none;
		}
		._no_scrollbar::-google-ms-scrollbar {
			display: none;
		}
		._no_scrollbar::-khtml-scrollbar {
			display: none;
		}
		._no_scrollbar {
			overflow: -moz-scrollbars-none;
			/*overflow-x: hidden !important;*/
		}
		._no_scrollbar {
			-ms-overflow-style: none;
			/*overflow-x: hidden !important;*/
		}
		._no_scrollbar::-webkit-scrollbar {
			width: 0 !important
		}
		._thumbnail_navigation {
			padding: 0;
		    list-style-type: none;
		    position: absolute;
		    top: calc( 60% - 36px );
		    width: 100%;
		    margin: 0;
		}
		._thumbnail_navigation li a {
			color: #fff !important;
			font-size: 36px;
			cursor: pointer;
		}
		._article_slider_thubnail_wrap {
			position: relative;
		}
		._thumbnail_left_navigation {
			position: absolute;
			z-index: 9;
		}
		._thumbnail_right_navigation {
			position: absolute;
    		
    		right: 0;
		}

		@media ( max-width: 991px ) {
			.carousel-thumbs li.list-inline-item {
				width: 100px;
				height: 57px;
			}
			.carousel-thumbs li.list-inline-item {
				margin-right: 16px!important;
			}
			._article_bg_img, ._article_iframe {
				height: 202px;
			}	
			._article_popup_close {
				font-size: 14px;
			}
			._article_iframe_thumbanail button.video_poster {
				font-size: 14px;
				top: calc( 60% - 36px );
    			left: calc( 60% - 41px );
			}
			._thumbnail_navigation li a {
				opacity: 0;
			}
		}

		.selected {
			position: relative;
    		text-align: center;
		}
		
		._article_default_slide {
			background-repeat: no-repeat;
			background-size: cover;
			width: 100%;
			height: 340px;
			background-position: center center;
			position: relative;
			text-align: center;

		}
		#_article_default_slider {
			width: 70%;
			margin: 0 auto;
		}
		._article_default_slider_indicators li {
			border-radius: 50%;
			width: 8px;
			height: 8px;
			background-color: #D8D8D8;
			margin: 8px;
			border: 0.57px solid #D8D8D8;
		}
		._article_default_slider_indicators li.active {
			background-color: #007AA1;
			border: 0.57px solid #007AA1;
		}
		.video_poster {
			background-color: transparent;
			height: 64px;	
			width: 64px;	
			color: #FFFFFF;	
			font-family: "Font Awesome 5 Pro";	
			font-size: 64px;	
			font-weight: 300;	
			line-height: 64px;	
			border:0;
			position: absolute;
			top: calc( 50% - 18px );
			left: calc( 50% - 18px ); 
		}
		._article_default_slider_indicators {
			margin: 0;
    		bottom: -30px;
		}
		._article_default_slide_text {
			position: absolute;
			bottom: 27px;
			left: 16px;
			color: #FFFFFF;	
			font-family: "Noto Sans";	
			font-size: 16px;
			margin: 0;
		}
		._article_car_controls {
			opacity: 0;
			height: 44px;	
			width: 44px;	
			background-color: #F1F0F2;
			position: absolute;
    		top: calc( 50% - 33px );
    		color: rgba(70,69,71,0.5);
    		transition: opacity 0.3s;
  			-webkit-transition: opacity 0.3s;
		}
		._article_car_controls:hover {
			color: rgba(70,69,71,0.5);
			opacity: 1;
		}
		
		#_article_default_slider:hover ._article_car_controls {
			opacity: 1
		}
		#_article_default_slider .carousel-inner {
			cursor: pointer;
		}
		._article_popup_close {
			position: relative;
			top:25px;
		}
		._article_modal_wrap {
			background: rgba( 0, 0, 0, 0.9 );
		}
		._article_popup_body {
			/*background: rgba(0,0,0,0.9);*/
		}
		._article_popup_content {
			border: 0;
			background: transparent;
		}
		._article_popup_close {
			color: #FFFFFF;	
			font-family: "Font Awesome 5 Pro";	
			font-size: 40px;	
			font-weight: 300;
			cursor: pointer;
		}
		._article_popup_title {
			color: #FFFFFF;	
			font-family: "Noto Sans";	
			font-size: 24px;	
			font-weight: 450;	
			line-height: 30px;
			margin-bottom: 30px;
		}
		._article_bg_img {
			background: no-repeat;
			background-position: center center;
			width: 100%;
			height: 500px;
			background-size: cover;
		}
		._article_iframe {
			width: 100%;
			height: 500px;
		}

		._article_popopup_slider_thumbnail {
			position: relative;
		}
		._thumbnail_overlay {
			position: absolute;
			width: 100%;
			height: 100%;
			top:0;
			left: 0;
			background: linear-gradient(180deg, rgba(0,0,0,0) 0%, #000000 100%);
		}
		
 	</style>
</head>
<body>
	<section>
		<div id="_article_default_slider" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators _article_default_slider_indicators">
				<li data-target="#_article_default_slider" data-slide-to="0" class="active"></li>
				<li data-target="#_article_default_slider" data-slide-to="1"></li>
				<li data-target="#_article_default_slider" data-slide-to="2"></li>
			</ul>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="_article_default_slide" style="background-image: url(http://d3e1m60ptf1oym.cloudfront.net/9e1f0b9e-4f6e-4b07-a0a4-5ff9a1085405/Iceland_landscape_photo_of_waterfall_and_mountain_at_beautiful_sunset_xlarge.jpg), linear-gradient(180deg, rgba(0,0,0,0) 0%, #000000 100%);">
						<h2 class="_article_default_slide_text">Students actively participating in community programs</h2>
					</div>
				</div>
				<div class="carousel-item">
					<div class="_article_default_slide" style="background-image: url(http://d3e1m60ptf1oym.cloudfront.net/9e1f0b9e-4f6e-4b07-a0a4-5ff9a1085405/Iceland_landscape_photo_of_waterfall_and_mountain_at_beautiful_sunset_xlarge.jpg), linear-gradient(180deg, rgba(0,0,0,0) 0%, #000000 100%);">
						<button class="video_poster" onclick="getVedioUrl('XMTg3Nzg4MzY4NA', 1, 'video')"><i class="fal fa-play-circle"></i></button>
						<h2 class="_article_default_slide_text">Students actively participating in community programs</h2>
					</div>
				</div>
				<div class="carousel-item">
					<div class="_article_default_slide" style="background-image: url(http://d3e1m60ptf1oym.cloudfront.net/9e1f0b9e-4f6e-4b07-a0a4-5ff9a1085405/Iceland_landscape_photo_of_waterfall_and_mountain_at_beautiful_sunset_xlarge.jpg), linear-gradient(180deg, rgba(0,0,0,0) 0%, #000000 100%);">
						<h2 class="_article_default_slide_text">Students actively participating in community programs</h2>
					</div>
				</div>

			</div>
  			<a class="carousel-control-prev _article_car_controls" href="#_article_default_slider" data-slide="prev">
    			<i class="fal fa-angle-right"></i>
  			</a>
  			<a class="carousel-control-next _article_car_controls" href="#_article_default_slider" data-slide="next">
    			<i class="fal fa-angle-left"></i>
  			</a>
		</div>
	</section>

	<div class="modal fade _article_modal_wrap" id="_article_popup" data-backdrop="true">
  		<div class="modal-dialog modal-xl">
    		<div class="modal-content _article_popup_content">
    			
      			<!-- Modal body -->
      			<div class="modal-body _article_popup_body">
      				<div class="_article_popup_title">
      					<!-- Standford Businness School -->
      					<span class="float-right">
      						<a class="_article_popup_close" data-toggle="modal" data-target="#_article_popup"><i class="fal fa-times"></i></a>
      					</span>
      				</div>
        			<!-- <div id="demo1" class="carousel slide" data-ride="carousel" data-interval="false">
						<div class="carousel-inner">
							<div class="carousel-item active" id="car0">
								<div>Test</div>
								<div class="_article_bg_img" style="background-image: url('http://d3e1m60ptf1oym.cloudfront.net/9e1f0b9e-4f6e-4b07-a0a4-5ff9a1085405/Iceland_landscape_photo_of_waterfall_and_mountain_at_beautiful_sunset_xlarge.jpg');">
								</div>
							</div>
							<div class="carousel-item" id="car1">
								<div>Test</div>
		            			<div class="_article_iframe">
		            				<div id="youkuplayercar1" style="height: 100%; width: 100%;"></div>
		            			</div>
							</div>
							<div class="carousel-item" id="car2">
								<div class="_article_bg_img" style="background-image: url('http://d3e1m60ptf1oym.cloudfront.net/9e1f0b9e-4f6e-4b07-a0a4-5ff9a1085405/Iceland_landscape_photo_of_waterfall_and_mountain_at_beautiful_sunset_xlarge.jpg');">
									
								</div>
							</div>
						</div>

						<div class="_article_slider_thubnail_wrap">
							<ul class="carousel-thumbs _no_scrollbar">
								<li class="list-inline-item active">
	                        		<a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#demo1">
	                        			<div class="_article_popopup_slider_thumbnail" style="background-image: url(http://d3e1m60ptf1oym.cloudfront.net/9e1f0b9e-4f6e-4b07-a0a4-5ff9a1085405/Iceland_landscape_photo_of_waterfall_and_mountain_at_beautiful_sunset_xlarge.jpg)">
	                        				<div class="_thumbnail_overlay"></div>
	                        			</div>
	                        		</a>
	                    		</li>
	                    		<li class="list-inline-item active">
	                        		<a id="carousel-selector-1" class="_article_iframe_thumbanail" data-slide-to="1" data-target="#demo1">
	                            		<iframe class="" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/hgzzLIa-93c?autoplay=1& modestbranding=1&rel=0&hl=sv" style="background-image:url(http://d3e1m60ptf1oym.cloudfront.net/9e1f0b9e-4f6e-4b07-a0a4-5ff9a1085405/Iceland_landscape_photo_of_waterfall_and_mountain_at_beautiful_sunset_xlarge.jpg);"></iframe>
			           					 <button class="video_poster" ><i class="fad fa-play-circle"></i></button>
			           					 <div class="_thumbnail_overlay"></div>
	                        		</a>
	                    		</li>
	                    		<li class="list-inline-item active">
	                        		<a id="carousel-selector-2" class="selected" data-slide-to="2" data-target="#demo1">
	                        			<div class="_article_popopup_slider_thumbnail" style="background-image: url(http://d3e1m60ptf1oym.cloudfront.net/9e1f0b9e-4f6e-4b07-a0a4-5ff9a1085405/Iceland_landscape_photo_of_waterfall_and_mountain_at_beautiful_sunset_xlarge.jpg)">
	                        			</div>
	                        		</a>
	                    		</li>
	                    		<li class="list-inline-item active">
	                        		<a id="carousel-selector-2" class="selected" data-slide-to="2" data-target="#demo1">
	                        			<div class="_article_popopup_slider_thumbnail" style="background-image: url(http://d3e1m60ptf1oym.cloudfront.net/9e1f0b9e-4f6e-4b07-a0a4-5ff9a1085405/Iceland_landscape_photo_of_waterfall_and_mountain_at_beautiful_sunset_xlarge.jpg)">
	                        			</div>
	                        		</a>
	                    		</li>
	                    		
							</ul>
							<ul class="_thumbnail_navigation">
								<li class="_thumbnail_left_navigation">
									<a onclick="_mt_navs_thumb_slide('left', 235);">
										<i class="fal fa-chevron-left"></i>
									</a>
								</li>
								<li class="_thumbnail_right_navigation">
									<a onclick="_mt_navs_thumb_slide('right', 235);">
										<i class="fal fa-chevron-right"></i>
									</a>
								</li>
							</ul>
						</div>

					</div> -->
					<div>
						<div id="youkuplayer" class="_youkuplayer_container">
							
						</div>
					</div>
      			</div>
    		</div>
  		</div>
	</div>


	
	<script src="jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src='https://player.youku.com/jsapi'></script>
	<script>
		var index_slide = '';
		function getVedioUrl(src, index, type) {
			if(type == "video") {

				index_slide = index;

				// if(index != index_slide) {
					console.log(index_slide);
					$("#_article_popup").modal("show");
					$("#car"+index).find("iframe").attr("src", src);
					$("#demo1").carousel(parseInt(index));
					pauseVideos();
					youkuPlayer( index, src );
				// } 
				
			}
		}
		$("#_article_popup").on("hidden.bs.modal", function () { 
		    // close_popup();
		    pauseVideos();
		});

		function _mt_navs_thumb_slide(direction, scrollamount) {
			if (direction == 'left') {
				$('.carousel-thumbs').animate({
					scrollLeft: '-=' + scrollamount
				}, 500);
			}
			if (direction == 'right') {
				$('.carousel-thumbs').animate({
					scrollLeft: '+=' + scrollamount
				}, 500);
			}
		}
		var player;
		function youkuPlayer( index, src ) {
			player = new YKU.Player('youkuplayercar'+index, {
	      		client_id: '44503cca1be605b5',
	      		vid: src,
	      		width: 480,
	      		height: 230,
	      		autoplay: true,
	      		show_related: false,
	      		events: {
			        'onPlayerReady': onYoukuPlayerReady,
			        'onPlayStart': onPlayStart,
	        		'onPlayEnd': onPlayEnd
	      		}
	    	});
	    	var script = $('#youkuplayercar'+index).find("iframe").attr("src");
	    	
		}
		

		var isready = false;

    	function onYoukuPlayerReady() {
      		isready = true;
    	}
    	// call js api(pause video)
    	function pauseVideos() {
    		console.log(player);
      		if (!isready) return false;
      			player.pauseVideo();
			
			console.log('paused');
   		}

	    function onPlayStart() {
	      
	    }

	    function onPlayEnd() {
	      
	    }

// calling_semantic_select( '._site_wide_select_program' );
//         calling_semantic_select( '._site_wide_select_country' );
//         calling_semantic_select( '._country_select_location' );
		
		

	</script>
	
</body>
</html>