<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Flat Beds";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "East Texas Truck Equipment Norstar Flat Beds" . $siteKeywords;
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
  <p>When your job is tough, you need equipment you can count on - every day. 
    Norstar has built a reputation for providing truck beds and trailers that work as hard as you and can withstand your daily grind, that's why East Texas Truck Equipment carries Norstar Beds.</p> 
  <p> Give us a call today to get more details. </p> 
    <div class="featured-brands">
        <a href="http://www.norstarcompany.com/truck_beds.cfm" target="_new"><figure class="featured-brands-item">
          <img src="/obf/images/accessories/brands/norstarlogo.png" alt="Norstar Truck Beds" width="100" height="75"
            border="2"/>
           
        <figcaption>Norstar Beds</figcaption>
      </figure></a>
    </div>
    <img src="/assets/images/products/flat bed/norstar-flat-bed-edited-s.jpg" alt="ST Model Norstar"/>
    <img src="/assets/images/products/flat bed/2019-norstar-edited-s.jpg" alt="2019 Norstar Bed"/>
    <hr />

    <?php require_once dirname(__FILE__) . "/inc/categories-accessories.php"; ?>
    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
