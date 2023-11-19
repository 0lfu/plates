if (window.matchMedia("(max-width: 500px)").matches) {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        const offset = targetElement.offsetTop - 40;
        window.scrollTo({
          top: offset,
          behavior: "smooth",
        });
      }
    });
  });
} else {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        const offset = targetElement.offsetTop - 64;
        window.scrollTo({
          top: offset,
          behavior: "smooth",
        });
      }
    });
  });
}
