<?php
ob_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <!-- general -->
    <meta name="keyword" content="<?php echo $page_keywords; ?>" />
    <meta name="description" content="<?php echo $page_description; ?>" />
    <meta name="author" content="Yared Industrial Technology and Business College" />
    <meta name="theme-color" content="#0a0a0a">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <!-- open graph tags -->
     <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <!-- itd-logo -->
    <meta property="og:image" content="<?php echo base_url('assets/img/logo.png'); ?>">
    <meta property="og:site_name" content="Yared Industrial Technology and Business College">
    <!-- twitter  -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $page_description; ?>">
    <meta name="twitter:image" content="<?php echo base_url('assets/img/logo.png'); ?>">
    <meta name="twitter:site" content="@ITDTech">
    
    <link rel="canonical" href="<?php echo rtrim($canonical_url, '/'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet">
    <link  href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="shortcut icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
   
    <script type="application/ld+json">
    <?php
        $structured_data = [
            "@context" => "https://schema.org",
            "@type" => "Organization",
            "name" => "Yared Industrial Technology and Business College",
            "url" => base_url(),
            "logo" => base_url('assets/img/logo.png'),
            "description" => $page_description,
            "sameAs" => [
                "https://www.linkedin.com/company/ITDTech",  // Replace with actual LinkedIn
                "https://twitter.com/ITDTech"                    // Replace with actual Twitter
            ]
        ];

        echo json_encode($structured_data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        ?>
    </script>
</head>
<body>
 <nav class="navbar">
    <div class="nav-container">
      <!-- Replaced emoji icon with actual logo image -->
      <a href="index.html" class="logo">
        <img src="<?php echo base_url('assets/img/logo.png'); ?>"  alt="YITBC Logo" class="logo-img">
        <span class="logo-text">YITBC</span>
      </a>
     <ul class="nav-links">
        <li><a href="<?php echo base_url('');?>" >Home</a></li>
        <li><a href="<?php echo base_url('about');?>">About</a></li>
        <li><a href="<?php echo base_url('programs');?>">Programs</a></li>
        <li><a href="<?php echo base_url('staff');?>" >Staff</a></li>
        <li><a href="<?php echo base_url('contact');?>" >Contact</a></li>
        <li class="btns"><a href="#" class="btn btn-secondary">Student Portal</a></li>

      </ul>

      <button class="nav-toggle" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </nav>
  
   <main>
    <?php echo $content;?>

    
    </main>





  <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>Yared Industrial Technology and Business College</h3>
                    <p>Behal Adarash Sub City,</p>
                    <p>Hawassa, Ethiopia</p>
                    <p>yareditbc@gmail.com</p>
                    <p>046-212-3596/97/98</p>
                    
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <a href="#">Academic Calendar</a>
                    <a href="#">Campus Map</a>
                    <a href="#">Library Resources</a>
                    <a href="#">Student Portal</a>
                    <a href="#">Faculty Directory</a>
                </div>
                <div class="footer-col">
                    <h3>Programs</h3>
                    <a href="#">Engineering Programs</a>
                    <a href="#">Business Programs</a>
                    <a href="#">Diploma Programs</a>
                    <a href="#">Short Courses</a>
                    <a href="#">Research Centers</a>
                </div>
                <div class="footer-col">
                    <h3>Connect With Us</h3>
                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <a href="#" style="background: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" style="background: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" style="background: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" style="background: rgba(255,255,255,0.1); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Yared Industrial Technology and Business College. All rights reserved.</p>
            </div>
        </div>
    </footer>
<script>
  const currentURL = window.location.href;

  document.querySelectorAll(".nav-links a").forEach(link => {
    if (link.href === currentURL) {
      link.classList.add("active");
    }
  });

 const navToggle = document.querySelector(".nav-toggle");
  const navLinks = document.querySelector(".nav-links");

  navToggle.addEventListener("click", () => {
    navLinks.classList.toggle("open");
    navToggle.classList.toggle("open");
  });
</script>



    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
</body>
</html>