<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Services";
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
      <p>At East Texas Truck Equipment, we specialize in stocking the products you want, when you need them with installation available by our trained Technicians.</p>
      <img class="main-content-page-image" src="/obf/images/services/home_sort08.jpg" alt="<?php echo $pageTitle; ?>">
      <p>We have a rather long list of products we carry and install for you. They include: Aluminum Boxes, Bed Liners, Bed Mats, Bed Rails, Bug Shields, Chrome Products, Fifth Wheel Installations, Goosenecks, Grillguards, Hitch Covers, Nerf Bars, Heavy Duty Bumpers, Running Boards, Safety Equipment, Steel Boxes, Vent Visors, Wheel Simulators, and on and on… The Bottom Line is if it has to do with trucks, We Have It.</p>
      <p>ETTE carries a full line of Husky Heavy-duty Floor Mats and SUV Cargo Liners to protect the inside of your vehicle from the muck and the mire. For Hunting Season don’t forget our full line of Warn winch products – from ATV’s to heavy-duty truck applications.</p>

      <blockquote>Our Team is composed of only top notch professionals. We provide you with the best service possible, and make sure that you leave with the information or accessories that you need for your vehicle. Our goal is to satisfy you, the customer. If you are not satisfied with our service, then we are not doing our job.</blockquote>

      <h3>
        Taxidermy Services Now Available!
      </h3>
      
    </article>

    <img class="home-elite" src="/obf/images/services/etta_taxidermy.jpg" alt="Taxidermy Services Now Available!">
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
