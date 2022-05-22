//fixed header starts here

window.addEventListener("scroll", function(){
  const topheader = document.querySelector(".topheader");
  const logo = document.querySelector(".logo");
  topheader.classList.toggle("sticky", window.scrollY > 50);
  topheader.classList.toggle("sticky", window.scrollY > 50);
})

$('.testitems').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots:true,
  autoplay: true,
  autoplaySpeed: 3000,
  cssEase: 'linear'
});