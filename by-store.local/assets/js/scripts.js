// $(function(){
//   // msFavoriter
//   // https://github.com/TrywaR/msFavoriter
// 	// - Добавление или удаление избранных товаров
// 	$(document).on('click', '.msFavoriterToggle', function(){
// 		msProductId = $(this).parents('.ms2_form').find('[name="id"]').val()
// 		msFavoriterButton = $(this)

// 		$.post('/msFavoriter', {'id': msProductId}, function(){
// 			msFavoriterButton.toggleClass('_active_')
// 			msFavoriterCount()
// 		})

// 		return false
// 	})

// 	// - Количество избранных товаров
// 	function msFavoriterCount(){
// 		$.post('/msFavoriter', {}, function(data){
// 			if (data > 0)
// 				$('#msFavoriter').show().find('strong').text(data)
// 			else
// 				$('#msFavoriter').hide()
// 		})
// 	}
// 	msFavoriterCount()
// 	// msFavoriter x
// });

// //451 lines old modal quick buy need change
// $(function(){
//     $(document).on('click','.btnQuickOrder',function(){
//         msProductTitle=$(this).parents('.ms2_form').find('[name="title"]').val()
//         msProductPrice=$(this).parents('.ms2_form').find('[name="price"]').val()
//         $('.modal').css('display','block')
//         $('.modal').find('[name="pagetitle"]').val(msProductTitle)
//         $('.modal').find('[name="price"]').val(msProductPrice)
//         $('.modal').find('[class="footer_price"]').html('Сумма: '+msProductPrice)
//         $('.modal').find('[class="header_title"]').html(msProductTitle)
//         return false
//     });
//     $('.modal').on('click','.close',function(){
//          $('.modal').css('display','none')
//     })
    
// });

// var img = document.getElementsByTagName('img');
// var msGallery= document.getElementById('msGallery');
// var fotorama= document.getElementById('fotorama')
// fotorama.oncontextmenu = function()
//     {
//         return false;
//     }
// msGallery.oncontextmenu = function()
//     {
//         return false;
//     }
// for(var i in img)
// {
//     img[i].oncontextmenu = function()
//     {
//         return false;
//     }
// }






jQuery(document).ready(function(a) {
	"use strict";
  function c() {n.removeClass("open")}
  var j = a(".sub-menu-toggle");
  a("").on("click"), 
	function(b, c, d) {
		a(b).on("click", function() {
			a(this).addClass("sidebar-open"), a(c).addClass("open")
		}), a(d).on("click", function() {
			a(b).removeClass("sidebar-open"), a(c).removeClass("open")
		})
	}(".sidebar-toggle", ".sidebar-offcanvas",".sidebar-close");
});

