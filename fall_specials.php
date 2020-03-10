<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Fall Specials";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

<div class="main-outer">
  <aside class="main-content-before"></aside>
  <main class="main-content main-content-page main-content-page-about">
    
    <h1>
      <?php echo $pageTitle; ?>
    </h1>
    <article>
      <h3>East Texas Truck Equipment's Fall Specials</h3>
       <p>Our Fall specials are here! If you were looking for an excuse to get that spray-in bedliner, steps or leveling kit how do these discounts sound? 
        <ul> 
            <li>	$50 off Spray in Liners</li>
            <li>	$100 off Amp Steps</li>
            <li>	$75 off Leveling kits installed</li>
            <li>	$20 off Front set of floor mats</li>
            
        </ul>
       Come in today or call 903 - 758 - 6171 for any questions.  
</p>
<img class="home-elite" src="./assets/images/home/header-slider-image9-1.jpg" />
    </article>

    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
