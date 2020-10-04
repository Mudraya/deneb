$(document).ready(function(){
    if ($(window).width() > 1200) {
        $('ul.sf-menu').superfish();
    }

    $('.company-more span').click(function(event) {
        $(this).toggleClass('open');
        $('.company-body').toggleClass('open');
    });

    $('.header-search .header-btns-ico').click(function(event) {
        $('.search-body').fadeIn();
    });

    $('.header-right .close-search').click(function(event) {
        $('.header-right .search-body').fadeOut();
    });

    $(document).click(function(e) {

        if (!$(e.target).is('.header-right .header-search, .header-right .header-search *')) {
            $('.header-right .search-body').fadeOut();
        }

    });

// menu tablet

    $('.header-show').click(function(event) {
        $('body').addClass('open-menu');
        $('.header-nav').fadeIn();
    });

    $('.header-nav > ul > li:not(.no-sub) > a').click(function(event) {
        $(this).parent().find('ul').fadeIn();
    });

    $('.header-nav > .close-menu').click(function(event) {
        $('.header-nav').fadeOut();
        $('body').removeClass('open-menu');
    });

    $('.li-top-tablet .close-menu').click(function(event) {
        $('.header-nav').fadeOut();
        $('.header-nav > ul > li ul').fadeOut();
        $('body').removeClass('open-menu');
    });

    $('.li-top-tablet .back-menu').click(function(event) {
        $(this).parents('ul.sub-menu').fadeOut();
    });

    // слайдер на главной

    $('.home-slide-js').slick({
        dots: true,
        prevArrow: '<button type="button" class="slick-prev"><svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0443 1.3398C14.6301 0.733514 15.6051 0.733514 16.2114 1.3398C16.7972 1.92561 16.7972 2.90058 16.2114 3.48502L5.22309 14.4733H41.4829C42.3282 14.4747 43 15.1465 43 15.9918C43 16.837 42.3282 17.5307 41.4829 17.5307H5.22309L16.2114 28.4985C16.7972 29.1048 16.7972 30.0811 16.2114 30.6656C15.6051 31.2718 14.6287 31.2718 14.0443 30.6656L0.454716 17.076C-0.151569 16.4902 -0.151569 15.5152 0.454716 14.9308L14.0443 1.3398Z" fill="#00A94F"/></svg></button>',
        nextArrow: '<button type="button" class="slick-next"><svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.9557 1.3398C28.3699 0.733514 27.3949 0.733514 26.7886 1.3398C26.2028 1.92561 26.2028 2.90058 26.7886 3.48502L37.7769 14.4733H1.51708C0.671832 14.4747 0 15.1465 0 15.9918C0 16.837 0.671832 17.5307 1.51708 17.5307H37.7769L26.7886 28.4985C26.2028 29.1048 26.2028 30.0811 26.7886 30.6656C27.3949 31.2718 28.3713 31.2718 28.9557 30.6656L42.5453 17.076C43.1516 16.4902 43.1516 15.5152 42.5453 14.9308L28.9557 1.3398Z" fill="#00A94F"/></svg></button>'
    });

});

// карусель Статьи

