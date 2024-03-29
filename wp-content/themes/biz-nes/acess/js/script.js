var urlJs='http://biznes.bi/wp-content/themes/biz-nes/acess/';


function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

function isIE() {
    var myNav = navigator.userAgent.toLowerCase();
    return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
};

/* cookie.JS
 ========================================================*/
// include(urlJs+'js/jquery.cookie.js');

/* Easing library
 ========================================================*/
// include(urlJs+'js/jquery.easing.1.3.js');

/* PointerEvents  
 ========================================================*/
jQuery(document).ready(function($){
    $('popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
        callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} 
			}
		}
    })
});

/* Camera
========================================================*/

jQuery(document).ready(function($){
    $('#camera').camera({
         autoAdvance: true,
         height: '30.859375%',
         minHeight: '350px',
         pagination: false,
         thumbnails: false,
         playPause: false,
         hover: false,
         loader: 'none',
         navigation: true,
         navigationHover: false,
         mobileNavHover: false,
         fx: 'simpleFade'
     })

     /* Owl Carousel
========================================================*/
    var o = $('.owl-carousel');
    if (o.length > 0) {
        $(document).ready(function () {
            o.owlCarousel({
                margin: 30,
                smartSpeed: 450,
                loop: true,
                dots: true,
                dotsEach: 1,
                nav: false,
                navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
                responsive: {
                    0: { items: 1 },
                    768: { items: 1},
                    980: { items: 1}
                }
            });
        });
    };


 });


//  ;
// (function ($) {
//     if(isIE() && isIE() < 11){ 
//         include(urlJs+'js/pointer-events.js');
//         $('html').addClass('lt-ie11'); 
//         $(document).ready(function(){
//             PointerEventsPolyfill.initialize({});
//         });
//     }
// })(jQuery); 

/* Stick up menus
 ========================================================*/
 jQuery(document).ready(function ($) {
    $('#stuck_container').TMStickUp({})


    // WOW
    var o = $('html');
    if ((navigator.userAgent.toLowerCase().indexOf('msie') == -1 ) || (isIE() && isIE() > 9)) {
            if (o.hasClass('desktop')) {
                new WOW().init();
            };
        }
});

/* WOW
 ========================================================*/
// ;
// (function ($) {
//     var o = $('html');

//     if ((navigator.userAgent.toLowerCase().indexOf('msie') == -1 ) || (isIE() && isIE() > 9)) {
//         if (o.hasClass('desktop')) {
//             include(urlJs+'js/wow.js');

//             $(document).ready(function () {
//                 new WOW().init();
//             });
//         }
//     }
// })(jQuery);


/* ToTop
 ========================================================*/
// ;
// (function ($) {
//     var o = $('html');
//     if (o.hasClass('desktop')) {
        
//         $(document).ready(function () {
//             $().UItoTop({
//                 easingType: 'easeOutQuart',
//                 containerClass: 'toTop fa fa-angle-up'
//             });
//         });
//     }
// })(jQuery);

/* EqualHeights
 ========================================================*/
// ;
// (function ($) {
//     var o = $('[data-equal-group]');
//     if (o.length > 0) {
//         include(urlJs+'js/jquery.equalheights.js');
//     }
// })(jQuery);

/* SMOOTH SCROLLIG
 ========================================================*/
// ;
// (function ($) {
//     var o = $('html');
//     if (o.hasClass('desktop')) {
//         include(urlJs+'js/jquery.mousewheel.min.js');
//         include(urlJs+'js/jquery.simplr.smoothscroll.min.js');

//         jQuery(document).ready(function ($) {
//             $.srSmoothscroll({
//                 step: 150,
//                 speed: 800
//             });
//         });
//     }
// })(jQuery);

/* Copyright Year
 ========================================================*/
// ;
// (function ($) {
//     var currentYear = (new Date).getFullYear();
//     $(document).ready(function () {
//         $("#copyright-year").text((new Date).getFullYear());
//     });
// })(jQuery);


/* Superfish menus
 ========================================================*/
// ;
// (function ($) {
//     include('js/superfish.js');    
// })(jQuery);

/* Navbar
 ========================================================*/
;
// (function ($) {
//     include('js/jquery.rd-navbar.js');
// })(jQuery);


/* Google Map
 ========================================================*/
// ;
// (function ($) {
//     var o = document.getElementById("google-map");
//     if (o) {
//         include('/maps.google.com/maps/api/js?sensor=false');
//         include(urlJs+'js/jquery.rd-google-map.js');

//         $(document).ready(function () {
//             var o = $('#google-map');
//             if (o.length > 0) {
//                 o.googleMap({
//                     styles: [{"featureType":"water","elementType":"all","stylers":[{"hue":"#76aee3"},{"saturation":38},{"lightness":-11},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"hue":"#8dc749"},{"saturation":-47},{"lightness":-17},{"visibility":"on"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#c6e3a4"},{"saturation":17},{"lightness":-2},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"hue":"#cccccc"},{"saturation":-100},{"lightness":13},{"visibility":"on"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"hue":"#5f5855"},{"saturation":6},{"lightness":-31},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[]}]
//                 });
//             }
//         });
//     }
// })
// (jQuery);


/* Contact Form
 ========================================================*/
// ;
// (function ($) {
//     var o = $('#contact-form');
//     if (o.length > 0) {
//         include(urlJs+'js/modal.js');
//         include(urlJs+'js/TMForm.js'); 

//         if($('#contact-form .recaptcha').length > 0){
//         	include('//www.google.com/recaptcha/api/js/recaptcha_ajax.js');
//         }
//     }
// })(jQuery);

/* Orientation tablet fix
 ========================================================*/
// ;
// (function ($) {
//     // IPad/IPhone
//     var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
//         ua = navigator.userAgent,

//         gestureStart = function () {
//             viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
//         },

//         scaleFix = function () {
//             if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
//                 viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
//                 document.addEventListener("gesturestart", gestureStart, false);
//             }
//         };

//     scaleFix();
    // Menu Android
//     if (window.orientation != undefined) {
//         var regM = /ipod|ipad|iphone/gi,
//             result = ua.match(regM);
//         if (!result) {
//             $('.sf-menus li').each(function () {
//                 if ($(">ul", this)[0]) {
//                     $(">a", this).toggle(
//                         function () {
//                             return false;
//                         },
//                         function () {
//                             window.location.href = $(this).attr("href");
//                         }
//                     );
//                 }
//             })
//         }
//     }
// })(jQuery);
// var ua = navigator.userAgent.toLocaleLowerCase(),
//     regV = /ipod|ipad|iphone/gi,
//     result = ua.match(regV),
//     userScale = "";
// if (!result) {
//     userScale = ",user-scalable=0"
// }
// document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0' + userScale + '">');



/* Owl Carousel
========================================================*/
// ;(function ($) {
//     var o = $('.owl-carousel');
//     if (o.length > 0) {
//         include(urlJs+'js/owl.carousel.min.js');
//         $(document).ready(function () {
//             o.owlCarousel({
//                 margin: 30,
//                 smartSpeed: 450,
//                 loop: true,
//                 dots: true,
//                 dotsEach: 1,
//                 nav: false,
//                 navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
//                 responsive: {
//                     0: { items: 1 },
//                     768: { items: 1},
//                     980: { items: 1}
//                 }
//             });
//         });
//     }
// })(jQuery);

/* Mailform
=============================================*/
// ;(function ($) {
//     include(urlJs+'js/mailform/jquery.form.min.js');
//     include(urlJs+'js/mailform/jquery.rd-mailform.min.c.js');
// })(jQuery);

