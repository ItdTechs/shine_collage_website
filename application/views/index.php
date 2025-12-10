
<main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-slider">
      <div class="slides">
        <div class="slide active">
          <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=1920&h=1080&fit=crop" alt="Campus building">
          <div class="hero-overlay"></div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1523050854058-0c4c3acd3789?w=1920&h=1080&fit=crop" alt="Students studying">
          <div class="hero-overlay"></div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=1920&h=1080&fit=crop" alt="Engineering workshop">
          <div class="hero-overlay"></div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1627556704302-624286467c65?w=1920&h=1080&fit=crop" alt="Graduation ceremony">
          <div class="hero-overlay"></div>
        </div>
      </div>
      
      <!-- Slider Navigation Arrows -->
      <button class="slider-btn prev" aria-label="Previous slide">&#10094;</button>
      <button class="slider-btn next" aria-label="Next slide">&#10095;</button>
      
      <!-- Slider Dots -->
      <div class="slider-dots">
        <button class="dot active" data-slide="0" aria-label="Go to slide 1"></button>
        <button class="dot" data-slide="1" aria-label="Go to slide 2"></button>
        <button class="dot" data-slide="2" aria-label="Go to slide 3"></button>
        <button class="dot" data-slide="3" aria-label="Go to slide 4"></button>
      </div>
    </div>
    
    <div class="hero-content">
      <h1>Yared Industrial Technology and Business College</h1>
      <p class="hero-subtitle">Shaping Skilled Professionals for a Technologically Advanced Ethiopia.</p>
      <div class="hero-buttons">
        <a href="#" class="btn btn-primary">Register Now</a>
        <a href="#" class="btn btn-secondary">Explore Programs</a>
      </div>
    </div>
  </section>

  <!-- About Preview Section -->
<!-- Modified About Preview Section with Video -->
<section class="about-preview">
  <div class="container">
    <div class="about-grid">
      <div class="about-content">
        <h2>About Our College</h2>
        <p>Yared Industrial Technology and Business College is a premier institution dedicated to providing quality technical and business education. Established with a vision to transform Ethiopia's workforce, we offer comprehensive programs that blend theoretical knowledge with practical skills. Our state-of-the-art facilities and experienced faculty ensure that students receive world-class education preparing them for successful careers in various industries.</p>
        <a href="about.html" class="btn btn-primary">Learn More</a>
      </div>
      <div class="about-media">
        <!-- Video Thumbnail with Play Button -->
        <div class="video-thumbnail" onclick="openVideoModal()">
          <img src="https://img.youtube.com/vi/0ONpKDibmpE/maxresdefault.jpg" alt="Campus Tour Video">
          <div class="play-button">
            <svg width="80" height="80" viewBox="0 0 80 80">
              <circle cx="40" cy="40" r="36" fill="rgba(255,255,255,0.9)"/>
              <path d="M32,25 L55,40 L32,55 Z" fill="#1a5fb4"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video Modal -->
<div id="videoModal" class="video-modal">
  <div class="modal-content">
    <span class="close-modal" onclick="closeVideoModal()">&times;</span>
    <div class="modal-video">
      <iframe 
        src="https://www.youtube.com/embed/0ONpKDibmpE" 
        title="Campus Tour"
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
      </iframe>
    </div>
  </div>
</div>

<style>
.about-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}

.video-thumbnail {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  cursor: pointer;
  transition: transform 0.3s ease;
}

.video-thumbnail:hover {
  transform: translateY(-5px);
}

.video-thumbnail img {
  width: 100%;
  height: 300px;
  object-fit: cover;
}

.play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.play-button svg {
  transition: transform 0.3s ease;
}

.video-thumbnail:hover .play-button svg {
  transform: scale(1.1);
}

/* Video Modal Styles */
.video-modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.9);
  z-index: 1000;
  align-items: center;
  justify-content: center;
}

.modal-content {
  position: relative;
  width: 90%;
  max-width: 900px;
}

