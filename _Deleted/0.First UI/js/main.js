$(function(){

    /*======================================================
                    Main Wallpaper Change Start
    ======================================================*/
    

    /*======================================================
                    Main Wallpaper Change End
    ======================================================*/
    



    /*======================================================
                    Main Sldier Start
    ======================================================*/    
    $(".MainSlider").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        rtl:true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll:1 
            }
          }
        ]
    });
    /*======================================================
                    Main Sldier End
    ======================================================*/




    /*======================================================
                    SideMenu Top Sldier Start
    ======================================================*/
    $(".SideTopSlider").slick({
        infinite: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl:true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });
    /*======================================================
                    SideMenu Top Sldier End
    ======================================================*/
    



})    
  