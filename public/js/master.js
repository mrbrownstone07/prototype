document.addEventListener('scroll', updatePosition);

function updatePosition(){
    var height
    if (window.pageYOffset != undefined) {
        height = pageYOffset;
    } else {
        var sy, d = document,
            r = d.documentElement,
            b = d.body;
        
        sy = r.scrollTop || b.scrollTop || 0;
        height = sy;
    }
    pageHeight = $(window).height();
    imgDivHeight= $(".img-div").height();
    imgLogoHeight = $("#IMG_LOGO").height();

    console.log(imgLogoHeight);
    if(height > imgDivHeight-130){
        // console.log("change");
        $('#nav').removeClass("bg-transparent");
        $("#nav").addClass("bg-dark");
    }else{
        $('#nav').removeClass("bg-dark");
        $("#nav").addClass("bg-transparent");
    }

    if (height > imgLogoHeight-200) {
        console.log("c");
        $('#IMG_LOGO').removeClass("show");
        $("#IMG_LOGO").addClass("hide");
        $('#nav-logo').removeClass("hide");
        $("#nav-logo").addClass("show");
    } else {
        $('#IMG_LOGO').removeClass("hide");
        $("#IMG_LOGO").addClass("show");
        $('.navbar-brand').removeClass("show");
        $(".navbar-brand").addClass("hide");
    }

    // if(height > pageHeight-600){
    //     $("#footbar").removeClass("hide");
    //     $("#footbar").addClass("show");
    // }else{
    //     $("#footbar").removeClass("show");
    //     $("#footbar").addClass("hide");
    // }
}

// $(document).ready(function(){
//     $('.icon').click(function(){
//         console.log('click')
//         $('.icon').toggleClass('active');
//         $('#menu').fadeIn(3000, function(){
//             $('#menu').toggleClass("bg-inactive");
//             $('#menu').toggleClass("bg-active");
//             $('#banner').toggleClass("hide");
//             $('#_navbar').toggleClass("hide");
//             $('#_navbar').toggleClass("show");
//         });
//     });
// });