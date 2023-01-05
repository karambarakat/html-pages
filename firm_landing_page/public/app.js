<<<<<<< HEAD
$(function () {
  $(".jet-container").hover(function () {
    let front = $(this).find(".jet-front");
    console.log(front);
    console.log(front);
    front.toggleClass("jet-flip");
=======
document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".sidenav");
  var instances = M.Sidenav.init(elems, {});

  var caro_elem = document.querySelectorAll(".carousel");
  var caro = M.Carousel.init(caro_elem, {
    height: 800,
    fullWidth: false,
    indicators: true,
>>>>>>> bac1eb9b174e57e9c5b3339e73f0c365ddba1d64
  });
});
