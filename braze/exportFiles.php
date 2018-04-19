<?php
// Start the buffering //
///$template = $_GET['data.html'];
ob_start();
?>

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
$android_btn_url = $_GET['android_btn_url'];
$hero_img = $_GET['hero_img'];
$hero_img_size = $_GET['hero_img_size'];
$html_class = $_GET['html_class'];
$rect_left = $_GET['rect_left'];
$rect_top = $_GET['rect_top'];
$rect_width = $_GET['rect_width'];
$rect_height = $_GET['rect_height'];
$project_name = $_GET['project_name'];
$img_url = $_GET['img_url'];

$properties = 'template=' . $template . '&body_color=' . $body_color . '&headline_color=' . $headline_color . '&headline_size=' . $headline_size . '&headline_top_marg=' . $headline_top_marg . '&headline_bot_marg=' . $headline_bot_marg . '&subtxt_color=' . $subtxt_color . '&subtxt_size=' . $subtxt_size . '&subtxt_bot_marg=' . $subtxt_bot_marg . '&disctxt_color=' . $disctxt_color . '&disctxt_size=' . $disctxt_size . '&disctxt_bot_marg=' . $disctxt_bot_marg  . '&btn_color=' . $btn_color . '&btn_txt_color=' . $btn_txt_color . '&btn_text=' . $btn_text .'&btn_size=' . $btn_size . '&btn_bot_marg=' . $btn_bot_marg . '&ios_btn_url=' . $ios_btn_url .'&android_btn_url=' . $android_btn_url . '&hero_img=' . $hero_img . '&img_url=' . $img_url . '&html_class=' . $html_class . '&hero_img_size=' . $hero_img_size . '&rect_left=' . $rect_left . '&rect_top=' . $rect_top . '&rect_width=' . $rect_width . '&rect_height=' . $rect_height;

if (!$hero_img) {
	$hero_img = $img_url;
}

