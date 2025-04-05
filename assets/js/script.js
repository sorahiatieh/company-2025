//<script type="text/javascript" src="../js/jssor.slider.mini.js"></script>

$(document).ready(function(){
    $('#lightgallery').lightGallery();
    
    ("#myCarousel").carousel();

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
         boxCols: 8,
         boxRows: 4,
         pauseTime: 3000,
         effect:'fade',
         controlNav:true,
         directionNav:true,
         pauseOnHover:true,
         animSpeed: 600,
         prevText:'&lt',
         nextText:'&gt',
         slices: 15,
         startSlide: 0,
         manualAdvance:false
    });
});