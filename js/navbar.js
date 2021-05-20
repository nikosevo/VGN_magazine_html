const doc = document;

const menuOpen = doc.querySelector(".menu");
const menuClose = doc.querySelector(".close");
const overlay = doc.querySelector(".overlay");

const avatarButton = doc.querySelector("#desktop-cta");
const dropdownClose = doc.querySelector(".dropdown__close");
const dropdown = doc.querySelector(".dropdown");

loggedIn = true;

menuOpen.addEventListener("click", () => {
  overlay.classList.add("overlay--active");
});

menuClose.addEventListener("click", () => {
  overlay.classList.remove("overlay--active");
});

if(loggedIn){
  avatarButton.addEventListener("click", () =>{
    dropdown.classList.add("dropdown--active");
    avatarButton.classList.add("button-rotate");
  });
  dropdownClose.addEventListener("click", () =>{
    dropdown.classList.remove("dropdown--active");
    avatarButton.classList.remove("button-rotate");

  });
}else{
  avatarButton.addEventListener("click", () => {
    window.location.href = "Login.php";
  })
}

doc.addEventListener("scroll", () =>{
  dropdown.classList.remove("dropdown--active");
  avatarButton.classList.remove("button-rotate");
})







