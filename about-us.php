<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "About Us";
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
      <p>East Texas Truck Equipment, (ETTE) opened it’s doors on May 1, 1976. The company’s owners and only employees were Hubert Green, Clayton Davis, and Patsy Davis. The business centered around sales and repair of large truck and trailer equipment, and sales of parts for these pieces of equipment. The orginal building was 6,000 square feet and was quickly out grown.</p>
      <p>In late 1981, the company acquired a 10 acre tract of land located on Loop 281 near Interstate 20. Click Here to get directions. The new building consisting of 16,000 square feet and was occupied June 1, 1986.</p>
      <p>On July 1, 1992, Hubert Green retired and Clayton and Patsy purchased his share of the corporation, making them sole owners of the business. In 1995, ETTE began their light truck division which sells brand name accessories for pickup trucks and sport utility vehicles. This division is managed by Tracey Davis, Vice President of Sales, and Jeff Davis, Vice President of Purchasing, handles inventory procurement.</p>
      <p>In 1998, Custom Trucks Plus was formed as a new corporation to start up a wholesale business in accessories. A 30,000 square foot building was also purchased in Henderson, Texas, just 26 miles south of Longview. In december of that year, Custom Trucks Plus began serving wholesale customers within a 100 mile radius, providing a complete line of accessories delivered by our own fleet of delivery trucks.</p>
      <p>The parent company, ETTE continues to serve the Longview area with sales and installation of a complete line of accessories for pickup trucks and sport utility vehicles. Future expansion in Longview has been provided for by the acquisition of 17 acres located on Loop 281.</p>
      <p>Our Team is composed of only top notch professionals. We provide you with the best service possible, and make sure that you leave with the information or accessories that you need for your vehicle. Our goal is to satisfy you, the customer. If you are not satisfied with our service, then we are not doing our job.</p>
    </article>

    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
