var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "3",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
});
const header = document.querySelector("header");

window.addEventListener("scroll", () => {
    const scrollPosition = window.scrollY > 0;
    header.classList.toggle("scrolling-active", scrollPosition);
});

document.getElementById("commentButton").addEventListener("click", function () {
    var textareaDiv = document.querySelector(".textarea");
    if (textareaDiv.classList.contains("textarea-hidden")) {
        textareaDiv.classList.remove("textarea-hidden");
    } else {
        textareaDiv.classList.add("textarea-hidden");
    }
});
