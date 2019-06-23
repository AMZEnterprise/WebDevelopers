$(function () {
  /*======================================================
              Typing Effect Start
  ======================================================*/
  $(".animatedText").typed({
    strings: ["<strong class='animatedTextColor1'> توسعه دهندگان</strong> <strong class='animatedTextColor2'> وب </strong>", "<strong class='animatedTextColor1'> پروژه های خود را </strong> <strong class='animatedTextColor3'>  به ما بسپارید!</strong>"],
    typespeed: 0,
    loop: true
  });

  /*======================================================
              Typing Effect End
  ======================================================*/

  /*======================================================
              Top Scroll Effects Start
  ======================================================*/
  $(window).scroll(function () {
    var GotoTop = $(window).scrollTop();
    var navbar = $(window).scrollTop();
    if (GotoTop >= 400) {
      $("#GoToTopArrow").addClass("GoToTopArrowSecond");
    } else {
      if ($("#GoToTopArrow").hasClass("GoToTopArrowSecond")) {
        $("#GoToTopArrow").removeClass("GoToTopArrowSecond");
      }
    }

    if (navbar >= 100) {
      $("#navigation").removeClass("navigationBefore");
      $("#navigation").addClass("navigationAfter");
    } else {
      $("#navigation").removeClass("navigationAfter");
      $("#navigation").addClass("navigationBefore");
    }


    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("innerBar").style.width = scrolled + "%";

  });


  /*======================================================
              Top Scroll Effects End
  ======================================================*/

  /*======================================================
              AOS : Scroll hide and show effects
  ======================================================*/
  AOS.init();


  /*======================================================
              Slick Slider Start
  ======================================================*/
  $(".SlikSlider").slick({
    infinite: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    rtl: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [{
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



  /*======================================================
                Side Menu (Tablet And Mobile) Start
  ======================================================*/
  var show = false;
  $("#sideToggler").click(function () {
    if (show == false) {
      $("#side").addClass("sideShow");
      $("#sideContent").fadeIn(200);
      $("#sideClose").fadeIn(200);
      show = true;
    } else {
      $("#side").removeClass("sideShow");
      $("#sideContent").fadeOut(200);
      $("#sideClose").fadeOut(200);
      show = false;
    }
  })

  $("#sideClose").click(function () {
    $("#side").removeClass("sideShow");
    $("#sideContent").fadeOut(200);
    $("#sideClose").fadeOut(200);
    show = false;
  })

  /*======================================================
                Side Menu (Tablet And Mobile) End
  ======================================================*/


  /*======================================================
                
  ======================================================*/
  document.getElementById("viewpointForm").addEventListener("submit", function (e) {

    var fullname = document.getElementById("fullname");
    var email = document.getElementById("email");
    var description = document.getElementById("description");

    fullname.style.borderBottomColor = "var(--blue)";
    email.style.borderBottomColor = "var(--blue)";
    description.style.borderBottomColor = "var(--blue)";


    if (fullname.value == "") {
      fullname.style.borderBottomColor = "var(--red)";
    }

    if (!ValidEmail(email.value)) {
      email.style.borderBottomColor = "var(--red)";
    }

    function ValidEmail() {
      var myCk = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return myCk.test(email.value);
    }


    if (description.value == "") {
      description.style.borderBottomColor = "var(--red)";
    }

    if (fullname.value == "" || !ValidEmail(email.value) || description.value == "") {
     e.preventDefault();
    }
  })





})