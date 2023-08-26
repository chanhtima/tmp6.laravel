$(window).scroll(function () {
    100 < $(this).scrollTop() ? $(".co-scroll-to-top").addClass('visible') : $(".co-scroll-to-top").removeClass('visible')
  })