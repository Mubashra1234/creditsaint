$(".slick-slider").slick({
    slidesToShow: 7,
    infinite: false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 5.5,
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 2,
            }
        },

    ]
});


$(".testimonial-slider").slick({
    slidesToShow: 3.5,
    infinite: false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [
        {
            breakpoint: 1200, // Below 1200px
            settings: {
                slidesToShow: 3 // Show 3 slides instead of 3.5
            }
        },
        {
            breakpoint: 992, // Below 992px
            settings: {
                slidesToShow: 2 // Show 2 slides
            }
        },
        {
            breakpoint: 768, // Below 768px
            settings: {
                slidesToShow: 1.5 // Show 1.5 slides
            }
        },
        {
            breakpoint: 576, // Below 576px
            settings: {
                slidesToShow: 1 // Show 1 slide
            }
        }
    ]
});




function myFunction(x) {
    x.classList.toggle("change");
}

window.onscroll = function () { scrollFunction() };
var menutop = document.getElementById("header-lower");
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        menutop.classList.add("menufixtop");
    } else {
        menutop.classList.remove("menufixtop");
    }
}











$(document).ready(function(){
    if ($(window).width() < 992) {
      $('.slider').slick({
        centerMode: true,
        slidesToShow: 1,
        dots: true,
        arrows: false,
        swipe: true,
        swipeToSlide: true,

  infinite : true,
      });
  
      // Event listener for before slide change
        }
  });