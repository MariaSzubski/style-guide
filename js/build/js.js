$(function(){
	// Detect History API
	Modernizr.history && document.location.hostname ? dynamic_load() : null;

	// Dynamic Page Load
	function dynamic_load(){

		// Navigation Menu & Links
		$('nav li').click(function(e){
			e.preventDefault();
			let url = $(this).children('a').attr('href');
			load_content(url);
			history.pushState(null, null, url);
			convert();
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
			$('#guidelines').load(url + ' #container').hide().fadeIn(300);

			// ----------------- Page Header
			$('#pg_header').load((url + ' #pg_header'), function() {
				$(this).children().unwrap();
			});

			// ----------------- Selected Nav Item
			$('nav li.selected').removeClass('selected');
			$('nav li').has('[href="' + url  + '"]').addClass('selected');

		}
	};





	// Convert Units
	(function pxrem(){
		$('button').click(function(e){
			$('button').toggleClass('btn-selected');
			convert();
		});
	})();

	function convert(){
		if ($('#size-px').hasClass('btn-selected')){
			console.log($('.pxrem'));
			$('.pxrem').each(function(){
				let px = $(this).html();
				let px_arr = px.match(/[^rem]+|rem/g);
				console.log(px, px_arr);
				px_arr[0] = px_arr[0] * 16;
				px_arr[1] = 'px';
				px = px_arr.join('');
				$(this).html(px);

			});

		};

		if ($('#size-rem').hasClass('btn-selected')){
			console.log("that ran");
			$('.pxrem').each(function(){
				let rem = $(this).html();
				let rem_arr = rem.match(/[^px]+|px/g);
				console.log(rem, rem_arr);
				rem_arr[0] = rem_arr[0] / 16;
				rem_arr[1] = 'rem';
				rem = rem_arr.join('');
				$(this).html(rem);
			});
		};

	}





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

	})();
});
