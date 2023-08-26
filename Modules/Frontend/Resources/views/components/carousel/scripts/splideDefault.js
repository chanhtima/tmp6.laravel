function carouselBanner(itemParam, setting = {}) {
    if ($(itemParam).length) {
      var defaultSetting = {
        perPage: 1,
        autoplay: true,
        interval: 7000,
        type: "slide",
        pagination: true,
        arrows: true,
        video: {
          mute: true,
          autoplay: true,
          playerOptions: {
            youtube: {
              autoplay: 1,
              controls: 0,
              disablekb: 1,
              playsinline: 1,
              rel: 0,
            },
            htmlVideo: {
              loop: true,
              autoplay: true,
              controls: false,
              muted: true,
            },
          },
        },
      }
      var splide = new Splide(
        itemParam,
        Object.assign(
          Object.assign(defaultSetting, {
            type: reCount() > 1 ? "loop" : "fade",
            pagination: reCount() > 1 ? "true" : "false",
            arrows: reCount() > 1 ? "true" : "false",
          }),
          setting
        )
      ).mount(window.splide.Extensions)
    }
    function reCount() {
      return $(itemParam + " .splide__slide").length
    }
    if (reCount() <= 1) {
      $(itemParam + " .splide__pagination").remove()
    }
  }
  
  function carouselMultiple(itemParam, setting) {
    if ($(itemParam).length) {
      var arrowsBoo = setting.arrows == undefined
      var paginationBoo = setting.pagination == undefined
  
      var defaultSetting = {
        type: "slide",
        arrows: true,
        pagination: true,
        autoplay: true,
      }
      Object.assign(setting, {
        type: reCount() > setting.perPage ? "loop" : "slide",
        pagination: paginationBoo ? reCount() > setting.perPage : false,
        arrows: arrowsBoo ? reCount() > setting.perPage : false,
      })
      var obj = Object.keys(setting.breakpoints)
      var splide = new Splide(
        itemParam,
        Object.assign(
          defaultSetting,
          Object.assign(
            setting,
            Object.keys(obj).forEach((key) => {
              Object.assign(setting.breakpoints[obj[key]], {
                type:
                  reCount() > setting.breakpoints[obj[key]]["perPage"]
                    ? "loop"
                    : "slide",
                arrows: arrowsBoo
                  ? reCount() > setting.breakpoints[obj[key]]["perPage"]
                  : false,
                pagination: paginationBoo
                  ? reCount() > setting.breakpoints[obj[key]]["perPage"]
                  : false,
              })
            })
          )
        )
      ).mount()
    }
    function reCount() {
      return $(itemParam + " .splide__slide").length
    }
    if (reCount() <= 1) {
      $(itemParam + " .splide__pagination").remove()
    }
  }
  