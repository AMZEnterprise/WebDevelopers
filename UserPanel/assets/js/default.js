document.getElementById("sidebarMenu").addEventListener("click", function (e) {
    if (e.target.parentElement.tagName === "LI") {
        if (e.target.parentElement.getAttribute("class") === "submenuLi") {
            e.preventDefault();
            if (e.target.parentElement.children[1].getAttribute("class") === "submenu") {
                e.target.parentElement.children[1].setAttribute("class", "submenuShow");
                e.target.parentElement.children[0].children[2].setAttribute("class", "fa fa-angle-up submenuToggler");
            } else {
                e.target.parentElement.children[1].setAttribute("class", "submenu");
                e.target.parentElement.children[0].children[2].setAttribute("class",
                    "fa fa-angle-down submenuToggler");
            }
        }
    }

    if (e.target.parentElement.tagName === "A") {
        if (e.target.parentElement.parentElement.getAttribute("class") === "submenuLi") {
            e.preventDefault();
            if (e.target.parentElement.parentElement.children[1].getAttribute("class") === "submenu") {

                if (e.target.parentElement.parentElement.children[1].getAttribute("class") === "submenu") {

                    e.target.parentElement.parentElement.children[1].setAttribute("class",
                        "submenuShow");
                    e.target.parentElement.parentElement.children[0].children[2].setAttribute("class",
                        "fa fa-angle-up submenuToggler");

                } else {
                    e.target.parentElement.parentElement.children[1].setAttribute("class", "submenu");
                    e.target.parentElement.parentElement.children[0].children[1].setAttribute("class",
                        "fa fa-angle-down submenuToggler");

                }
            } else {
                e.target.parentElement.parentElement.children[1].setAttribute("class", "submenu");
                e.target.parentElement.parentElement.children[0].children[2].setAttribute("class",
                    "fa fa-angle-down submenuToggler");
            }
        }

    }
})

document.getElementById("btnSidebarToggler").addEventListener("click", function (e) {

    if (document.getElementById("sidebar").getAttribute("class") === "sidebarSm") {
        document.getElementById("sidebar").removeAttribute("class");
        document.getElementById("main").removeAttribute("class");
    } else {
        document.getElementById("sidebar").setAttribute("class", "sidebarSm");
        document.getElementById("main").setAttribute("class", "mainLg");
    }
})


document.addEventListener("click", function (e) {

    if (e.srcElement.parentElement.getAttribute("class") === "panelCardHeaderL") {

        if (e.srcElement.getAttribute("class") === "fa fa-angle-down panelCardToggle") {
            let cardBody = e.srcElement.parentElement.parentElement.parentElement.children[1];
            if (cardBody.getAttribute("class") === "panelCardContent") {
                cardBody.setAttribute("class", "panelCardContentHide");
            }
            e.srcElement.setAttribute("class", "fa fa-angle-up panelCardToggle");
        } else {
            let cardBody = e.srcElement.parentElement.parentElement.parentElement.children[1];
            if (cardBody.getAttribute("class") === "panelCardContentHide") {
                cardBody.setAttribute("class", "panelCardContent");
            }
            e.srcElement.setAttribute("class", "fa fa-angle-down panelCardToggle");
        }

    }

})