//<script type="text/javascript" src="../js/jssor.slider.mini.js"></script>

$(document).ready(function(){
    //$('#lightgallery').lightGallery();

    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

/*
// Enable Carousel Indicators
    $(".item").click(function(){
        $("#myCarousel").carousel(1);
    });

    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
*/
    // Enable nivo slider
    /*$('#slider').nivoSlider({
        effect:'random',
        slices: 15,
        boxCols: 8,
        boxRows: 4,
        animSpeed: 500,
        pauseTime: 3000,
        startSlide: 0,
        directionNav:true,
        controlNav:true,
        controlNavThumbs:false,
        pauseOnHover:true,
        manualAdvance:false,
        prevText:'Prev',
        nextText:'Next',
        randomStart:false,
        beforeChange:function(){},
        afterChange:function(){},
        slideshowEnd:function(){},
        lastSlide:function(){},
        afterLoad:function(){}
    });

     */
});