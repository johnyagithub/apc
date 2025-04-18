$(function () {

	boxCatalog();
	boxCategory();
	boxSupplier();
	sliderItem();
	myQuantity();
	slidershowImg();
	sliderBanner();
	sliderBanner2();
	sliderNewproduct();

	$('#menuMobile').click(function () {
		$('body').toggleClass('menuShow');
	});
	$(document).on("click", "body.menuShow header,body.menuShow #content,body.menuShow section,body.menuShow footer", function () {
		$('#navbarNav').collapse('hide');
		$('body').removeClass('menuShow');
	});

	if (localStorage.getItem('cookie') != 'allow') {
		setTimeout(function () { $('#cookie-con-head').addClass('show'); }, 5000);
	}

	if ($(window).width() > 1000) {
		$('a[href="#collapseProductType"]').attr('aria-expanded', 'true');
		$('#collapseProductType').addClass('show');
	}

	$('[data-toggle="class-toggle-custom"]').on('click', function () {
		$($(this).data('target')).toggleClass('active');
	});
	$(document).on("click", ".front-header-search .box-shadow", function () {
		$(this).closest(".front-header-search").removeClass('active');
	});

	$('header .navbar-collapse+.box-shadow').click(function () {
		$('header button.navbar-toggler').click();
	});

});

let setcookieuser = (x) => {
	$("#cookie-con-head").removeClass('show');
	if (x == 'Allow') {
		localStorage.setItem('cookie', 'allow');
	}
}
let sliderBanner2 = () => {
	if ($(window).width() < 768) {
		$(".banner .owl-carousel").owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			items: 1,
			dots: true,
			lazyLoad: true
		});
	} else {
		$(".banner .owl-carousel").removeClass('.owl-carousel');
	}
}
let boxCatalog = () => {
	$(".box-catalog .owl-carousel").owlCarousel({
		margin: 10,
		nav: false,
		dots: false,
		lazyLoad: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 3
			},
			600: {
				items: 4
			},
			769: {
				items: 6
			},
			1025: {
				items: 8
			},
		}
	});
	$('.box-catalog .o-prev').click(function () {
		$(this).closest(".box-catalog").find(".owl-prev").click();
	});
	$('.box-catalog .o-next').click(function () {
		$(this).closest(".box-catalog").find(".owl-next").click();
	});
}
let boxCategory = () => {
	$(".box-Category .owl-carousel").owlCarousel({
		margin: 15,
		nav: false,
		dots: false,
		lazyLoad: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 3
			},
			600: {
				items: 4
			},
			769: {
				items: 6
			},
			1025: {
				items: 8
			},
		}
	});
	$('.box-Category .o-prev').click(function () {
		$(this).closest(".box-Category").find(".owl-prev").click();
	});
	$('.box-Category .o-next').click(function () {
		$(this).closest(".box-Category").find(".owl-next").click();
	});
}
let sliderItem = () => {
	$(".box-slide .owl-carousel").each(function () {
		$(this).owlCarousel({
			margin: 20,
			nav: false,
			dots: false,
			lazyLoad: true,
			responsiveClass: true,
			responsive: {
				0: {
					items: $(this).attr('data-itemSlide-mobile') || 2
				},
				667: {
					items: $(this).attr('data-itemSlide-Tablet') || 3
				},
				900: {
					items: $(this).attr('data-itemSlide-pc') || 4
				}
			}
		});
	});
	$('.box-slide .o-prev').click(function () {
		$(this).closest(".box-slide").find(".owl-prev").click();
	});
	$('.box-slide .o-next').click(function () {
		$(this).closest(".box-slide").find(".owl-next").click();
	});
}
let boxSupplier = () => {
	$(".box-supplier-brand .owl-carousel").owlCarousel({
		dots: false,
		// 		autoWidth:true,
		lazyLoad: true,
		nav: true,
		lazyLoad: true,
		navText: ["<i class='las la-angle-left fs-20 align-middle'></i>", "<i class='las la-angle-right fs-20 align-middle'></i>"],
		responsiveClass: true,
		responsive: {
			0: {
				margin: 15,
				items: 2
			},
			600: {
				margin: 30,
				items: 3
			},
			769: {
				margin: 45,
				items: 3
			},
			1025: {
				margin: 60,
				items: 4
			},
			1441: {
				margin: 60,
				items: 5
			}
		}
	});
	$('.box-supplier-brand .o-prev').click(function () {
		$(this).closest(".box-supplier-brand").find(".owl-prev").click();
	});
	$('.box-supplier-brand .o-next').click(function () {
		$(this).closest(".box-supplier-brand").find(".owl-next").click();
	});
}
let slidershowImg = () => {
	$(".box-showImg .owl-carousel").owlCarousel({
		margin: 0,
		nav: false,
		items: 1,
		dots: true,
		lazyLoad: true,
		navText: ["<i class='las la-angle-left fs-20 align-middle'></i>", "<i class='las la-angle-right fs-20 align-middle'></i>"]
	});
}

let myQuantity = () => {
	$('.btn-group.quantity .btn-plus').click(function () {
		var n1 = $(this).closest(".btn-group.quantity").find("input").val();
		$(this).closest(".btn-group.quantity").find(".btn-delete").removeClass('disabled');

		var result = parseInt(n1) + 1;
		$(this).closest(".btn-group.quantity").find("input").val(result);

		var price = $(this).closest(".btn-group.quantity").attr('data-price');
		if (price != '') {
			var number = parseInt(result) * price;
			$(this).closest(".btn-group.quantity[data-price]").nextAll('input[type="hidden"]').val(number);
			$(this).closest(".btn-group.quantity[data-price]").nextAll('.sum').find('b').html(number.toLocaleString(undefined, { minimumFractionDigits: 2 }));
		}
	});
	$('.btn-group.quantity .btn-delete').click(function () {
		var n2 = $(this).closest(".btn-group.quantity").find("input").val();
		if (parseInt(n2) == 2) {
			$(this).closest(".btn-group.quantity").find(".btn-delete").addClass('disabled');
		}

		if (parseInt(n2) > 1) {
			var result2 = parseInt(n2) - 1;
			$(this).closest(".btn-group.quantity").find("input").val(result2);

			var price2 = $(this).closest(".btn-group.quantity").attr('data-price');
			if (price2 != '') {
				var number2 = parseInt(result2) * price2;
				$(this).closest(".btn-group.quantity[data-price]").nextAll('input[type="hidden"]').val(number2);
				$(this).closest(".btn-group.quantity[data-price]").nextAll().find('b').html(number2.toLocaleString(undefined, { minimumFractionDigits: 2 }));
			}
		}
	});
}
let sliderNewproduct = () => {
	$(".box-newproduct .owl-carousel").owlCarousel({
		loop: true,
		nav: true,
		dots: true,
		lazyLoad: true,
		// 		autoplay:true,
		autoplayTimeout: 5000,
		autoplayHoverPause: false,
		navText: [
			"<div class='b-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></div>",
			"<div class='b-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></div>",
		],
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
			},
		},
		afterAction: function (current) {
			current.find("video").get(0).play();
		},
	});
	$(".box-newproduct .owl-carousel .owl-item").on("mouseenter", function (e) {
		$(this).closest(".owl-carousel").trigger("stop.owl.autoplay");
	});
	$(".box-newproduct .owl-carousel .owl-item").on("mouseleave", function (e) {
		$(this).closest(".owl-carousel").trigger("play.owl.autoplay", [3000]);
	});
};