$(function () {

	sliderItem();
	myQuantity();
	slidershowImg();
	sliderBanner();

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
let sliderBanner = () => {
	if ($(window).width() <= 1024) {
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
let slidershowImg = () => {
	$(".box-showImg .owl-carousel").owlCarousel({
		margin: 0,
		nav: false,
		items: 1,
		dots: true,
		lazyLoad: true,
		navText: ["<i class='fa fa-angle-left fs-20 align-middle'></i>", "<i class='fa fa-angle-right fs-20 align-middle'></i>"]
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