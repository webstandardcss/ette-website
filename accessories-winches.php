<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Winches";
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
      Need winches? Yes, we have them! Click the link below for more information:
    </p>

    <div class="featured-brands">
      <a href="http://www.bulldogwinch.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/bulldogwinch.jpg" alt="Bulldog Winch" />
        <figcaption>Bulldog Winch</figcaption>
      </figure></a>
      <a href="http://www.warn.com/index.shtml"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/warn.jpg" alt="Warn Industries, Inc." />
        <figcaption>Warn Industries, Inc.</figcaption>
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
