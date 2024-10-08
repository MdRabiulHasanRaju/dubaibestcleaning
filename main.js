var header = document.getElementsByClassName("my-navbar")[0];
function myFunction() {
  if (pageYOffset > 150) {
    header.classList.add("sticky-bar");
  } else {
    header.classList.remove("sticky-bar");
  }
}

window.onscroll = function () {
  myFunction();
};

$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: false,
    navText: [
      `<button class="btn btn-success slide-btn"><</button>`,
      `<button class="btn btn-success slide-btn">></button>`,
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });