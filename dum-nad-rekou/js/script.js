/*////////////////////////////////////// ICON LOAD ANIMATIONS ///////////////////////////////////////////*/

document.addEventListener("DOMContentLoaded", () => {
    const iconsContainer = document.querySelector(".about--container__icons"); 
    const icons = document.querySelectorAll(".icon--container"); 

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                icons.forEach((icon, index) => {
                    setTimeout(() => {
                        icon.classList.add("fade-in");
                        icon.classList.remove("hidden");
                    }, index * 100); 
                });

                observer.unobserve(entry.target); 
            }
        });
    }, {
        threshold: 0.1, 
    });

    if (iconsContainer) {
        observer.observe(iconsContainer);
    }
});


/*////////////////////////////////////// GALLERY ///////////////////////////////////////////*/

document.addEventListener("DOMContentLoaded", function () {
    let slideIndex = 1; 
    showSlides(slideIndex); 
  
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
  
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
  
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
  
      if (n > slides.length) { slideIndex = 1; } 
      if (n < 1) { slideIndex = slides.length; } 
  
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
  
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      
    }
  
    document.querySelector(".prev").addEventListener("click", () => plusSlides(-1));
    document.querySelector(".next").addEventListener("click", () => plusSlides(1));
    const dots = document.querySelectorAll(".dot");
    dots.forEach((dot, index) => {
      dot.addEventListener("click", () => currentSlide(index + 1));
    });
    setInterval(() => {
        plusSlides(1);
    }, 4000);
  });


/*////////////////////////////////////// LIGHTBOX ///////////////////////////////////////////*/
let currentIndex = 0;
let images = [];

function openLightbox(index) {
  images = Array.from(document.querySelectorAll('.thumbnail')).map(img => img.src);
  currentIndex = index;

  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");

  // Set the current image
  lightboxImg.src = images[currentIndex];

  // Show the lightbox
  lightbox.classList.add('open'); // Add the class to trigger the fade-in
  document.addEventListener('keydown', handleKeyControls);
}

function closeLightbox(event) {
  if (event.target.id === "lightbox" || event.target.id === "closeBtn") {
    const lightbox = document.getElementById("lightbox");

    // Fade out the lightbox
    lightbox.classList.remove('open'); // Remove the class to trigger the fade-out

    // Remove keydown listener
    document.removeEventListener('keydown', handleKeyControls);
  }
}


function changeImage(direction) {
  currentIndex += direction;

  if (currentIndex < 0) {
    currentIndex = images.length - 1; 
  } else if (currentIndex >= images.length) {
    currentIndex = 0; 
  }

  document.getElementById("lightbox-img").src = images[currentIndex];
}

function handleKeyControls(event) {
  if (event.key === 'Escape') {
    closeLightbox();
  } else if (event.key === 'ArrowLeft') {
    changeImage(-1); 
  } else if (event.key === 'ArrowRight') {
    changeImage(1); 
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const thumbnails = document.querySelectorAll('.thumbnail');

  thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
      openLightbox(index); 
    });
  });

  document.getElementById("lightbox").addEventListener("click", function(event) {
    if (event.target === this) {
      closeLightbox(); 
    }
  });

  document.querySelector(".gallery--prev").addEventListener("click", function() {
    changeImage(-1);
  });

  document.querySelector(".gallery--next").addEventListener("click", function() {
    changeImage(1);
  });
});

  function changeImage(direction) {
    currentIndex += direction;

    if (currentIndex < 0) {
      currentIndex = images.length - 1; 
    } else if (currentIndex >= images.length) {
      currentIndex = 0; 
    }

    document.getElementById("lightbox-img").src = images[currentIndex];
  }

/*////////////////////////////////////// MAPSTUFF ///////////////////////////////////////////*/

document.addEventListener("DOMContentLoaded", function () {
  var map = L.map("map").setView([48.85242548932942, 16.047768118976105], 15); // Set your coordinates

  L.tileLayer('https://api.maptiler.com/maps/toner/{z}/{x}/{y}.png?key=3rwK6dM8EXAdcLi5ZGXR', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://www.maptiler.com/copyright">MapTiler</a>',
  }).addTo(map);

  L.marker([48.85242548932942, 16.047768118976105]).addTo(map)
  .bindPopup("Dům Nad Řekou")
  .openPopup();
});

function off(event) {
  if (event.target.id === "overlay" || event.target.id === "close") {
    document.getElementById("overlay").style.display = "none";
  }
}

function on() {
  document.getElementById("overlay").style.display = "flex";
}
