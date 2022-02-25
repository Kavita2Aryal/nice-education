"use strict";

window.addEventListener("DOMContentLoaded", function (event) {
  var data = "We love JS 😍.";
  console.log(data);
});
/**
 * Sticky header on upward scroll
 */

var lastScrollTop = 0;
var header = document.getElementsByTagName("header")[0];
window.addEventListener("scroll", function () {
  var st = document.documentElement.scrollTop;

  if (st > lastScrollTop) {
    header.classList.remove("stickymenu");
    header.style.top = "-200px";
  } else if (st == 0) {
    header.classList.remove("stickymenu");
    header.style.top = "-200px";
  } else {
    // upscroll code
    header.classList.add("stickymenu");
    header.style.top = "0px";
  }

  lastScrollTop = st;
}); //Vanilla Method
// var lastScrollTop = 0;
// var header = document.getElementsByTagName("header")[0];
// window.addEventListener("scroll", () => {
//   var st = document.documentElement.scrollTop;
//   if (st > lastScrollTop) {
//     header.classList.remove("stickymenu");
//   } else if (st == 0) {
//     header.classList.remove("stickymenu");
//   } else {
//     // upscroll code
//     header.classList.add("stickymenu");
//   }
//   lastScrollTop = st;
// });

/**
 * Change the urk with hash
 */

$(function () {
  var hash = window.location.hash;
  hash && $('.nav button[href="' + hash + '"]').tab("show");
  $(".nav-tabs .nav-link").click(function (e) {
    $(this)[0].scrollIntoView({
      behavior: "smooth",
      inline: "start" // block: "center",

    });
    var scrollmem = $("body").scrollTop() || $("html").scrollTop();
    window.location.hash = this.id;
    $("html,body").scrollTop(scrollmem);
  });
});
/**
 * Detect link and load tab
 */

$(function () {
  var triggerTabList = [].slice.call(document.querySelectorAll("#nav-tab button"));
  triggerTabList.forEach(function (triggerEl) {
    var tabTrigger = new bootstrap.Tab(triggerEl); //console.log(triggerEl.id, window.location.hash.slice(1));

    if (triggerEl.id == window.location.hash.slice(1)) {
      tabTrigger.show();
    }
  });
});