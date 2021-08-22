const toggleMenu = document.querySelector('.main-nav .button-menu');
const menu = document.querySelector('.menu');

menu.hidden = true;

toggleMenu.addEventListener('click', function() {
  const open = JSON.parse(toggleMenu.getAttribute('aria-expanded'));
  toggleMenu.setAttribute('aria-expanded', !open);
  menu.hidden = !menu.hidden;
});