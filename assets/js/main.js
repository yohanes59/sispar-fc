const navbarCollapse = document.querySelector('.navbar-collapse');
const sidebar = document.querySelector('.sidebar');
const navbarMenu = document.querySelector('.navbar-menu');
const navbarDropdown = document.querySelector('.navbar-dropdown');

navbarCollapse.addEventListener('click', ()=> sidebar.classList.toggle('active'));
navbarMenu.addEventListener('click', ()=> navbarDropdown.classList.toggle('active'));
