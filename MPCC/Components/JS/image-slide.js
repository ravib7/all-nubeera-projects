var slideIndex = 0;
showSlides();

function showSlides() {
    var slides = document.getElementsByClassName("slide-image");
    var texts = document.getElementsByClassName("slide-text");

    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        texts[i].style.display = "none";
    }

    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";
    texts[slideIndex - 1].style.display = "block";

    setTimeout(showSlides, 2000); // Change slide every 2 seconds
}