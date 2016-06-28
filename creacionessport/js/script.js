/*jshint jquery:true */
/*global $:true */

var $ = jQuery.noConflict();

$(document).ready(function($) {
	"use strict";

	/* global google: false */

	/*-------------------------------------------------*/
	/* =  portfolio isotope
	/*-------------------------------------------------*/

	var winDow = $(window);
		// Needed variables
		var $container=$('.masonry');
		var $filter=$('.filter');

		try{
			$container.imagesLoaded( function(){
				$container.trigger('resize');
				$container.isotope({
					filter:'*',
					layoutMode:'masonry',
					animationOptions:{
						duration:750,
						easing:'linear'
					}
				});

				$('.triggerAnimation').waypoint(function() {
					var animation = $(this).attr('data-animate');
					$(this).css('opacity', '');
					$(this).addClass("animated " + animation);

				},
					{
						offset: '75%',
						triggerOnce: true
					}
				);
			});
		} catch(err) {
		}

		winDow.bind('resize', function(){
			var selector = $filter.find('a.active').attr('data-filter');

			try {
				$container.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 750,
						easing	: 'linear',
						queue	: false,
					}
				});
			} catch(err) {
			}
			return false;
		});
		
		// Isotope Filter 
		$filter.find('a').click(function(){
			var selector = $(this).attr('data-filter');

			try {
				$container.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 750,
						easing	: 'linear',
						queue	: false,
					}
				});
			} catch(err) {

			}
			return false;
		});


	var filterItemA	= $('.filter li a');

		filterItemA.on('click', function(){
			var $this = $(this);
			if ( !$this.hasClass('active')) {
				filterItemA.removeClass('active');
				$this.addClass('active');
			}
		});

	/*-------------------------------------------------*/
	/* =  preloader function
	/*-------------------------------------------------*/
	winDow.load( function(){
		var mainDiv = $('#container'),
			preloader = $('.preloader');

		preloader.fadeOut(400, function(){
			mainDiv.delay(400).addClass('active');
		});
	});

	/*-------------------------------------------------*/
	/* =  slider fullscreen
	/*-------------------------------------------------*/
	var sliderFull = $('#slider'),
		fullheight = winDow.height();
	sliderFull.css('height', fullheight);

	winDow.bind('resize', function(){
		fullheight = winDow.height();
		sliderFull.css('height', fullheight);
	});

	/*-------------------------------------------------*/
	/* =  search toogle
	/*-------------------------------------------------*/

	var openSearch = $('.open-search'),
		SearchForm = $('.form-search'),
		closeSearch = $('.close-search');

		openSearch.on('click', function(event){
			event.preventDefault();
			if (!SearchForm.hasClass('active')) {
				SearchForm.fadeIn(300, function(){
					SearchForm.addClass('active');
				});
			}
		});

		closeSearch.on('click', function(event){
			event.preventDefault();

			SearchForm.fadeOut(300, function(){
				SearchForm.removeClass('active');
				$(this).find('input').val('');
			});
		});

	/*-------------------------------------------------*/
	/* =  browser detect
	/*-------------------------------------------------*/
	try {
		$.browserSelector();
		// Adds window smooth scroll on chrome.
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	}
	
	/*-------------------------------------------------*/
	/* =  Animated content
	/*-------------------------------------------------*/

	try {
		/* ================ ANIMATED CONTENT ================ */
        if ($(".animated")[0]) {
            $('.animated').css('opacity', '0');
        }

        $('.triggerAnimation').waypoint(function() {
            var animation = $(this).attr('data-animate');
            $(this).css('opacity', '');
            $(this).addClass("animated " + animation);

        },
                {
                    offset: '75%',
                    triggerOnce: true
                }
        );
	} catch(err) {

	}

	/*-------------------------------------------------*/
	/* =  remove animation in mobile device
	/*-------------------------------------------------*/
	if ( winDow.width() < 992 ) {
		$('div.triggerAnimation').removeClass('animated');
		$('div.triggerAnimation').removeClass('triggerAnimation');
	}

	/*-------------------------------------------------*/
	/* =  Search animation
	/*-------------------------------------------------*/
	
	var searchToggle = $('.open-search'),
		inputAnime = $(".form-search"),
		body = $('body');

	searchToggle.on('click', function(event){
		event.preventDefault();

		if ( !inputAnime.hasClass('active') ) {
			inputAnime.addClass('active');
		} else {
			inputAnime.removeClass('active');			
		}
	});

	body.on('click', function(){
		inputAnime.removeClass('active');
	});

	var elemBinds = $('.open-search, .form-search');
	elemBinds.bind('click', function(e) {
		e.stopPropagation();
	});

	/*-------------------------------------------------*/
	/* =  alerts fade out
	/*-------------------------------------------------*/

	var alerButtn = $('a.close-box');

		alerButtn.on('click', function(event){
			event.preventDefault();
			var $this = $(this);

			$this.parent('div').fadeOut();
		});

	/*-------------------------------------------------*/
	/* =  fullwidth carousell
	/*-------------------------------------------------*/
	try {
		$("#owl-demo").owlCarousel({
			autoPlay: 10000,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,2]
		});
	} catch(err) {

	}

	try {
		$("#owl-demo2").owlCarousel({
			autoPlay: 8000,
			items : 5,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [979,3]
		});
	} catch(err) {

	}

	try {
		var owl = $("#owl-demo3");
		owl.owlCarousel({
			items : 6,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [979,3]
		});
		// Custom Navigation Events
		$(".owl-arrows .next-link").click(function(event){
			event.preventDefault();
			owl.trigger('owl.next');
		});
		$(".owl-arrows .prev-link").click(function(event){
			event.preventDefault();
			owl.trigger('owl.prev');
		});
	} catch(err) {

	}

	try {
		var owl2 = $("#owl-demo4");
		owl2.owlCarousel({
			items : 6,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [979,3]
		});
		// Custom Navigation Events
		$(".owl2-arrows .next-link").click(function(event){
			event.preventDefault();
			owl2.trigger('owl.next');
		});
		$(".owl2-arrows .prev-link").click(function(event){
			event.preventDefault();
			owl2.trigger('owl.prev');
		});
	} catch(err) {

	}

	try {
		var owl3 = $("#owl-demo5");
		owl3.owlCarousel({
			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,2]
		});
		// Custom Navigation Events
		$(".owl3-arrows .next-link").click(function(event){
			event.preventDefault();
			owl3.trigger('owl.next');
		});
		$(".owl3-arrows .prev-link").click(function(event){
			event.preventDefault();
			owl3.trigger('owl.prev');
		});
	} catch(err) {

	}

	try {
		var owl4 = $("#owl-demo6");
		owl4.owlCarousel({
			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,2]
		});
		// Custom Navigation Events
		$(".owl4-arrows .next-link").click(function(event){
			event.preventDefault();
			owl4.trigger('owl.next');
		});
		$(".owl4-arrows .prev-link").click(function(event){
			event.preventDefault();
			owl4.trigger('owl.prev');
		});
	} catch(err) {

	}

	try {
		var owl5 = $("#owl-demo7");
		owl5.owlCarousel({
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});
		// Custom Navigation Events
		$(".owl7-arrows .next-link").click(function(event){
			event.preventDefault();
			owl5.trigger('owl.next');
		});
		$(".owl7-arrows .prev-link").click(function(event){
			event.preventDefault();
			owl5.trigger('owl.prev');
		});
	} catch(err) {

	}

	try {
		var owl6 = $("#owl-demo8");
		owl6.owlCarousel({
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});
		// Custom Navigation Events
		$(".owl8-arrows .next-link").click(function(event){
			event.preventDefault();
			owl6.trigger('owl.next');
		});
		$(".owl8-arrows .prev-link").click(function(event){
			event.preventDefault();
			owl6.trigger('owl.prev');
		});
	} catch(err) {

	}

	/*-------------------------------------------------*/
	/* =  Countdown
	/*-------------------------------------------------*/

	$('.coming-soon-section').css('min-height', $(window).height() - $('.navbar-default').height() - $('footer').height());

	try {

		$('#clock').countdown("2014/11/27", function(event) {
			var $this = $(this);
			switch(event.type) {
				case "seconds":
				case "minutes":
				case "hours":
				case "days":
				case "daysLeft":
					$this.find('span#'+event.type).html(event.value);
					break;
				case "finished":
					$this.hide();
					break;
			}
		});

	} catch(err) {

	}

	/*-------------------------------------------------*/
	/* =  flexslider
	/*-------------------------------------------------*/
	try {
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 190,
			itemMargin: 0,
			asNavFor: '#slider2'
		});

		$('#slider2').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel"
		});
	} catch(err) {

	}
	try {

		var SliderPost = $('.flexslider');

		SliderPost.flexslider({
			slideshowSpeed: 4000,
			easing: "swing"
		});
	} catch(err) {

	}

	/*-------------------------------------------------*/
	/* =  price range code
	/*-------------------------------------------------*/

	try {

		for( var i = 100; i <= 10000; i++ ){
			$('#start-val').append(
				'<option value="' + i + '">' + i + '</option>'
			);
		}
		// Initialise noUiSlider
		$('.noUiSlider').noUiSlider({
			range: [0,30],
			start: [5,20],
			handles: 2,
			connect: true,
			step: 1,
			serialization: {
				to: [ $('#start-val'),
					$('#end-val') ],
				resolution: 1
			}
		});
	} catch(err) {

	}
	
	/* ---------------------------------------------------------------------- */
	/*	Contact Map
	/* ---------------------------------------------------------------------- */
	var contact = {"lat":"-33.880641", "lon":"151.204298"}; //Change a map coordinate here!

	try {
		var mapContainer = $('.map');
		mapContainer.gmap3({
			action: 'addMarker',
			marker:{
				options:{
					icon : new google.maps.MarkerImage('images/marker.png')
				}
			},
			latLng: [contact.lat, contact.lon],
			map:{
				center: [contact.lat, contact.lon],
				zoom: 16
				},
			},
			{action: 'setOptions', args:[{scrollwheel:false}]}
		);
	} catch(err) {

	}

	/* ---------------------------------------------------------------------- */
	/*	magnific-popup
	/* ---------------------------------------------------------------------- */

	try {
		// Example with multiple objects
		$('.zoom').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});

	} catch(err) {

	}

	try {
		// Example with multiple objects
		$('.video').magnificPopup({
			type: 'iframe'
		});
	} catch(err) {

	}

	try {
		var magnLink = $('.register-poup');
		magnLink.magnificPopup({
			closeBtnInside:false
		});
	} catch(err) {

	}

	/* ---------------------------------------------------------------------- */
	/*	Bootstrap tabs
	/* ---------------------------------------------------------------------- */
	
	var tabId = $('.nav-tabs a');
	try{		
		tabId.click(function (e) {
			e.preventDefault();
			$(this).tab('show');
		});
	} catch(err) {
	}
	
	/*-------------------------------------------------*/
	/* = slider Testimonial
	/*-------------------------------------------------*/

	var slidertestimonial = $('.bxslider');
	try{		
		slidertestimonial.bxSlider({
			mode: 'vertical'
		});
	} catch(err) {
	}

	/*-------------------------------------------------*/
	/* = skills animate
	/*-------------------------------------------------*/

	try{

		var skillBar = $('.skills-progress');
		skillBar.appear(function() {

			var animateElement = $(".meter > p");
			animateElement.each(function() {
				$(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
						width: $(this).data("origWidth")
					}, 1200);
			});

		});
	} catch(err) {
	}

	/*-------------------------------------------------*/
	/* =  count increment
	/*-------------------------------------------------*/
	try {
		$('.statistic-post').appear(function() {
			$('.timer').countTo({
				speed: 4000,
				refreshInterval: 60,
				formatter: function (value, options) {
					return value.toFixed(options.decimals);
				}
			});
		});
	} catch(err) {

	}

	/*-------------------------------------------------*/
	/* =  feature box appear
	/*-------------------------------------------------*/
	
	try{
		$('.feature-box').appear(function() {
			$(this).addClass('active');
		});
		
	} catch(err) {
	}

	/* ---------------------------------------------------------------------- */
	/*	Shop galery image replacement
	/* ---------------------------------------------------------------------- */

	var elemToShow = $('.other-products a');

	elemToShow.on('click', function(e){
		e.preventDefault();
		var newImg = $(this).attr('data-image');
		var prodHolder = $('.image-holder img');
		prodHolder.attr('src', newImg);
	});

	/*-------------------------------------------------*/
	/* =  product increase
	/*-------------------------------------------------*/
	
	var fieldNum = $('.product-details input[type="text"], .products-table input[type="text"]'),
		btnIncrease = $('button.increase'),
		btnDecrease = $('button.decrease');

		btnIncrease.on('click', function(){
			var fieldVal = fieldNum.val();
			var nextVal = parseFloat(fieldVal) + 1;
			fieldNum.val(nextVal);
		});

		btnDecrease.on('click', function(){
			var fieldVal = fieldNum.val();
			var nextVal = parseFloat(fieldVal) - 1;
			if (fieldVal > 0) {
				fieldNum.val(nextVal);
			} else {
				fieldNum.val(0);
			}
		});

	/* ---------------------------------------------------------------------- */
	/*	Accordion & Togles
	/* ---------------------------------------------------------------------- */
	var clickElem = $('a.accord-link');

	clickElem.on('click', function(e){
		e.preventDefault();

		var $this = $(this),
			parentCheck = $this.parents('.accord-elem'),
			accordItems = $('.accord-elem'),
			accordContent = $('.accord-content');
			
		if( !parentCheck.hasClass('active')) {

			accordContent.slideUp(400, function(){
				accordItems.removeClass('active');
			});
			parentCheck.find('.accord-content').slideDown(400, function(){
				parentCheck.addClass('active');
			});

		} else {

			accordContent.slideUp(400, function(){
				accordItems.removeClass('active');
			});

		}
	});

	var TogElem = $('a.toogle-link');

	TogElem.on('click', function(e){
		e.preventDefault();

		var $this = $(this),
			parentCheck = $this.parents('.toogle-elem');
			
		if( !parentCheck.hasClass('active')) {
			parentCheck.find('.toogle-content').slideDown(400, function(){
				parentCheck.addClass('active');
			});
		} else {
			parentCheck.find('.toogle-content').slideUp(400, function(){
				parentCheck.removeClass('active');
			});

		}
	});

	/* ---------------------------------------------------------------------- */
	/*	Contact Form
	/* ---------------------------------------------------------------------- */

	var submitContact = $('#submit_contact'),
		message = $('#msg');

	submitContact.on('click', function(e){
		e.preventDefault();

		var $this = $(this);
		
		$.ajax({
			type: "POST",
			url: 'contact.php',
			dataType: 'json',
			cache: false,
			data: $('#contact-form').serialize(),
			success: function(data) {

				if(data.info !== 'error'){
					$this.parents('form').find('input[type=text],textarea,select').filter(':visible').val('');
					message.hide().removeClass('success').removeClass('error').addClass('success').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
				} else {
					message.hide().removeClass('success').removeClass('error').addClass('error').html(data.msg).fadeIn('slow').delay(5000).fadeOut('slow');
				}
			}
		});
	});

});