$('.posts-js').slick({
	dots: true,
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	prevArrow: '<button type="button" class="slick-prev"><svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0443 1.3398C14.6301 0.733514 15.6051 0.733514 16.2114 1.3398C16.7972 1.92561 16.7972 2.90058 16.2114 3.48502L5.22309 14.4733H41.4829C42.3282 14.4747 43 15.1465 43 15.9918C43 16.837 42.3282 17.5307 41.4829 17.5307H5.22309L16.2114 28.4985C16.7972 29.1048 16.7972 30.0811 16.2114 30.6656C15.6051 31.2718 14.6287 31.2718 14.0443 30.6656L0.454716 17.076C-0.151569 16.4902 -0.151569 15.5152 0.454716 14.9308L14.0443 1.3398Z" fill="#00A94F"/></svg></button>',
	nextArrow: '<button type="button" class="slick-next"><svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.9557 1.3398C28.3699 0.733514 27.3949 0.733514 26.7886 1.3398C26.2028 1.92561 26.2028 2.90058 26.7886 3.48502L37.7769 14.4733H1.51708C0.671832 14.4747 0 15.1465 0 15.9918C0 16.837 0.671832 17.5307 1.51708 17.5307H37.7769L26.7886 28.4985C26.2028 29.1048 26.2028 30.0811 26.7886 30.6656C27.3949 31.2718 28.3713 31.2718 28.9557 30.6656L42.5453 17.076C43.1516 16.4902 43.1516 15.5152 42.5453 14.9308L28.9557 1.3398Z" fill="#00A94F"/></svg></button>',
	responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// карусель Комплексные системы

$('.compl-car').slick({
	dots: false,
	infinite: true,
	rows: 2,
	slidesPerRow: 1,
	slidesToShow: 4,
	slidesToScroll: 2,
	prevArrow: '<button type="button" class="slick-prev"><svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0443 1.3398C14.6301 0.733514 15.6051 0.733514 16.2114 1.3398C16.7972 1.92561 16.7972 2.90058 16.2114 3.48502L5.22309 14.4733H41.4829C42.3282 14.4747 43 15.1465 43 15.9918C43 16.837 42.3282 17.5307 41.4829 17.5307H5.22309L16.2114 28.4985C16.7972 29.1048 16.7972 30.0811 16.2114 30.6656C15.6051 31.2718 14.6287 31.2718 14.0443 30.6656L0.454716 17.076C-0.151569 16.4902 -0.151569 15.5152 0.454716 14.9308L14.0443 1.3398Z" fill="#00A94F"/></svg></button>',
	nextArrow: '<button type="button" class="slick-next"><svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.9557 1.3398C28.3699 0.733514 27.3949 0.733514 26.7886 1.3398C26.2028 1.92561 26.2028 2.90058 26.7886 3.48502L37.7769 14.4733H1.51708C0.671832 14.4747 0 15.1465 0 15.9918C0 16.837 0.671832 17.5307 1.51708 17.5307H37.7769L26.7886 28.4985C26.2028 29.1048 26.2028 30.0811 26.7886 30.6656C27.3949 31.2718 28.3713 31.2718 28.9557 30.6656L42.5453 17.076C43.1516 16.4902 43.1516 15.5152 42.5453 14.9308L28.9557 1.3398Z" fill="#00A94F"/></svg></button>',
	responsive: [
    {
      breakpoint: 1200,
      settings: {
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// home page show more about
$('.company-more span').click(function(event) {
	$(this).toggleClass('open');
	$('.company-body').toggleClass('open');
});

$('.header-search .header-btns-ico').click(function(event) {
	$('.search-body').fadeIn();
});

$('.header-right .close-search').click(function(event) {
	$('.header-right .search-body').fadeOut();
});

$(document).click(function(e) {

    if (!$(e.target).is('.header-right .header-search, .header-right .header-search *')) {
      $('.header-right .search-body').fadeOut();
    }

});

// menu tablet

$('.header-show').click(function(event) {
	$('body').addClass('open-menu');
	$('.header-nav').fadeIn();
});

$('.header-nav > ul > li:not(.no-sub) > a').click(function(event) {
	$(this).parent().find('ul').fadeIn();
});

$('.header-nav > .close-menu').click(function(event) {
	$('.header-nav').fadeOut();
	$('body').removeClass('open-menu');
});

$('.li-top-tablet .close-menu').click(function(event) {
	$('.header-nav').fadeOut();
	$('.header-nav > ul > li ul').fadeOut();
	$('body').removeClass('open-menu');
});

$('.li-top-tablet .back-menu').click(function(event) {
	$(this).parents('ul.sub-menu').fadeOut();
});


//////////////// Catalog
$('.one-filter-top').click(function(event) {
	$(this).toggleClass('active');
	$(this).parent().find('.one-filter-descr').slideToggle();
});

(function($){
	$(window).on("load",function(){

		// $(".one-filter-descr-inp").mCustomScrollbar({
		// 	scrollButtons:{enable:true},
		// 	theme:"3d-thick"
		// });

	});
})(jQuery);

// products page show more about
$('.show-all-detal span').click(function(event) {
	$(this).toggleClass('open');
	$('.page-detal').toggleClass('open');
});

//
if($(window).width() < 768) {
	$('.one-filter:not(.has-act-filt) .one-filter-top').removeClass('active');
	$('.one-filter:not(.has-act-filt) .one-filter-descr').fadeOut(0);
}

$('.close-filt, .show-filter a').click(function(event) {
	$('body').toggleClass('open-menu');
	$('.all-filters').fadeToggle();
});



/////////////////// product
// Количество товара +/-
// $(document).ready(function() {
//   $('.minus').click(function () {
//       var $input = $(this).parentsUntil('.num-block').find('input.in-num');
//       var count = parseFloat($input.val()) - 1;
//       count = count < 1 ? 1 : count;
//       if (count < 2) {
//         $(this).addClass('dis');
//       }
//       else {
//         $(this).removeClass('dis');
//       }
//       $input.val(count);
//       $input.change();
//       return false;
//   });
//   $('.plus').click(function () {
//       var $input = $(this).parentsUntil('.num-block').find('input.in-num');
//       $input.val(parseFloat($input.val()) + 1);
//       $input.change();
//       if ($input.val(parseFloat($input.val())) < 2) {
//         $(this).parentsUntil('.num-block').find(('.minus')).addClass('dis');
//       }
//       else {
//         $(this).parentsUntil('.num-block').find(('.minus')).removeClass('dis');
//       }
//       return false;
//   });
// });
// Конец Количество товара +/-

$('.other-prod-car').slick({
  dots: true,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  prevArrow: '<button type="button" class="slick-prev"><svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0443 1.3398C14.6301 0.733514 15.6051 0.733514 16.2114 1.3398C16.7972 1.92561 16.7972 2.90058 16.2114 3.48502L5.22309 14.4733H41.4829C42.3282 14.4747 43 15.1465 43 15.9918C43 16.837 42.3282 17.5307 41.4829 17.5307H5.22309L16.2114 28.4985C16.7972 29.1048 16.7972 30.0811 16.2114 30.6656C15.6051 31.2718 14.6287 31.2718 14.0443 30.6656L0.454716 17.076C-0.151569 16.4902 -0.151569 15.5152 0.454716 14.9308L14.0443 1.3398Z" fill="#00A94F"/></svg></button>',
  nextArrow: '<button type="button" class="slick-next"><svg width="43" height="32" viewBox="0 0 43 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.9557 1.3398C28.3699 0.733514 27.3949 0.733514 26.7886 1.3398C26.2028 1.92561 26.2028 2.90058 26.7886 3.48502L37.7769 14.4733H1.51708C0.671832 14.4747 0 15.1465 0 15.9918C0 16.837 0.671832 17.5307 1.51708 17.5307H37.7769L26.7886 28.4985C26.2028 29.1048 26.2028 30.0811 26.7886 30.6656C27.3949 31.2718 28.3713 31.2718 28.9557 30.6656L42.5453 17.076C43.1516 16.4902 43.1516 15.5152 42.5453 14.9308L28.9557 1.3398Z" fill="#00A94F"/></svg></button>',
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// solution tablet slider
if($(window).width() < 992) {
  $('.sol-car-in').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
  });
}

$(document).ready(function() {

  if($('.lk-page').length) {
    if($(window).width() > 768) {

      $('.lk-left ul.js-tabs li').eq(0).addClass('active');
      $('.lk-tab-wrap .one-lk-tab').eq(0).fadeIn();

      (function($) {
        $(function() {

          $('.lk-left ul.js-tabs').on('click', 'li:not(.active)', function() {
            $(this).addClass('active').siblings().removeClass('active')
              .parents('.lk').find('.lk-tab-wrap .one-lk-tab').fadeOut(0).eq($(this).index()).fadeIn();
          });



        })
      })(jQuery)

    }
    else {
      (function($) {
        $(function() {

          $('.lk-left ul.js-tabs').on('click', 'li:not(.active)', function() {
            $(this).addClass('active').siblings().removeClass('active')
              .parents('.lk').find('.lk-tab-wrap .one-lk-tab').fadeOut(0).eq($(this).index()).fadeIn();
              $('.blog-title h1').text($(this).find('a').text());
              $('.lk-left').fadeOut(0);
              $('.back-to-lk').fadeIn();
          })

        })
      })(jQuery)
    }

    $('.back-to-lk a').click(function(event) {
      $(this).parent().fadeOut(0);
      $('.lk-left ul.js-tabs li').removeClass('active');
      $('.lk-left').fadeIn();
      $('.lk-tab-wrap .one-lk-tab').fadeOut(0);
    });
  }


});


// basket step

$('.next-step a').click(function(event) {
  $(this).parents('.one-step').find('.one-step-descr').slideUp();
  $(this).parents('.one-step').removeClass('active').addClass('done').next().addClass('active').find('.one-step-descr').slideDown();

  $('.mobile-step').addClass('active');
  $('.one-mob-step').eq($(this).parents('.one-step').next().index()).addClass('active');
  event.preventDefault();
});

$('.change-step').click(function(event) {
  $('.one-step-descr').slideUp();
  $('.one-step').removeClass('active');
  $(this).parents('.one-step').find('.one-step-descr').slideDown();
  $(this).parents('.one-step').removeClass('done').addClass('active');
  event.preventDefault();
});


$('body').on('click', '.one-mob-step.active', function(event) {
  if ($(this).index() == 0) {
    $('.mobile-step').removeClass('active');
    $('.one-mob-step').eq(1).removeClass('active');
    $('.one-mob-step').eq(2).removeClass('active');
    $('.basket-inside').fadeOut();
  }
  else if ($(this).index() == 1) {
    $('.one-mob-step').eq(2).removeClass('active');
    $('.basket-inside').fadeOut();
  }
  $(this).addClass('active');
  $('.one-step-descr').slideUp();
  $('.one-step-descr').eq($(this).index()).slideDown();

  event.preventDefault();
});

$('.go-last').click(function(event) {
  $('.basket-inside').fadeIn();
});

$('.show-filt-com-mob a, .close-mob').click(function(event) {
  $('.comp-side').fadeToggle();
});
