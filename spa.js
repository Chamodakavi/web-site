window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

const modal = document.getElementById('modal');

const openModalBtn2 = document.getElementById('openModalBtn2');
const closeModalBtn = document.getElementById('closeModalBtn');

openModalBtn2.addEventListener('click', function() {
    modal.style.display = 'flex';
});

closeModalBtn.addEventListener('click', function() {
    modal.style.display = 'none';
});

window.addEventListener('click', function(e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
});