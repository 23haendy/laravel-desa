document.addEventListener("DOMContentLoaded", function () {
    const carouselInner = document.querySelector(".carousel-inner");
    const items = document.querySelectorAll(".carousel-item");
    const prevBtn = document.querySelector(".carousel-control.prev");
    const nextBtn = document.querySelector(".carousel-control.next");

    if (!carouselInner || items.length === 0 || !prevBtn || !nextBtn) {
        console.error("Carousel elements not found");
        return;
    }

    let currentIndex = 0;
    let autoSlide;

    function updateCarousel() {
        items.forEach((item, index) => {
            item.classList.remove("active");
            if (index === currentIndex) {
                item.classList.add("active");
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % items.length;
        updateCarousel();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        updateCarousel();
    }

    function startAutoSlide() {
        autoSlide = setInterval(nextSlide, 3000);
    }

    function resetAutoSlide() {
        clearInterval(autoSlide);
        startAutoSlide();
    }

    prevBtn.addEventListener("click", function () {
        prevSlide();
        resetAutoSlide();
    });

    nextBtn.addEventListener("click", function () {
        nextSlide();
        resetAutoSlide();
    });

    startAutoSlide();
});
