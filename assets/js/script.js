//<script type="text/javascript" src="../js/jssor.slider.mini.js"></script>

$(document).ready(function(){
    $('#lightgallery').lightGallery({
        pager: true,
        thumbnail: true,
        mode:'lg-fade',
        iframeMaxWidth:'90%',
    });
    
    ("#myCarousel").carousel();

// Enable Carousel Indicators
    $(".item").click(function(){
        $("#myCarousel").carousel(1);
    });

    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });

    $('#slider').nivoSlider({
        effect:'random',
        slices: 5,
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