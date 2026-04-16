

$('.service-slider').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots:true,
  autoplay:true,
  autoplayTimeout:3000,
  responsive:{
    0:{ items:1 },
    600:{ items:1 },
    1000:{ items:4 }
  }
});



$('.testimonial-right').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    smartSpeed: 800,
    items: 1
});






window.addEventListener("scroll", function () {

    const navbar = document.querySelector(".navbar");

    if (window.scrollY > 50) {

        navbar.classList.add("scrolled");

    } else {

        navbar.classList.remove("scrolled");

    }

});





const backToTop = document.getElementById("backToTop");

window.onscroll = function () {
    if (document.documentElement.scrollTop > 200) {
        backToTop.style.display = "block";
    } else {
        backToTop.style.display = "none";
    }
};

backToTop.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
};





document.addEventListener("DOMContentLoaded", function () {

  gsap.registerPlugin(ScrollTrigger);

  const splitText = new SplitType(".js-splittext-lines", {
    types: "lines"
  });

  gsap.from(splitText.lines, {
    y: 100,
    opacity: 0,
    duration: 1,
    stagger: 0.15,
    ease: "power3.out",

    scrollTrigger: {
      trigger: ".js-splittext-lines",
      start: "top 80%",
      toggleActions: "play none none none"
    }
  });

});




document.querySelectorAll('.hero-img').forEach((container, colIndex) => {

    const images = container.querySelectorAll('img');
    let index = 0;

    setTimeout(() => {

        setInterval(() => {

            images[index].classList.remove('active');

            index = (index + 1) % images.length;

            images[index].classList.add('active');

        }, 2500);

    }, colIndex * 800); // column delay (0ms, 800ms, 1600ms)

});




$(document).ready(function(){

    $('.e1').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 2000,
        smartSpeed: 600,

        responsive:{
            0:{
                items:1
            },
            480:{
                items:2
            },
            768:{
                items:3
            }
        }
    });

});