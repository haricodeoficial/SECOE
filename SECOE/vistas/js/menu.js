const hamburger = document.querySelector(".hamburger"); 
const navMenu = document.querySelector(".main-menu2");

hamburger.addEventListener("click", () =>{
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})