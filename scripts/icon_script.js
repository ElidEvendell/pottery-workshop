const menuIcon = document.querySelector('.menu-icon');
const navMenu = document.querySelector('.nav-bar-items');

menuIcon.addEventListener('click', (event) => {
    event.preventDefault();
    navMenu.classList.toggle('show');
});
