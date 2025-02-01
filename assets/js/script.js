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
    
    
});