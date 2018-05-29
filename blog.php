<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "ETTE Blog";
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
      <div id="blog-content" class="blog-content" role="main">
        <div id="post-1" class="post-1 post type-post status-publish format-standard hentry category-uncategorized">
          <h2 class="entry-title">
            <a href="" rel="bookmark">Hello world!</a>
          </h2>

          <div class="entry-meta">
            <span class="meta-prep meta-prep-author">Posted on</span>
            <a href="" title="4:33 am" rel="bookmark">
              <span class="entry-date">September 11, 2016</span>
            </a>
            <span class="meta-sep">by</span>
            <span class="author vcard">
              <a class="url fn n" href="" title="View all posts by easttexasautos">easttexasautos</a>
            </span>
          </div>
          <!-- .entry-meta -->

          <div class="entry-content">
            <p>Welcome to The ETTE Blog. This is your first post. Edit or delete it, then start writing!</p>
          </div>
          <!-- .entry-content -->

          <div class="entry-utility">
            <span class="cat-links">
              <span class="entry-utility-prep entry-utility-prep-cat-links">Posted in</span>
              <a href="" rel="category tag">Uncategorized</a>
            </span>
            <span class="meta-sep">|</span>
            <!-- <span class="comments-link">
              <a href="http://ette.tv/2016/09/11/hello-world/#comments">1 Comment</a>
            </span> -->
          </div>
          <!-- .entry-utility -->
        </div>
        <!-- #post-## -->

        <div id="post-613" class="post-613 post type-post status-publish format-standard hentry category-uncategorized">
          <h2 class="entry-title">
            <a href="" rel="bookmark">Superchips &amp; Factory Warranty</a>
          </h2>

          <div class="entry-meta">
            <span class="meta-prep meta-prep-author">Posted on</span>
            <a href="" title="2:45 pm" rel="bookmark">
              <span class="entry-date">December 14, 2011</span>
            </a>
            <span class="meta-sep">by</span>
            <span class="author vcard">
              <a class="url fn n" href="" title="View all posts by easttexasautos">easttexasautos</a>
            </span>
          </div>
          <!-- .entry-meta -->

          <div class="entry-content">
            <p>Superchips 100% back up their tuners as not leaving footprints/traces on the computer.</p>
          </div>
          <!-- .entry-content -->

          <div class="entry-utility">
            <span class="cat-links">
              <span class="entry-utility-prep entry-utility-prep-cat-links">Posted in</span>
              <a href="" rel="category tag">Uncategorized</a>
            </span>
            <span class="meta-sep">|</span>
            <!-- <span class="comments-link">
              <a href="http://ette.tv/2011/12/14/superchips-factory-warranty/#respond">Leave a comment</a>
            </span> -->
          </div>
          <!-- .entry-utility -->
        </div>
        <!-- #post-## -->
      </div>
    </article>

    <!-- <img class="home-elite" src="assets/images/home/eliteautoassociation.png" alt="Elite Auto Association"> -->
  </main>
  <aside class="main-content-after">
    <?php require_once dirname(__FILE__) . "/inc/facebook.php"; ?>
  </aside>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
