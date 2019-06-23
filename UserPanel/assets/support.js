let TicketTitle = document.getElementById("selTicketTitle");
TicketTitle.addEventListener("change",function(){
    if(TicketTitle.value === "4"){
        document.getElementById("divOtherTicketTitle").style.display = "block";
    }else{
        document.getElementById("divOtherTicketTitle").style.display = "none";
    }
})