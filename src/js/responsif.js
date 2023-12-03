const navbarNav = document.querySelector('.navbar-nav');
const navbarLogo = document.querySelector('.navbar-logo');
const hamburgerButton = document.querySelector('#hamburger-button');

hamburgerButton.addEventListener('click', () => {
  navbarNav.classList.toggle('active');
  navbarLogo.classList.toggle('active');
});
