let currentIndex = 0;
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      if (i === index) {
        slide.classList.add('active');
      } else {
        slide.classList.remove('active');
      }
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
  }



  // Navbar Shadow

  // window.addEventListener('scroll', function() {
  //   var navbar = document.getElementById('navbar');
  //   if (window.scrollY > 0) {
  //     navbar.classList.add('shadow'); // Add shadow class when scrolled
  //   } else {
  //     navbar.classList.remove('shadow'); // Remove shadow class when back to top
  //   }
  // });

  window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.nav-bar');
    if (window.scrollY > 0) {
        navbar.classList.add('shadow');
    } else {
        navbar.classList.remove('shadow');
    }
});
  