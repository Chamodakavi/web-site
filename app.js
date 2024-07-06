
const nav = document.querySelector(".nav");

window.addEventListener("scroll", function () {
  const scrollHeight = window.pageYOffset;
 
  if (scrollHeight > 50) {
    nav.classList.add("fixed-nav");
  } else {
    nav.classList.remove("fixed-nav");
  }

});

// const navItem = document.querySelectorAll('.items');
// const navContainer = document.querySelector('.nav-container');

// navItem.forEach(function(btnClick){
//   btnClick.addEventListener("click", function(){
//     const rotate = btnClick.querySelector('.dropdown-arrow-logo');
//     rotate.classList.toggle("dropdown-logo-rotate");
//     nav.classList.toggle("show-nav");
//     navContainer.classList.toggle("nav-con-click");
//   });
// });

const item1 = document.querySelector(".item1");

item1.addEventListener("click",function(){
  console.log("gg");
  nav.classList.toggle("show-nav");

  const main = `<img src="${mainImageSrc}" alt="" class="welcome-img">
               <div class="dark-background"></div>
                <div class="description"><h4>${title}</h4><br>
                <p>${paragraph_one}</p><br>
                <p>${paragraph_two}</p>
                <button type="button">Find out more</button>
                </div>`;

            mainImg.innerHTML = main;

});
