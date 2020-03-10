<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Tool Boxes";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

<div class="main-outer">
  <aside class="main-content-before"></aside>
  <main class="main-content main-content-page main-content-page-about">
    <!-- <img class="main-content-page-image" src="/obf/images/about-us/ette_owners.jpg" alt="ETTE Owners"> -->
    <h1>
      <?php echo $pageTitle; ?>
    </h1>
    
    <?php require_once dirname(__FILE__) . "/inc/text-accessories.php"; ?>

    <hr />
    
    <p>We carry some of the best tool boxes on the market today. For more information, click a link below:</p>

    <div class="featured-brands">
        <a href="http://camlockeronline.com/" target="_blank">
            <figure class="featured-brands-item">
          <img src="/obf/images/accessories/brands/Cam-locker-logo.jpg" alt="Cam-locker Tool Boxes" width="100" height="100"
            border="2">
            <figcaption>Cam-locker<br>Tool Boxes </figcaption></figure>
        </a>
         
       <a href="http://www.uwsta.com/k/homepage/" target="_blank">
           <figure class="featured-brands-item">
              <img src="assets/images/home/brand-uws-logo.png" alt="UWS Tool Boxes">
              <figcaption>UWS Tool Boxes</figcaption></figure>
            </a>
      <a href="http://www.deezee.com/" target="_blank">
          <figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/deezee.jpg" alt="DeeZee Truck Accessories" />
        <figcaption>DeeZee Truck Accessories</figcaption>
      </figure></a>
      <a href="http://www.knaack.com/" target="_blank"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/knaack.jpg" alt="KNAACK" />
        <figcaption>KNAACK</figcaption>
      </figure></a>
      <a href="http://www.rki-us.com/" target="_blank">
          <figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/rki.jpg" alt="RKI Toolboxes" />
        <figcaption>RKI Toolboxes</figcaption>
      </figure></a>
      <a href="https://www.weatherguard.com/ " target="_blank">
          <figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/weatherguard-logo-s.jpg" alt="Weather Guard" />
        <figcaption>Weather Guard</figcaption>
      </figure></a>
    </div>

    <hr />

    <?php require_once dirname(__FILE__) . "/inc/categories-accessories.php"; ?>
    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
