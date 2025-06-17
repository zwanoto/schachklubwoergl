
<!DOCTYPE html>
<html lang="de">


  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kontaktformular für die Statistik Beratung und Statistik Nachhilfe">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>Statistik-Beratung - Kontakt</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="canonical" href="https://statuno.com/Kontakt.php">

<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->
<?php
$visitors = file_get_contents('counter.txt');
$visitors = $visitors + 1;
file_put_contents('counter.txt', $visitors);
?>
</head>

<!-- Cookie Consent Banner -->
<!-- Cookie Consent Banner -->
<div id="cookie-banner" style="display: none; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); width: 90%; max-width: 500px; background-color: #333; color: white; padding: 15px; text-align: center; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); z-index: 1000;">
  <p style="color: white;">Diese Website verwendet Cookies, einschließlich Google Analytics, um Ihnen das bestmögliche Erlebnis zu bieten. <a href="Impressum.php" style="color: #4CAF50; text-decoration: underline;">Mehr erfahren</a></p>
  <div style="margin-top: 10px;">
    <button id="accept-cookies" style="padding: 8px 16px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; margin-right: 10px;">Akzeptieren</button>
    <button id="decline-cookies" style="padding: 8px 16px; background-color: #e74c3c; color: white; border: none; border-radius: 4px; cursor: pointer;">Ablehnen</button>
  </div>
</div>

<script>
  // Show cookie banner if cookies are not accepted or declined
  window.addEventListener("load", function() {
    if (!localStorage.getItem("cookiesAccepted") && !localStorage.getItem("cookiesDeclined")) {
      document.getElementById("cookie-banner").style.display = "block";
    }
  });

  // Accept cookies
  document.getElementById("accept-cookies").addEventListener("click", function() {
    localStorage.setItem("cookiesAccepted", "true");
    document.getElementById("cookie-banner").style.display = "none";
    // Load Google Analytics script if cookies are accepted
    loadGoogleAnalytics();
  });

  // Decline cookies
  document.getElementById("decline-cookies").addEventListener("click", function() {
    localStorage.setItem("cookiesDeclined", "true");
    document.getElementById("cookie-banner").style.display = "none";
  });

  // Function to load Google Analytics script
  function loadGoogleAnalytics() {
    var script = document.createElement("script");
    script.src = "https://www.googletagmanager.com/gtag/js?id=G-7JJZ0JHSCH";
    script.async = true;
    document.head.appendChild(script);

    script.onload = function() {
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-7JJZ0JHSCH');
    };
  }

  // Load Google Analytics if cookies were previously accepted
  if (localStorage.getItem("cookiesAccepted")) {
    loadGoogleAnalytics();
  }
</script>

<style>
    .big-calendar-icon {
      font-size: 100px;
    }
    <style>
    form#contact button:hover {
      background-color: #4771cb!important;
      color: #fff!important;
      border-bottom: 2px solid black!important;
    }
    .framework {
      background-color: white;
      border: 1px solid #0069FF;
      border-radius: 0px;
      color: blueblack;
      text-align: center;
      margin-top: 10px;
      width: 100%;
      padding: 20px; /* Adjust the padding as desired */
    }
  /* Style for larger screens */
  @media (min-width: 768px) {
    .responsive-div {
      margin: 100px;
    }
  }

  /* Style for smaller screens */
  @media (max-width: 767px) {
    .responsive-div {
      margin: 5px;
    }
  }
</style>



  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="https://www.statuno.com/" class="logo">
              <h4>Statuno </h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="Team.php" >Team</a></li> 
              <li class="scroll-to-section"><a href="Preise.php">Preise </a></li> 
 
               <li class="scroll-to-section"><a href="Referenzen.php">Referenzen </a></li> 
               <li class="scroll-to-section"><a href="Impressum.php">Impressum/Datenschutz </a></li>
               <li class="scroll-to-section"><a href="Kontakt.php">Jetzt Anfragen</a></li> 
               <li class="scroll-to-section"><a href="en/Contact.php"><strong> EN </strong> </a></li> 

               <li class="main-blue-button"><a href="Terminbuchung.php">Terminbuchung </a></li> 
 
             </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

<body>
  <div style="background-color: lightblue;padding: 40px;">
      <div class="row">
        <div class="col-lg-8" style="background-color: lightblue; padding: 10px;">
          <div class="section-heading text-center wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <br><br>
            <h2 style="margin-top:50px"><strong><span class="contact-icon">✉️</span> Kontaktformular</strong></h2>
          </div>
          <div class='responsive-div' style="background-color: whitesmoke; padding: 10px">
            <form id="contact-form" method="post"   action="https://formspree.io/f/xvovqqvp"
 style="margin:40px">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="message">Nachricht</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
              </div>
              <button styel='margin-top:20px' type="submit" class="btn btn-primary">Nachricht senden</button>
            </form>
          </div>
        </div>
        <div class="col-lg-3 d-flex flex-column align-items-center justify-content-center" style="background-color: lightblue; padding: 20px;">
          <a href="https://wa.me/4368110869543?text=Hello%20I%20am%20interested%20in%20your%20services" target="_blank">
            <img src="assets/images/Digital_Glyph_Dark_Green.svg" style="height: 80px;" alt='WhatsApp Logo'/></img>
          </a>
          <a style="margin-top:10px" target="_blank" href="https://wa.me/4368110869543?text=Hello%20I%20am%20interested%20in%20your%20services"><p class="text-center" style="color:black">Schreib uns direkt auf WhatsApp <br>+43 681 10869543 </p></a>
          <a href="Terminbuchung.php"><span class="big-calendar-icon">📅</span></a>
          <a href="Terminbuchung.php"><p class="text-center"> Direkt zur Terminbuchung</p> </a>
        </div>
      </div>
  </div>
  </body>
  
  
  <footer style="background-color: #313232;color:white">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <p  style="color:whitesmoke">Copyright © 2021 Thomas Zwanowetz. 
                  
                  <br>Web Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a></p>
                </div>
              </div>
            </div>
          </footer>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</html>