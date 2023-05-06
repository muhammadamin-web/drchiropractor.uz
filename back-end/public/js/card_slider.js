const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const cardWrapper = document.querySelector('.card-wrapper');

prevBtn.addEventListener('click', () => {
    cardWrapper.scrollBy({ left: -cardWrapper.clientWidth * 0.25, behavior: 'smooth' });
});

nextBtn.addEventListener('click', () => {
    cardWrapper.scrollBy({ left: cardWrapper.clientWidth * 0.25, behavior: 'smooth' });
});
function autoSlide() {
    const scrollLeftMax = cardWrapper.scrollWidth - cardWrapper.clientWidth;
    if (cardWrapper.scrollLeft >= scrollLeftMax) {
        cardWrapper.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
        cardWrapper.scrollBy({ left: cardWrapper.clientWidth * 0.25, behavior: 'smooth' });
    }
}

// Har 3 sekunddan keyin kardlarni o'tkazish
const autoSlideInterval = setInterval(autoSlide, 10000);

// Har 3 sekunddan keyin kardlarni o'tkazish
