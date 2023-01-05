$(function () {
  $(".jet-container").hover(function () {
    let front = $(this).find(".jet-front");
    console.log(front);
    console.log(front);
    front.toggleClass("jet-flip");
  });
});
