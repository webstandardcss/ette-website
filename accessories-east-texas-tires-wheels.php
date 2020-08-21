<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Tries and wheels - East Texas";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . " Truck tires and wheels " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

<div class="main-outer">
  <aside class="main-content-before"></aside>
  <main class="main-content main-content-page main-content-page-about">
    
    <h1>
      Tires & Wheels
    </h1>
    <article>
      <p>East Texas Truck Equipment carries a wide range of wheels and tires for your truck from well known brands like Nitto & Toyo Tires, American Wheels and more. </p>
      <p>Need more information? Give us a call or <a>Contact Us</a> today to get more details.</p>
    </article>
    <hr />

    <div class="featured-brands">
  <a href="https://www.nittotire.com/"><figure class="featured-brands-item">
    <img src="obf/images/accessories/brands/Nitto-logo-420x420.png" alt="Nitto Tires" width="100" height="75" border="2"/>
    <figcaption>Nitto Tires</figcaption>
  </figure></a>
  <a href="https://www.toyotires.com/"><figure class="featured-brands-item">
    <img src="/obf/images/accessories/brands/ToyoTires-Logo-323X250.jpg" alt="Ranch Hand" width="100" height="75" border="2" />
    <figcaption>Toyo Tires</figcaption>
  </figure></a>
  <a href="https://www.americanforcewheels.com/"><figure class="featured-brands-item">
    <img src="/obf/images/accessories/brands/american-force-logo-1.png" alt="American Force Wheels" width="100" height="75" border="2"/>
    <figcaption>American Force Wheels</figcaption>
  </figure></a>
  <a href="https://www.wheelpros.com/"><figure class="featured-brands-item">
    <img src="/obf/images/accessories/brands/Wheel-Pros-Logo.jpg" alt="Wheel Pros" width="100" height="75" border="2"/>
    <figcaption>Wheel Pros</figcaption>
  </figure></a>
</div>

    <hr />

    <?php require_once dirname(__FILE__) . "/inc/categories-accessories.php"; ?>
    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  <hr />  
   
    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
