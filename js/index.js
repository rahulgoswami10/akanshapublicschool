

/*==================================== STICKY HEADER ====================================*/
const header = document.querySelector("header");

window.addEventListener("scroll",()=>{

if(window.scrollY > 60){

    header.classList.add("sticky");

}else{

    header.classList.remove("sticky");

}

});


/*==================================== MOBILE MENU ====================================*/

const menuBtn = document.querySelector(".menu-btn");
const menu = document.querySelector(".menu");

menuBtn.addEventListener("click", () => {

menu.classList.toggle("show");

});


/*==================================== MOBILE DROPDOWN ====================================*/

const dropdownLinks = document.querySelectorAll(".has-dropdown > a");

dropdownLinks.forEach(link => {

link.addEventListener("click", function (e) {

    if (window.innerWidth <= 768) {

        e.preventDefault();

        const parent = this.parentElement;

        // Ek hi dropdown open rahe
        document.querySelectorAll(".has-dropdown").forEach(item => {

            if (item !== parent) {

                item.classList.remove("active");

            }

        });

        parent.classList.toggle("active");

    }

});

});




// SCROLL TO TOP
const scrollTopBtn = document.getElementById("scrollTopBtn");

window.addEventListener("scroll", () => {

    if (window.scrollY > 300) {

        scrollTopBtn.classList.add("show");

    } 
    
    else {

        scrollTopBtn.classList.remove("show");

    }

});


// SMOOTH SCROLL TO TOP
scrollTopBtn.addEventListener("click", () => {

    window.scrollTo({

        top: 0,

        behavior: "smooth"

    });

});