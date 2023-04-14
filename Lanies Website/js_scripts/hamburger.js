const hamburger_menu = document.querySelector(".hamburger-menu");
const nav_menu = document.querySelector("nav ul");

hamburger_menu.addEventListener("click", () => {
    hamburger_menu.classList.toggle("active");
    nav_menu.classList.toggle("active");
})

document.querySelectorAll("nav ul li a").forEach(n => n.addEventListener("click", ()=>{
    hamburger_menu.classList.remove("active");
    nav_menu.classList.remove("active");
}))