

// Basit bir form validasyonu ekleyelim
document.getElementById('contactForm').addEventListener('submit', function(e) {
    const name = document.querySelector('input[name="name"]').value.trim();
    const email = document.querySelector('input[name="email"]').value.trim();
    const message = document.querySelector('textarea[name="message"]').value.trim();

    if (!name || !email || !message) {
        alert('Lütfen tüm alanları doldurunuz.');
        e.preventDefault();
    }
});







let slideIndex = 1;
let slideTimer;

function showSlides(n) {
  const slides = document.getElementsByClassName("slide");
  if (n > slides.length) slideIndex = 1;
  if (n < 1) slideIndex = slides.length;

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}

function changeSlide(n) {
  slideIndex += n;
  showSlides(slideIndex);
  resetTimer();
}

function autoSlide() {
  changeSlide(1);
  slideTimer = setTimeout(autoSlide, 5000);
}

function resetTimer() {
  clearTimeout(slideTimer);
  slideTimer = setTimeout(autoSlide, 5000);
}

document.addEventListener("DOMContentLoaded", () => {
  showSlides(slideIndex);
  autoSlide();
});






  