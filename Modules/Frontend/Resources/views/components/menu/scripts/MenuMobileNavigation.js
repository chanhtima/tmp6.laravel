$(document).mouseup(function (e) {
    var container = new Array()
    container.push($(".co-menu-mobile-navigation"))
  
    $.each(container, function (key, value) {
      if (
        !$(value).is(e.target) && // if the target of the click isn't the container...
        $(value).has(e.target).length === 0
      ) {
        if ($('.co-menu-mobile-navigation').hasClass("dropdown-open")) {
          $('.co-menu-mobile-navigation').removeClass("dropdown-open")
        }
      }
    })
  })

  const NavMenu = document.querySelector('.la-header-01-basic');
  const mobileMenu = document.querySelector('.menu-mobile-navigation-list');
  
  function adjustMenus() {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const navTopValue = 40 - scrollTop;
      const mobileTopValue = 88 - scrollTop;
  
      if (navTopValue > 0) {
          NavMenu.style.top = navTopValue + 'px';
      } else {
          NavMenu.style.top = '0';
      }
  
      if (mobileTopValue > 0) {
          mobileMenu.style.top = mobileTopValue + 'px';
      } else {
          mobileMenu.style.top = '48px';
      }
  }
  
  window.addEventListener('scroll', adjustMenus);
  
