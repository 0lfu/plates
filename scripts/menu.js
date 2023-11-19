window.menuStatus = 1;

scrollFunction();
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").classList.add("navbar-minimized");
    document.getElementById("navbar").classList.remove("navbar-maximized");
    window.menuStatus = 0;
  } else {
    document.getElementById("navbar").classList.add("navbar-maximized");
    document.getElementById("navbar").classList.remove("navbar-minimized");
    window.menuStatus = 1;
  }
}
