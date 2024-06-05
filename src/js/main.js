const hash = location.hash;

window.addEventListener("load", () => {
  const smoothScrollTrigger = document.querySelectorAll("a[href^=\"#\"]");
  smoothScrollTrigger.forEach(item => {
    item.addEventListener("click", e => {
      e.preventDefault();
      let href = item.getAttribute("href");
      let targetElement = document.getElementById(href.replace("#", ""));
      if (!targetElement) return;
      const rect = targetElement.getBoundingClientRect().top;
      const offset = window.scrollY;
      const globalHeader = document.getElementById("header");
      let globalHeaderHeight = globalHeader.offsetHeight;
      const target = rect + offset - globalHeaderHeight;
      window.scrollTo({
        top: target,
        behavior: "smooth"
      });
    });
  });

  if (hash) {
    setTimeout(() => {
      window.scrollTo({ top: 0 }, 0);
    })
    setTimeout(() => {
      const target = document.getElementById(hash.replace("#", ""));
      const headerHeight = document.getElementById("header").offsetHeight;
      const targetPosition = window.pageYOffset + target.getBoundingClientRect().top - headerHeight;
      window.scroll({
        top: targetPosition,
        behavior: "smooth"
      });
      const url = new URL(window.location.href);
      history.replaceState("", "", url.pathname);
    }, 200);
  }
});

window.addEventListener("load", () => {
  const targetElements = document.querySelectorAll(".js-void-transition");
  targetElements.forEach((elm) => {
    elm.classList.remove("preload");
  });
});

window.addEventListener("scroll", () => {
  const target = document.querySelector(".js-list");
  if (target === null) return;
  const scroll = window.scrollY;
  if (scroll > 80) {
    target.classList.add("_is-show");
  } else {
    target.classList.remove("_is-show");
  }
});