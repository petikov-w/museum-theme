let menu = document.querySelector('.hamburger'),
    menuNav = document.querySelector('.nav-main'),
    menuNavDouble = document.querySelector('.nav-main_double'),
    menuNavDoubleNext = document.querySelector('.nav-main_double_next'),
    slideNumArea = document.querySelector('.swiper-num-area'),
    slideNumAreaProg = document.querySelector('.programs-slider .swiper-num-area'),
    logos = document.querySelector('.logo-text');
    

menu.addEventListener('click', () => {
  if (document.body.clientWidth <= 768) {
    menu.classList.toggle('active');
    document.querySelector('body').classList.toggle('active');
  }
})

if (document.querySelector('.article')) {

  var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    loop: true,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });

}


if (document.querySelector('.hero')) {
// tabs

  let tab = document.getElementsByClassName('info-header-tab');
  tabs = document.querySelectorAll('.info-header-tab');
  tabcontent = document.getElementsByClassName('info-tabcontent');
  info = document.getElementsByClassName('info-header')[0];

  function hideTabContent(a) {
    for (let i = a; i < tabcontent.length; i++) {
      tabcontent[i].classList.remove('show');
      tabcontent[i].classList.add('hide');
    }
  }

  hideTabContent(1);

  function showTabContent(b) {
    if (tabcontent[b].classList.contains('hide')) {
      hideTabContent(0);
      tabcontent[b].classList.remove('hide');
      tabcontent[b].classList.add('show');
    }
  }

  logos.addEventListener('click', (event) => {
        alert('ПРИВЕТ!!!')
  });



  info.addEventListener('click', (event) => {
    let target = event.target;
    for (let i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove('active')
    }
    target.classList.add('active')

    if (target.classList.contains('info-header-tab')) {

      for (let i = 0; i < tabcontent.length; i++) {
        if (target == tab[i]) {
          showTabContent(i);
          break;
        }
      }
    }
  })

}




