<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "ETTE on YouTube";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

<div class="main-outer">
  <aside class="main-content-before"></aside>
  <main class="main-content main-content-page main-content-page-about">
    <img class="main-content-page-image" src="/obf/images/about-us/ette_owners.jpg" alt="ETTE Owners">
    <h1>
      <?php echo $pageTitle; ?>
    </h1>
    <article>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Y2065sTBEQQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </article>

    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
