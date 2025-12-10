// Hero Image Slider
document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".slide")
  const dots = document.querySelectorAll(".dot")
  const prevBtn = document.querySelector(".slider-btn.prev")
  const nextBtn = document.querySelector(".slider-btn.next")

  let currentSlide = 0
  let autoSlideInterval
  const autoSlideDelay = 5000 // 5 seconds

  // Show specific slide
  function showSlide(index) {
    // Handle wrapping
    if (index >= slides.length) {
      currentSlide = 0
    } else if (index < 0) {
      currentSlide = slides.length - 1
    } else {
      currentSlide = index
    }

    // Update slides
    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === currentSlide)
    })

    // Update dots
    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === currentSlide)
    })
  }

  // Next slide
  function nextSlide() {
    showSlide(currentSlide + 1)
  }

  // Previous slide
  function prevSlide() {
    showSlide(currentSlide - 1)
  }

  // Start auto-slide
  function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, autoSlideDelay)
  }

  // Reset auto-slide timer (when user interacts)
  function resetAutoSlide() {
    clearInterval(autoSlideInterval)
    startAutoSlide()
  }

  // Event Listeners
  nextBtn.addEventListener("click", () => {
    nextSlide()
    resetAutoSlide()
  })

  prevBtn.addEventListener("click", () => {
    prevSlide()
    resetAutoSlide()
  })

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      showSlide(index)
      resetAutoSlide()
    })
  })

  // Pause on hover (optional - improves UX)
  const heroSlider = document.querySelector(".hero-slider")
  heroSlider.addEventListener("mouseenter", () => {
    clearInterval(autoSlideInterval)
  })

  heroSlider.addEventListener("mouseleave", () => {
    startAutoSlide()
  })

  // Keyboard navigation
  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight") {
      nextSlide()
      resetAutoSlide()
    } else if (e.key === "ArrowLeft") {
      prevSlide()
      resetAutoSlide()
    }
  })

  // Start the slider
  startAutoSlide()
})
