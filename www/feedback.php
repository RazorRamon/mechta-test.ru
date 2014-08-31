<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Заголовок</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

	    <link rel="stylesheet" type="text/css" href="/css/style-inside.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

		<!-- Videokarusel Fotorama -->
		<!--<link rel="stylesheet" type="text/css" href="/css/fotorama.css" />-->
		<!--<script type="text/javascript" src="/js/fotorama.js"></script>-->
		<script type="text/javascript" src="/js/youblisher/modernizr.2.5.3.min.js"></script>
		<script type="text/javascript" src="/js/youblisher/magazine.js"></script>
		<script type="text/javascript" src="/js/youblisher/hash.js"></script>
		<script type="text/javascript" src="/js/youblisher/scissor.js"></script>
		<script type="text/javascript" src="/js/youblisher/zoom.js"></script>
	</head>
	<body>
		<header>
			<div class="contacts"><span>+7 (495)</span> 624-59-88, <span>+7 (495)</span> 608-28-01; luxe.mechta<span>@</span>gmail.com</div>
			<div id="logotip">
				<div class="left"><span>Москва</span>Элитный<br />комиссионный магазин</div>
				<a class="center" href="/"></a>
				<div class="right">на рынке с <span>2000</span> года<br /><span>1-е место</span> в рейтинге</div>
			</div>
			<div id="top_menu">
				<div class="soc_ico">
					<a class="soc_ico-1" href="#"></a>
					<a class="soc_ico-2" href="#"></a>
					<a class="soc_ico-3" href="#"></a>
					<a class="soc_ico-4" href="#"></a>
				</div>
				<ul>
					<li><a href="#">О компании</a></li>
					<li><a href="/announcement.php">Важные объявления</a></li>
					<li><a href="/products.php">Наши товары</a></li>
					<li><a href="/news.php">СМИ о нас</a></li>
					<li><a href="/photogallery.php">Фото и видео</a></li>
					<li><a href="/working.php">Условия работы</a></li>
					<li class="active"><a href="/feedback.php">Отзывы наших покупателей</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
		</header>
		<div class="line_header_1"></div>
		<div style="position: relative;">
			<table style="position: absolute; width: 100%;" border="0">
				<tr>
					<td style="background-color: #eee; width: 50%; height: 14px;"></td>
					<td style="background-color: #fff; width: 50%; height: 14px;"></td>
				</tr>
			</table>
			<div class="wrap_line_2"><div class="line_header_2"></div><div class="title_page">Отзывы наших покупателей</div></div>
		</div>
		<div class="clear_div">&nbsp;</div>
		<main>

<div id="canvas">

	<div class="magazine-viewport">
		<div class="container">
			<div class="magazine">
				<!-- Next button -->
				<div ignore="1" class="next-button"></div>
				<!-- Previous button -->
				<div ignore="1" class="previous-button"></div>
			</div>
		</div>
		<!--<div class="navigation">
			<div class="navigation-buttons">
				<div id="firstPage" class="freecons navigationButton firstPage">&nbsp;</div>
				<div id="previousPage" class="freecons navigationButton previousPage">&nbsp;</div>
				<div id="nextPage" class="freecons navigationButton nextPage">&nbsp;</div>
				<div id="lastPage" class="freecons navigationButton lastPage">&nbsp;</div>
			</div>
		</div>
		<div class="navigation-left">
			<div id="fullscreen" class="fullscreen-icons fullscreen fullscreen-expand">&nbsp;</div>
			<div id="zoomTo" class="freecons navigationButton zoomIn">&nbsp;</div>
			<div id="currentPage" class="currentPage">p. 1 / 16</div>
		</div>
		<div class="navigation-right">
			<div class="navigation-buttons">
				<div id="downloadPdf" class="freecons navigationButton downloadPdf">&nbsp;</div>
			</div>
		</div>-->
	</div>

</div>

