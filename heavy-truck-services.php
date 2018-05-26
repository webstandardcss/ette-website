<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Heavy Truck Services";
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
    <img class="home-elite" src="/obf/images/services-heavy/Heavy-trucks-Title-768x192.jpg" alt="East Texas Truck Equipment Heavy Truck Services">
      <p>
        Our Team is composed of only top notch professionals that provide you with the best service possible, and make sure that you leave with the information or accessories that you need for your vehicle.
      </p>

      <img class="align-right margin-12" src="/obf/images/services-heavy/Heavytruck-Column-300x300.png" alt="ETTE Heavy Truck Services">

      <h3>Services</h3>

      <ul class="list-etteservices list-block">
        <li>Preventive Maintenance</li>
        <li>Brake Jobs</li>
        <li>Suspension Rebuilds</li>
        <li>Bearing replacements</li>
        <li>Air bags</li>
        <li>Heavy Duty floor mats</li>
        <li>Custom trailer bumpers</li>
        <li>Fifth Wheel</li>
        <li>Safety Equipment</li>
        <li>Light Rewiring</li>
        <li>Axle Replacement</li>
        <li>Lift Gate Repair</li>
      </ul>

    

      <p>
        Our goal is to satisfy you, the customer. If you are not satisfied with our service, then we are not doing our job.
      </p>
    </article>

    <img class="home-elite" src="/obf/images/services-heavy/18wheeler_profile2.jpg" alt="East Texas Truck Equipment Heavy Truck Services">
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
