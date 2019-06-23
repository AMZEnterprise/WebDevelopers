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

  $('#topSlider').slick({
    infinite: true,
    rtl: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 10000,
    arrows: false
  });


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

  //fill side menu data with desktop menu data dynamicly - just change desktop navbar
  let menu = document.getElementById("navLinks");
  let sidemenu = document.getElementById("sideContent");
  for (let i = 0; i < 4; i++) {

    let listItem = document.createElement("li");
    let link = document.createElement("a");

    if (menu.children[i].getAttribute("class") == "drop") {

      listItem.setAttribute("class", "drop");
      link.setAttribute("href", `${menu.children[i].children[0].getAttribute("href")}`);
      link.textContent = `${menu.children[i].children[0].textContent}`;

      let divDrop = document.createElement("div");
      divDrop.setAttribute("class", "dropContent");

      for (let j = 0; j < menu.children[i].children[1].children.length; j++) {

        let dropLink = document.createElement("a");
        dropLink.setAttribute("href", `${menu.children[i].children[1].children[j].getAttribute("href")}`);
        dropLink.textContent = `${menu.children[i].children[1].children[j].textContent}`;
        divDrop.appendChild(dropLink);
      }
      listItem.appendChild(link);
      listItem.appendChild(divDrop);
      sidemenu.appendChild(listItem);

    } else {

      link.setAttribute("href", `${menu.children[i].children[0].getAttribute("href")}`);
      link.textContent = `${menu.children[i].children[0].textContent}`;
      listItem.append(link);
      sidemenu.appendChild(listItem);

    }
  }

  /*======================================================
                Side Menu (Tablet And Mobile) End
  ======================================================*/

  /*======================================================
                Team Slider Start
  ======================================================*/
  $('#teamSlider').slick({
    infinite: true,
    rtl: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 10000,
    arrows: false,
    dots: true
  });
  /*======================================================
                 Team Slider End
   ======================================================*/


  /*======================================================
                overview Slider Start
  ======================================================*/
  $('#overviewSlider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    vertical: true,
    autoplaySpeed: 10000,
    arrows: false,
    dots: true
  });
  /*======================================================
                 overview Slider End
   ======================================================*/

  /*======================================================
                comments Slider Start
  ======================================================*/
  $('#commentsSlider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    autoplay: true,
    rtl: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: true
  });
  /*======================================================
                 comments Slider End
   ======================================================*/

  /*======================================================
                 Counter Start
   ======================================================*/
  let SpanViews = document.getElementById("CounterViews");
  let SpanFinishedProjects = document.getElementById("CounterFinishedProjects");
  let SpanActiveTime = document.getElementById("CounterActiveTime");
  let SpanPosts = document.getElementById("CounterPosts");
  let TotalViews = 321,
    TotalProjects = 25,
    TotalActiveTime = 2,
    TotalPosts = 107;
  let StartViews = 0,
    StartProjects = 0,
    StartActiveTime = 0,
    StartPosts = 0;
  let speed = 0.5;

  let AlreadyCounted = false;

  window.onscroll = myScroll;

  function myScroll() {
    if (window.pageYOffset >= 3750) {
      if (!AlreadyCounted) {
        ViewsCounter();
        ProjectsCounter();
        ActiveTimeCounter();
        PostsCounter();
        AlreadyCounted = true;
      }
    }
  }

  function ViewsCounter() {
    go();
    setInterval(function () {
      go();
    }, speed);

    function go() {
      if (StartViews == TotalViews) {
        return false;
      }
      SpanViews.innerHTML = StartViews.toFixed(0);
      StartViews += 0.125;
    }
  }

  function ProjectsCounter() {
    go();
    setInterval(function () {
      go();
    }, speed);

    function go() {
      if (StartProjects == TotalProjects) {
        return false;
      }
      SpanFinishedProjects.innerHTML = StartProjects.toFixed(0);
      StartProjects += 0.125;
    }
  }

  function ActiveTimeCounter() {
    go();
    setInterval(function () {
      go();
    }, speed);

    function go() {
      if (StartActiveTime == TotalActiveTime) {
        return false;
      }
      SpanActiveTime.innerHTML = StartActiveTime.toFixed(0);
      StartActiveTime += 0.125;
    }
  }

  function PostsCounter() {
    go();
    setInterval(function () {
      go();
    }, speed);

    function go() {
      if (StartPosts == TotalPosts) {
        return false;
      }
      SpanPosts.innerHTML = StartPosts.toFixed(0);
      StartPosts += 0.125;
    }
  }



  /*======================================================
                  Counter End
  ======================================================*/

  /*======================================================
                  viewpoint Form Validation Start
  ======================================================*/

  document.getElementById("viewpointForm").addEventListener("submit", function (e) {

    var fullname = document.getElementById("fullname");
    var email = document.getElementById("email");
    var description = document.getElementById("description");

    fullname.style.backgroundColor = "white";
    email.style.backgroundColor = "white";
    description.style.backgroundColor = "white";


    if (fullname.value == "") {
      fullname.style.backgroundColor = "var(--purple)";
    }

    if (!ValidEmail(email.value)) {
      email.style.backgroundColor = "var(--purple)";
    }

    function ValidEmail() {
      var myCk = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return myCk.test(email.value);
    }


    if (description.value == "") {
      description.style.backgroundColor = "var(--purple)";
    }

    if (fullname.value == "" || !ValidEmail(email.value) || description.value == "") {
      e.preventDefault();
    }
  })

  /*======================================================
                    viewpoint Form Validation End
  ======================================================*/





})