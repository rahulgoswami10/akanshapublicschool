/*========================================= CONTACT WIDGET =========================================*/

const openBtn = document.getElementById("openContact");
const closeBtn = document.getElementById("closeContact");

const sidebar = document.getElementById("contactSidebar");
const overlay = document.getElementById("contactOverlay");


function openSidebar(){

    sidebar.classList.add("show");
    overlay.classList.add("show");

    document.body.style.overflow = "hidden";

}


function closeSidebar(){

    sidebar.classList.remove("show");
    overlay.classList.remove("show");

    document.body.style.overflow = "";

}


/*========================== OPEN ==========================*/
openBtn.addEventListener("click", openSidebar);


/*========================== CLOSE ==========================*/
closeBtn.addEventListener("click", closeSidebar);


/*========================== OVERLAY CLOSE ==========================*/
overlay.addEventListener("click", closeSidebar);


/*========================== ESC KEY ==========================*/
document.addEventListener("keydown", function(e){

    if(e.key === "Escape"){

        closeSidebar();

    }

});