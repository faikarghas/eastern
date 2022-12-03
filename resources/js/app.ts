import './bootstrap';

// Third Parties
import 'flowbite';

// Modules
import { Home, Layout } from './modules/home';

// Utils
import { getCurrentDate } from './utils/index';


(function(yourcode) {

    // The global jQuery object is passed as a parameter
    yourcode(jQuery, document);

    }(function($, document) {
        // The $ is now locally scoped
        $(function() {
            const Window = (window as any)

            // The DOM is ready!
            console.log('The DOM is ready!')

            /**
             * Home Modules
             */
            const layout = new Layout();
            const homePage = new Home();
            // Init all functionality
            homePage.tab();
            layout.menu();


            $('.slider-services').slick({
                dots:false,
                centerMode: true,
                variableWidth: true,
                centerPadding: '60px',
                slidesToShow: 3,
                prevArrow: $('.ser-prev'),
                nextArrow: $('.ser-next'),
                autoplay: false,
                autoplaySpeed: 2000,
            })

            $('.slider-country').slick({
                dots:false,
                slidesToShow: 1,
                fade: true,
                prevArrow: $('.coun-prev'),
                nextArrow: $('.coun-next'),
                autoplay: true,
                autoplaySpeed: 2000,
                adaptiveHeight: true
            })

             $('.slider-service1').slick({
                dots:false,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                prevArrow: $('.counser-prev'),
                nextArrow: $('.counser-next'),
                autoplay: false,
                responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                ]
            })

            $('.slider-service2').slick({
                dots:true,
                infinite: true,
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            })
            /**
             * About Modules
             */

        });
        console.log('The DOM may not be ready!')

        // The rest of your code goes here!

    }
));