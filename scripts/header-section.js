window.addEventListener("scroll", function () {
  const headerNav1 = document.querySelector(".header-nav-1");
  const headerNav2 = document.querySelector(".header-nav-2");
  const headerNav3 = document.querySelector(".header-nav-3");
  const headerSection = document.querySelector(".header-section");

  if (window.scrollY > 0) {
    headerNav2.style.position = "fixed";
    headerNav2.style.top = "0";
    headerNav2.style.display = "flex";
    headerNav1.style.display = "none";
    headerNav3.style.display = "none";
    headerSection.style.paddingTop = `${headerNav2.offsetHeight}px`; // Add padding to prevent content jump
  } else {
    headerNav1.style.display = "flex"
    headerNav2.style.position = "static";
    headerNav2.style.display = "flex";
    headerNav3.style.display = "block";
    headerSection.style.paddingTop = "0";
  }
});
