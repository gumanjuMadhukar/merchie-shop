/**
 * Created by Susan Dangol
 */


var winWidth = $(window).width();

$(document).ready(function () {
    sliderInit();
    addClassInit();
    navInit();
    mcustomInit();
});


/*------------------------------- Functions Starts -------------------------------*/
function sliderInit() {
    $('.banner-slider').slick({
        dots: false,
        arrows:false,
        autoplay:false,
        fade:true,
        autoplaySpeed:2000

      });
      $('.product-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows:false,
        autoplay:false,
        scroll:Infinity,
        autoplaySpeed:3000

      });
      $('.testimonial-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        circle:true,
        arrows:false,
        autoplay:false,
        scroll:Infinity,
        autoplaySpeed:3000

      });
    /*$('.common-banner-slider').slick({
        arrows: false,
        dots: true,
        autoplay: false,
        speed: 500,
        fade: true,
        pauseOnHover: false,
        cssEase: 'linear',
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 667,
                settings: {
                    arrows: true,
                    dots: false
                }
            }
        ]
    });*/

}

function addClassInit() {

}

function navInit() {

}

function mcustomInit() {

}



/*-------------------------------- Functions Ends --------------------------------*/
