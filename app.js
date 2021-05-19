document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".sidenav");
  var instances = M.Sidenav.init(elems, {});

  var caro_elem = document.querySelectorAll(".carousel");
  var caro = M.Carousel.init(caro_elem, {
    height: 800,
    fullWidth: false,
    indicators: true,
  });
});