?>
<!doctype html>
<html class="no-js <?php echo $html_class ?>" lang="">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	.os_link {
		padding: 3% 6%;
		text-align: center;
		text-decoration: none;
		font-size: <?php echo $btn_size/10; ?>em;
		line-height: 1;
		border-radius: 0.20em;
		width: auto;
		cursor: pointer;
		border: none;
		outline: none;
		font-family: DIN-Bold;
		background-color: <?php echo $btn_color; ?>;
		color: <?php echo $btn_txt_color; ?>;
		margin-top: 0;
		margin-bottom: <?php echo $btn_bot_marg; ?>%;
		margin-left: 6%;
		margin-right: 6%;
	}

	.close_button {
		position: absolute;
		left: 0;
		top: 0;
		width: 25%;
		height: 15%;
		z-index: 9999;
		background: transparent;
		background-image: url(https://d3nbjfyscfbvsc.cloudfront.net/imgs/misc/x-white.png);
		background-size: 30px 30px;
		background-repeat: no-repeat;
		background-position: 15px 15px ;
	}
	html.inbox .close_button {
		display: none;
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
		background-image: url('.$hero_img.');
		background-repeat: no-repeat;
		background-position: center;
		background-size: '. $hero_img_size .';
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
		<a class="os_link">' . $btn_text . '</a>
		<h3>'. $disctxt_text . '</h3>
	</div>
	</div>
	<a class="close_button" href="appboy://close"></a>';
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
			background-image: url('.$hero_img.');
			background-repeat: no-repeat;
			background-position: center;
			background-size: '. $hero_img_size .';
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
				<a class="os_link">' . $btn_text . '</a>
				<h3>'. $disctxt_text . '</h3>
			</div>
		</div>
		<a class="close_button" href="appboy://close"></a>';
	break;
case 'template3':
	print '
	<style>
		body {
			display: table;
			width: 100%;
			background-image: url('.$hero_img.');
			background-repeat: no-repeat;
			background-position: center;
			background-size: '. $hero_img_size .';
			background-color: '. $body_color .';
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
		<a class="os_link">' . $btn_text . '</a>
		<h3>'. $disctxt_text . '</h3>
		</div>
		<a class="close_button" href="appboy://close"></a>';
	break;
case 'template4':
	print '
	<style>
		.container {
			position: relative;
			width: 100%;
			height: 100%;
			background-image: url('.$hero_img.');
			background-repeat: no-repeat;
			background-position: center;
			background-size: '. $hero_img_size .';
			background-color: '. $body_color .';
		}
		.os_link {
			position: absolute;
			z-index: 999;
			top: '.$rect_top.';
			left: '.$rect_left.';
			height: '.$rect_height.';
			width: '.$rect_width.';
			border: none;
			outline: none;
			text-decoration: none;
			border-radius: 0;
			cursor: pointer;
			margin: 0;
			padding: 0;
			background-color: transparent;
		}
		.disclaimer_box {
			display: none;
			position: absolute;
			z-index: 9999;
			width: 280px;
			height: 370px;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			margin: auto;
			background: #dededef2;
			border-radius: 15px;
			font-family: sans-serif;
		}
		.popup.disclaimer_box {
			display: flex;
			flex-wrap: wrap;
		}
		.headline {
			font-size: 16px;
			margin: 20px auto 30px;
		}
		.text_box {
			width: 266px;
	    height: 233px;
	    margin: 0 auto 20px;
	    padding: 5px;
	    box-sizing: border-box;
	    background: #fff;
	    font-size: 12px;
	    line-height: 1.5;
		}
		hr {
			border: 0;
			margin: 0;
			width: 100%;
			height: 1px;
			background: #cbcbcb;
		}
		a {
			color: #1872e3;
			text-decoration: none;
		}
		.btn {
			width: 138px;
			font-size: 16px;
			padding: 15px 0;
			cursor: pointer;
		}
		.cancel {
			border-right: 1px solid #cbcbcb;
		}
	</style>
	<div class="container">
		<a class="os_link"></a>
		<a class="close_button" href="appboy://close"></a>
		<div class="disclaimer_box">
			<div class="headline">Subscription Information</div>
			<div class="text_box">
				Subscription purchases will be charged to your iTunes account. Subscriptions auto­renew under identical terms unless cancelled at least 24 hours before the current period ends. You can manage or cancel auto­renewal in your iTunes Account Settings after purchase. Any unused portion of a free trial period will be forfeited when you purchase a subscription. Any introductory pricing will automatically renew at the regular pricing after the time frame stated in the promotion. For more information, visit our <a href="grindr://openURL?url=https://www.grindr.com/app/terms-of-service/?lang=en"><strong>Terms</strong></a> and <a href="grindr://openURL?url=https://www.grindr.com/app/privacy-policy/?lang=en"><strong>Privacy Policy</strong></a>.
			</div>
			<hr />
			<a class="btn cancel" href="appboy://close">Cancel</a>
			<a class="btn continue">Continue</a>
		</div>
	</div>';
	break;
}
?>
	<script>
		var iosLink = '<?php echo $ios_btn_url ?>';
		var AndroidLink = '<?php echo $android_btn_url ?>';
		var osLink = document.querySelector('.os_link');
		var HTML = document.querySelector('html');
		var continueLink = document.querySelector('.continue');
		var disclaimerBox = document.querySelector('.disclaimer_box');

		var getMobileOS = function getMobileOS() {
			if (/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream) {
				HTML.classList.add('ios')
				return iosLink;
			} else {
				HTML.classList.add('android')
				return AndroidLink;
			}
		};

		var addOsAttributes = function addOnClick() {
			if (HTML.classList.contains('popup_box')) {
				continueLink.setAttribute('href', getMobileOS())
				osLink.addEventListener('click', function() {
					disclaimerBox.classList.add('popup')
				});
			} else {
				osLink.setAttribute('href', getMobileOS())
			}
		};
		window.addEventListener('load', addOsAttributes);
	</script>
</body>

</html>
<?php
mkdir('Projects/'.$project_name, 0700);

/* This allows the user to re-upload a different image */
array_map('unlink', glob('Projects/'.$project_name.'/*'));

array_map('unlink', glob('Projects/'.$project_name.'.zip'));

/* Move hero image from temp to project folder */
copy('Temp/'.$hero_img, 'Projects/'.$project_name.'/'.$hero_img);

/* Get the content that is in the buffer and put it in your file */
file_put_contents('Projects/'.$project_name.'/index.html', ob_get_contents());

/* creates a compressed zip file */
function create_zip($files = array(),$destination = '',$overwrite = false) {
	//if the zip file already exists and overwrite is false, return false
	if(file_exists($destination) && !$overwrite) { return false; }
	//vars
	$valid_files = array();
	//if files were passed in...
	if(is_array($files)) {
		//cycle through each file
		foreach($files as $file) {
			//make sure the file exists
			if(file_exists($file)) {
				$valid_files[] = $file;
			}
		}
	}
	//if we have good files...
	if(count($valid_files)) {
		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		//add the files
		foreach($valid_files as $file) {
			$new_filename = substr($file,strrpos($file,'/') + 1);
			$zip->addFile($file,$new_filename);
		}
		//debug
		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;

		//close the zip -- done!
		$zip->close();

		//check to make sure the file exists
		return file_exists($destination);

	}
	else
	{
		return false;
	}
}
if ($hero_img) {
	$files_to_zip = array(
		'Projects/'.$project_name.'/index.html',
		'Projects/'.$project_name.'/'.$hero_img,
	);
} else {
	$files_to_zip = array(
		'Projects/'.$project_name.'/index.html'
	);
}
//if true, good; if false, zip creation failed

$result = create_zip($files_to_zip,'Projects/'.$project_name.'.zip');
