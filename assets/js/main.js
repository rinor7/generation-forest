//Hamburger Menu
var Menu = {
    el: {
    ham: jQuery('.menu-m'),
    menuTop: jQuery('.menu-top'),
    menuMiddle: jQuery('.menu-middle'),
    menuBottom: jQuery('.menu-bottom')
    },
    init: function() {
    Menu.bindUIactions();
    },
    bindUIactions: function() {
    Menu.el.ham
    .on(
    'click',
    function(event) {
    Menu.activateMenu(event);
    event.preventDefault();
    }
    );
    },
    activateMenu: function() {
    Menu.el.menuTop.toggleClass('menu-top-click');
    Menu.el.menuMiddle.toggleClass('menu-middle-click');
    Menu.el.menuBottom.toggleClass('menu-bottom-click'); 
    }
    };
Menu.init();

// Header change on scroll
$(document).ready(function() {
  $(window).scroll(function(){
      if ($(this).scrollTop() > 70) {
         $('.logo_header').addClass('scroll-imgchange'); 
         $('.logo_site').addClass('scroll-imgchange'); 
         $('.navbar-nav').addClass('scroll-navchange');
         $('.headerbar').addClass('scroll-headerchange');
         $('.navbar-toggler2').addClass('scroll-hamburger');
         $('header').addClass('shadow-header');
      } else {
         $('.logo_header').removeClass('scroll-imgchange');
         $('.logo_site').removeClass('scroll-imgchange');
         $('.navbar-nav').removeClass('scroll-navchange');
         $('.headerbar').removeClass('scroll-headerchange');
         $('.navbar-toggler2').removeClass('scroll-hamburger');
         $('header').removeClass('shadow-header');
      }
  });
});

// for rightmenu.php header
// $(document).ready(function() {
//   $('.navbar-toggler').click(function() {
//     $('.menu-menu-1-container').toggleClass('act');
//   });

//   $('li a').click(function() {
//     $('.menu-menu-1-container').removeClass('act');
//     $('.menu-bottom').removeClass('menu-bottom-click');
//     $('.menu-top').removeClass('menu-top-click');
//   });
// });
 
// Search Result
// $('.control').click( function(){
//   $('body').addClass('search-active');
//   $('.fa-search-loc').addClass('d-none');
//   $('.input-search').focus();
// });
// Search Result END

$('.icon-close').click( function(){
  $('body').removeClass('search-active');
  $('.fa-search-loc').removeClass('d-none');
});



// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("standard-header").style.cssText = "top: 0px; transition: .5s";
//   } else {
//     document.getElementById("standard-header").style.cssText = "top: -45px; transition: .5s;";
//   }
//   prevScrollpos = currentScrollPos;
// }

// $(document).ready(function() {
//   const navbarToggler = $('.navbar-toggler');
//   const site = $('.site-home, .site, .site-main, .page-all, .site-other');
//   const body = $('html');
//   navbarToggler.on('click', function() {
//     body.toggleClass('no-scroll');
//     site.toggleClass('filter-style');
//   });
//   });


// Menu for standard header with blur effect
$(document).ready(function() {
  const navbarToggler = $('.navbar-toggler-standard');
  const site = $('.site');
  const body = $('body');

  navbarToggler.on('click', function() {
    if (body.hasClass('no-scroll')) {
      body.removeClass('no-scroll');
      site.removeClass('filter-style');
      $(window).scrollTop(body.data('scroll-position')); // Restore previous scroll position
    } else {
      body.data('scroll-position', $(window).scrollTop()); // Save current scroll position
      body.addClass('no-scroll');
      site.addClass('filter-style');
    }
  });
});


// Close navbar when click on link ( used for Landingpages )
function closeNavbar() {
  $(".navbar-toggler").attr("aria-expanded", "false");
  $(".navbar-collapse").removeClass("show");
  $(".menu-top").removeClass("menu-top-click");
  $(".menu-middle").removeClass("menu-middle-click");
  $(".menu-bottom").removeClass("menu-bottom-click");
  $("body").removeClass("no-scroll");
  $(".site").removeClass("filter-style");
  $(".menu-menu-1-container").removeClass("act");
  toggleScroll();
}
$(".navbar-collapse li a").on("click", function() {
  closeNavbar();
});




// var swiper = new Swiper(".mySwiper", {
//   pagination: {
//     el: ".swiper-pagination",
//   },
// });

var swiper = new Swiper(".mySwiper-boxes-section", {
  slidesPerView: 1,
  spaceBetween: 15,
  loop: true,
  autoHeight: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 15,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 16,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 16,
    },
  },
});

