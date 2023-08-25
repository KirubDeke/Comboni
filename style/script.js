


  document.addEventListener('DOMContentLoaded', function() {
  var menuIcon = document.querySelector('.navbar .menu-icon');
  var menu = document.querySelector('.navbar ul.menu');

  menuIcon.addEventListener('click', function() {
    menu.classList.toggle('active');
  });
});

