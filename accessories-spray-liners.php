<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Spray-In Liners";
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
      <a href="http://www.xtremeliners.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/Xtreme_liners_logo_small.png" alt="Protective Coatings" />
        <figcaption>Xtreme Liners</figcaption>
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
