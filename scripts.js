document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slide");

    let index = 0;
    slides[index].classList.add("active");

    setInterval(() => {
        slides[index].classList.remove("active");
        index = (index + 1) % slides.length;
        slides[index].classList.add("active");
    }, 5000); // Her 5 saniyede bir geçiş yap
});
