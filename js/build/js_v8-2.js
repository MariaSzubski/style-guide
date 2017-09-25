$(function(){
	// Detect History API
	Modernizr.history && document.location.hostname ? dynamic_load() : null;

	function dynamic_load(){

		// Navigation Menu & Links
		$('nav li').click(function(e){
			e.preventDefault();
			let url = $(this).children('a').attr('href');
			load_content(url);
			history.pushState(null, null, url);

		});

		// Browser History
		$(window).on('popstate', function(){
			load_content(location.pathname);
		});


		// Content
		function load_content(url){
			// ----------------- Clean Up Filename
			url = url.split('/').pop();
			(url == "") ? (url = "index.php") : null;

			// ----------------- Window Title
			$('#title').load((url + ' #title'), function() {
				$(this).children().unwrap();
			});

			// ----------------- Guidlines
			$('#container').remove();
			$('#guidelines').load((url + ' #container'), function(){
				Modernizr.localstorage ? toggle_pxrem() : null; // Set px/rem units
			}).hide().fadeIn(300);

			// ----------------- Page Header
			$('#pg_header').load((url + ' #pg_header'), function() {
				$(this).children().unwrap();
			});

			// ----------------- Selected Nav Item
			$('nav li.selected').removeClass('selected');
			$('nav li').has('[href="' + url  + '"]').addClass('selected');

		}
	};

	// Show & Hide Sidebar
	(function side_nav(){
		$('#icon_nav').click(function(e){
			e.stopPropagation();
			$('nav,main').toggleClass('default_state',  700, 'easeOutExpo').css('overflow', 'auto');
		});
		$('main').click(function(e){
			e.stopPropagation();
			if (($(document ).width() < 1200) && (!$('nav').hasClass('default_state'))){
					$('nav,main').toggleClass('default_state', 700, 'easeOutExpo').css('overflow', 'auto');
			}
		});
		$('nav ul').click(function(e){
			e.stopPropagation();
			if (($(document ).width() <= 670) && (!$('nav').hasClass('default_state'))){
					$('nav,main').toggleClass('default_state',  700, 'easeOutExpo').css('overflow', 'auto');
			}
		});
	})();


	// PX to REM Conversion
	if (Modernizr.localstorage) {
		// ----------------- On initial load: check local storange and convert units
		toggle_pxrem();

		// ----------------- On button press: update localStorage and convert units
		(function pxrem(){
			$('button').click(function(e){
				$('button').toggleClass('btn-selected');
				if ($('#size-px').hasClass('btn-selected')){
					localStorage.setItem('pxrem', 'px');
				}else{
					localStorage.setItem('pxrem', 'rem');
				}
				convert();
			});
		})();

		// ----------------- Check localStorage and convert units
		function toggle_pxrem(){
			(localStorage.pxrem == undefined) ? localStorage.setItem('pxrem', 'px') : null;

			(localStorage.pxrem == 'rem') ?
				($('#size-px').removeClass('btn-selected'),
				$('#size-rem').addClass('btn-selected'))
				: null;
			(localStorage.pxrem == 'px') ?
				($('#size-rem').removeClass('btn-selected'),
				$('#size-px').addClass('btn-selected'))
				: null;
			convert();
		}

		// ----------------- Convert units
		function convert(){
			// rem -> px
			if ($('#size-px').hasClass('btn-selected')){
				$('.pxrem').each(function(){
					let px = $(this).html();
					if (px.includes('rem')) {
						let px_arr = px.match(/[^rem]+|rem/g);
						px_arr[0] = px_arr[0] * 16;
						px_arr[1] = 'px';
						$(this).html(px_arr.join(''));
					};
				});
			}
			// px -> rem
			else if ($('#size-rem').hasClass('btn-selected')){
				$('.pxrem').each(function(){
					let rem = $(this).html();
					let rem_arr = rem.match(/[^px]+|px/g);
					rem_arr[0] = rem_arr[0] / 16;
					rem_arr[1] = 'rem';
					$(this).html(rem_arr.join(''));
				});
			};
		};
	};
});
