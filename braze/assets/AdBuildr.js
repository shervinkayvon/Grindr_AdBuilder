/*


 ███▄ ▄███▓ ▄▄▄      ▓█████▄     ▄▄▄      ▓█████▄  ███▄ ▄███▓ ██▓ ███▄    █
▓██▒▀█▀ ██▒▒████▄    ▒██▀ ██▌   ▒████▄    ▒██▀ ██▌▓██▒▀█▀ ██▒▓██▒ ██ ▀█   █
▓██    ▓██░▒██  ▀█▄  ░██   █▌   ▒██  ▀█▄  ░██   █▌▓██    ▓██░▒██▒▓██  ▀█ ██▒
▒██    ▒██ ░██▄▄▄▄██ ░▓█▄   ▌   ░██▄▄▄▄██ ░▓█▄   ▌▒██    ▒██ ░██░▓██▒  ▐▌██▒
▒██▒   ░██▒ ▓█   ▓██▒░▒████▓     ▓█   ▓██▒░▒████▓ ▒██▒   ░██▒░██░▒██░   ▓██░
░ ▒░   ░  ░ ▒▒   ▓▒█░ ▒▒▓  ▒     ▒▒   ▓▒█░ ▒▒▓  ▒ ░ ▒░   ░  ░░▓  ░ ▒░   ▒ ▒
░  ░      ░  ▒   ▒▒ ░ ░ ▒  ▒      ▒   ▒▒ ░ ░ ▒  ▒ ░  ░      ░ ▒ ░░ ░░   ░ ▒░
░      ░     ░   ▒    ░ ░  ░      ░   ▒    ░ ░  ░ ░      ░    ▒ ░   ░   ░ ░
	 ░         ░  ░   ░             ░  ░   ░           ░    ░           ░
			░                    ░

Authors : {
  Carl 'Say hello to my little friend' Welch,
  Shervin 'Xerxes, the humus fumungas' Kayvon
}

*/



