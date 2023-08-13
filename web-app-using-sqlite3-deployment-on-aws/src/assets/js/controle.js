/* controle les effets principales de la page: scrool, etc ...*/

const navbar = document.getElementById('nav');
const menuButton = document.getElementsByClassName('toggle-btn');
const navbarTag = document.querySelectorAll('nav a');

/* test de selection des éléments du DOM */
console.log(navbar);
console.log(menuButton);
console.log(navbarTag);

menuButton[0].addEventListener("click", function() {
    navbar.classList.toggle("show");
});

/* on ajoute un écouteur d'évènement sur chaque lien du nav */
navbarTag.forEach((item) => {
    // console.log(item);
    item.addEventListener("click", () => {
        let el = document.getElementById(item.getAttribute("data-link"));
        el.scrollIntoView({ behavior: "smooth", block: "start" })
        navbar.classList.toggle("show"); /* pour faire remonter le menu */
    })
})

