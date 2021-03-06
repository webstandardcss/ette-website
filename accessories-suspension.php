<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Suspension";
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
  


      <a href="http://www.readylift.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/readylift.png" alt="ReadyLIFT" />
        <figcaption>ReadyLIFT</figcaption>
      </figure></a>

      <a href="http://www.supersprings.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/supersprings.png" alt="Super Springs" />
        <figcaption>Super Springs</figcaption>
      </figure></a>

      <a href="http://www.firestoneip.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/firestone.jpg" alt="Firestone Airbags" />
        <figcaption>Firestone Airbags</figcaption>
      </figure></a>



    </div>

    <hr />

    <?php require_once dirname(__FILE__) . "/inc/categories-accessories.php"; ?>
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