<script type="text/javascript">
$( "#firstPage" ).click(function() {
	$( ".magazine" ).turn('page', 1);
});
$( "#nextPage" ).click(function() {
	$( ".magazine" ).turn('next');
});
$( "#previousPage" ).click(function() {
	$( ".magazine" ).turn('previous');
});
$( "#lastPage" ).click(function() {
	$( ".magazine" ).turn('page', $( ".magazine" ).turn('pages'));
});
$( "#zoomTo" ).click(function(e) {
	zoomTo(e);

	if ($(this).hasClass('zoomIn')) {
		$('#zoomTo').removeClass('zoomIn').addClass('zoomOut');
	} else if ($(this).hasClass('zoomOut'))	{
		$('#zoomTo').removeClass('zoomOut').addClass('zoomIn');
	}
});
$( "#downloadPdf" ).click(function(e) {
	e.preventDefault();  //stop the browser from following
	window.location.href = 'http://www.youblisher.com/pdf/796854';
});

$('.fullscreen').bind('click', function() {
	//$('.magazine-viewport').zoom('zoomOut');	
	if ($(this).hasClass('fullscreen-expand')) {
		//alert("expand");
		$('#fullscreen').removeClass('fullscreen-expand').addClass('fullscreen-contract');
		vollbild();
	} else if ($(this).hasClass('fullscreen-contract'))	{
		//alert("contract");
		$('#fullscreen').removeClass('fullscreen-contract').addClass('fullscreen-expand');
		vollbild();
	}
	//resizeViewport();
});

function vollbild() {
	//alert("vollbild");
		/*
		alert(
			"top: " + $('.magazine').css('top') + "\n" + 
			"offset: " + $('.magazine').offset().top + "\n" + 
			"position: " + $('.magazine').position().top + "\n" + 
			"");
			*/

			//$('.magazine').css('top', $('.magazine').offset().top);
			//$('.magazine').css('top', $('.magazine').position().top);

	var element = document.getElementById("canvas");
	//var element = document.getElementsByTagName("body")[0];
	//var element = $('.magazine-viewport');
	//ar element = $('#canvas');

	if (element.requestFullScreen) {
		if (!document.fullScreen) {
			element.requestFullscreen();
			screenMode = "fullscreen";
		} else {
			document.exitFullScreen();
			screenMode = "normal";
		}
	} else if (element.mozRequestFullScreen) {
		if (!document.mozFullScreen) {
			element.mozRequestFullScreen();
			screenMode = "fullscreen";
		} else {
			document.mozCancelFullScreen();
			screenMode = "normal";
		}
	} else if (element.webkitRequestFullScreen) {

		if (!document.webkitIsFullScreen) {
			element.webkitRequestFullScreen();
			screenMode = "fullscreen";
		} else {
			document.webkitCancelFullScreen();
			screenMode = "normal";
		}
	} else {
		//alert("kein vollbild");
	}
}

function checkvollbild() {
	var element = document.getElementById("canvas");
	if (element.requestFullScreen) {
		if (document.fullScreen) {
			screenMode = "fullscreen";
		} else {
			screenMode = "normal";
		}
	} else if (element.mozRequestFullScreen) {
		if (document.mozFullScreen) {
			screenMode = "fullscreen";
		} else {
			screenMode = "normal";
		}
	} else if (element.webkitRequestFullScreen) {
		if (document.webkitIsFullScreen) {
			screenMode = "fullscreen";
		} else {
			screenMode = "normal";
		}
	} else {
		screenMode = "normal";
		//alert("kein vollbild");
	}
	//alert("screenmode: " + screenMode);
}
//document.getElementById("vollbild_link").addEventListener("click", vollbild, false);

//var imagePath = "http://static.youblisher.com/publications/133/796854/large-";
var imagePath = "/images/";
var flashpages = {
1: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
2: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
3: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
4: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
5: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
6: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
7: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
8: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
9: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
10: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
11: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
12: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
13: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
14: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
15: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' },
16: {file: 'page_feedback.png', wide: 'n', width: '585', height: '815', version: 'jpg' }};

// Width of the flipbook when zoomed in

function largeMagazineWidth() {
	
	return 3200;

}

