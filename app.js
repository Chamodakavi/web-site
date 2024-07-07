const imgArray = [
  {id: 1,
    main_img: "images/2690549.jpg",
  },
  {id: 2,
    main_img: "images/2690577.jpg",
  }
];



window.addEventListener("DOMContentLoaded", function () {
    
  displayMainImg();
});

const welcomeImgContainer = document.querySelector('.welcome-img-container');

function displayMainImg(){
  const firstImg = imgArray[0];
  const main = `<img src="${firstImg.main_img}" alt="" class="welcome-img">`;
  welcomeImgContainer.innerHTML = main;
}

const nav = document.querySelector(".nav");
window.addEventListener("scroll", function () {
  const scrollHeight = window.pageYOffset;
 
  if (scrollHeight > 50) {
    nav.classList.add("fixed-nav");
  } else {
    nav.classList.remove("fixed-nav");
  }

});