$(() => {
	"use strict"

	let rectLeft = null
	let rectTop = null
	let rectWidth = null
	let rectHeight = null
	let refreshImg
	let endInt

	let ADBUILDER = ({

		project_name: $('#project_name'),
		template: null,
		iframe: null,
		BODY: {
			css: null
		},
		body_color_input: $('#body_edit .colorpicker-component input'),
		HEADLINE: null,
		headline_color_input: $('#headline_edit .colorpicker-component input'),
		headline_size_input: $('#headline_size'),
		headline_top_marg_input: $('#headline_top_marg'),
		headline_bot_marg_input: $('#headline_bot_marg'),
		SUBTEXT: null,
		subtxt_color_input: $('#subtext_edit .colorpicker-component input'),
		subtxt_size_input: $('#subtxt_size'),
		subtxt_bot_marg_input: $('#subtxt_bot_marg'),
		DISCTEXT: null,
		disctxt_color_input: $('#disctext_edit .colorpicker-component input'),
		disctxt_size_input: $('#disctxt_size'),
		disctxt_bot_marg_input: $('#disctxt_bot_marg'),
		BUTTON: null,
		btn_color_input: $('#button_edit .colorpicker-component input.btn-clr'),
		btn_txt_color_input: $('#button_edit .colorpicker-component input.txt-clr'),
		btn_size_input: $('#button_size'),
		btn_bot_marg_input: $('#button_bot_marg'),
		ios_btn_url: $('#button_url_ios'),
		android_btn_url: $('#button_url_android'),
		HERO: null,
		hero_img: '',
		hero_img_size: 'contain',

		init: function () {
			console.log('Lets do this!')
			$('#headline_txt').val('HEADLINE')
			$('#sub_txt').val("Here is some placeholder text.")
			$('#disc_txt').val("Here is some placeholder text.")
			$('#button_txt').val('CALL TO ACTION')
			this.chooseTemplate()
			let _this = this
			//SWITCH IFRAME FROM MOBILE TO TABLET
			$('#inbox').click(function () {
				$('html').removeClass('in_app').addClass('inbox')
			})
			$('#in_app').click(function () {
				$('html').removeClass('inbox').addClass('in_app')
			})
			$('#phone').click(function () {
				$('html').removeClass('tablet').addClass('phone')
			})
			$('#tablet').click(function () {
				$('html').removeClass('phone').addClass('tablet')
			})
			$('.devices label').click(function () {
				if (!$(this).hasClass('active')) {
					$('.devices label').removeClass('active')
					$(this).addClass('active')
				}
			})

			$('#image_edit .btn-group label').click(function () {
				let bg_type = $(this).attr('id')
				_this.hero_img_size = bg_type
				_this.HERO.css({
					'background-size': bg_type
				})
			})

			this.setProjectName()
		},

		chooseTemplate: function () {
			// CHOOSE TEMPLATE
			console.log('CHOOSE TEMPLATE')
			let _this = this
			$('#template_picker .templates').click(function () {
				console.log($(this).attr('id'))
				_this.template = $(this).attr('id')
				$('body').addClass(_this.template)
				if (_this.template === 'template2') {
					_this.headline_bot_marg_input.val('0')
				}
				if (_this.template === 'template4') {
					$('#button_txt').val('')
					$('#button_edit .colorpicker-component').colorpicker('setValue', 'transparent')
					$('#body_edit .colorpicker-component').colorpicker('setValue', 'black')
					_this.btn_bot_marg_input.val('0')
				}
				$('#template_picker').hide()
				$('#template_builder').show(function () {
					console.log('#template_builder SHOWN')
					_this.loadIframe()

				})
			})
			this.startTimer()
			this.imageLoader()
			this.initSubmit()
		},

		addPopBox: function () {
			let urlVal = this.ios_btn_url.val()
			if (urlVal !== '') {
				if (urlVal.indexOf('http') === -1) {
					$('html').addClass('popup_box')
				} else {
					$('html').removeClass('popup_box')
				}
			}
		},

		checkForImage: function () {
			let imgpicker = $('#imagepicker img').attr('alt')
			if (!imgpicker) {
				return ''
			} else {
				return imgpicker
			}
		},

		getHtmlClass: function () {
			let get_html_class = $('html').attr('class')
			return get_html_class
		},

		getQueryStr: function (phase) {
			let TEMPLATE
			switch (phase) {
				case 'init':
					TEMPLATE = 'assets/iframe-files/index.php?template=' + this.template
					break
				case 'build':
					TEMPLATE = 'exportFiles.php?template=' + this.template
			}


			let queryStr = TEMPLATE +
				'&body_color=' + this.body_color_input.val() +
				'&headline_text=' + $('#headline_txt').val() +
				'&headline_color=' + this.headline_color_input.val() +
				'&headline_size=' + $('#headline_size').val() +
				'&headline_top_marg=' + $('#headline_top_marg').val() +
				'&headline_bot_marg=' + $('#headline_bot_marg').val() +
				'&subtxt_text=' + $('#sub_txt').val() +
				'&subtxt_color=' + this.subtxt_color_input.val() +
				'&subtxt_size=' + $('#subtxt_size').val() +
				'&subtxt_bot_marg=' + $('#subtxt_bot_marg').val() +
				'&disctxt_text=' + $('#disc_txt').val() +
				'&disctxt_color=' + this.disctxt_color_input.val() +
				'&disctxt_size=' + $('#disctxt_size').val() +
				'&disctxt_bot_marg=' + $('#disctxt_bot_marg').val() +
				'&btn_text=' + $('#button_txt').val() +
				'&btn_color=' + this.btn_color_input.val() +
				'&btn_txt_color=' + this.btn_txt_color_input.val() +
				'&btn_size=' + $('#button_size').val() +
				'&btn_bot_marg=' + $('#button_bot_marg').val() +
				'&ios_btn_url=' + encodeURIComponent($('#button_url_ios').val()) + '&android_btn_url=' + encodeURIComponent($('#button_url_android').val()) +
				'&hero_img=' + this.checkForImage() +
				'&hero_img_size=' + this.hero_img_size +
				'&rect_left=' + rectLeft +
				'&rect_top=' + rectTop +
				'&rect_width=' + rectWidth +
				'&rect_height=' + rectHeight +
				'&html_class=' + this.getHtmlClass() +
				'&project_name=' + this.project_name.val() +
				'&img_url=' + $('#img_url').val()

			return queryStr
		},

		loadIframe: function () {
			let _this = this

			let queryStr = this.getQueryStr('init')

			$('#build_box').attr('src', queryStr).load(function () {
				console.log('IFRAME LOADED')
				_this.iframe = $('#build_box').contents()
				_this.BODY = _this.iframe.find('body')
				_this.HEADLINE = _this.iframe.find('h1')
				_this.SUBTXT = _this.iframe.find('h2')
				_this.DISCTXT = _this.iframe.find('h3')
				_this.BUTTON = _this.iframe.find('button')

				// CHECK WHICH TEMPLATE / SO WE KNOW WHERE TO PUT THE IMAGE
				switch (_this.template) {
					case 'template1':
						_this.HERO = _this.iframe.find('.top_container')
						break
					case 'template2':
						_this.HERO = _this.iframe.find('.middle_container')
						break
					case 'template3':
						_this.HERO = _this.iframe.find('body')
						break
					case 'template4':
						_this.HERO = _this.iframe.find('body')
						break
				}
				_this.startTimer()
			})

			console.log(queryStr)

		},

		initSubmit: function () {
			let _this = this
			$('#submit').on('click', function () {
				const imagePicker = $('#imagepicker').hasClass('dz-started')
				const imageUrl = $('#img_url').val()
				const buttoniOSUrlVal = $('#button_url_ios').val()
				const buttonAndroidUrlVal = $('#button_url_android').val()
				const canvasInApp = $('html').hasClass('in_app')
				const canvasInbox = $('html').hasClass('inbox')
				const template4 = $('body').hasClass('template4')
				const rectangleLink = $('.rectangle').length

				// Check if required section are completed
				if ((imagePicker || imageUrl) && buttoniOSUrlVal && buttonAndroidUrlVal && (canvasInApp || canvasInbox)) {
					if (template4) {
						if (rectangleLink) {
							_this.submitToAPI()
						} else {
							alert("Please complete all required sections")
						}
					} else if (!template4) {
						_this.submitToAPI()
					} else {
						alert("Please complete all required sections")
					}
				} else {
					alert("Please complete all required sections")
				}
			})
		},

		imageLoader: function () {
			let _this = this
			let firstClick = true
			let cleanHero

			$('#imagepicker').on('click dragover', function (e) {
				$('#imagepicker').removeClass('dz-started')
				$('.dz-preview').remove()
				$('.dz-message span').text('Drop files here or click to upload.')

				let pullAlt = setInterval(function () {
					let hero = $('#imagepicker img').attr('alt')
					//This cleans the file names
					let fileName = hero.substring(0, hero.lastIndexOf(".") + 1)
					let cleanFileName = fileName.replace(/[^0-9a-zA-Z]/g, '')
					let fileExt = hero.substring(hero.lastIndexOf(".") + 1, hero.length)
					cleanHero = cleanFileName + '.' + fileExt

					hero = $('#imagepicker img').attr('alt', cleanHero)

					$(_this.HERO).css({
						'background-image': 'url(../../Temp/' + cleanHero + ')',
						'background-size': _this.hero_img_size,
					})

					if ($('#imagepicker').hasClass('dz-started')) {
						clearInterval(pullAlt)
						$('.dz-message span').text('upload new image')
					}
				}, 500)

				endInt = function () {
					$(_this.HERO).css({
						'background-image': ''
					})
					clearInterval(refreshImg)
					console.log('removed img')
				}
				endInt()

				refreshImg = setInterval(function () {
					if ($('#imagepicker').hasClass('dz-started')) {
						$(_this.HERO).css({
							'background-image': 'url(../../Temp/' + cleanHero + '), url(../img/loading.gif)'
						})
						console.log('has img')
					}
				}, 1000)

			})
		},

		imageUrl: function () {
			let _this = this
			let img_url = $('#img_url')
			img_url.on('input', function () {
				$(this).val($(this).val().replace(/ /g, ''))
			})

			$(_this.HERO).css({
				'background-image': 'url(' + img_url.val() + ')'
			})

			$('.dz-preview').remove()
		},

		submitToAPI: function () {
			//SUBMIT SETTINGS TO PHP API using axios or something
			let _this = this
			let queryStr = this.getQueryStr('build')
			console.log('+++++++queryStr', queryStr)
			//axios.post(queryStr)
			axios.post(queryStr).then(function (response) {
				window.location.href = 'Projects/' + _this.project_name.val() + '.zip'
			})

		},

		startTimer: function () {
			console.log('TIMER STARTED')
			let _this = this
			$("body").on('mouseup change', function () {
				_this.update()
			})

			$("body").on('keyup change', function () {
				_this.update()
			})

			$("#img_url").on('paste keyup', function () {
				if (endInt) {
					endInt()
				}
				setTimeout(function () {
					_this.imageUrl()
				}, 500)
			})
		},

		update: function () {
			this.setBody()
			this.setHeadline()
			this.setSubtext()
			this.setDisctext()
			this.setButton()
			this.getHtmlClass()
			this.addPopBox()
		},

		setProjectName: function () {
			// SET PROJECT NAME
			let projectName = $('#project_name').val(),
				projectNameBtn = $('#create_project')
			this.project_name.keypress(function (e) {
				let key = e.which
				if (key === 13) {
					$('#create_project').click()
					return false
				}
			})
			this.project_name.on('input', function () {
				$(this).val($(this).val().replace(/[^0-9a-zA-Z_-]/g, ''))
			})

			projectNameBtn.on('click', function () {
				let x = document.forms["projectName"]["pname"].value
				if (x == "") {
					alert("Please enter project name.")
					return false
				} else {
					$("#template_builder").addClass("active")
					$("#project_edit h3").text($("#project_name").val())
					setClickableArea()
				}
			})
		},

		setBody: function () {
			// SET BODY
			let color = this.body_color_input.val()
			$(this.BODY).css({
				'background-color': color
			})
		},

		setHeadline: function () {
			// SET HEADLINE
			$(this.HEADLINE).text($('#headline_txt').val())
			let size = this.headline_size_input.val()
			size = size / 10
			let top_marg = this.headline_top_marg_input.val()
			let bot_marg = this.headline_bot_marg_input.val()
			let color = this.headline_color_input.val()
			$(this.HEADLINE).css({
				'font-size': size + 'em',
				'color': color,
				'margin-top': top_marg + '%',
				'margin-bottom': bot_marg + '%'
			})
		},

		setSubtext: function () {
			// SET SUBTEXT
			$(this.SUBTXT).text($('#sub_txt').val())
			let size = this.subtxt_size_input.val()
			size = size / 10
			let bot_marg = this.subtxt_bot_marg_input.val()
			let color = this.subtxt_color_input.val()
			$(this.SUBTXT).css({
				'font-size': size + 'em',
				'color': color,
				'margin-bottom': bot_marg + '%'
			})
		},

		setDisctext: function () {
			// SET DISCTEXT
			$(this.DISCTXT).text($('#disc_txt').val())
			let size = this.disctxt_size_input.val()
			size = size / 10
			let bot_marg = this.disctxt_bot_marg_input.val()
			let color = this.disctxt_color_input.val()
			$(this.DISCTXT).css({
				'font-size': size + 'em',
				'color': color,
				'margin-bottom': bot_marg + '%'
			})
		},

		setButton: function () {
			// SET BUTTON
			let _this = this
			$(this.BUTTON).text($('#button_txt').val())
			let size = this.btn_size_input.val()
			size = size / 10
			let bot_marg = this.btn_bot_marg_input.val()
			let btn_color = this.btn_color_input.val()
			let color = this.btn_txt_color_input.val()
			let ios_url = this.ios_btn_url.val()
			let android_url = this.android_btn_url.val()
			this.ios_btn_url.on('input', function () {
				$(this).val($(this).val().replace(/ /g, ''))
			})
			this.android_btn_url.on('input', function () {
				$(this).val($(this).val().replace(/ /g, ''))
			})

			$(this.BUTTON).attr("onclick", "window.open('" + ios_url + "')")

			$('.rectangle').attr("onclick", "window.open('" + ios_url + "')")

			$(this.BUTTON).css({
				'font-size': size + 'em',
				'color': color,
				'background-color': btn_color,
				'margin-bottom': bot_marg + '%',
				'left': rectLeft,
				'top': rectTop,
				'width': rectWidth,
				'height': rectHeight
			})

		}

	}).init()

	const setClickableArea = () => {
		// SET CLICKABLE AREA
		const canvas = document.getElementById('canvas')
		const setMousePosition = (e) => {
			const ev = e || window.event
			if (ev.pageX) {
				mouse.x = ev.pageX - canvas.offsetLeft
				mouse.y = ev.pageY - canvas.offsetTop
			}
		}

		const mouse = {
			x: 0,
			y: 0,
			startX: 0,
			startY: 0
		}

		let element = null

		canvas.addEventListener('mousemove', (e) => {
			setMousePosition(e)
			if (element !== null) {
				element.style.width = Math.abs(((mouse.x - mouse.startX) / canvas.clientWidth) * 100).toFixed(2) + '%'
				element.style.height = Math.abs(((mouse.y - mouse.startY) / canvas.clientHeight) * 100).toFixed(2) + '%'
				element.style.left = (mouse.x - mouse.startX < 0) ? ((mouse.x / canvas.clientWidth) * 100).toFixed(2) + '%' : ((mouse.startX / canvas.clientWidth) * 100).toFixed(2) + '%'
				element.style.top = (mouse.y - mouse.startY < 0) ? ((mouse.y / canvas.clientHeight) * 100).toFixed(2) + '%' : ((mouse.startY / canvas.clientHeight) * 100).toFixed(2) + '%'
			}
		})

		const redoSelection = document.getElementById('redo_selection')
		let createElm = true

		canvas.addEventListener('mousedown', (e) => {
			if (createElm) {
				mouse.startX = mouse.x
				mouse.startY = mouse.y
				element = document.createElement('div')
				element.className = 'rectangle'
				element.style.left = ((mouse.x / canvas.clientWidth) * 100).toFixed(2) + '%'
				element.style.top = ((mouse.y / canvas.clientHeight) * 100).toFixed(2) + '%'
				canvas.appendChild(element)
				canvas.style.cursor = 'crosshair'
			}
		})

		const mouseupAndLeave = () => ['mouseup', 'mouseleave'].map((e) => {
			canvas.addEventListener(e, () => {
				if (element !== null) {
					element = null
					canvas.style.cursor = 'default'
					createElm = false
					const rect = document.querySelector('.rectangle')
					rectLeft = rect.style.left
					rectTop = rect.style.top
					rectWidth = rect.style.width
					rectHeight = rect.style.height
				}
			})
		})
		mouseupAndLeave()

		redoSelection.addEventListener('click', (e) => {
			if (!createElm) {
				createElm = true
				canvas.style.cursor = 'crosshair'
				const rect = document.querySelector('.rectangle')
				rect.remove()
			}
		})
		console.log('set clickable area')
	}
})
