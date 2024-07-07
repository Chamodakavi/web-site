const imgArray = [
  {id: 1,
    main_img: "images/2690549.jpg",
  },
  {id: 2,
    main_img: "images/2690577.jpg",
  },
  {id: 3,
    main_img: "images/2690563.jpg",
  },
  {id: 4,
    main_img: "images/2690572.jpg",
  }
];

let currentItem = 0;
console.log("init"+currentItem);

window.addEventListener("DOMContentLoaded", function () {
    
  displayMainImg();
});

const welcomeImgContainer = document.querySelector('.welcome-img-container');

function displayMainImg(){
  const firstImg = imgArray[0];
  const main = `<img src="${firstImg.main_img}" alt="" class="welcome-img">`;
  welcomeImgContainer.innerHTML = main;

}

const nextbtn = document.querySelector('.slider-r');

nextbtn.addEventListener("click",function(){
  currentItem++;
  console.log(currentItem);
  if(currentItem > imgArray.length-1){
    currentItem =0;
  }
  const next =imgArray[currentItem];
  
  const main = `<img src="${next.main_img}" alt="" class="welcome-img">`;
  welcomeImgContainer.innerHTML = main;

  
});

const prevbtn = document.querySelector('.slider-l');

prevbtn.addEventListener("click",function(){
  currentItem--;
  console.log(currentItem);
  if(currentItem < 0){
    currentItem =imgArray.length-1;
  }
  const back =imgArray[currentItem];
  
  // console.log(back);
  // console.log("in con"+currentItem);
  const main = `<img src="${back.main_img}" alt="" class="welcome-img">`;
  welcomeImgContainer.innerHTML = main;

});



const nav = document.querySelector(".nav");
window.addEventListener("scroll", function () {
  const scrollHeight = window.pageYOffset;
 
  if (scrollHeight > 50) {
    nav.classList.add("fixed-nav");
  } else {
    nav.classList.remove("fixed-nav");
  }

});