var fixedWidth = null;
var fixedHeight = null;
var screenMode = "normal";
function loadApp() {

 	$('#canvas').fadeIn(1000);

 	var flipbook = $('.magazine');

 	// Check if the CSS was already loaded
	
	if (flipbook.width()==0 || flipbook.height()==0) {
		setTimeout(loadApp, 10);
		return;
	}
	
	// Create the flipbook
	$(".magazine .double").scissor();
	flipbook.turn({
			// Magazine width

			//width: 1400, 3200
			width: 1170,

			// Magazine height

			//height: 900, 2263
			height: 815,

			// Duration in millisecond

			duration: 1000,

			// Hardware acceleration

			acceleration: !isChrome(),

			// Enables gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true,

			// Elevation from the edge of the flipbook when turning a page

			elevation: 50,

			// The number of pages

			//pages: ,
			pages: 16,

			// Events

			when: {
				turning: function(event, page, view) {
					var book = $(this),
					currentPage = book.turn('page'),
					pages = book.turn('pages');
					$( "#currentPage" ).html('p. ' + page + ' / 16');

					// Update the current URI

					//Hash.go('page-' + page).update();

					// Show and hide navigation buttons

					disableControls(page);
					$('.thumbnails .page-'+currentPage).
						parent().
						removeClass('current');
					$('.thumbnails .page-'+page).
						parent().
						addClass('current');
				},

				turned: function(event, page, view) {
					disableControls(page);
					$(this).turn('center');
					if (page==1) { 
						//$(this).turn('peel', 'br');
						$(this).turn('peel', 'tr');
					}
				},
				zooming: function (event,  newZoomValue, currentZoomValue) {
					//alert("loader 1");
				},
				missing: function (event, pages) {
					// Add pages that aren't in the magazine
					for (var i = 0; i < pages.length; i++)
						addPage(pages[i], $(this));
				}
			}
	});
	// Zoom.js

	$('.magazine-viewport').zoom({
		flipbook: $('.magazine'),
		max: function() { 
			return largeMagazineWidth()/$('.magazine').width();
		}, 

		when: {
			swipeLeft: function() {
				$(this).zoom('flipbook').turn('next');
			},
			swipeRight: function() {
				$(this).zoom('flipbook').turn('previous');
			},
			resize: function(event, scale, page, pageElement) {
				if (scale==1) {
					loadSmallPage(page, pageElement);
				} else {
					loadLargePage(page, pageElement);
				}
			},

			zoomIn: function () {

				// scale the loader to the right position
				var zoomFactor = largeMagazineWidth()/$('.magazine').width();
				var top = parseInt(-11+(11 + parseInt($('.loader').css('top')))*zoomFactor);
				var left = parseInt(-11+(11 + parseInt($('.loader').css('left')))*zoomFactor);
				$('.loader').css({top: top, left: left});
				$('.thumbnails').hide();
				$('.made').hide();
				$('.magazine').removeClass('animated').addClass('zoom-in');
				$('.zoom-icon').removeClass('zoom-icon-in').addClass('zoom-icon-out');
				$('#zoomTo').removeClass('zoomIn').addClass('zoomOut');


				if (!window.escTip && !$.isTouch) {
					escTip = true;

					$('<div />', {'class': 'exit-message'}).
						html('<div>Press ESC to exit</div>').
							appendTo($('body')).
							delay(2000).
							animate({opacity:0}, 500, function() {
								$(this).remove();
							});
				}
			},

			zoomOut: function () {

				$('.exit-message').hide();
				$('.thumbnails').fadeIn();
				$('.made').fadeIn();
				$('.zoom-icon').removeClass('zoom-icon-out').addClass('zoom-icon-in');
				$('#zoomTo').removeClass('zoomOut').addClass('zoomIn');

				setTimeout(function(){
					$('.magazine').addClass('animated').removeClass('zoom-in');
					resizeViewport();
				}, 0);
			}
		}
	});

	// Zoom event

	if ($.isTouch)
		$('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
	else
		$('.magazine-viewport').bind('http://www.youblisher.com/p/796854-Correio-Regional-ed-283/zoom.tap', zoomTo);


	// Using arrow keys to turn the page

	$(document).keydown(function(e){

		var previous = 37, up = 38, next = 39, down = 40, esc = 27;

		switch (e.keyCode) {
			case previous:

				// left arrow
				$('.magazine').turn('previous');
				e.preventDefault();

			break;
			case up:

				// up arrow
				$('.magazine').turn('previous');
				e.preventDefault();

			break;
			case next:

				//right arrow
				$('.magazine').turn('next');
				e.preventDefault();

			break;
			case down:

				//down arrow
				$('.magazine').turn('next');
				e.preventDefault();

			break;
			case esc:
				
				$('.magazine-viewport').zoom('zoomOut');	
				e.preventDefault();

			break;
		}
	});

	// URIs - Format #/page/1 
	/*
	Hash.on('^page-([0-9]*)$', {
		yep: function(path, parts) {
			var page = parts[1];

			if (page!==undefined) {
				if ($('.magazine').turn('is'))
					$('.magazine').turn('page', page);
			}

		},
		nop: function(path) {

			if ($('.magazine').turn('is'))
				$('.magazine').turn('page', 1);
		}
	});
	*/

	if ($('.magazine').turn('is'))
		$('.magazine').turn('page', 1);

	$(window).resize(function() {
		resizeViewport();
	}).bind('orientationchange', function() {
		resizeViewport();
	});

	// Events for thumbnails

	$('.thumbnails').click(function(event) {
		var page;
		if (event.target && (page=/page-([0-9]+)/.exec($(event.target).attr('class'))) ) {
			$('.magazine').turn('page', page[1]);
		}
	});

	$('.thumbnails li').
		bind($.mouseEvents.over, function() {
			$(this).addClass('thumb-hover');
		}).bind($.mouseEvents.out, function() {
			$(this).removeClass('thumb-hover');
		});

	if ($.isTouch) {
		$('.thumbnails').
			addClass('thumbanils-touch').
			bind($.mouseEvents.move, function(event) {
				event.preventDefault();
			});
	} else {
		$('.thumbnails ul').mouseover(function() {
			$('.thumbnails').addClass('thumbnails-hover');
		}).mousedown(function() {
			return false;
		}).mouseout(function() {
			$('.thumbnails').removeClass('thumbnails-hover');
		});
	}

	/*
	// Regions

	if ($.isTouch) {
		$('.magazine').bind('touchstart', regionClick);
	} else {
		$('.magazine').click(regionClick);
	}
	*/

	// Events for the next button

	$('.next-button').bind($.mouseEvents.over, function() {
		$(this).addClass('next-button-hover');
	}).bind($.mouseEvents.out, function() {
		$(this).removeClass('next-button-hover');
	}).bind($.mouseEvents.down, function() {
		$(this).addClass('next-button-down');
	}).bind($.mouseEvents.up, function() {
		$(this).removeClass('next-button-down');
	}).click(function() {
		$('.magazine').turn('next');
	});

	// Events for the next button
	$('.previous-button').bind($.mouseEvents.over, function() {
		$(this).addClass('previous-button-hover');
	}).bind($.mouseEvents.out, function() {
		$(this).removeClass('previous-button-hover');
	}).bind($.mouseEvents.down, function() {
		$(this).addClass('previous-button-down');
	}).bind($.mouseEvents.up, function() {
		$(this).removeClass('previous-button-down');
	}).click(function() {
		$('.magazine').turn('previous');
	});

	resizeViewport();
	$('.magazine').addClass('animated');
}

// Zoom icon

 $('.zoom-icon').bind('mouseover', function() { 
 	
 	if ($(this).hasClass('zoom-icon-in'))
 		$(this).addClass('zoom-icon-in-hover');

 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).addClass('zoom-icon-out-hover');
 
 }).bind('mouseout', function() { 
 	
 	 if ($(this).hasClass('zoom-icon-in'))
 		$(this).removeClass('zoom-icon-in-hover');
 	
 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).removeClass('zoom-icon-out-hover');

 }).bind('click', function() {

 	if ($(this).hasClass('zoom-icon-in'))
 		$('.magazine-viewport').zoom('zoomIn');
 	else if ($(this).hasClass('zoom-icon-out'))	
		$('.magazine-viewport').zoom('zoomOut');

 });

 $('#canvas').hide();

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['/js/youblisher/turn.js'],
	//nope: ['/js/youblisher/turn.html4.min.js'],
	//both: ['zoom.min.js', 'magazine.js', 'magazine.css'],
	both: ['/js/youblisher/zoom.js', '/js/youblisher/magazine.js', '/js/youblisher/magazine.css'],
	complete: loadApp
});

</script>

			<div class="line_feedback"></div>
			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="footer_bottom">
				<div class="copyright">Элитный комиссионный магазин «Мечта» © 2000 - 2014</div>
				<div class="creator"><a href="http://www.divier.ru/">Создание сайта</a> ДиВиЕР</div>
			</div>
		</footer>
	</body>
</html>