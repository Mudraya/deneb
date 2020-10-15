$(document).ready(function(){

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

// solution tablet slider

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

function trigger_basket_modal() {
    document.getElementById("basket-a").click();
}
