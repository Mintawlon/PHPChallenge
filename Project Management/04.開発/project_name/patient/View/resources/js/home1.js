// // Splide.js file
// var splide = new Splide('.splide', {
//     type: 'loop',
//     perPage: 3,
//     autoplay: true,
//   });

// splide.mount();

//   Splide.js file
// var splide = new Splide('.splide', {
//   type: 'loop',
//   perPage: 3,
//   autoplay: true,
// });

// splide.mount();

document.addEventListener("DOMContentLoaded", function () {
  new Splide("#carousel", {
    type: "loop",
    perPage: 1,
    autoplay: true,
  }).mount();
});

document.addEventListener("DOMContentLoaded", function () {
  new Splide("#medicine", {
    type: "loop",
    perPage: 3,
    autoplay: true,
  }).mount();
});
