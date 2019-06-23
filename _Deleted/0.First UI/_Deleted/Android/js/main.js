$(function(){

//=========================AOS : Scroll hide and show effects=================================
    AOS.init();

/*======================================================
                Slick Slider Start
======================================================*/
$(".SlikSlider").slick({
    infinite: true,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 3,
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
          slidesToScroll: 1
        }
      }
    ]
  });

/*======================================================
                Slick Slider End
======================================================*/




/*======================================================
                Statistics Counting Start
======================================================*/

  var counting1 = false;
  var counting2 = false;
  var counting3 = false;
  var counting4 = false;

  $(window).scroll(function(){
    var count1 = 0,count2=0,count3=0,count4=0;
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;

    if((winScroll > 3000 && winScroll <5000) && counting1 == false && counting2 == false && counting3 == false && counting4 == false){

    clearInterval(c1);
    clearInterval(c2);
    clearInterval(c3);
    clearInterval(c4);
    $("#count1").html("0");
    $("#count2").html("0");
    $("#count3").html("0");
    $("#count4").html("0");
    
      counting1 = true;
      counting2 = true;
      counting3 = true;
      counting4 = true;

      count1 = 0,count2=0,count3=0,count4=0;
      var c1 = setInterval(function(){
        count1++;
        $("#count1").html(count1)
        if(count1 == 1000){
          clearInterval(c1);
          counting1 = false;
        }
      },2)

      var c2 = setInterval(function(){
        count2++;
        $("#count2").html(count2)
        if(count2 == 4050){
          clearInterval(c2);
          counting2 = false;
        }
      },2)

      var c3 = setInterval(function(){
        count3++;
        $("#count3").html(count3)
        if(count3 == 200){
          clearInterval(c3);
          counting3 = false;
        }
      },2)

      var c4 = setInterval(function(){
        count4++;
        $("#count4").html(count4)
        if(count4 == 5000){
          clearInterval(c4);
          counting4 = false;
        }
      },0.004)

    }
   
  })



/*======================================================
                Statistics Counting End
======================================================*/



})