<?

$template = $_GET['template'];
$body_color = $_GET['body_color'];
$headline_text = $_GET['headline_text'];
$headline_color = $_GET['headline_color'];
$headline_size = $_GET['headline_size'];
$headline_top_marg = $_GET['headline_top_marg'];
$headline_bot_marg = $_GET['headline_bot_marg'];
$subtxt_text = $_GET['subtxt_text'];
$subtxt_color = $_GET['subtxt_color'];
$subtxt_size = $_GET['subtxt_size'];
$subtxt_bot_marg = $_GET['subtxt_bot_marg'];
$disctxt_text = $_GET['disctxt_text'];
$disctxt_color = $_GET['disctxt_color'];
$disctxt_size = $_GET['disctxt_size'];
$disctxt_bot_marg = $_GET['disctxt_bot_marg'];
$btn_color = $_GET['btn_color'];
$btn_text = $_GET['btn_text'];
$btn_txt_color = $_GET['btn_txt_color'];
$btn_size = $_GET['btn_size'];
$btn_bot_marg = $_GET['btn_bot_marg'];
$ios_btn_url = $_GET['ios_btn_url'];
$hero_img = $_GET['hero_img'];
$hero_img_size = $_GET['hero_img_size'];

$properties = 'template=' . $template . '&body_color=' . $body_color . '&headline_color=' . $headline_color . '&headline_size=' . $headline_size . '&headline_top_marg=' . $headline_top_marg . '&headline_bot_marg=' . $headline_bot_marg . '&subtxt_color=' . $subtxt_color . '&subtxt_size=' . $subtxt_size . '&subtxt_bot_marg=' . $subtxt_bot_marg . '&disctxt_color=' . $disctxt_color . '&disctxt_size=' . $disctxt_size . '&disctxt_bot_marg=' . $disctxt_bot_marg  . '&btn_color=' . $btn_color . '&btn_txt_color=' . $btn_txt_color . '&btn_text=' . $btn_text .'&btn_size=' . $btn_size . '&btn_bot_marg=' . $btn_bot_marg . '&ios_btn_url=' . $ios_btn_url . '&hero_img=' . $hero_img . '&hero_img_size=' . $hero_img_size;

