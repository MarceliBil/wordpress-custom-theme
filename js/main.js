//COMMENTS SECTION

const comments__header = document.querySelector("#comments"),
  comment__textarea = document.querySelector("#comment"),
  comment__author = document.querySelector("#author"),
  comment__email = document.querySelector("#email"),
  comment__url = document.querySelector("#url");

comments__header ? comments__header.textContent = "Komentarze" : null;

comment__textarea ? comment__textarea.placeholder = "komentarz..." : null;

comment__author ? comment__author.placeholder = "nazwa użytkownika..." : null;

comment__email ? comment__email.placeholder = "e-mail..." : null;

comment__url ? comment__url.placeholder = "strona internetowa..." : null;

//PREVIOUS AND NEXT POST

const prev = document.querySelector(".prev"),
  next = document.querySelector(".next");

if (prev || next) {

  prev.children.length == 0 ? prev.style = "display: none;" : null;

  next.children.length == 0 ? next.style = "display: none;" : null;
}

//HAMBURGER MENU ANIMATION

const top__bar = document.querySelector(".top__bar"),
  hamburger = document.querySelector(".hamburger"),
  one = document.querySelector(".one"),
  two = document.querySelector(".two"),
  three = document.querySelector(".three");

let counter = 0;

window.addEventListener("resize", () => {
  let window__width = window.innerWidth;

  window__width < 1000
    ? (top__bar.style = "left: 100%") &&
      (one.style.animationName = "oneHide") &&
      (two.style.animationName = "twoHide") &&
      (three.style.animationName = "threeHide") &&
      (counter = 0)
    : (top__bar.style = "left: 0");
});

window.addEventListener("scroll", () => {
  let window__width = window.innerWidth;

  if (window__width < 1000) {
    top__bar.style = "left: 100%";
    one.style.animationName = "oneHide";
    two.style.animationName = "twoHide";
    three.style.animationName = "threeHide";
    counter = 0;
  }
});

const hideMenu= ()=> {
  counter == 0
    ? (top__bar.style = "left: 0") &&
      (one.style.animationName = "oneShow") &&
      (two.style.animationName = "twoShow") &&
      (three.style.animationName = "threeShow") &&
      counter++
    : (top__bar.style = "left: 100%") &&
      (one.style.animationName = "oneHide") &&
      (two.style.animationName = "twoHide") &&
      (three.style.animationName = "threeHide") &&
      counter--;
}

hamburger.addEventListener("click", hideMenu);
