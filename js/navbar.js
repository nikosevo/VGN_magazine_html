const doc = document;

const menuOpen = doc.querySelector(".menu");
const menuClose = doc.querySelector(".close");
const overlay = doc.querySelector(".overlay");

const avatarButton = doc.querySelector("#desktop-cta");
const dropdownClose = doc.querySelector(".dropdown__close");
const dropdown = doc.querySelector(".dropdown");

var script_tag = document.getElementById('searcher');
var loggedIn = script_tag.getAttribute("loggedIn");


menuOpen.addEventListener("click", () => {
  overlay.classList.add("overlay--active");
});

menuClose.addEventListener("click", () => {
  overlay.classList.remove("overlay--active");
});
if(loggedIn=="true"){
  avatarButton.addEventListener("click", () =>{
    dropdown.classList.add("dropdown--active");
    avatarButton.classList.add("button-rotate");
  });
  dropdownClose.addEventListener("click", () =>{
    dropdown.classList.remove("dropdown--active");
    avatarButton.classList.remove("button-rotate");

  });
}
if(loggedIn=="false"){
  avatarButton.addEventListener("click", () => {
    window.location.href = "Login.php";
  })
}

doc.addEventListener("scroll", () =>{
  dropdown.classList.remove("dropdown--active");
  avatarButton.classList.remove("button-rotate");
})







