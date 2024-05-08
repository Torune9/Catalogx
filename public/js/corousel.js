const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const slideElement = document.querySelectorAll('.slide')
let currentIndex = 0;

const showSlide = (index) => {
    let isCurrentSlide;
    slideElement.forEach((slide, i) => {
        isCurrentSlide = index === i;
        slide.classList.toggle('block', isCurrentSlide);
        slide.classList.toggle('hidden', !isCurrentSlide);
    });
};


nextBtn.addEventListener('click',()=>{
    currentIndex++
    if (currentIndex >= slideElement.length) {
        currentIndex = 0
    }
    showSlide(currentIndex)
})

prevBtn.addEventListener('click',()=>{
    currentIndex--
    if (currentIndex < 0) {
        currentIndex = slideElement.length - 1
    }
    showSlide(currentIndex)
})