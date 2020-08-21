<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Accesories - Lights";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . " East Texas truck accessories - Lights " . $siteKeywords;
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

    <p>
      Lights can drastically improve the appearance of your vehicle. Click the link below for more information:
    </p>
    
    <div class="featured-brands">
    <a href="http://www.eccolink.com/ProductPages/Products.cfm" target="_new">
        <figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/ecco.jpg" alt="ECCO" />
        <figcaption>ECCO</figcaption>
      </figure></a>

      <a href="http://www.pmlights.com/" target="_new">
          <figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/peterson.jpg" alt="Peterson Manufacturing" />
        <figcaption>Peterson Manufacturing</figcaption>
      </figure></a>

      <a href="http://www.putco.com/" target="_new">
          <figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/putco.jpg" alt="Putco Lights" />
        <figcaption>Peterson Manufacturing</figcaption>
      </figure></a>

      <a href="http://www.pilotautomotive.com/" target="_new">
          <figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/pilot.jpg" alt="Pilot Automotive" />
        <figcaption>Pilot Automotive</figcaption>
      </figure></a>
      <a href="http://www.rigidindustries.com" target="_new">
          <figure class="featured-brands-item">
          <img src="/obf/images/accessories/brands/RIGID-INDUSTRIES-LOGO-2.jpeg-150x150.jpg" alt="Rigid Industries" width="100" height="75" border="2">
        <figcaption>Rigid Industries</figcaption>
      </figure></a>
      <a href=https://www.roughcountry.com/lighting-and-accessories/lights.html" target="_new">
          <figure class="featured-brands-item">
          <img src="/obf/images/accessories/brands/rough-country-logo.jpeg" alt="Rough Country" width="100" height="75" border="2">
        <figcaption>Rough Country</figcaption>
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
