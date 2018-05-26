<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Location";
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
    <article>
  
      <address>
        5685 East Loop 281 South<br />
        Longview, Texas 75602
      </address>
  
      <div class="contact">
        <a href="+19037586171" class="contact-local contact-item">Local: (903) 758-6171</a>
        <a href="+18006575225" class="contact-tollfree contact-item">Toll-Free: (800) 657-5225</a>
      </div>
  
      <p>
        East Texas Truck Equipment is located just North of Interstate 20 on East Loop 281 South.
      </p>
  
      <iframe scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=5685+East+Loop+281+South+Longview,+Texas+75602+&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=55.323926,135.263672&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=SE+Loop+281,+Longview,+Harrison,+Texas+75602&amp;t=m&amp;z=14&amp;ll=32.504118,-94.67298&amp;output=embed" width="300" height="350" frameborder="0"></iframe>
    </article>
    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
