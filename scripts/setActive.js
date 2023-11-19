function setActiveLink() {
  const menuLinks = document.querySelectorAll("#nav-anchors a");

  menuLinks.forEach((link) => {
    const sectionId = link.getAttribute("href").substring(1);
    const section = document.getElementById(sectionId);

    if (section) {
      const rect = section.getBoundingClientRect();
      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        menuLinks.forEach((link) => {
          link.classList.remove("active");
        });
        link.classList.add("active");
      }
    }
  });
}

window.addEventListener("scroll", setActiveLink);
window.addEventListener("DOMContentLoaded", setActiveLink);