(function($) {
    "use strict";

    /*$("a.comparison-go.btn-add-to-wishlist").addClass("colorWishlist")===================================================================================*/
 
    /*  WOW
    /*===================================================================================*/

    $(document).ready(function () {
        new WOW().init();
    });

    /*===================================================================================*/
   
$(document).ready(function() {
     
    
    $('.banner-carousel').owlCarousel({
        dots:true,
        loop:true, //Зацикливаем слайдер
        margin:10, //Отступ от картино если выводите больше 1
        nav:true, //Отключил навигацию
        navText: [
          '<svg width="30" height="30" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z" fill="#fff" /></svg>',
          '<svg width="30" height="30" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z" fill="#fff" /></svg>'
        ],
        autoplay:true, //Автозапуск слайдера
        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:15000, //Время смены слайда
        responsive:{ //Адаптация в зависимости от разрешения экрана
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});
$(document).ready(function() {
    $('.brands-carousel').owlCarousel({
        dots:false,
        loop:true, //Зацикливаем слайдер
        margin:10, //Отступ от картино если выводите больше 1
        nav:false, //Отключил навигацию
        autoplay:false, //Автозапуск слайдера
        responsive:{ //Адаптация в зависимости от разрешения экрана
            0:{
                items:2
            },
            500:{
                items:4
            },
            800:{
                items:6
            },
            1000:{
                items:8
            }
        }
    });
});
$(document).ready(function() {
    $('.product-carusel').owlCarousel({
        dots:false,
        loop:false, //Зацикливаем слайдер
        margin:10, //Отступ от картино если выводите больше 1
        nav:false, //Отключил навигацию
        autoplay:false, //Автозапуск слайдера
        responsive:{ //Адаптация в зависимости от разрешения экрана
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
});


    /*  OWL CAROUSEL
    
    /*===================================================================================*/

    $(document).ready(function () {

           
        var dragging = true;
        var owlElementID = "#owl-main";

        function fadeInReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").stop().delay(800).animate({ opacity: 0 }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").css({ opacity: 0 });
            }
        }

        function fadeInDownReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").stop().delay(800).animate({ opacity: 0, top: "-15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").css({ opacity: 0, top: "-15px" });
            }
        }

        function fadeInUpReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").stop().delay(800).animate({ opacity: 0, top: "15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").css({ opacity: 0, top: "15px" });
            }
        }

        function fadeInLeftReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").stop().delay(800).animate({ opacity: 0, left: "15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").css({ opacity: 0, left: "15px" });
            }
        }

        function fadeInRightReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").stop().delay(800).animate({ opacity: 0, left: "-15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").css({ opacity: 0, left: "-15px" });
            }
        }

        function fadeIn() {
            $(owlElementID + " .active .caption .fadeIn-1").stop().delay(500).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeIn-2").stop().delay(700).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeIn-3").stop().delay(1000).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInDown() {
            $(owlElementID + " .active .caption .fadeInDown-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInDown-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInDown-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInUp() {
            $(owlElementID + " .active .caption .fadeInUp-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInUp-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInUp-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInLeft() {
            $(owlElementID + " .active .caption .fadeInLeft-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInLeft-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInLeft-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInRight() {
            $(owlElementID + " .active .caption .fadeInRight-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInRight-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInRight-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        $(owlElementID).owlCarousel({

            autoPlay: 5000,
            stopOnHover: true,
            navigation: true,
            pagination: true,
            singleItem: true,
            items: 1,
            addClassActive: true,
            //transitionStyle: "fade",
            navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],



            afterInit: function() {
                fadeIn();
                fadeInDown();
                fadeInUp();
                fadeInLeft();
                fadeInRight();
            },

            afterMove: function() {
                fadeIn();
                fadeInDown();
                fadeInUp();
                fadeInLeft();
                fadeInRight();
            },

            afterUpdate: function() {
                fadeIn();
                fadeInDown();
                fadeInUp();
                fadeInLeft();
                fadeInRight();
            },

            startDragging: function() {
                dragging = true;
            },

            afterAction: function() {
                fadeInReset();
                fadeInDownReset();
                fadeInUpReset();
                fadeInLeftReset();
                fadeInRightReset();
                dragging = false;
            }

        });

        if ($(owlElementID).hasClass("owl-one-item")) {
            $(owlElementID + ".owl-one-item").data('owlCarousel').destroy();
        }

        $(owlElementID + ".owl-one-item").owlCarousel({
            items: 1,
            singleItem: true,
            navigation: false,
            pagination: false
        });

        $('#transitionType li a').click(function () {

            $('#transitionType li a').removeClass('active');
            $(this).addClass('active');

            var newValue = $(this).attr('data-transition-type');

            $(owlElementID).data("owlCarousel").transitionTypes(newValue);
            $(owlElementID).trigger("owl.next");

            return false;

        });

        $("#owl-recently-viewed").owlCarousel({
            stopOnHover: true,
            rewindNav: true,
            items: 6,
            pagination: false,
            itemsTablet: [768,3]
        });

        $("#owl-recently-viewed-2").owlCarousel({
            stopOnHover: true,
            rewindNav: true,
            items: 4,
            pagination: false,
            itemsTablet: [768,3],
            itemsDesktopSmall: [1199,3],
        });

        $("#owl-brands").owlCarousel({
            stopOnHover: true,
            rewindNav: true,
            items: 4,
            pagination: false,
            itemsTablet : [768, 4]
        });

        $('#owl-single-product').owlCarousel({
            items: 1,
            singleItem: true,
            pagination: false
        });

        $('#owl-single-product-thumbnails').owlCarousel({
            items: 6,
            pagination: false,
            rewindNav: true,
            itemsTablet : [768, 4]
        });

        $('#owl-recommended-products').owlCarousel({
            rewindNav: true,
            items: 4,
            pagination: false,
            itemsTablet: [768, 3],
            itemsDesktopSmall: [1199,3],
        });

        $('#best-seller-single-product-slider').owlCarousel({
            items: 1,
            singleItem: true,
            pagination: false
        });

        $(".slider-next").click(function () {
            var owl = $($(this).data('target'));
            owl.trigger( 'next.owl.carousel' );
            return false;
        });

        $(".slider-prev").click(function () {
            var owl = $($(this).data('target'));
            owl.trigger( 'prev.owl.carousel' );
            return false;
        });

        $('.single-product-gallery .horizontal-thumb').click(function(){
            var $this = $(this), owl = $($this.data('target')), slideTo = $this.data('slide');
            owl.trigger('to.owl.carousel', slideTo);
            $this.addClass('active').parent().siblings().find('.active').removeClass('active');
            return false;
        });



 $(".product-carousel .owl-carousel").each(function() {
    $(this).owlCarousel({
     items: 1,
                    loop: false,
                    margin: 10,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true
    });
  });
  // Custom Navigation Events
  //$(".next").click(function(){$(this).closest('.span12').find('.owl-carousel').trigger('owl.next');})
  //$(".prev").click(function(){$(this).closest('.span12').find('.owl-carousel').trigger('owl.prev');})

    });

    /*===================================================================================*/
    /*  STAR RATING
    /*===================================================================================*/

    $(document).ready(function () {

        if ($('.star').length > 0) {
            $('.star').each(function(){
                    var $star = $(this);

                    if($star.hasClass('big')){
                        $star.raty({
                            starOff: 'assets/images/star-big-off.png',
                            starOn: 'assets/images/star-big-on.png',
                            space: false,
                            score: function() {
                                return $(this).attr('data-score');
                            }
                        });
                    }else{
                     $star.raty({
                        starOff: 'assets/images/star-off.png',
                        starOn: 'assets/images/star-on.png',
                        space: false,
                        score: function() {
                            return $(this).attr('data-score');
                        }
                    });
                }
            });
        }
    });

    /*===================================================================================*/
    /*  SHARE THIS BUTTONS
    /*===================================================================================*/

    $(document).ready(function () {
        if($('.social-row').length > 0){
            stLight.options({publisher: "2512508a-5f0b-47c2-b42d-bde4413cb7d8", doNotHash: false, doNotCopy: false, hashAddressBar: false});
        }
    });

    /*===================================================================================*/
    /*  CUSTOM CONTROLS
    /*===================================================================================*/
    //   $(document).on('click', '.yamm .dropdown-menu', function(e) {
    //       e.stopPropagation()
    //     });

    $(document).ready(function () {

        // Select Dropdown
        if($('.le-select').length > 0){
            $('.le-select select').customSelect({customClass:'le-select-in'});
        }

        // Checkbox
        if($('.le-checkbox').length>0){
            $('.le-checkbox').after('<i class="fake-box"></i>');
        }

        //Radio Button
        if($('.le-radio').length>0){
            $('.le-radio').after('<i class="fake-box"></i>');
        }

        // Buttons
        $('.le-button.disabled').click(function(e){
            e.preventDefault();
        });
        
var modal = document.getElementById("myModal");
var modal_feedback=document.getElementById("feedback_modal");

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// };

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// };

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal_feedback) {
    modal_feedback.style.display = "none";
  }
};

 // Quantity Spinner
        $('.le-quantity a').click(function(e){
            e.preventDefault();
            var elem = $(this).closest('.le-quantity').find('input.counter');
            var currentQty= elem.val();

            if( $(this).hasClass('minus') && currentQty>0){
                elem.val(parseInt(currentQty, 10) - 1);
                elem.trigger("change");
            }
            else{
                if( $(this).hasClass('plus')){
                    elem.val(parseInt(currentQty, 10) + 1);
                    elem.trigger("change");
                }
            }
        });

        // Price Slider
        if ($('.price-slider').length > 0) {
            $('.price-slider').slider({
                min: 100,
                max: 700,
                step: 10,
                value: [100, 400],
                handle: "square"

            });
        }

        $(document).ready(function(){
            $('select.styled').customSelect();
        });

        // Data Placeholder for custom controls

        $('[data-placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('data-placeholder')) {
                input.val('');

            }
        }).blur(function() {
            var input = $(this);
            if (input.val() === '' || input.val() == input.attr('data-placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('data-placeholder'));
            }
        }).blur();

        $('[data-placeholder]').parents('form').submit(function() {
            $(this).find('[data-placeholder]').each(function() {
                var input = $(this);
                if (input.val() == input.attr('data-placeholder')) {
                    input.val('');
                }
            });
        });

    });

    /*===================================================================================*/
    /*  LIGHTBOX ACTIVATOR
    /*===================================================================================*/
    $(document).ready(function(){
        if ($('a[data-rel="prettyphoto"]').length > 0) {
            //$('a[data-rel="prettyphoto"]').prettyPhoto();
        }
    });


    /*===================================================================================*/
    /*  SELECT TOP DROP MENU
    /*===================================================================================*/
    $(document).ready(function() {
        $('.top-drop-menu').change(function() {
            var loc = ($(this).find('option:selected').val());
            window.location = loc;
        });
    });

    /*===================================================================================*/
    /*  LAZY LOAD IMAGES USING ECHO
    /*===================================================================================*/
    $(document).ready(function(){
        echo.init({
            offset: 100,
            throttle: 250,
            unload: false
        });
    });

    /*===================================================================================*/
    /*  GMAP ACTIVATOR
    /*===================================================================================*/

    $(document).ready(function(){
        var zoom = 16;
        var latitude = 51.539075;
        var longitude = -0.152424;
        var mapIsNotActive = true;
        setupCustomMap();

        function setupCustomMap() {
            if ($('.map-holder').length > 0 && mapIsNotActive) {

                var styles = [
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            },
                            {
                                "color": "#E6E6E6"
                            }
                        ]
                    }, {
                        "featureType": "administrative",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    }, {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "saturation": -100
                            }
                        ]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#808080"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }, {
                        "featureType": "water",
                        "stylers": [
                            {
                                "color": "#CECECE"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }, {
                        "featureType": "poi",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    }, {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#E5E5E5"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }, {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }, {}
                ];

                var lt, ld;
                if ($('.map').hasClass('center')) {
                    lt = (latitude);
                    ld = (longitude);
                } else {
                    lt = (latitude + 0.0027);
                    ld = (longitude - 0.010);
                }

                var options = {
                    mapTypeControlOptions: {
                        mapTypeIds: ['Styled']
                    },
                    center: new google.maps.LatLng(lt, ld),
                    zoom: zoom,
                    disableDefaultUI: true,
                    scrollwheel: false,
                    mapTypeId: 'Styled'
                };
                var div = document.getElementById('map');

                var map = new google.maps.Map(div, options);

                var styledMapType = new google.maps.StyledMapType(styles, {
                    name: 'Styled'
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(latitude, longitude),
                    map: map
                });

                map.mapTypes.set('Styled', styledMapType);

                mapIsNotActive = false;
            }

        }
    });


        /*===================================================================================*/
        /*  Yamm Dropdown
        /*===================================================================================*/


})(jQuery);



