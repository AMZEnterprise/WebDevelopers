$(function(){

//=========================AOS : Scroll hide and show effects=================================
    AOS.init();






/*======================================================
                Project Form Start
======================================================*/
var firstname = $("#firstname");
var lastname = $("#lastname");
var email = $("#email");
var phone = $("#phone");
var ProjectType = $("#ProjectType");
var description = $("#description");
var submit = $("#submitBtn");

var ProjectPriceLabel = $("#MinumamProjectPrice");


//Show the price of project (update the price label)
if(ProjectType.val() == "webSite"){
    ProjectPriceLabel.text("1,000,000");
}
ProjectType.change(function(e){
   if(ProjectType.val() == "webSite"){
       ProjectPriceLabel.text("1,000,000");
   }
   else if(ProjectType.val() == "webApp"){
        ProjectPriceLabel.text("800,000");
   }
   else if(ProjectType.val() == "androidApp"){
        ProjectPriceLabel.text("1,000,000");
   }
   else if(ProjectType.val() == "DesktopApp"){
        ProjectPriceLabel.text("1,500,000");
   }
   else if(ProjectType.val() == "FullWebApp"){
        ProjectPriceLabel.text("2,000,000");
   }
})


submit.click(function(e){

    //Clear Errors
    firstname.removeClass("InvalidValueClass");
    lastname.removeClass("InvalidValueClass");
    phone.removeClass("InvalidValueClass");
    email.removeClass("InvalidValueClass");
    description.removeClass("InvalidValueClass");

    if(firstname.val() == ""){
        firstname.addClass("InvalidValueClass");
    }

    if(lastname.val() == ""){
        lastname.addClass("InvalidValueClass");
    }

    if(phone.val().length < 11){
        phone.addClass("InvalidValueClass");
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

    if(firstname.val() !="" && lastname.val() !="" && ValidEmail(email.val()) && phone.val().length==11 && description.val() !=""){
        return true;
    }
    else{
        return false;
    }

    })


/*======================================================
                Project Form End
======================================================*/



})