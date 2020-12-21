var andSwiper = new Swiper('.section-slider', {
  speed: 700,
  direction: 'horizontal',
  spaceBetween: 30,
  slidesPerView: 1,
  clickable: true,
  spaceBetween: 20,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    768: {
      speed: 700,
      direction: 'horizontal',
      clickable: true,
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    }
  }
})

var progSwiper = new Swiper('.programs-slider', {
  speed: 700,
  direction: 'horizontal',
  spaceBetween: 30,
  slidesPerView: 1,
  clickable: true,
  spaceBetween: 20,
  loop: true,
  navigation: {
    nextEl: '.programs-slider .swiper-button-next',
    prevEl: '.programs-slider .swiper-button-prev',
  },
  breakpoints: {
    768: {
      speed: 700,
      direction: 'horizontal',
      clickable: true,
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: '.programs-slider .swiper-button-next',
        prevEl: '.programs-slider .swiper-button-prev',
      }
    }
  }
})

andSwiper.on('slideChange', function () {
    setTimeout(function () {
        let slideNum = document.querySelector('.swiper-slide-active');
        slideNumArea.innerHTML = slideNum.getAttribute('data-num') + '/'
    }, 1000);

});

progSwiper.on('slideChange', function () {
    setTimeout(function () {
        let slideNum = document.querySelector('.programs-slider .swiper-slide-active');
        slideNumAreaProg.innerHTML = slideNum.getAttribute('data-num') + '/'
    }, 1000);

});