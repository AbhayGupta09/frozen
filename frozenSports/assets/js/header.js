$(document).ready(function () {
  $("#open-menu").on("click", function () {
    $("#menu-toggle").css("display", "block");
    $(".close").css("display", "block");
    $(".open").css("display", "none");
    $("#menu-toggle").toggleClass("active");
  });
  $(".close").on("click", function () {
    $("#menu-toggle").css("display", "none");
    $(".close").css("display", "none");
    $(".open").css("display", "block");
  });
});
