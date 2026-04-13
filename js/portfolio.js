// responsive nav links
function toggleMenu() {
    const nav = document.getElementById("navLinks");
    const icon = document.querySelector(".icon");

    nav.classList.toggle("responsive");
    icon.classList.toggle("open"); // togglet de iconen
}