?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
	<script>
	function FlameViewportScale(){return this.delay=600,this.orientation,this.screenWidth,this.timeout,this.viewportScale,this.getScale=function(){this.viewportScale=void 0;var a=document.documentElement.clientWidth;return screen.width>a?void console.log("Aborted viewport scale measurement. Screen width > viewport width"):(this.updateOrientation(),this.screenWidth=screen.width,"portrait"===this.orientation?screen.width>screen.height&&(this.screenWidth=screen.height):screen.width<screen.height&&(this.screenWidth=screen.height),this.viewportScale=this.screenWidth/window.innerWidth,this.viewportScale)},this.updateOrientation=function(){this.orientation=window.orientation,void 0===this.orientation?document.documentElement.clientWidth>document.documentElement.clientHeight?this.orientation="landscape":this.orientation="portrait":0===this.orientation||180===this.orientation?this.orientation="portrait":this.orientation="landscape"},this.update=function(a){if(void 0!==this.timeout&&(clearTimeout(this.timeout),this.timeout=void 0),this.delay>0){var b=this;this.timeout=setTimeout(function(){b.getScale(),void 0!==a&&a()},this.delay)}else this.getScale(),void 0!==a&&a()},!0}function oneDecimal(a){if(void 0!==a)return Math.round(10*a)/10}function updateStats(){360===viewScale.screenWidth&&360===document.documentElement.clientWidth&&1===oneDecimal(viewScale.viewportScale)&&/android/i.test(navigator.userAgent||navigator.vendor||window.opera)&&$("body").addClass("specialFontSizeAndroid360")}var viewScale;document.addEventListener("gestureend",function(a){void 0!==viewScale&&1!==a.scale&&viewScale.update(updateStats)},!1),window.onorientationchange=function(a){void 0!==viewScale&&viewScale.update(updateStats)},$(document).ready(function(){viewScale=new FlameViewportScale,viewScale.update(updateStats);var a=$("meta[name=viewport]");$("#viewportInfo").text('<meta name="viewport" content="'+a.attr("content")+'" />')}),document.addEventListener("touchstart",function(){},!0);
	</script>
	<style>
	/*Global start*/
	@font-face {
		font-family: "DIN-Regular";
		src: url(https://d3nbjfyscfbvsc.cloudfront.net/fonts/Grindr/DIN/DIN-Regular.woff) format("woff");
	}

	@font-face {
		font-family: "DIN-Medium";
		src: url(https://d3nbjfyscfbvsc.cloudfront.net/fonts/Grindr/DIN/DIN-Medium.woff) format("woff");
	}

	@font-face {
		font-family: "DIN-Bold";
		src: url(https://d3nbjfyscfbvsc.cloudfront.net/fonts/Grindr/DIN/DIN-Bold.woff) format("woff");
	}

	@font-face {
		font-family: "GarageGothic-Black";
		src: url(https://d3nbjfyscfbvsc.cloudfront.net/fonts/Grindr/GarageGothic/GarageGothic-Black.woff) format("woff");
	}

	* {
		-webkit-tap-highlight-color: transparent;
		font-weight: normal;
	}

	html, body {
		min-height: 100%;
		height: 100%;
		-webkit-text-size-adjust: 100%;
	}

	body {
		position: relative;
		margin: 0;
		font-size: 16px;
		font-size: 2.86vw;
		background-color: <?php echo $body_color; ?>;
		text-align: center;
		overflow: hidden;
		background: url(../img/loading.gif) no-repeat center / 200px #000;
	}

	.specialFontSizeAndroid360 {
		font-size: 10px;
	}

	h1 {
		font-size: <?php echo $headline_size/10; ?>em;
		font-family: GarageGothic-Black;
		color: <?php echo $headline_color; ?>;
		text-align: center;
		letter-spacing: .01em;
		line-height: 0.8;
		margin-top: <?php echo $headline_top_marg; ?>%;
		margin-bottom: <?php echo $headline_bot_marg; ?>%;
		margin-left: 6%;
		margin-right: 6%;
	}

	h2 {
		font-size: <?php echo $subtxt_size/10; ?>em;
		line-height: 1.2;
		color: <?php echo $subtxt_color; ?>;
		font-family: DIN-Medium;
		text-align: center;
		letter-spacing: .01em;
		margin-top: 0;
		margin-bottom: <?php echo $subtxt_bot_marg; ?>%;
		margin-left: 6%;
		margin-right: 6%;
	}

	h3 {
		font-size: <?php echo $disctxt_size/10; ?>em;
		line-height: 1.2;
		color: <?php echo $disctxt_color; ?>;
		font-family: DIN-Regular;
		text-align: center;
		letter-spacing: .01em;
		margin-top: 0;
		margin-bottom: <?php echo $disctxt_bot_marg; ?>%;
		margin-left: 6%;
		margin-right: 6%;
	}

	button {
		padding: 3% 6%;
		text-align: center;
		text-decoration: none;
		font-size: 2em;
		line-height: 1;
		border-radius: 0.20em;
		width: auto;
		cursor: pointer;
		border: none;
		outline: none;
		font-family: DIN-Bold;
		background-color: rgba(0, 0, 0);
		color: rgba(255, 255, 255);
		margin-top: 0;
		margin-bottom: <?php echo $btn_bot_marg; ?>%;
		margin-left: 6%;
		margin-right: 6%;
	}

	.animated {
		-webkit-animation-duration: 1.5s;
		animation-duration: 1.5s;
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both;
	}

	.animated.infinite {
		-webkit-animation-iteration-count: infinite;
		animation-iteration-count: infinite;
	}

	.animated.hinge {
		-webkit-animation-duration: 2s;
		animation-duration: 2s;
	}


	/*the animation definition*/

	@-webkit-keyframes bounceIn {
		0%,
		100%,
		20%,
		40%,
		60%,
		80% {
			-webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		}
		0% {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3);
		}
		20% {
			-webkit-transform: scale3d(1.15, 1.15, 1.15);
			transform: scale3d(1.15, 1.15, 1.15);
		}
		40% {
			opacity: 1;
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1);
		}
	}

	@keyframes bounceIn {
		0%,
		100%,
		20%,
		40%,
		60%,
		80% {
			-webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
			transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		}
		0% {
			opacity: 0;
			-webkit-transform: scale3d(0.3, 0.3, 0.3);
			transform: scale3d(0.3, 0.3, 0.3);
		}
		20% {
			-webkit-transform: scale3d(1.15, 1.15, 1.15);
			transform: scale3d(1.15, 1.15, 1.15);
		}
		40% {
			opacity: 1;
			-webkit-transform: scale3d(1, 1, 1);
			transform: scale3d(1, 1, 1);
		}
	}

	.bounceIn {
		-webkit-animation-name: bounceIn;
		animation-name: bounceIn;
	}

	/*Global end*/
	</style>
</head>


<body class="bounceIn animated">
<?php
switch($template){
case 'template1':
	print '
	<style>
	.top_container,
	.bottom_container {
		position: absolute;
		width: 100%;
		left: 0;
	}

	.top_container {
		top: 0;
		height: 50%;
		background-image: url(https://placeholdit.imgix.net/~text?txtsize=80&bg=ff3349&txtclr=fc5e6d&txt=Hero+Image&w=375&h=667&txttrack=0);
		background-repeat: no-repeat;
		background-position: center;
		background-size: '. $hero_img_size .';
		background-color: rgba(255, 255, 255);
	}

	.bottom_container {
		bottom: 0;
		height: 50%;
	}

	.inner_cont {
		position: absolute;
		top: 50%;
		left: 0;
		-webkit-transform: translate(0, -50%);
		transform: translate(0, -50%);
		width: 100%;
	}
	</style>
	<div class="top_container"></div>
	<div class="bottom_container">
	<div class="inner_cont">
		<h1>'. $headline_text . '</h1>
		<h2>'. $subtxt_text . '</h2>
		<button>' . $btn_text .'</button>
		<h3>'. $disctxt_text . '</h3>
	</div>
	</div>';
	break;
case 'template2':
	print '
	<style>
	.top_container,
	.middle_container,
	.bottom_container {
		position: absolute;
		width: 100%;
		left: 0;
	}

	.top_container {
		top: 0;
		height: 25%;
	}

	.middle_container {
		top: 25%;
		height: 40%;
		background-image: url(https://placeholdit.imgix.net/~text?txtsize=80&bg=ff3349&txtclr=fc5e6d&txt=Hero+Image&w=375&h=667&txttrack=0);
		background-repeat: no-repeat;
		background-position: center;
		background-size: '. $hero_img_size .';
		background-color: rgba(255, 255, 255);
	}

	.bottom_container {
		bottom: 0;
		height: 35%;
	}

	.inner_cont {
		position: absolute;
		top: 50%;
		left: 0;
		-webkit-transform: translate(0, -50%);
		transform: translate(0, -50%);
		width: 100%;
	}
	</style>
	<div class="top_container">
	<div class="inner_cont">
		<h1>'. $headline_text . '</h1>
	</div>
	</div>
	<div class="middle_container"></div>
	<div class="bottom_container">
		<div class="inner_cont">
			<h2>'. $subtxt_text . '</h2>
			<button>' . $btn_text .'</button>
			<h3>'. $disctxt_text . '</h3>
		</div>
	</div>';
	break;
case 'template3':
	print '
	 <style>
		body {
			display: table;
			width: 100%;
			background-image: url(https://placeholdit.imgix.net/~text?txtsize=80&bg=ff3349&txtclr=fc5e6d&txt=Hero+Image&w=375&h=667&txttrack=0);
			background-repeat: no-repeat;
			background-position: center;
			background-size: '. $hero_img_size .';
			background-color: rgba(255, 255, 255);
		}

		.container {
			position: relative;
			text-align: center;
			margin: 0 auto;
			display: table-cell;
			width: 100%;
			padding: 0 10%;
			vertical-align: middle;
		}
	</style>
	<div class="container">
		<h1>'. $headline_text . '</h1>
		<h2>'. $subtxt_text . '</h2>
		<button>' . $btn_text .'</button>
		<h3>'. $disctxt_text . '</h3>
	</div>';
	break;
case 'template4':
	print '
	<style>
		body {
			background-image: url(https://placeholdit.imgix.net/~text?txtsize=80&bg=ff3349&txtclr=fc5e6d&txt=Hero+Image&w=375&h=667&txttrack=0);
			background-repeat: no-repeat;
			background-position: center;
			background-size: '. $hero_img_size .';
			background-color: rgba(255, 255, 255);
		}
		button {
			position: absolute;
			z-index: 999;
			top: 0;
			left: 0;
			height: 0;
			width: 0;
			border: none;
			outline: none;
			text-decoration: none;
			border-radius: 0;
			cursor: pointer;
			margin: 0;
			padding: 0;
		}
	</style>
	<button onclick="window.open('. $ios_btn_url .')"></button>
	';
	break;
}
?>
</body>

</html>
