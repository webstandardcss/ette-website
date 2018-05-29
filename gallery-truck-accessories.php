<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "ETTE Truck Accessories Gallery";
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
    <?php require_once dirname(__FILE__) . "/inc/text-gallery.php"; ?>
    <hr />

    <article class="featured-brands">
      <figure class="featured-brands-item">
        <a href="/obf/images/gallery/accessories/cab_steps.jpg" target="_blank">
          <img src="/obf/images/gallery/accessories/cab_steps.jpg" alt="Cab Steps" title="" width="100" height="75" class="alignleft size-full wp-image-128">
          <figcaption>Cab Steps</figcaption>
        </a>
      </figure>

      <figure class="featured-brands-item">
        <a href="/obf/images/gallery/accessories/grill_guards12.jpg" target="_blank">
          <img src="/obf/images/gallery/accessories/grill_guards12.jpg" alt="Grille Guards" title="" width="100" height="75" class="alignleft size-full wp-image-128">
          <figcaption>Grille Guards 1</figcaption>
        </a>
      </figure>

      <figure class="featured-brands-item">
        <a href="/obf/images/gallery/accessories/grill_guards2.jpg" target="_blank">
          <img src="/obf/images/gallery/accessories/grill_guards2.jpg" alt="Grille Guards 2 " title="" width="100" height="75"
            class="alignleft size-full wp-image-128">
          <figcaption>Grille Guards 2</figcaption>
        </a>
      </figure>

      <figure class="featured-brands-item">
        <a href="/obf/images/gallery/accessories/euro_tailight.jpg" target="_blank">
          <img src="/obf/images/gallery/accessories/euro_tailight.jpg" alt="Lights" title="" width="100" height="75" class="alignleft size-full wp-image-128">
          <figcaption>Lights</figcaption>
        </a>
      </figure>

      <figure class="featured-brands-item">
        <a href="/obf/images/gallery/accessories/removeable_ball_gooseneck.jpg" target="_blank">
          <img src="/obf/images/gallery/accessories/removeable_ball_gooseneck.jpg" alt="Removable Ball Gooseneck" title="" width="100"
            height="75" class="alignleft size-full wp-image-128">
          <figcaption>Removable Ball Gooseneck</figcaption>
        </a>
      </figure>

      <figure class="featured-brands-item">
        <a href="/obf/images/gallery/accessories/toolboxes.jpg" target="_blank">
          <img src="/obf/images/gallery/accessories/toolboxes.jpg" alt="Toolboxes" title="" width="100" height="75" class="alignleft size-full wp-image-128">
          <figcaption>Toolboxes</figcaption>
        </a>
      </figure>

      <figure class="featured-brands-item">
        <a href="/obf/images/gallery/accessories/wall_accessories.jpg" target="_blank">
          <img src="/obf/images/gallery/accessories/wall_accessories.jpg" alt="Wall Of Acessories" title="" width="100" height="75"
            class="alignleft size-full wp-image-128">
          <figcaption>Wall Of Acessories</figcaption>
        </a>
      </figure>
    </article>
    
    <hr />
    <?php require_once dirname(__FILE__) . "/inc/categories-gallery.php"; ?>
    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
