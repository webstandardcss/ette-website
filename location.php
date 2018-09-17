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
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13464.741286213286!2d-94.6705882!3d32.4677346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa690bfdd1f951326!2sEast+Texas+Truck+Equipment!5e0!3m2!1sen!2sus!4v1536700455312" width="300" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
      
    </article>
    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
