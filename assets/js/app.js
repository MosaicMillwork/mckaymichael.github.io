document.addEventListener("DOMContentLoaded", () => {
  //Theme toggle and menu toggle

  const burger = document.querySelector(".burger");
  const menu = document.querySelector(".menu");
  
  burger.addEventListener("click", () => {
    burger.classList.toggle("open");
    menu.classList.toggle("open");
    document.body.classList.toggle("lock-scroll");
  });
});
