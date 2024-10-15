// Carousel Variables
const samItemsToShow = 3; // Number of images to show at once

// Carousel Data
const samCarousels = {
    beer: {
        currentIndex: 0,
        totalItems: 5,
        element: document.querySelector('.sam-carousel-items.beer'),
        leftButton: document.getElementById('samLeftButton'),
        rightButton: document.getElementById('samRightButton')
    },
    cocktails: {
        currentIndex: 0,
        totalItems: 8,
        element: document.querySelector('.sam-carousel-items.cocktails'),
        leftButton: document.getElementById('samLeftButtonCocktails'),
        rightButton: document.getElementById('samRightButtonCocktails')
    },
    vodka: {
        currentIndex: 0,
        totalItems: 5,
        element: document.querySelector('.sam-carousel-items.vodka'),
        leftButton: document.getElementById('samLeftButtonVodka'),
        rightButton: document.getElementById('samRightButtonVodka')
    },
    whiskey: {
        currentIndex: 0,
        totalItems: 5,
        element: document.querySelector('.sam-carousel-items.whiskey'),
        leftButton: document.getElementById('samLeftButtonWhiskey'),
        rightButton: document.getElementById('samRightButtonWhiskey')
    }
};

// Function to update the carousel position
function samUpdateCarousel(category) {
    const carousel = samCarousels[category];
    const itemWidth = carousel.element.querySelector('.sam-carousel-item').clientWidth + 20; // Width + margin (10px each side)
    const moveX = carousel.currentIndex * itemWidth;
    carousel.element.style.transform = `translateX(-${moveX}px)`;

    // Update button states
    carousel.leftButton.disabled = carousel.currentIndex === 0;
    carousel.rightButton.disabled = carousel.currentIndex >= carousel.totalItems - samItemsToShow;
}

// Function to show next set of images
function samShowNext(category) {
    const carousel = samCarousels[category];
    if (carousel.currentIndex < carousel.totalItems - samItemsToShow) {
        carousel.currentIndex++;
        samUpdateCarousel(category);
    }
}

// Function to show previous set of images
function samShowPrevious(category) {
    const carousel = samCarousels[category];
    if (carousel.currentIndex > 0) {
        carousel.currentIndex--;
        samUpdateCarousel(category);
    }
}

// Image hover effect
const samImages = document.querySelectorAll('.sam-carousel-item img');

samImages.forEach((image) => {
    const originalSrc = image.src;
    const hoverSrc = image.dataset.hover;

    image.addEventListener('mouseover', () => {
        image.src = hoverSrc; // Change to hover image
    });

    image.addEventListener('mouseout', () => {
        image.src = originalSrc; // Revert back to original image
    });
});

// Modal functions
function samOpenModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "block";
    }
}

function samCloseModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = "none";
    }
}

// Close modal when clicking outside of the modal content
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = "none";
    }
};

// Scroll to Top Functionality
const scrollBtn = document.getElementById('scrollBtn');

window.onscroll = function() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scrollBtn.classList.add('btn-show');
    } else {
        scrollBtn.classList.remove('btn-show');
    }
};

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Initial carousel updates
for (let category in samCarousels) {
    samUpdateCarousel(category);
}
