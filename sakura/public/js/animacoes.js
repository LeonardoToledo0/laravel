// ----- Tema ------
document.querySelector(".tema").onclick = () => {
    document.body.classList.toggle("dark-theme");
};
// -----Banner-----
$(".banner").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    fade: true,
    cssEase: "linear",
    autoplay: true,
    autoplaySpeed: 2000,
});

// -----Parallax-----
var image = document.getElementsByClassName("parallax");
new simpleParallax(image, {
    delay: 0.6,
    transition: "cubic-bezier(0,0,0,5)",
});
