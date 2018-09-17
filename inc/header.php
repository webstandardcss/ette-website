<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once(dirname(__FILE__) . "/_meta.php"); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400">
  <!-- <link rel="stylesheet" href="/assets/vendors/tipue/tipuesearch/css/tipuesearch.css"> -->
  <script src="/assets/vendors/tipue/tipuesearch/tipuesearch.min.js"></script>
  <script src="/assets/js/tipuesearch_set.js"></script>
  <script src="/assets/js/tipuesearch_content.js"></script>
  <!-- <link rel="stylesheet" href="/assets/css/normalize.css"> -->
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="stylesheet" href="/assets/css/slider.css">
  <link rel="stylesheet" href="/custom.css">
  
  
  <?php if (in_array("forms", $extraCss)) { ?>
    <link rel="stylesheet" href="/assets/css/forms.css">
  <?php } ?>  
  
  <?php if (in_array("searchfix", $extraCss)) { ?>
    <link rel="stylesheet" href="/assets/css/searchfix.css">
  <?php } ?>
</head>
<body>
<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=101914593180765&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <header class="header-outer">
    <div class="header-top">
      <a href="/"><img class="header-top-logo" src="assets/images/ette-logo2.png" alt="East Texas Truck Equipment"></a>
      <div class="header-top-social">
        <a href="<?php echo $siteFacebookURL; ?>"><img src="assets/images/icon-facebook.png" alt="ETTE on Facebook" class="header-top-social-icon header-top-social-facebook"></a>
        <a href="/youtube.php"><img src="assets/images/icon-youtube.png" alt="ETTE on YouTube" class="header-top-social-icon header-top-social-youtube"></a>
        <a href="<?php echo $siteTwitterURL; ?>"><img src="assets/images/icon-twitter.png" alt="ETTE on Twitter" class="header-top-social-icon header-top-social-twitter"></a>
      </div>
    </div>

    <?php require_once(dirname(__FILE__) . "/_nav.php"); ?>
 
    <!-- <div id="topbar-search" class="topbar-widget flex-container-row">
      <form role="search" method="get" id="searchform" class="search-form" action="/search.php">
        <label class="hidden" for="s">Search for:</label>
        <button type="submit" id="searchsubmit" class="search-icon"><i class="fas fa-search"></i></button>
        <input type="text" value="" name="q" id="tipue_search_input" style="border:none" class="search-query" placeholder="Search" autocomplete="off" required>
      </form>
    </div> -->
  </header>



  
