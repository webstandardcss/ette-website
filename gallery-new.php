<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "ETTE Gallery";
$pageTitleTag = $pageTitle . " " . $siteName;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>
<div id="nanogallery"></a>
<div class="main-outer">
  <aside class="main-content-before"></aside>
  <main class="main-content main-content-page main-content-page-about">
    <!-- <img class="main-content-page-image" src="/obf/images/about-us/ette_owners.jpg" alt="ETTE Owners"> -->
    <h1>
      <?php echo $pageTitle; ?>
    </h1>
    <?php require_once dirname(__FILE__) . "/inc/text-gallery.php"; ?>
    <hr />
    <?php // require_once dirname(__FILE__) . "/inc/categories-gallery.php"; ?>
<div id="nanogallery"></div>
<link href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>
<script>
 jQuery("#nanogallery").nanogallery2({
        
          // CONTENT SOURCE
          // The optional add-on nanoPhotosProvider is used for this example - this is not mandatory and can easily be replaced by a list of medias
          kind: 'nano_photos_provider2',
          dataProvider: 'https://ette.tv/gallery/nano_photos_provider2.php',
          album: 'Gallery',
         
          // GALLERY AND THUMBNAIL LAYOUT
          galleryMosaic : [                       // default layout
            { w: 2, h: 2, c: 1, r: 1 },
            { w: 1, h: 1, c: 3, r: 1 },
            { w: 1, h: 1, c: 3, r: 2 },
            { w: 1, h: 2, c: 4, r: 1 },
            { w: 2, h: 1, c: 5, r: 1 },
            { w: 2, h: 2, c: 5, r: 2 },
            { w: 1, h: 1, c: 4, r: 3 },
            { w: 2, h: 1, c: 2, r: 3 },
            { w: 1, h: 2, c: 1, r: 3 },
            { w: 1, h: 1, c: 2, r: 4 },
            { w: 2, h: 1, c: 3, r: 4 },
            { w: 1, h: 1, c: 5, r: 4 },
            { w: 1, h: 1, c: 6, r: 4 }
          ],
          galleryMosaicXS : [                     // layout for XS width
            { w: 2, h: 2, c: 1, r: 1 },
            { w: 1, h: 1, c: 3, r: 1 },
            { w: 1, h: 1, c: 3, r: 2 },
            { w: 1, h: 2, c: 1, r: 3 },
            { w: 2, h: 1, c: 2, r: 3 },
            { w: 1, h: 1, c: 2, r: 4 },
            { w: 1, h: 1, c: 3, r: 4 }
          ],
          galleryMosaicSM : [                     // layout for SM width
            { w: 2, h: 2, c: 1, r: 1 },
            { w: 1, h: 1, c: 3, r: 1 },
            { w: 1, h: 1, c: 3, r: 2 },
            { w: 1, h: 2, c: 1, r: 3 },
            { w: 2, h: 1, c: 2, r: 3 },
            { w: 1, h: 1, c: 2, r: 4 },
            { w: 1, h: 1, c: 3, r: 4 }
          ],
          galleryMaxRows: 1,
          galleryDisplayMode: 'rows',
          gallerySorting: 'random',
          thumbnailDisplayOrder: 'random',

          thumbnailHeight: '180', thumbnailWidth: '220',
          thumbnailAlignment: 'scaled',
          thumbnailGutterWidth: 0, thumbnailGutterHeight: 0,
          thumbnailBorderHorizontal: 0, thumbnailBorderVertical: 0,

          thumbnailToolbarImage: null,
          thumbnailToolbarAlbum: null,
          thumbnailLabel: { display: false },

          // DISPLAY ANIMATION
          // for gallery
          galleryDisplayTransitionDuration: 1500,
          // for thumbnails
          thumbnailDisplayTransition: 'imageSlideUp',
          thumbnailDisplayTransitionDuration: 1200,
          thumbnailDisplayTransitionEasing: 'easeInOutQuint',
          thumbnailDisplayInterval: 60,

          // THUMBNAIL HOVER ANIMATION
          thumbnailBuildInit2: 'image_scale_1.15',
          thumbnailHoverEffect2: 'thumbnail_scale_1.00_1.05_300|image_scale_1.15_1.00',
          touchAnimation: true,
          touchAutoOpenDelay: 500,

          // LIGHTBOX
          viewerToolbar: { display: false },
          viewerTools:    {
            topLeft:   'label',
            topRight:  'shareButton, rotateLeft, rotateRight, fullscreenButton, closeButton'
          },

          // GALLERY THEME
          galleryTheme : { 
            thumbnail: { background: '#111' },
          },
					
          // DEEP LINKING
          locationHash: true
        });
</script>

    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
