
(function ($) {
	"use Strict";
	/*---------------------------------
			 Mean Menu Active
	-----------------------------------*/

	



	$(window).scroll(function(){
		var k = $('header').innerHeight();
		if($(window).scrollTop() > k){
			$('.xxx').css('padding-top',k);
			$('header').addClass('sticky-header');
		}else if($(window).scrollTop() < 1){
			$('header').removeClass('sticky-header');
			$('.xxx').css('padding-top',0);

		}
	});

	$('.filter-by').click(function(e){
		e.preventDefault();
		$('#filters-dialog').toggleClass('hide');
		//$('.old-header').toggleClass('overflow');
		$('.filter-byt').removeClass('filter-by-hide');
		$('.filter-sortt').addClass('filter-sort-hide');
		$('.filter-actions').removeClass('hide');
	});

	$('#xxxf').click(function(e){
		e.preventDefault();
		$('#filters-dialog').toggleClass('hide');

	});
	$('#clear_final').click(function(e){
		e.preventDefault();
		location.reload();	
	});

	if($(window).width() < 769){
		$('.filter-sections .section .filter ').slideUp();
		$('li.section > a').click(function(e){
			e.preventDefault();
			$(this).parents('li').find('.filter ').slideToggle();

		});
	}


	$('.product-image-feature').click(function(e){
		e.preventDefault();

		var xxx = $(this).attr('src');
		console.log($('.ma-product-slider-img a[href="'+xxx+'"]'));

		$('.ma-product-slider-img a[href="'+xxx+'"]').click();
	});

	$('.p-product-image-feature').on('click', function (e) {

		e.preventDefault();
		alert('ok');
		//	var xxx = $(this).attr('src');
		//console.log($('.ma-product-slider-img a[href="'+xxx+'"]'));

		//	$('.ma-product-slider-img a[href="'+xxx+'"]').click();
	});


	$('[data-fancybox="images"]').fancybox({
		margin : [44,0,22,0],
		thumbs : {
			autoStart : true,
			axis      : 'x'
		}
	})




	var sMenu = function(){
		var head = $('.sub-head');
		var m_nav = head.find('nav');
		var m_nav_btn = head.find('.snav-btn');
		var nav = m_nav.children('ul');

		m_nav.find("ul li").each(function() {
			if($(this).find("ul>li").length > 0){
				$(this).prepend('<button type="button" class="nav-drop"></button>');
			}
		});

		m_nav_btn.click(function(){
			if(head.hasClass('active')){
				head.removeClass('active');
				$(this).removeClass('active');
			}
			else {
				$(this).addClass('active');
				head.addClass('active');
			}
		});

		m_nav.find("li .nav-drop").click(function(){
			var ul=$(this).nextAll("ul");
			if(ul.is(":hidden") === true){
				ul.parent().parent().children().children('ul').slideUp(200);
				ul.parent().parent().children().children('.nav-drop').removeClass("active");

				$(this).addClass('active');
				ul.slideDown(200);
			}
			else{
				$(this).removeClass("active");
				ul.slideUp(200);
			}
		});


	}

	sMenu();
	var win = $(window);
	var uiSearch = function(){
		$('.search .search-btn').click(function(e) {
			e.preventDefault();
			if(win.width() < 992){
				$(this).nextAll('.search-ct').slideToggle(150);
			}
		});
		win.click(function(e) {
			if(win.width() < 992 && $('.search').has(e.target).length == 0 && !$('.search').is(e.target)){
				$('.search-ct').slideUp(150);
			}
		});
	}
	uiSearch();




	$('#search-des').click(function(e){
		e.preventDefault();

		$(this).next().slideToggle(150);


	});


	$('.shop-sidebar > h4').click(function(){
		$(this).next().slideToggle();
		$(this).find('i').toggleClass('fa-chevron-down');

	});
	$('#quick-view-modal .btn-addcart').on('click', function (e) {
		e.preventDefault();
		var id =$('#quick-view-modal .p-option-wrapper').text();
		var quantity = parseInt($('#quick-view-modal .form-input input[type=number]').val()) || 1 ;
		$.ajax({
			type: 'POST',
			url: '/cart/add.js',
			async: true,
			data: 'quantity=' + quantity + '&id=' + id,
			success: function(result){
				$('#addCartModal').modal('show');
				$('#quick-view-modal').modal('hide');
				getAjaxCart();
			},
			error: function(XMLHttpRequest, textStatus) {
				alert(XMLHttpRequest.responseJSON.description = 'Bạn không thể đặt quá số lượng tồn kho!');

			}
		});
	});


	$('.description-product .qtyplus').click(function(e) {
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		fieldName = $(this).attr('field');
		// Get its current value
		var currentVal = parseInt($('input[name=' + fieldName + ']').val());
		// If is not undefined
		if (!isNaN(currentVal)) {
			// Increment
			$('input[name=' + fieldName + ']').val(currentVal + 1);
		} else {
			// Otherwise put a 0 there
			$('input[name=' + fieldName + ']').val(1);
		}
	});
	// This button will decrement the value till 0
	$(".description-product .qtyminus").click(function(e) {
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		fieldName = $(this).attr('field');
		// Get its current value
		var currentVal = parseInt($('input[name=' + fieldName + ']').val());
		// If it isn't undefined or its greater than 0
		if (!isNaN(currentVal) && currentVal > 1) {
			// Decrement one
			$('input[name=' + fieldName + ']').val(currentVal - 1);
		} else {
			// Otherwise put a 0 there
			$('input[name=' + fieldName + ']').val(1);
		}
	});


	function ajaxAddCart(qty,id){
		var params = {
			type: 'POST',
			url: '/cart/add.js',
			data: 'quantity=' + qty + '&id=' + id,
			dataType: 'json',
			success: function(line_item) { 

				$('#addCartModal').modal('show');
				getAjaxCart();
			},
			error: function(XMLHttpRequest, textStatus) {
				alert('Sản phẩm hết hàng hoặc bạn đã mua quá số lượng tồn kho.');
			}
		};
		jQuery.ajax(params);
	}
	getAjaxCart();

	$('.add-to-c').click(function(e){
		e.preventDefault();
		var params = {
			type: 'POST',
			url: '/cart/add.js',
			data: $('#form-pro').serialize(),
			dataType: 'json',
			success: function(result) {
				$('#addCartModal').modal('show');
				getAjaxCart();			},
			error: function(XMLHttpRequest, textStatus) {
				//Haravan.onError(XMLHttpRequest, textStatus);
				alert(XMLHttpRequest.responseJSON.description = 'Bạn không thể đặt quá số lượng tồn kho!');

			}
		};
		jQuery.ajax(params);

	});

	$(document).on('click','.Addcart', function(e){
		e.preventDefault();
		var qty = 1;
		var 	variantID = $(this).attr('data-variantid');
		ajaxAddCart(qty,variantID,true);


	})
	$(document).on('click','.cart-item-remove', function(e){

		var productId = $(this).parents('.single-cart-item').attr('data-cart');
		$.ajax({
			type: 'POST',
			url: '/cart/delete.js',
			async: true,
			data:  'quantity=0&id=' + productId,
			success: function(result){
				getAjaxCart();





			}});
	});

	function getAjaxCart(){
		$.ajax({
			type: 'POST',
			url: '/cart?view=modal',
			async: true,
			success: function(result){
				$('.cart-dropdown').html(result);
				$.ajax({url: "/cart.js", success: function(result){
					$('.hd-cart-count').html(result.item_count);
					$('.cart-title strong').html((Haravan.formatMoney(result.total_price, "")) + '₫');
				}});
			},
			error: function(XMLHttpRequest, textStatus) {
				//Haravan.onError(XMLHttpRequest, textStatus);
				alert(XMLHttpRequest.responseJSON.description = 'Bạn không thể đặt quá số lượng tồn kho!');

			}
		});
	}









	
	/*---------------------------
			Mini Cart Hover Active
	----------------------------*/
	//	$('.cart-dropdown').hide();
	$('.mini-cart').hover(
		function() {
			if( $(this).children('div').size() > 0 && $(this).children().hasClass('cart-dropdown') ) {
				$(this).children().stop().slideDown(400);
			}
		}, function() {
			$(this).children('.cart-dropdown').stop().slideUp(300);
		}
	);
	/*---------------------------------
		 Header Search Toggle Active 
	-----------------------------------*/
	$( '.search-box > a' ).on('click', function(e) {
		e.preventDefault();
		if($(this).hasClass('active')) {
			$(this).removeClass('active').siblings('.search-dropdown').slideUp();
		} else {
			$(this).addClass('active').siblings('.search-dropdown').slideDown();
		}
	});
	/*----------------------------
			** Owl Active **
	------------------------------ */
	/*----------
			 Hero Slider Active
	------------------------------*/

	$('.contentRelatedPd').owlCarousel({
		nav: true,
		loop: true,
		margin:10,
		dots:false,
		navText: ['‹' , '›'],
		responsive: {
			0: {
				items: 2,
				autoplay: false
			},
			600: {
				items: 2
			},
			1000: {
				items: 4
			}
		}
	}) 

	$("#owl-home-articles-slider").owlCarousel({
		responsive: {
			0: {
				items: 1,
				autoplay: true
			},
			600: {
				items: 2
			},
			1000: {
				items: 3
			}
		},
		nav: true,
		loop: true,
		dots:false,
		margin:30,
		navText: ['‹' , '›']
	});





	$('.hero-slider').owlCarousel({
		smartSpeed: 1000,
		nav: true,
		loop: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		autoplay: false,
		navText: ['prev', 'next'],
		responsive: {
			0: {
				items: 1,
				autoplay: true
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	})

	$('#slider2').owlCarousel({
		smartSpeed: 1000,
		nav: false,
		dots:true,
		loop: true,

		navText: ['prev', 'next'],
		responsive: {
			0: {
				items: 1,
				autoplay: true
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	})


	/*----------
			 Testimonial Active
	------------------------------*/
	$('.testimonial-active').owlCarousel({
		nav: true,
		loop: true,
		dots:false,
		navText: ['‹' , '›'],

		responsive: {
			0: {
				items: 1,
				autoplay: true
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	}) 
	/*------- 
			 Single Slide Menu Active 
	----------------------------------*/
	$('.single-slide-menu').owlCarousel({
		smartSpeed: 1000,
		nav: false,
		responsive: {
			0: {
				items: 3
			},
			450: {
				items: 3
			},
			768: {
				items: 4
			},
			1000: {
				items: 4
			},
			1200: {
				items: 4
			}
		}
	});
	$('.modal').on('shown.bs.modal', function (e) {
		$('.single-slide-menu').resize();
	})

	$('.single-slide-menu a').on('click',function(e){
		e.preventDefault();

		var $href = $(this).attr('href');

		$('.single-slide-menu a').removeClass('active');
		$(this).addClass('active');

		$('.product-details-large .tab-pane').removeClass('active show');
		$('.product-details-large '+ $href ).addClass('active show');

	})
	/*------- 
			Blog Gallery Post Active 
	----------------------------------*/
	$('.post-gallery').owlCarousel({
		nav: true,
		autoplay: true,
		autoplayTimeout: 5000,
		navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
		responsive: {
			0: {
				items: 1
			},
			450: {
				items: 1
			},
			768: {
				items: 1
			},
			1000: {
				items: 1
			},
			1200: {
				items: 1
			}
		}
	})
	$('.brand-active').owlCarousel({
		nav: true,
		autoplay: true,
		loop:true,
		autoplayTimeout: 5000,
		navText: ['‹' , '›'],
		responsive: {
			0: {
				items: 2
			},
			450: {
				items: 2
			},
			768: {
				items: 3
			},
			1000: {
				items: 6
			},
			1200: {
				items: 7
			}
		}
	})

	/*----------------------------
			** Slick Slider Active **
	------------------------------ */
	/*----------
			Product Slider Active
	------------------------------*/

	/*----------
			Store Slider Active
	------------------------------*/

	/*----------
			Product Offer Active
	------------------------------*/


	/*----------
			Indoor Product Active

			 Hot Deal Slider Active
	------------------------------*/




	$('.product-tab-menu a').on('click',function(e){
		e.preventDefault();

		var $href = $(this).attr('href');

		$('.product-tab-menu a').removeClass('active');
		$(this).addClass('active');

		$('.single-product-img .tab-pane').removeClass('active show');
		$('.single-product-img '+ $href ).addClass('active show');

	})
	/*----------------------------------- 
			Count Down Active 
	----------------------------------*/ 


	$('[data-countdown]:not(.pro-countdown1)').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
			$this.html(event.strftime('<div class="single-count"><span>%D</span>Ngày</div><div class="single-count"><span>%H</span>Giờ</div><div class="single-count"><span>%M</span>Phút</div><div class="single-count"><span>%S</span>Giây</div>'));
		});
	}); 
	/*----------------------------------- 
			Pro Countdown 1 Active 
	----------------------------------*/ 
	$('[data-countdown].pro-countdown1').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
			$this.html(event.strftime('<div class="single-count-1"><span>%D</span></div><div class="single-count-1"><span>%H</span></div><div class="single-count-1"><span>%M</span></div><div class="single-count-1"><span>%S</span></div>'));
		});
	});  
	/*--------------------------
			Counter Up
	---------------------------- */

	
	/*---------------------------------
			 Sticky Menu Active
	-----------------------------------*/
	$(window).on('scroll', function() {
		if ($(this).scrollTop() >50){  
			$('.header-sticky').addClass("is-sticky");
		}
		else{
			$('.header-sticky').removeClass("is-sticky");
		}
	});     
	/*--------------------------
		 Category Menu Active
	---------------------------- */
	$('.rx-parent').on('click', function(){
		$('.rx-child').slideToggle();
		$(this).toggleClass('rx-change');
	});
	//    category heading
	$('.category-heading').on('click', function(){
		$('.category-menu-list').slideToggle(300);
	});	

	/*-- Category Menu Toggles --*/
	function categorySubMenuToggle() {
		var screenSize = $(window).width();
		if ( screenSize <= 991) {
			$('#cate-toggle .right-menu > a').prepend('<i class="expand menu-expand"></i>');
			$('.category-menu .right-menu ul').slideUp();
			//        $('.category-menu .menu-item-has-children i').on('click', function(e){
			//            e.preventDefault();
			//            $(this).toggleClass('expand');
			//            $(this).siblings('ul').css('transition', 'none').slideToggle();
			//        })
		} else {
			$('.category-menu .right-menu > a i').remove();
			$('.category-menu .right-menu ul').slideDown();
		}
	}
	categorySubMenuToggle();
	$(window).resize(categorySubMenuToggle);

	/*-- Category Sub Menu --*/
	$('.category-menu-list').on('click', 'li a, li a .menu-expand', function(e) {
		var $a = $(this).hasClass('menu-expand') ? $(this).parent() : $(this);
		if ($a.parent().hasClass('right-menu')) {
			if ($a.attr('href') === '#' || $(this).hasClass('menu-expand')) {
				if ($a.siblings('ul:visible').length > 0) $a.siblings('ul').slideUp();
				else {
					$(this).parents('li').siblings('li').find('ul:visible').slideUp();
					$a.siblings('ul').slideDown();
				}
			}
		}
		if ($(this).hasClass('menu-expand') || $a.attr('href') === '#') {
			e.preventDefault();
			return false;
		}
	});
	/*--------------------------------
			Price Slider Active
	-------------------------------- */
	var sliderrange = $('#slider-range');
	var amountprice = $('#amount');
	$(function() {
		sliderrange.slider({
			range: true,
			min: 20,
			max: 100,
			values: [0, 100],
			slide: function(event, ui) {
				amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
			}
		});
		amountprice.val("$" + sliderrange.slider("values", 0) +
										" - $" + sliderrange.slider("values", 1));
	});
	/*------------------------------ 
			Nice Select Active
	---------------------------------*/
	$('#sort').niceSelect();
	/*------------------------------ 
			Toggle Function Active
	---------------------------------*/   
	/*--- showlogin toggle function ----*/
	$('#showlogin').on('click', function() {
		$('#checkout-login').slideToggle(900);
	});

	/*--- showlogin toggle function ----*/
	$('#showcoupon').on('click', function() {
		$('#checkout_coupon').slideToggle(900);
	});
	/*--- showlogin toggle function ----*/
	$('#cbox').on('click', function() {
		$('#cbox-info').slideToggle(900);
	});

	/*--- showlogin toggle function ----*/
	$('#ship-box').on('click', function() {
		$('#ship-box-info').slideToggle(1000);
	});
	/* --------------------------------------------------------
			FAQ Accordion Active
	* -------------------------------------------------------*/ 
	$('.card-header a').on('click', function() {
		$('.card').removeClass('actives');
		$(this).parents('.card').addClass('actives');
	});
	/*--------------------------
			Isotope Active
	---------------------------- */
	
	/* --------------------------------------------------------
			Venobox Active
	* -------------------------------------------------------*/  
	$('.venobox').venobox({
		border: '10px',
		titleattr: 'data-title',
		numeratio: true,
		infinigall: true
	});
	/*----------------------------------
			EasyZoom Active       
	------------------------------------*/   
	



















	var callBack = function (variant, selector) {
		if (variant) {
			modal = $('#quick-view-modal');
			$('.p-price').html(Haravan.formatMoney(variant.price, ""));
			modal.find('.btn-addcart').attr('data-price',variant.price)
			if (variant.compare_at_price > variant.price){
				modal.find('del').html(Haravan.formatMoney(variant.compare_at_price, ""));
				modal.find('.btn-addcart').attr('data-del',variant.compare_at_price);
			}else{
				modal.find('del').html('');
				modal.find('.btn-addcart').attr('data-del',0);
			}
			if (variant.available) {
				modal.find('.btn-addcart').css('display', 'block');
				modal.find('.btn-soldout').css('display', 'none');
			}
			else {
				modal.find('.btn-addcart').css('display', 'none');
				modal.find('.btn-soldout').css('display', 'block');
			}
			if (variant.sku != null ){
				modal.find('.m-sku').html('<span>Mã sản phẩm: </span>'+ variant.sku);
			}else{
				modal.find('.m-sku').html('<span>Mã sản phẩm: </span>Chưa rõ');
			}
		}
		else {
			modal.find('.btn-addcart').css('display', 'none');
			modal.find('.btn-soldout').css('display', 'block');
		}
	}
	var p_select_data = $('.p-option-wrapper').html('');
	var p_zoom = $('.image-zoom').html();
	var quickViewProduct = function (purl) {

		if ($(window).width() < 680) { window.location = purl; return false; }
		modal = $('#quick-view-modal'); modal.modal('show');
		$.ajax({
			url: purl + '.js',
			async: false,
			success: function (product) {
				$.each(product.options, function (i, v) {
					product.options[i] = v.name;
				})
				modal.find('.p-title').html('<h1>' + product.title + '</h1>');
				modal.find('.p-option-wrapper').html(p_select_data);
				modal.find('.m-vendor').html('<span>Nhà cung cấp: </span>'+ product.vendor);
				var productdes = product.description;
				if(productdes != '' && productdes != null){
					var re_productdes = productdes.replace(/(<([^>]+)>)/ig,"")
					var des = re_productdes.split("&nbsp;").splice(0, 50).join(" ") + "...";
					modal.find('.form-des').html(des);
					modal.find('.form-des').show();
				}else{
					modal.find('.form-des').html('Chưa có mô tả cho sản phẩm này!');
				}
				$('.image-zoom').html(p_zoom);
				modal.find('.p-url').attr('href', product.url);
				if (product.images.length == 0) {
					modal.find('.p-product-image-feature').attr('src', '//hstatic.net/0/0/global/noDefaultImage6_large.gif');
				}
				else {
					$('#p-sliderproduct').remove();
					$('.image-zoom').append("<div id='p-sliderproduct' class='owl_pages '>");
					$('#p-sliderproduct').append("<ul class='slides owlDesign notStyle'>");
					$('#p-sliderproduct .slides').hide();
					$.each(product.images, function (i, v) {
						elem = $('<li class="product-thumb">').append('<a href="#" data-image="" data-zoom-image=""><img /></a>');
						elem.find('a').attr('data-image', Haravan.resizeImage(v, 'medium'));
						elem.find('a').attr('data-zoom-image', v);
						elem.find('img').attr('data-image', Haravan.resizeImage(v, 'medium'));
						elem.find('img').attr('data-zoom-image',v);
						elem.find('img').attr('src', Haravan.resizeImage(v, 'small'));
						modal.find('.slides').append(elem);
					})

					modal.find('.p-product-image-feature').attr('src', product.featured_image);
					$(".modal-footer .btn-readmore").attr('href', purl);
					var iflag = 0;
					$('#p-sliderproduct img').load(function () {
						iflag++;
						if (iflag == $('#p-sliderproduct img').length) {
							setTimeout(function(){
								var owl = $('#p-sliderproduct .slides');
								owl.on('initialize.owl.carousel initialized.owl.carousel ' +
											 'initialize.owl.carousel initialize.owl.carousel ' +
											 'resize.owl.carousel resized.owl.carousel ' +
											 'refresh.owl.carousel refreshed.owl.carousel ' +
											 'update.owl.carousel updated.owl.carousel ' +
											 'drag.owl.carousel dragged.owl.carousel ' +
											 'translate.owl.carousel translated.owl.carousel ' +
											 'to.owl.carousel changed.owl.carousel', function(e) {
												 $('#p-sliderproduct .slides').show();
											 })
								owl.owlCarousel({
									items : 4,
									loop: false,
									autoplay: false,
									margin: 5,
									responsiveClass: true,
									nav : true,
									navText: ['‹' , '›'],
									responsive: {
										0: {
											items: 1
										},
										370: {
											items: 2
										},
										480: {
											items: 3
										},
										768: {
											items: 4
										},
										992: {
											items: 4
										}
									}
								});
								modal.find('.owl-item:first-child .product-thumb').addClass('active');
							},500)
						}
					})
				}
				$.each(product.variants, function (i, v) {

					modal.find('.p-option-wrapper').html( v.id);


					//	modal.find('select#p-select').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
				})
				if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1)
					$('.p-option-wrapper').hide();
				else
					$('.p-option-wrapper').show();
				if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1) {
					callBack(product.variants[0], null);
				}
				else {
					debugger

					new Haravan.OptionSelectors("p-select", { product: product, onVariantSelected: callBack });
					if (product.options.length == 1 && product.options[0].indexOf('Tiêu đề')==-1)

						modal.find('.selector-wrapper:eq(0)').prepend('<label>' + product.options[0] + '</label>');

					$('.p-option-wrapper select:not(#p-select)').each(function () {
						$(this).wrap('<span class="custom-dropdown custom-dropdown--white"></span>');
						$(this).addClass("custom-dropdown__select custom-dropdown__select--white");
					});
					callBack(product.variants[0], null);
				}

			}
		});
		//$('.modal-backdrop').css('opacity', '0');
		return false;
	}
	$('#quick-view-modal ').on('click', '.product-thumb img', function (event) {
		event.preventDefault();
		modal = $('#quick-view-modal');
		modal.find('.p-product-image-feature').attr('src', $(this).attr('data-zoom-image'));
		modal.find('.product-thumb').removeClass('active');
		$(this).parents('li').addClass('active');
		return false;
	})
	$(document).on('click', 'a.btn-quickview-1', function (event) {
		event.preventDefault();
		quickViewProduct($(this).attr('data-handle'));
	})
})(jQuery);