// add active class to the current page title in the nav-bar

document.querySelectorAll(".nav-link").forEach((link) => {
  const linkUrl = link.href.replace(/\/index\.php$/, '/');
  const currentUrl = window.location.href.replace(/\/index\.php$/, '/');
  if (linkUrl === currentUrl) {
    link.classList.add("active");
  }
});
