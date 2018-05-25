<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Gallery";
$pageTitleTag = $siteName . " " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
  <main class="ob-main flex-container">
    <h1>ETTE Gallery</h1>
    
	  <div class="product-small">
        <h2><a href="/obf/photo-gallery" target="_blank">Gallery</a></h2>
    </div>
    
  </main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
