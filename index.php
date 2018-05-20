<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Homepage";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
  <main class="ob-main flex-container">
    <h1>Welcome to East Texas Truck Equipment!</h1>
    <p>It all began </p>
	  <div class="product">
      <div class="product-row flex-container">
        <img class="product-image" src="obf/..." alt="" />
        <div class="product-description">
          <h3></h3>
          <p></p>
        </div>
      </div>
    </div>
    
  </main>
<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