.close-modal {
  position: absolute;
  top: -40px;
  right: 0;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.modal-video {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
}

.modal-video iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>

<script>
function openVideoModal() {
  document.getElementById('videoModal').style.display = 'flex';
}

function closeVideoModal() {
  document.getElementById('videoModal').style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
  const modal = document.getElementById('videoModal');
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}
</script>

  <!-- Vision Highlight -->
  <section class="vision-highlight">
    <div class="container">
      <div class="vision-box">
        
        <h2>Our Vision</h2>
        <p>"By 2037, to be one of the leading higher education institutions in Ethiopia and create an environment conducive to quality education and technological research."</p>
      </div>
    </div>
  </section>

  <!-- Featured Programs -->
  <section class="programs">
    <div class="container">
      <h2 class="section-title">Featured Programs</h2>
      <p class="section-subtitle">Discover our industry-leading academic programs</p>
      <div class="programs-grid">
        <div class="program-card">
          <div class="program-icon">
            <img src="<?php echo base_url('assets/img/programs/images.jfif'); ?>" alt="Automotive">
          </div>
          <h3>Automotive Technology</h3>
          <span class="program-badge">Degree Program</span>
          <p>Master the latest automotive technologies and engineering principles for modern vehicles.</p>
          <a href="#" class="card-link">Learn More →</a>
        </div>
        <div class="program-card">
          <div class="program-icon">
            <img src="<?php echo base_url('assets/img/programs/electrocic-engineer-fixes-electronic-equipment.jpg'); ?>" alt="Electronics">
          </div>
          <h3>Electrical Electronics Technology</h3>
          <span class="program-badge">Degree Program</span>
          <p>Gain expertise in electrical systems, electronics, and cutting-edge technologies.</p>
          <a href="#" class="card-link">Learn More →</a>
        </div>
        <div class="program-card">
          <div class="program-icon">
            <img src="<?php echo base_url('assets/img/programs/diesel-technician-vs-auto-mechanic.jpg'); ?>" alt="Mechanic">
          </div>
          <h3>Auto Mechanic</h3>
          <span class="program-badge">Diploma Program</span>
          <p>Hands-on training in vehicle maintenance, repair, and diagnostic techniques.</p>
          <a href="#" class="card-link">Learn More →</a>
        </div>
        <div class="program-card">
          <div class="program-icon">
            <img src="<?php echo base_url('assets/img/programs/accounting.jfif'); ?>" alt="Accounting">
          </div>
          <h3>Accounting & Finance</h3>
          <span class="program-badge">Business Program</span>
          <p>Build strong foundations in financial management, accounting practices, and business analytics.</p>
          <a href="#" class="card-link">Learn More →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Announcements Section -->
  <section class="announcements">
    <div class="container">
      <h2 class="section-title">Latest Announcements</h2>
      <p class="section-subtitle">Stay updated with important college news</p>
      <div class="announcements-grid">
        <div class="announcement-card">
          <div class="announcement-badge new">New</div>
          <h3>Admissions Open</h3>
          <p>Applications are now being accepted for the 2024/2025 academic year. Apply today and secure your future!</p>
          <span class="announcement-date">Posted: December 1, 2024</span>
        </div>
        <div class="announcement-card">
          <div class="announcement-badge">Training</div>
          <h3>New Short Training Programs</h3>
          <p>We are introducing new short-term training programs in Computer Maintenance, Welding, and Electrical Installation.</p>
          <span class="announcement-date">Posted: November 28, 2024</span>
        </div>
        <div class="announcement-card">
          <div class="announcement-badge results">Results</div>
          <h3>COC Results Released</h3>
          <p>Center of Competence examination results are now available. Check your results at the registrar office.</p>
          <span class="announcement-date">Posted: November 25, 2024</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Campus Facilities -->
  <section class="facilities">
    <div class="container">
      <h2 class="section-title">Campus Facilities</h2>
      <p class="section-subtitle">World-class infrastructure for quality learning</p>
      <div class="facilities-grid">
        <div class="facility-card">
          <div class="facility-image">
            <img src="<?php echo base_url('assets/img/library.jfif'); ?>" alt="Modern Library">
          </div>
          <div class="facility-content">
            <div class="facility-icon">📚</div>
            <h3>Modern Library</h3>
            <p>Extensive collection of books, journals, and digital resources for research and study.</p>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="<?php echo base_url('assets/img/workshop.jfif'); ?>" alt="Workshops">
          </div>
          <div class="facility-content">
            <div class="facility-icon">🔧</div>
            <h3>Workshops</h3>
            <p>Fully equipped workshops for hands-on practical training in various technical fields.</p>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="<?php echo base_url('assets/img/ict_center.jfif'); ?>" alt="ICT Center">
          </div>
          <div class="facility-content">
            <div class="facility-icon">💻</div>
            <h3>ICT Center</h3>
            <p>State-of-the-art computer labs with high-speed internet and latest software.</p>
          </div>
        </div>
        <div class="facility-card">
          <div class="facility-image">
            <img src="<?php echo base_url('assets/img/support.jfif'); ?>" alt="Student Support">
          </div>
          <div class="facility-content">
            <div class="facility-icon">🤝</div>
            <h3>Student Support</h3>
            <p>Dedicated counseling and support services to help students succeed academically and personally.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  </main>




<?php
  $content = ob_get_clean(); 
  include 'base.php'; 
