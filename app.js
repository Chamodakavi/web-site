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

const roomArray = [
  {
    id: 1,
    main_img: "images/im1.avif",
    desc:"Guest Rooms",
  },
  {
    id: 2,
    main_img: "images/im2.avif",
    desc:"Suits",
  },
  {
    id: 3,
    main_img: "images/im3.avif",
    desc:"Executive",
  }
];

const benefitsArray = [
{
  id: 1,
    main_img: "images/list 2 img/interest-rate.png",
    desc:"Lakeside Honors Discount rate",
},
{
  id: 1,
    main_img: "images/list 2 img/token.png",
    desc:"Points toward free nights and more",
},
{
  id: 1,
    main_img: "images/list 2 img/layout.png",
    desc:"Choose Your Room",
},
{
  id: 1,
    main_img: "images/list 2 img/check.png",
    desc:"Digital Check-In",
},
{
  id: 1,
    main_img: "images/list 2 img/satisfaction.png",
    desc:"Lakeside Honors Experiences",
},
{
  id: 1,
    main_img: "images/list 2 img/keyword.png",
    desc:"Digital Key",
}
];

let currentItem = 0;
console.log("init"+currentItem);
//call functions.
window.addEventListener("DOMContentLoaded", function () {
  displayMainImg();
  displayRooms();
  displaybenefits();
});

//welcome img display
const welcomeImgContainer = document.querySelector('.welcome-img-container');
function displayMainImg(){
  const firstImg = imgArray[0];
  const main = `<img src="${firstImg.main_img}" alt="" class="welcome-img">`;
  welcomeImgContainer.innerHTML = main;

}
//display room informations.
const rooms = document.querySelector('.rooms');
function displayRooms(){
  let main = "";
  for(let i = 0 ; i <= roomArray.length - 1; i++ ){
     main += `<div class="room-menu">
                    
                      <img src="${roomArray[i].main_img}" alt="" srcset="">
                      <p>${roomArray[i].desc}</p>
                    </a>
                  </div>`;
    
  };
  rooms.innerHTML = main;
}

//display benefits information.
const benefits = document.querySelector('.benefits');
function displaybenefits(){
  let main = "";
  for(let i = 0 ; i <= benefitsArray.length - 1; i++ ){
     main += `<div class="benefit-item">
                <img src="${benefitsArray[i].main_img}" alt="" srcset="" class="list-2-img">
                <p>${benefitsArray[i].desc}</p>
            </div>`;
    
  };
  benefits.innerHTML = main;
}

//welcome img next btn.
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

//welcome img back btn.
const prevbtn = document.querySelector('.slider-l');
prevbtn.addEventListener("click",function(){
  currentItem--;
  console.log(currentItem);
  if(currentItem < 0){
    currentItem =imgArray.length-1;
  }
  const back =imgArray[currentItem];
  const main = `<img src="${back.main_img}" alt="" class="welcome-img">`;
  welcomeImgContainer.innerHTML = main;
});

//fixed navigation bar when scroll.
const nav = document.querySelector(".nav");
window.addEventListener("scroll", function () {
  const scrollHeight = window.pageYOffset;
 
  if (scrollHeight > 50) {
    nav.classList.add("fixed-nav");
  } else {
    nav.classList.remove("fixed-nav");
  }
});

//back to top btn click.
const btn = document.querySelector('.btn');
btn.addEventListener('click', function(){
    window.scrollTo({
    top:0,
    behavior:'smooth'
  });
})

//back to top btn display.
window.addEventListener('scroll', function (){
  const scrollHeight = window.pageYOffset;
  console.log(scrollHeight);
  // Check if the current scroll position is greater than half of the page height
  if (scrollHeight > 800) {
      // Show the button
      btn.classList.add("btn-show");
  } else {
      // Hide the button
      btn.classList.remove("btn-show");
  }
});
