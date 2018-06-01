<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Homepage";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
<?php require_once(dirname(__FILE__) . "/inc/slider.php"); ?>



  <div class="main-outer">
    <aside class="main-content-before"></aside>
    <main class="main-content">
      <h4 class="main-description">At East Texas Truck Equipment we have the most extensive inventory of truck accessories in East Texas. We take great pride in trying to have the products our customers need in stock and ready for installation when they need it. Our knowledgeable and courteous staff is eager to take care of you. From industrial grade tool boxes, to chrome trim for your custom ride, we can take care of you. Call or come by our showroom in Longview Texas today.</h4>      
      <div class="featured-services">
        <figure class="featured-services-item">
          <a href="/services.php">
            <img src="assets/images/home/icon-services-pickup.png" alt="Pick-up Truck Services">
            <figcaption>Pick-up Truck Services</figcaption>
          </a>
        </figure>
        <figure class="featured-services-item">
          <a href="/heavy-truck-services.php">
            <img src="assets/images/home/icon-services-truck.png" alt="Heavy Truck Services">
            <figcaption>Heavy Truck Services</figcaption>
          </a>
        </figure>
        <figure class="featured-services-item">
          <a href="/contact-us.php">
            <img src="assets/images/home/icon-contact.png" alt="Contact Us">
            <figcaption>Contact Us</figcaption>
          </a>
        </figure>
      </div>
      <div class="list-services">
        <a href="/accessories.php" class="list-services-item">Spray-in Bed Liners</a>
        <a href="/accessories.php" class="list-services-item">Tool Boxes</a>
        <a href="/accessories.php" class="list-services-item">Nerf-bars</a>
        <a href="/accessories.php" class="list-services-item">Side Steps</a>
        <a href="/accessories.php" class="list-services-item">Goose-necks</a>
        <a href="/accessories.php" class="list-services-item">5th Wheels</a>
        <a href="/accessories.php" class="list-services-item">Receiver Hitches</a>
        <a href="/accessories.php" class="list-services-item">Lift Kits</a>
        <a href="/accessories.php" class="list-services-item">Floor Mats</a>
        <a href="/accessories.php" class="list-services-item">Bed Covers</a>
        <a href="/accessories.php" class="list-services-item">Lights</a>
      </div>
      <div class="featured-brands">
          <figure class="featured-brands-item">
            <a href="">
              <img src="assets/images/home/brand-bw-hitches.png" alt="B&amp;W Hitches">
              <figcaption>B&amp;W Hitches</figcaption>
            </a>
          </figure>
          <figure class="featured-brands-item">
            <a href="">
              <img src="assets/images/home/brand-retrax.png" alt="RETRAX">
              <figcaption>RETRAX</figcaption>
            </a>
          </figure>
          <figure class="featured-brands-item">
            <a href="">
              <img src="assets/images/home/brand-ranch-hand1.png" alt="Ranch Hand">
              <figcaption>Ranch Hand</figcaption>
            </a>
          </figure>
          <figure class="featured-brands-item">
            <a href="">
              <img src="assets/images/home/brand-weathertech-logo.png" alt="WeatherTech Floor Mats">
              <figcaption>WeatherTech Floor Mats</figcaption>
            </a>
          </figure>
          <figure class="featured-brands-item">
            <a href="">
              <img src="assets/images/home/brand-uws-logo.png" alt="UWS Tool Boxes">
              <figcaption>UWS Tool Boxes</figcaption>
            </a>
          </figure>
          <figure class="featured-brands-item">
              <a href="">
                <img src="assets/images/home/brand-mob-armor-logo.png" alt="Mob Armor">
                <figcaption>Mob Armor</figcaption>
              </a>
          </figure>
      </div>
      <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite BANNER AREA">
    </main>
    <!-- <aside class="main-content-after">
      <?php // require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
    </aside> -->
  </div>

  


<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
