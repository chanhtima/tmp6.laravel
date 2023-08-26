carouselMultiple('.splide-news', {
  perPage: 4,
  pagination: false,
  breakpoints: {
  
    1200: {
      perPage: 3
    },

    992: {
      perPage: 2
    },
    480 :{
      perPage: 1
    },
  }
});

carouselMultiple('.splide-product', {
  perPage: 3,
  pagination: false,
  breakpoints: {
      1200: { perPage: 2, perMove: 1, speed: 0, rewindSpeed: 0 },
     520: { perPage: 1, perMove: 1, },
  },
});










