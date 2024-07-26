// https://codesandbox.io/s/jquery-resume-eedrq?file=/script.js

window.$ = window.jQuery;
var $ = window.$;
/* dont remove the above */

// Pcweb
var pcwebAnimate = () => {
  $("#pcWeb").addClass("animate__animated animate__bounceInLeft");
  setTimeout(function () {
    $("#pcWeb").removeClass("animate__animated animate__bounceInLeft");
  }, 1000);
};

// Descriptiom
var descAnimate = () => {
  $("#desC").addClass("animate__animated animate__bounceInRight");
  setTimeout(function () {
    $("#desC").removeClass("animate__animated animate__bounceInRight");
  }, 1000);
};

// Image
var imgAnimate = () => {
  $("#image").addClass("animate__animated animate__flip");
  setTimeout(function () {
    $("#image").removeClass("animate__animated animate__flip");
  }, 1000);
};
// Title
var titleAnimate = () => {
  $("#title").addClass("animate__animated animate__fadeInDown");
  setTimeout(function () {
    $("#title").removeClass("animate__animated animate__fadeInDown");
  }, 1000);
};
// Body
var bodyAnimate = () => {
  $("#body-txt").addClass("animate__animated animate__fadeInUp");
  setTimeout(function () {
    $("#body-txt").removeClass("animate__animated animate__fadeInUp");
  }, 1000);
};
// All
var allAnimate = () => {
  $("#cont").addClass("animate__animated animate__tada");
  setTimeout(function () {
    $("#cont").removeClass("animate__animated animate__tada");
  }, 1000);

  $("#pcWeb").addClass("animate__animated animate__bounceInLeft");
  setTimeout(function () {
    $("#pcWeb").removeClass("animate__animated animate__bounceInLeft");
  }, 1000);

  $("#desC").addClass("animate__animated animate__bounceInRight");
  setTimeout(function () {
    $("#desC").removeClass("animate__animated animate__bounceInRight");
  }, 1000);

  $("#image").addClass("animate__animated animate__flip");
  setTimeout(function () {
    $("#image").removeClass("animate__animated animate__flip");
  }, 1000);

  $("#title").addClass("animate__animated animate__fadeInDown");
  setTimeout(function () {
    $("#title").removeClass("animate__animated animate__fadeInDown");
  }, 1000);

  $("#body-txt").addClass("animate__animated animate__fadeInUp");
  setTimeout(function () {
    $("#body-txt").removeClass("animate__animated animate__fadeInUp");
  }, 1000);
};

// Pcweb
// var pcwebAnimate = () => {
//   $("#pcWeb").addClass("animate__animated animate__bounceInLeft");
// };
