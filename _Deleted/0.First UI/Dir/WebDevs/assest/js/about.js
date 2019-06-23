$(function(){

    //=========================AOS : Scroll hide and show effects=================================
    AOS.init();

    /*======================================================
                    Gradient Logo Start
    ======================================================*/
    var granimInstance2 = new Granim({
        element: '#logo-canvas',
        direction: 'left-right',
        opacity: [1, 1],
        states : {
            "default-state": {
                gradients: [
                    ['#303030', '#e92d75'],
                    ['#e92d75', '#303030'],
                    ['#303030', '#e92d75'],
                    ['#e92d75', '#e92d75'],
                    ['#303030', '#e92d75'],
                    ['#e92d75', '#303030']
                ],
                transitionSpeed: 1000
            }
        }
    });
    /*======================================================
                    Gradient Logo End
    ======================================================*/





    /*======================================================
                    Contact Us Form Start
    ======================================================*/
    var fullname = $("#fullname");
    var email = $("#email");
    var description = $("#description");
    var submit = $("#submitBtn");

    submit.click(function(e){

        //Clear Errors
        fullname.removeClass("InvalidValueClass");
        email.removeClass("InvalidValueClass");
        description.removeClass("InvalidValueClass");

        if(fullname.val() == ""){
            fullname.addClass("InvalidValueClass");
        }


        if(!ValidEmail(email.val())){
           email.addClass("InvalidValueClass");
        }   
        function ValidEmail(){
        var myCk = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return myCk.test(email.val());
        }

        if(description.val() == ""){
            description.addClass("InvalidValueClass");
        }

        if(fullname.val() !="" && ValidEmail(email.val()) && description.val() !=""){
            return true;
        }
        else{
            return false;
        }

        })


    /*======================================================
                    Contact Us Form End
    ======================================================*/

    /*======================================================
                    Slick Slider Start
    ======================================================*/
    $(".SlikSlider").slick({
        infinite: true,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        vertical : true,
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
                        Slick Slider End
    ======================================================*/



})