new Swiper(".image-slider", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  slideToClickedSlide: true,
  keyboard: {
    enable: true,
    onlyInViewport: true,
    pageUpDown: true,
  },

  autoHeight: true,
  speed: 800,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
});

window.addEventListener("DOMContentLoaded", function () {
  [].forEach.call(document.querySelectorAll(".input-number"), function (input) {
    var keyCode;
    function mask(event) {
      event.keyCode && (keyCode = event.keyCode);
      var pos = this.selectionStart;
      if (pos < 3) event.preventDefault();
      var matrix = "+375 (__)-___-__-__",
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, ""),
        new_value = matrix.replace(/[_\d]/g, function (a) {
          return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
        });
      i = new_value.indexOf("_");
      if (i != -1) {
        i < 5 && (i = 3);
        new_value = new_value.slice(0, i);
      }
      var reg = matrix
        .substr(0, this.value.length)
        .replace(/_+/g, function (a) {
          return "\\d{1," + a.length + "}";
        })
        .replace(/[+()]/g, "\\$&");
      reg = new RegExp("^" + reg + "$");
      if (
        !reg.test(this.value) ||
        this.value.length < 5 ||
        (keyCode > 47 && keyCode < 58)
      )
        this.value = new_value;
      if (event.type == "blur" && this.value.length < 5) this.value = "";
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false);
  });
});

const btns = document.querySelector(".club-button");
const modalsOverlay = document.querySelector(".modal-overlay");
const modal = document.querySelector(".modal");
const resp = document.querySelector(".modal-response");
const info = document.querySelector(".modal-wrapper-info");

btns.addEventListener("click", Start);

/* $(".modal-response").toggleClass("modal-response--visible");
    $(".modal-info").toggleClass("modal-response"); */

function Start() {
  modal.classList.add("modal--visible");
  modalsOverlay.classList.add("modal-overlay--visible");
}

modalsOverlay.addEventListener("click", (e) => {
  if (e.target == modalsOverlay) {
    modalsOverlay.classList.remove("modal-overlay--visible");
    modal.classList.remove("modal--visible");
    info.classList.remove("modal-response");
    resp.classList.remove("modal-response--visible");
    document.querySelector(".input-name").value = "";
    document.querySelector(".input-number").value = "";
  }
});

const btnBurger = document.querySelector(".fa-bars");
const burgerOverlay = document.querySelector(".burger-overlay");
const burger = document.querySelector(".burger");
const btnBurgerClose = document.querySelector(".fa-xmark");
btnBurger.addEventListener("click", StartBurger);

function StartBurger() {
  burger.classList.add("burger--visible");
  burgerOverlay.classList.add("burger-overlay--visible");
  btnBurgerClose.classList.add("burger--visible");
}
btnBurgerClose.addEventListener("click", closeBurger);

function closeBurger() {
  btnBurgerClose.style.display = "none";
  burgerOverlay.classList.remove("burger-overlay--visible");
  burger.classList.remove("burger--visible");
  btnBurger.style.display = "block";
}

burgerOverlay.addEventListener("click", (e) => {
  if (e.target == burgerOverlay) {
    burgerOverlay.classList.remove("burger-overlay--visible");
    burger.classList.remove("burger--visible");
    btnBurgerClose.style.display = "none";
  }
});

const btnModal = document.querySelector(".modal-button");

document.querySelectorAll('a[href^="#"').forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();

    let href = this.getAttribute("href").substring(1);

    const scrollTarget = document.getElementById(href);

    const topOffset = 155;
    const elementPosition = scrollTarget.getBoundingClientRect().top;
    const offsetPosition = elementPosition - topOffset;

    window.scrollBy({
      top: offsetPosition,
      behavior: "smooth",
    });
  });
});

$(document).ready(function () {
  $(".modal-button").on("click", function () {
    var name = $(".input-name").val();
    var number = $(".input-number").val();

    $.ajax({
      url: "sendmail.php",
      type: "POST",
      dataType: "json",
      data: {
        name: name,
        number: number,
      },
      error: function (error) {
        console.log(error.responseText);
      },
      success: function (answer) {
        /*  $("#val3").val(answer.result); */
      },
    });
    $(".modal-response").toggleClass("modal-response--visible");
    $(".modal-wrapper-info").toggleClass("modal-response");
  });
});
