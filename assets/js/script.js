//<script type="text/javascript" src="../js/jssor.slider.mini.js"></script>

$(document).ready(function(){
    $('#lightgallery').lightGallery();

    $(".owl-carousel").owlCarousel({

        //Basic Speeds
        slideSpeed : 200,
        paginationSpeed : 800,

        //Autoplay
        autoPlay : false,
        goToFirst : true,
        goToFirstSpeed : 1000,

        // Navigation
        navigation : false,
        navigationText : ["prev","next"],
        pagination : true,
        paginationNumbers: true,

        // Responsive
        responsive: true,
        items : 5,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsMobile : [479,1]

    })
   // ("#myCarousel").carousel();

// Enable Carousel Indicators
    $(".item").click(function(){
        $("#myCarousel").carousel(1);
    });

    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });

    // Enable nivo slider
    $('#slider').nivoSlider({
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
});