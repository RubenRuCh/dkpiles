function toggleBurger() {
  var toggler = document.querySelector('.toggler');

  toggler.checked = !toggler.checked;

  $('.carousel').toggleClass('mobileMenu');

  // For 'Fotos' section
  $('div#eapps-instagram-feed-1').toggleClass('mobileMenu');
  //$('div.eapps-instagram-feed-content').toggleClass('mobileMenu');
}

function loadComponents(current = 'Home') {
  // Core components
  $('header').load('assets/components/header.html', () => {
    $('li').filter(`:contains(${current})`).addClass('current');
  });
  $('aside').load('assets/components/aside.html');
  $('footer').load('assets/components/footer.html');
}
