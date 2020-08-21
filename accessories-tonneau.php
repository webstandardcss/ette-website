<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Tonneau Covers";
$pageTitleTag = $pageTitle . "Quality Bed Covers" . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . " Quality Bed Covers " . $siteKeywords;
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
      <a href="https://www.undercoverinfo.com/" target="_new">
        <figure class="featured-brands-item">
          <img src="/obf/images/accessories/brands/undercover.png" alt="Undercover Bed Covers" width="100" height="75"
            border="2">
           <figcaption>
            Undercover Bed Covers
           </figcaption>
        </figure>
      </a>
      
      <a href="http://www.ruggedliner.com/product-rugged-cover.php">
        <figure class="featured-brands-item">
          <img src="/obf/images/accessories/brands/ruggedliner.jpg" alt="Rugged Cover" />
            <figcaption>
              Rugged Cover
            </figcaption>
        </figure>
      </a>

      <a href="https://www.agricover.com/lomax/">
        <figure class="featured-brands-item">
          <img src="/obf/images/accessories/brands/LoMax_logo.jpg" alt="LoMax Covers" width="130" height="75"
            border="2" />
            <figcaption>
              Lomax
            </figcaption>
        </figure>
      </a>

      <a href="http://www.retrax.com/">
        <figure class="featured-brands-item">
          <img src="/obf/images/accessories/brands/rolltopcover.gif" alt="Retrax" width="120" />
            <figcaption>
              Retrax
            </figcaption>
        </figure>
      </a>

      <a href="https://bakindustries.com/ " target="_new">
        <figure class="featured-brands-item">
          <img src="/obf/images/accessories/brands/back-white-80x80.png" alt="Bak Industries" />
            <figcaption>
            Bak Industries
          </figcaption>
        </figure>
      </a>

      <a href="http://extang.com/"><figure class="featured-brands-item">
        <img src="/obf/images/accessories/brands/extang.jpg" alt="Extang" />
          <figcaption>
            Extang
          </figcaption>
        </figure>
      </a>
      
      
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
