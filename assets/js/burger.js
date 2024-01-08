let burger = document.querySelector(".burger");
let mobileMenu = document.querySelector(".mobile-menu")

burger.addEventListener("click", function(e){
    burger.classList.toggle("cross");
    mobileMenu.classList.toggle("visible")
});

