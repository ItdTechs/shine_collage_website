<main>
     <!-- Hero Banner -->
  <section class="about-hero">
    <div class="about-hero-image">
      <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=1920&h=600&fit=crop" alt="College Campus">
      <div class="about-hero-overlay"></div>
    </div>
    <div class="about-hero-content">
      <h1>About Our College</h1>
      <p>Empowering Future Leaders Through Quality Education</p>
    </div>
  </section>

  <!-- Overview Section -->
  <section class="overview-section">
    <div class="container">
      <div class="overview-grid">
        <div class="overview-content">
          <h2>Who We Are</h2>
          <p>Yared Industrial Technology and Business College is a leading institution committed to providing quality education, fostering innovative research, and serving our community. Founded with a vision to transform Ethiopia's workforce, we have grown into a center of excellence that prepares students for successful careers in various industries.</p>
          <p>Our comprehensive programs blend theoretical knowledge with practical skills, ensuring that graduates are well-equipped to meet the demands of the modern workplace. We take pride in our dedicated faculty, state-of-the-art facilities, and a supportive learning environment that nurtures both academic and personal growth.</p>
          <p>Through our commitment to excellence, we continue to produce skilled professionals who contribute meaningfully to Ethiopia's economic development and technological advancement.</p>
        </div>
        <div class="overview-image">
          <img src="<?php echo base_url('assets/img/photo_5861958154168503333_y.jfif'); ?>" alt="Students studying together">
        </div>
      </div>
    </div>
  </section>


  <!-- Vision Section (Bilingual) -->
  <section class="vision-section">
    <div class="container">
      <div class="bilingual-card vision-card">
        <h2>Our Vision / ራዕያችን</h2>
        <div class="bilingual-content">
          <div class="language-block">
            <span class="language-label">English</span>
            <p>"By 2037, to be one of the leading higher education institutions in Ethiopia and create an environment conducive to quality education and technological research."</p>
          </div>
          <div class="language-divider"></div>
          <div class="language-block">
            <span class="language-label">አማርኛ</span>
            <p>"እስከ 2037 ዓ.ም. ድረስ በኢትዮጵያ ውስጥ ከሚገኙ ቀዳሚ ከፍተኛ የትምህርት ተቋማት አንዱ መሆን እና ለጥራት ያለው ትምህርት እና ቴክኖሎጂ ምርምር ምቹ ሁኔታ መፍጠር።"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Section (Bilingual) -->
  <section class="mission-section">
    <div class="container">
      <div class="mission-grid">
        <div class="bilingual-box mission-box-en">
          <span class="language-tag">English</span>
          <h3>Our Mission</h3>
          <p>To provide quality technical and business education that equips students with the knowledge, skills, and values necessary to become competent professionals and responsible citizens who contribute to the sustainable development of Ethiopia.</p>
        </div>
        <div class="bilingual-box mission-box-am">
          <span class="language-tag">አማርኛ</span>
          <h3>ተልዕኮአችን</h3>
          <p>ተማሪዎችን ብቁ ባለሙያዎች እና ኃላፊነት የሚሰማቸው ዜጎች እንዲሆኑ የሚያስችላቸውን እውቀት፣ ክህሎት እና እሴቶች የሚያስታጥቅ ጥራት ያለው ቴክኒክ እና ቢዝነስ ትምህርት መስጠት እና ለኢትዮጵያ ዘላቂ ልማት አስተዋፅኦ ማድረግ።</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Core Values Section -->
  <section class="values-section">
    <div class="container">
      <h2 class="section-title">Our Core Values</h2>
      <p class="section-subtitle">The principles that guide everything we do</p>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon">⭐</div>
          <h3>Quality</h3>
          <p>We are committed to excellence in education, continuously improving our programs and services to meet the highest standards.</p>
        </div>
        <div class="value-card">
          <div class="value-icon">💪</div>
          <h3>Commitment</h3>
          <p>We dedicate ourselves to the success of our students, providing unwavering support throughout their educational journey.</p>
        </div>
        <div class="value-card">
          <div class="value-icon">🤝</div>
          <h3>Inclusivity</h3>
          <p>We embrace diversity and create an inclusive environment where every student has equal opportunity to succeed.</p>
        </div>
        <div class="value-card">
          <div class="value-icon">👥</div>
          <h3>Working Together</h3>
          <p>We foster collaboration among students, faculty, and the community to achieve shared goals and create lasting impact.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- College Image Gallery -->
<section class="gallery section">
        <div class="container">
            <h2 class="section-title">Campus Life</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <div class="gallery-caption">Automotive Technology Workshop</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-caption">Electrical Engineering Lab</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-caption">Business Classroom</div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-caption">Student Collaboration Space</div>
                </div>
            </div>
        </div>
    </section>
    </main>
<?php
$content = ob_get_clean(); 
include 'base.php';