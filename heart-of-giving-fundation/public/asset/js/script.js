const slides = document.querySelectorAll('.slide');
const images = [
    '/asset/image/hero.jpg',
    '/asset/image/image-6.jpg',
    '/asset/image/img-1.JPG',
    '/asset/image/img-6.JPG'
];
let currentIndex = 0;

function changeBackground() {
    slides[currentIndex].style.backgroundImage = `url('${images[currentIndex]}')`;
    currentIndex = (currentIndex + 1) % images.length;
}

setInterval(changeBackground, 5000); // Change slide every 5 seconds (adjust as needed)
