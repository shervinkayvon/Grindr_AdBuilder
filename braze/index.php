<!doctype html>
<html lang="en" class="phone">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="pragma" content="no-cache" />
		<title>Braze Ad Builder</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
		<link href="assets/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>
			<span><img class="logo" src="assets/img/hero.png" alt=""></span><span class="title">Braze Ad Builder</span>
		</h1>
		<!-- CHOOSE TEMPLATE TO EDIT -->
		<div id="template_picker">
			<div id="template1" class="templates">
				<h3>Template 1</h3>
				<img src="assets/img/template1.png" alt="">
			</div>
			<div id="template2" class="templates">
				<h3>Template 2</h3>
				<img src="assets/img/template2.png" alt="">
			</div>
			<div id="template3" class="templates">
				<h3>Template 3</h3>
				<img src="assets/img/template3.png" alt="">
			</div>
			<div id="template4" class="templates">
				<h3>Template 4</h3>
				<img src="assets/img/template4.png" alt="">
			</div>
		</div>

		<!-- TEMPLATE EDITOR PANEL -->
		<div id="template_builder">

			<!-- PROJECT NAME -->
			<div id="project_edit">
				<h3>PROJECT NAME</h3>
				<form id="project_name_form" name="projectName">
					<input id="project_name" placeholder="e.g. My_Project" type="text" autofocus="autofocus" name="pname" required>
					<button id="create_project" class="btn" type="button"  required>CREATE PROJECT</button>
				</form>
			</div>

			<div id="build_box_wrapper">
				<div id="device_view">
					<h3>DEVICE PREVIEW</h3>
					<p><strong>This is just a preview of what your ad will look like on a phone vs a tablet.</strong></p>
					<div class="devices btn-group" data-toggle="buttons">
						<label id="phone" class="btn btn-primary active">
							<input type="radio" name="options" autocomplete="off">Phone
						</label>
						<label id="tablet" class="btn btn-primary">
							<input type="radio" name="options" autocomplete="off">Tablet
						</label>
					</div>
				</div>
				<div id="ad_type_view">
					<h3>AD TYPE <span>*</span></h3>
					<div class="adtype btn-group" data-toggle="buttons">
						<label id="in_app" class="btn btn-primary">
							<input type="radio" name="options" autocomplete="off" checked>In-App
						</label>
						<label id="inbox" class="btn btn-primary">
							<input type="radio" name="options" autocomplete="off">Inbox
						</label>
					</div>
					<br>
					<br>
				</div>
				<div id="button_area">
					<h3>BUTTON SELECTION AREA <span>*</span></h3>
					<p><strong>To specify the clickable area, click and drag on the area of the creative where your button is.</strong></p>
					<div class="btn-group" data-toggle="buttons">
						<label id="redo_selection" class="btn btn-primary">
							<input type="radio" name="options" autocomplete="off" value="Redo Selection" checked>Redo Selection
						</label>
					</div>
				</div>
				<div id="inbox_header"></div>
				<div id="in_app_X"></div>
				<div id="canvas">
					<iframe id="build_box" src=""></iframe>
				</div>
			</div>
			<div id="admin_box">

				<!-- BODY EDIT -->
				<div id="body_edit">
					<h3>BODY</h3>
					<div class="content_options bg_color">
						<h4>BACKGROUND COLOR</h4>
						<div data-format="rgba" class="cp8 input-group colorpicker-component">
							<input type="text" value="rgba(255, 255, 255)" class="form-control" />
							<span class="input-group-addon"><i></i></span>
						</div>
					</div>
					<hr>
				</div>

				<!-- HEADLINE EDIT -->
				<div id="headline_edit">
					<h3>HEADLINE</h3>
					<div class="content_options text">
						<h4>TEXT</h4>
						<input id="headline_txt" placeholder="Headline" type="text" value="headline">
					</div>
					<div class="content_options size">
						<h4>SIZE</h4>
						<div class="input-group">
							<span class="input-group-btn">
								<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[1]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input id="headline_size" type="text" name="quant[1]" class="form-control input-number" value="60" min="-1000" max="1000">
							<span class="input-group-btn">
								<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[1]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<div class="content_options color">
						<h4>COLOR</h4>
						<div data-format="rgba" class="cp8 input-group colorpicker-component">
							<input type="text" value="black" class="form-control" />
							<span class="input-group-addon"><i></i></span>
						</div>
					</div>
					<div class="content_options top_marg">
						<h4>TOP MARGIN</h4>
						<div class="input-group">
							<span class="input-group-btn">
								<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input id="headline_top_marg" type="text" name="quant[2]" class="form-control input-number" value="0" min="-1000" max="1000">
							<span class="input-group-btn">
								<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<div class="content_options bot_marg">
						<h4>BOTTOM MARGIN</h4>
						<div class="input-group">
							<span class="input-group-btn">
								<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[3]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input id="headline_bot_marg" type="text" name="quant[3]" class="form-control input-number" value="8" min="-1000" max="1000">
							<span class="input-group-btn">
								<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[3]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<hr>
				</div>


				<!-- SUB TEXT EDIT -->
				<div id="subtext_edit">
					<h3>SUBTEXT</h3>
					<div class="content_options text">
						<h4>TEXT</h4>
						<textarea  id="sub_txt" rows="4" cols="50"></textarea>

					</div>
					<div class="content_options size">
						<h4>SIZE</h4>
						<div class="input-group">
							<span class="input-group-btn">
								<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[4]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input id="subtxt_size" type="text" name="quant[4]" class="form-control input-number" value="20" min="-1000" max="1000">
							<span class="input-group-btn">
								<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[4]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<div class="content_options color">
						<h4>COLOR</h4>
						<div data-format="rgba" class="cp8 input-group colorpicker-component">
							<input type="text" value="black" class="form-control" />
							<span class="input-group-addon"><i></i></span>
						</div>
					</div>
					<div class="content_options bot_marg">
						<h4>BOTTOM MARGIN</h4>
						<div class="input-group">
							<span class="input-group-btn">
								<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[6]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input id="subtxt_bot_marg" type="text" name="quant[6]" class="form-control input-number" value="8" min="-1000" max="1000">
							<span class="input-group-btn">
								<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[6]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<hr>
				</div>

				<!-- BUTTON EDIT -->
				<div id="button_edit">
					<h3>BUTTON <span>*</span></h3>
					<p><strong>Repeat same link if you don't have device specific links.</strong></p>
					<div class="content_options text">
						<h4>TEXT</h4>
						<input id="button_txt" type="text">
					</div>
					<div class="content_options ios_url">
						<h4>iOS URL</h4>
						<input id="button_url_ios" type="text">
					</div>
					<div class="content_options android_url">
						<h4>Android URL</h4>
						<input id="button_url_android" type="text">
					</div>
					<div class="content_options size">
						<h4>SIZE</h4>
						<div class="input-group">
							<span class="input-group-btn">
								<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[7]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input id="button_size" type="text" name="quant[7]" class="form-control input-number" value="20" min="-1000" max="1000">
							<span class="input-group-btn">
								<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[7]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<div class="content_options color">
						<h4>TEXT COLOR</h4>
						<div data-format="rgba" class="cp8 input-group colorpicker-component">
							<input type="text" value="white" class="form-control txt-clr" />
							<span class="input-group-addon"><i></i></span>
						</div>
					</div>
					<div class="content_options bg_color">
						<h4>BUTTON COLOR</h4>
						<div data-format="rgba" class="cp8 input-group colorpicker-component">
							<input type="text" value="black" class="form-control btn-clr" />
							<span class="input-group-addon"><i></i></span>
						</div>
					</div>
					<div class="content_options bot_marg">
						<h4>BOTTOM MARGIN</h4>
						<div class="input-group">
							<span class="input-group-btn">
								<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[9]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input id="button_bot_marg" type="text" name="quant[9]" class="form-control input-number" value="8" min="-1000" max="1000">
							<span class="input-group-btn">
								<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[9]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<hr>
				</div>

				<div id="legal_disclaimer">
					<h3>BRAZE LEGAL DISCLAIMER</h3>
					<div class="leagl btn-group" data-toggle="buttons">
						<label id="legal_off" class="btn btn-primary active">
							<input type="radio" name="options" autocomplete="off" checked>Off
						</label>
						<label id="legal_on" class="btn btn-primary">
							<input type="radio" name="options" autocomplete="off">On
						</label>
					</div>
					<br>
					<br>
					<hr>
				</div>

				<!-- DISCLAIMER TEXT EDIT -->
				<div id="disctext_edit">
					<h3>DISCLAIMER</h3>
					<div class="content_options text">
						<h4>TEXT</h4>
						<textarea  id="disc_txt" rows="4" cols="50"></textarea>

					</div>
					<div class="content_options size">
						<h4>SIZE</h4>
						<div class="input-group">
							<span class="input-group-btn">
								<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[10]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input id="disctxt_size" type="text" name="quant[10]" class="form-control input-number" value="13" min="-1000" max="1000">
							<span class="input-group-btn">
								<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[10]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<div class="content_options color">
						<h4>COLOR</h4>
						<div data-format="rgba" class="cp8 input-group colorpicker-component">
							<input type="text" value="black" class="form-control" />
							<span class="input-group-addon"><i></i></span>
						</div>
					</div>
					<div class="content_options bot_marg">
						<h4>BOTTOM MARGIN</h4>
						<div class="input-group">
							<span class="input-group-btn">
								<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[12]">
									<span class="glyphicon glyphicon-minus"></span>
								</button>
							</span>
							<input id="disctxt_bot_marg" type="text" name="quant[12]" class="form-control input-number" value="0" min="-1000" max="1000">
							<span class="input-group-btn">
								<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[12]">
									<span class="glyphicon glyphicon-plus"></span>
								</button>
							</span>
						</div>
					</div>
					<hr>
				</div>

				<!-- IMAGE EDIT -->
				<div id="image_edit">
					<h3>IMAGE UPLOAD <span>*</span></h3>
					<p><strong>Make sure your image is no greater than 450kb (for In-App) and 950kb (for Inbox).</strong></p>
					<form id="imagepicker" action="upload.php" class="dropzone"></form>
					<h3>IMAGE URL</h3>
					<p><strong>If image is too large to upload, paste link to image below.</strong></p>
					<div class="content_options img_url_section">
						<input id="img_url" type="text">
					</div>
					<br>
					<div class="content_options bg_size">
						<h4>IMAGE SCALE TYPE</h4>
						<div class="btn-group" data-toggle="buttons">
							<label id="contain" class="btn btn-primary active">
								<input type="radio" name="options" autocomplete="off" value="contain">Contain
							</label>
							<label id="cover" class="btn btn-primary">
								<input type="radio" name="options" autocomplete="off" value="cover" checked>Cover
							</label>
						</div>

					</div>
					<hr>
				</div>

				<!-- EXPORT ZIP FILE -->
				<div id="export_zip">
					<button id="submit" class="btn">EXPORT ZIP</button>
				</div>
				<h4><span>*</span> Required sections</h4>
			</div>
		</div>

		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
		<link href="assets/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
		<script src="assets/dropzone.js"></script>
		<script src="assets/counter.js"></script>
		<script src="assets/AdBuildr.js"></script>
	</body>
</html>
