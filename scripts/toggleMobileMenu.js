function toggleMobileMenu() {
  var mobileMenu = document.querySelector(".mobile-menu-content");
  if (mobileMenu.style.display === "block") {
    mobileMenu.style.display = "none";
    document.body.style.overflow = "auto";
  } else {
    if (window.menuStatus == 1) {
      mobileMenu.style.height = "calc(100vh - 70px)";
      mobileMenu.style.marginTop = "70px";
    } else {
      mobileMenu.style.height = "calc(100vh - 40px)";
      mobileMenu.style.marginTop = "40px";
    }
    mobileMenu.style.display = "block";
    document.body.style.overflow = "hidden";
  }
}
