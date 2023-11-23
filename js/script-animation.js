// ANIMATION TITRES H2 & H3 - SCROLL

document.addEventListener("DOMContentLoaded", function () {
  // H2 & H3
  let titles = document.querySelectorAll("section h2, section h3");

  // INTERSECTION OBSERVER
  const titleObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('titre-animated');
          } else {
              entry.target.classList.remove('titre-animated');
          }
      });
  }, { threshold: 0.5 });

  // OBSERVE H2 & H3
  titles.forEach(title => {
      titleObserver.observe(title);
  });
});

// FALLBACK IMAGE

document.addEventListener("DOMContentLoaded", function() {
  const video = document.getElementById('background-video');
  const fallbackImage = document.getElementById('fallback-image');

  video.addEventListener('error', function() {
      // VIDÉO PAS CHARGÉE - AFFICHAGE DE L'IMAGE
      fallbackImage.style.display = 'block';
  });

  video.addEventListener('canplaythrough', function() {
      // VIDÉO CHARGÉE - MASQUER L'IMAGE
      fallbackImage.style.display = 'none';
  });
});

// PARALLAX EFFECT

const parallaxElement = document.querySelector(".parallax");
const videoSection = document.querySelector(".video-background");
const videoHeight = videoSection.offsetHeight;

window.addEventListener("scroll", function () {
  const yOffset = window.pageYOffset;

  if (yOffset <= videoHeight) {
      parallaxElement.style.transform = `translateY(${yOffset * 0.5}px)`;
  } else {
      parallaxElement.style.transform = `translateY(${videoHeight * 0.5}px)`;
  }
});

// SWIPER - CARROUSEL DES CHATS

document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      spaceBetween: 30,
      coverflowEffect: {
        rotate: 30,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      initialSlide: 0,
      autoplay: {
        delay: 3000,
      },
      pagination: {
        el: ".swiper-pagination",
      },
  });
});

// ANIMATION NUAGES - PARALLAX

const placeSection = document.getElementById("place");
const bigCloud = placeSection.querySelector(".big-cloud");
const littleCloud = placeSection.querySelector(".little-cloud");

window.addEventListener("scroll", () => {
  const scrollPercentage = window.scrollY / (document.body.scrollHeight - window.innerHeight);
  const maxXOffset = 300; // MOUVEMENT PIXEL 

  const posX = maxXOffset * scrollPercentage;

  bigCloud.style.transform = `translateX(${posX}px)`;
  littleCloud.style.transform = `translateX(${posX}px)`;
});

// CONTROLE MENU BURGER - CROIX - OUVRIR & FERMER (Classe "open" cliquée = code exécuté)

jQuery(document).ready(function($) {
  var $listeItems = $(".liste-items"); // Stockez la sélection dans une variable

  $(".open").click(function () {
    console.log("Burger menu - Cliqué");
    $listeItems.animate({ height: "toggle", opacity: "toggle" }, 1000, function () {
      console.log("Animation Complete");
      $(this).toggleClass("open");
      $(".bouton.open").toggleClass("close");
    });
  });

  $("a").click(function () {
    if ($listeItems.hasClass("open")) {
      $listeItems.animate({ height: "toggle", opacity: "toggle" }, 1000, function () {
        $(this).removeClass("open");
        $(".bouton.open").removeClass("close");
      });
    }
  });
});

// FLEURS ROTATION - SCROLL

window.addEventListener("scroll", () => {
  let root = document.documentElement; // ROOT ELEMENT

  var vertical = -1;
  setInterval(function () {
      if (window.scrollY != vertical) {
          vertical = window.scrollY;
          root.style.setProperty("--animation-speed", "3s");
      } else {
          root.style.setProperty("--animation-speed", "12s");
      }
  }, 500);
});
