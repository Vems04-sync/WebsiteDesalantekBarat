// Page load animation
window.addEventListener("load", () => {
  document.body.classList.add("page-loaded");
});

document.addEventListener("DOMContentLoaded", () => {
  // Mobile navbar toggle
  const navbarToggle = document.querySelector(".navbar-toggle");
  const desaNav = document.querySelector(".desa-nav");

  if (navbarToggle && desaNav) {
    navbarToggle.addEventListener("click", () => {
      const isExpanded = navbarToggle.getAttribute("aria-expanded") === "true";
      navbarToggle.setAttribute("aria-expanded", !isExpanded);
      desaNav.classList.toggle("active");
      document.body.style.overflow = !isExpanded ? "hidden" : "";
    });

    // Close menu when clicking on a link
    const navLinks = desaNav.querySelectorAll("a");
    navLinks.forEach((link) => {
      link.addEventListener("click", () => {
        navbarToggle.setAttribute("aria-expanded", "false");
        desaNav.classList.remove("active");
        document.body.style.overflow = "";
      });
    });

    // Close menu when clicking outside
    document.addEventListener("click", (e) => {
      if (
        !navbarToggle.contains(e.target) &&
        !desaNav.contains(e.target) &&
        desaNav.classList.contains("active")
      ) {
        navbarToggle.setAttribute("aria-expanded", "false");
        desaNav.classList.remove("active");
        document.body.style.overflow = "";
      }
    });
  }
  const carouselEl = document.getElementById("desaCarousel");
  const syncedSections = document.querySelectorAll(".background-synced");
  const titleEl = document.getElementById("heroTitle");
  const descriptionEl = document.getElementById("heroDescription");

  // Hero slideshow & background sync
  if (carouselEl && syncedSections.length > 0) {
    const updateShowcaseState = (item) => {
      if (!item) return;

      const nextTitle = item.getAttribute("data-title");
      const nextDescription = item.getAttribute("data-description");
      const nextBackground = item.getAttribute("data-background");

      if (titleEl && nextTitle) {
        titleEl.textContent = nextTitle;
      }

      if (descriptionEl && nextDescription) {
        descriptionEl.textContent = nextDescription;
      }

      if (nextBackground) {
        const backgroundValue = `linear-gradient(120deg, rgba(12, 32, 76, 0.7), rgba(22, 26, 48, 0.72)), url(${nextBackground})`;
        syncedSections.forEach((section) => {
          section.style.backgroundImage = backgroundValue;
        });
      }
    };

    if (typeof bootstrap !== "undefined" && bootstrap.Carousel) {
      new bootstrap.Carousel(carouselEl, {
        interval: 5000,
        ride: true,
        pause: false,
        touch: true,
        keyboard: true,
      });
    }

    carouselEl.addEventListener("slide.bs.carousel", (event) => {
      updateShowcaseState(event.relatedTarget);
    });

    const activeItem = carouselEl.querySelector(".carousel-item.active");
    updateShowcaseState(activeItem);
  }

  // On-scroll animation for elements in index
  const scrollElements = document.querySelectorAll(".reveal-on-scroll");
  if (scrollElements.length > 0 && "IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.15,
      }
    );

    scrollElements.forEach((el) => observer.observe(el));
  } else {
    // Fallback: jika IntersectionObserver tidak tersedia, tampilkan semua
    scrollElements.forEach((el) => el.classList.add("visible"));
  }

  // Navbar blur effect on scroll
  const navbar = document.querySelector(".desa-navbar");
  if (navbar) {
    const handleScroll = () => {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    };

    // Check initial scroll position
    handleScroll();

    // Listen to scroll events
    window.addEventListener("scroll", handleScroll);
  }
});
