<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "East Texas Truck Equipment Specials";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "Truck accessories, truck equipment specials, sales, ETTE Specials" . $siteKeywords;
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
      <p>Take advantage of our current specials! If you were looking for an excuse to get that spray-in bedliner, steps or leveling kit how do like these discounts sound?</p> 
       <p>Come in today or call 903 - 758 - 6171 for any questions.</p>
        <ul>
            <img width="30%" src="./assets/images/home/xtreme_small.jpg" /> 
            <li class="special-list">	Spray in Liners</li>
                <ul>
                    <li>Short Bed - $350</li>
                    <li>Long Bed - $400</li>
                    <li>Over The Rail Option - $100</li>
                </ul>
                </br>
            <img width="30%" src="./assets/images/home/b&w_small.jpg" />
            <li class="special-list">	B&W Goosenecks</li>
                <ul>
                    <li>$600 installed (excludes 2020 GM HD & (17-20) Ford Super Duty</li>
                    <li>$700 installed on 2020 GM HD & 17-20 Ford Super Duty</li>
                </ul>
                </br>
            <img width="30%" src="./assets/images/home/retrax_small.jpg" />
            <li>	Retrax Bed Covers</li>
                <ul>
                    <li>Retrax OneMX $1250 installed</li>
                    <li>Retrax ProMX $1650 installed</li>
                </ul>
                </br>
            <img width="30%" src="./assets/images/home/lomax_small.jpg" />    
            <li>	LoMax Bed Covers</li>
                <ul>
                    <li>$850 installed</li>
                </ul>
                </br>
            <img width="30%" src="./assets/images/home/amp_small.jpg" />
            <li>AMP Steps</li>
                <ul>
                    <li>$1600 installed on plug & play models</li>
                </ul>
                </br>
            <img width="30%" src="./assets/images/home/ranch_hand_small.jpg" />
            <li>Ranch Hand</li>
                <ul>
                    <li>10% off all Ranch Hand products in stock</li>
                </ul>
        </ul>
      

    </article>

    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
