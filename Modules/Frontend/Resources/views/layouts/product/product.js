
    document.addEventListener("DOMContentLoaded", function () {
      var e, i;
      $(".lg-product-detail-thumbnails").length > 0 &&
        ((e = new Splide(".slider-Product-details", {
          type: "fade",
          perPage: 1,
          rewind: !0,
          pagination:  false,
          arrows: false,
        })),
        (i = new Splide(".slider-Produc-Thumbnails", {
          gap: 4,
          rewind: !0,
          arrows: !0,
          perPage: 6,
          pagination:  false,
          isNavigation: !0,
          breakpoints: {
            1400: {
              perPage: 5,
            },
            1200: {
              perPage: 4,
            },
            992: {
              perPage: 5,
            },
            480 :{
              perPage: 4,
            },
            375 :{
              perPage: 3,
            },
          }
        })),
        e.sync(i),
        e.mount(),
        i.mount());
    });
  var temp = !0,
    path = temp ? "../../assets" : "../";
  