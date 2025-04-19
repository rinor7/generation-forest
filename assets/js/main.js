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
    $('body').toggleClass('navigation-collapsed');
        // Check if the menu is now collapsed (added class 'navigation-collapsed')
        if ($('body').hasClass('navigation-collapsed')) {
            // Change theme color for navigation collapsed state
            $('meta[name="theme-color"]').attr('content', '#FFF'); //Primary color
        } else {
            // Revert to the original theme color when navigation is open
            $('meta[name="theme-color"]').attr('content', '#FFF'); // White color
        }
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
        //  $('.navbar-toggler2').addClass('scroll-hamburger');
         $('header').addClass('shadow-header');
      } else {
         $('.logo_header').removeClass('scroll-imgchange');
         $('.logo_site').removeClass('scroll-imgchange');
         $('.navbar-nav').removeClass('scroll-navchange');
         $('.headerbar').removeClass('scroll-headerchange');
        //  $('.navbar-toggler2').removeClass('scroll-hamburger');
         $('header').removeClass('shadow-header');
      }
  });
});

$('.icon-close').click( function(){
  $('body').removeClass('search-active');
  $('.fa-search-loc').removeClass('d-none');
});

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

var swiper = new Swiper(".mySwiper-our-projects", {
  slidesPerView: 1.2,
  spaceBetween: 16,
  // loop: false,
  autoHeight: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  breakpoints: {
    767.98: {
      slidesPerView: 2,
      spaceBetween: 15,
    },
    991.98: {
      slidesPerView: 3,
      spaceBetween: 8,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 16,
    },
  },
});

var swiper = new Swiper(".mySwiper-our-partners", {
  slidesPerView: 'auto',
  spaceBetween: 30,  
  loop: true,
  breakpoints: {
    575.98: {
      spaceBetween: 40,
    },
    767.98: {
      spaceBetween: 50,
    },
    991.98: {
      spaceBetween: 60,
    },
    1440: {
      spaceBetween: 110,
    },
  },
});

var swiper = new Swiper(".mySwiper-our-team", {
  slidesPerView: 1.5,
  spaceBetween: 16,
  // loop: false,
  autoHeight: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  breakpoints: {
    450: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
    575.98: {
      slidesPerView: 3,
      spaceBetween: 16,
    },
    767.98: {
      slidesPerView: 4,
      spaceBetween: 16,
    },
    991.98: {
      slidesPerView: 4.7,
      spaceBetween: 16,
    },
    1024: {
      slidesPerView: 5.7,
      spaceBetween: 24,
    },
  },
});

//change active bullet at same time with swiper
let swipersAll = document.querySelectorAll(".swiper");

swipersAll.forEach(swiperElement => {
    let swiperInstance = swiperElement.swiper; // Get the Swiper instance

    if (swiperInstance) {
        swiperInstance.on('slideChange', function() {
            swiperInstance.pagination.render();
            swiperInstance.pagination.update();
        });
    }
});

var swiper = new Swiper(".mySwiper-our-concept", {
  slidesPerView: 1.2,
  spaceBetween: 16,
  loop: false,
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
    767.98: {
      slidesPerView: 2,
      spaceBetween: 15,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 16,
    },
  },
});

// change newsletter butto name when form submitted 
document.addEventListener("DOMContentLoaded", function () {
  // Mailchimp Form Elements
  let mcForm = document.getElementById("mc-embedded-subscribe-form");
  let mcButton = document.getElementById("mc-embedded-subscribe");
  let mcEmailInput = document.getElementById("mce-EMAIL");
  let mcSuccessMessage = document.getElementById("mce-success-response");

  // Contact Form 7 Elements
  let cf7Forms = document.querySelectorAll(".wpcf7-form"); // Select all CF7 forms
  let cf7Buttons = document.querySelectorAll(".wpcf7-submit"); // Select all CF7 submit buttons

  // MAILCHIMP FORM HANDLING
  if (mcForm) {
      mcForm.addEventListener("submit", function () {
          setTimeout(() => {
              if (mcEmailInput.classList.contains("mce_inline_error")) {
                  mcButton.value = "Email is required!";
                  mcButton.classList.add("error");
                  mcButton.classList.remove("success");
              } else {
                  mcButton.classList.remove("error");
              }
          }, 100);
      });

      // Observer for Mailchimp success message
      let mcObserver = new MutationObserver(function () {
          if (mcSuccessMessage && mcSuccessMessage.style.display === "block") {
              mcButton.value = "Subscribed!";
              mcButton.classList.add("success");
              mcButton.classList.remove("error");
              mcButton.disabled = true;
          }
      });

      if (mcSuccessMessage) {
          mcObserver.observe(mcSuccessMessage, { attributes: true, attributeFilter: ["style"] });
      }
  }

  // CONTACT FORM 7 HANDLING
  cf7Forms.forEach(function (form, index) {
      form.addEventListener("submit", function () {
          setTimeout(() => {
              let cf7Button = cf7Buttons[index]; // Get corresponding button
              if (form.classList.contains("invalid")) {
                  cf7Button.value = "Please check your details!";
                  cf7Button.classList.add("error");
                  cf7Button.classList.remove("success");
              } else {
                  cf7Button.classList.add("success");
                  cf7Button.classList.remove("error");
                  cf7Button.value = "Submitted!";
              }
          }, 100);
      });
  });
});

//js for blog pagination
jQuery(document).ready(function ($) {
  $('body').on('click', '.pagination-wrapper a', function (e) {
      e.preventDefault();

      let link = $(this).attr('href');
      let page = link.split('paged=')[1];

      $.ajax({
          url: my_ajax_obj.ajax_url,
          type: 'POST',
          data: {
              action: 'load_more_blogs',
              paged: page,
          },
          success: function (response) {
              $('#ajax-posts').html(response.posts);
              $('.pagination-wrapper').html(response.pagination);

              // 🔽 Smooth scroll to top of section
              $('html, body').animate({
                  scrollTop: $('.blogs__section').offset().top - 120 // or whatever height you need
              }, 500);
          }
      });

      return false;
  });
 });