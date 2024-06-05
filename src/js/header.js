window.addEventListener("load", () => {
  const nav_drawers = document.querySelectorAll(".js-void-transition");
  nav_drawers.forEach(item => {
    item.classList.remove("preload");
  });
});

window.addEventListener("load", () => {
  const hamburger = document.querySelector("#js-menuTrigger");
  const nav = document.querySelector("#header-global");
  const links = document.querySelectorAll(".js-links");
  const line = document.querySelector(".header__hamburger-line");
  const closeElements = document.querySelectorAll(".js-menuClose");

  const elmArray = [hamburger, nav, line];

  hamburger.addEventListener("click", () => {
    if (hamburger.getAttribute("aria-expanded") === "false" && nav.getAttribute("aria-hidden") === "true") {
      hamburger.setAttribute("aria-expanded", "true");
      nav.setAttribute("aria-hidden", "false");
      elmArray.forEach(elm => {
        elm.classList.add("_is-open");
      });
    } else {
      hamburger.setAttribute("aria-expanded", "false");
      nav.setAttribute("aria-hidden", "true");
      elmArray.forEach(elm => {
        elm.classList.remove("_is-open");
      });
    }
  });

  links.forEach(link => {
    link.addEventListener("click", () => {
      removeClass();
    });
  });

  closeElements.forEach(elm => {
    elm.addEventListener("click", () => {
      closeMenu();
    });
  });

  const anchorLinks = document.querySelectorAll("a[href^=\"#\"]");
  anchorLinks.forEach(item => {
    item.addEventListener("click", () => {
      closeMenu();
    });
  });

  const removeClass = () => {
    elmArray.forEach(elm => {
      if (hamburger.getAttribute("aria-expanded") === "true" && nav.getAttribute("aria-hidden") === "false") {
        hamburger.setAttribute("aria-expanded", "false");
        nav.setAttribute("aria-hidden", "true");
        elm.classList.remove("_is-open");
      }
    });
  };

  const closeMenu = () => {
    elmArray.forEach(elm => {
      hamburger.setAttribute("aria-expanded", "false");
      nav.setAttribute("aria-hidden", "true");
      elm.classList.remove("_is-open");
    });
  };
});
