// select header
let header = document.querySelector("header");

//navbar scrooling
let navbar = document.querySelector("nav");
document.onscroll = function (){
    if(window.scrollY > 400){
        navbar.classList.add("on-scroll");
    }else{
        navbar.classList.remove("on-scroll");
    }
    
}


