// Laat het hamburger menu werken
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

// Zortg voor een push notification als je een job alert wilt ontvangen
function MakeAlert() {
    alert("Je krijgt nu Alerts!");
}

// geeft bekijk vacatures een werkend link 
function linkToJobs() {
    location.replace("http://localhost/00personalShit/stage/ToelatingsOpdracht/OnzeVacatures.php")
  }