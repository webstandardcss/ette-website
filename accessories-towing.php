<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Towing Products";
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
    
    <div class="featured-brands">
      <a href="http://www.blueox.us/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/blue_ox.jpg" alt="Blue Ox" />
        <figcaption>Blue Ox</figcaption>
      </figure></a>
      <a href="http://www.boltlock.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/boltlock.jpg" alt="Boltlock" />
        <figcaption>Boltlock</figcaption>
      </figure></a>
      <a href="http://www.turnoverball.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/bw-hitches.jpg" alt="B&W Hitches" />
        <figcaption>B&W Hitches</figcaption>
      </figure></a>
      <a href="http://www.curtmfg.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/curtmfg.jpg" alt="Curt Manufacturing" />
        <figcaption>Curt Manufacturing</figcaption>
      </figure></a>
      <a href="http://www.draw-tite.com/content/default.aspx"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/drawtite.jpg" alt="Drawtite" />
        <figcaption>Drawtite</figcaption>
      </figure></a>
      <a href="http://www.popuphitch.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/pop-up.jpg" alt="Popup" />
        <figcaption>Popup</figcaption>
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
