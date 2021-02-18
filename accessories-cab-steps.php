<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Cab Steps";
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

    <p>
      Cab steps can make your vehicle look much nicer and easier to get into. Click a link below for more information:
    </p>


    <div class="featured-brands">
      <a href="https://www.ariesautomotive.com/running-boards-side-bars"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/aries-logo-2s.png" alt="Aries Cab steps" />
        <figcaption>Aries</figcaption>
      </figure></a>
       <a href="http://www.amp-research.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/amp-research.jpg" alt="Amp Research" />
        <figcaption>Amp Research</figcaption>
      </figure></a>
      <a href="http://www.carr.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/carr.jpg" alt="Carr Steps & Accessories" />
        <figcaption>Carr Steps & Accessories</figcaption>
      </figure></a>
      <a href="http://www.goindustries.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/goind.jpg" alt="Go Industries" />
        <figcaption>Go Industries</figcaption>
      </figure></a>
      <a href="http://www.gorhino.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/go-rhino.jpg" alt="Go Rhino" />
        <figcaption>Go Rhino</figcaption>
      </figure></a>
      <a href="http://www.raptorseries.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/raptorseries.gif" alt="Raptor Series" />
        <figcaption>Raptor Series</figcaption>
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
