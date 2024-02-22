const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".box-menu");

hamburger.addEventListener("click", ()=> {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
});

let prevScrollpos = window.pageXOffset;
window.onscroll = function () {
    let currentScrollPos = window.pageXOffset;
    if (currentScrollPos < 10) {
        document.getElementById("nav").classList.remove("navbar-hidden");
    } else {
        document.getElementById("nav").classList.add("navbar-hidden");
    }
}
function alr(){
    alert("hello world");
}