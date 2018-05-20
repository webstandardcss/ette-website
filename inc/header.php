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
  <header class="header-outer">
    <div class="header-top">
      <img class="header-top-logo" src="assets/images/logo.png" alt="East Texas Truck Equipment">
      <div class="header-top-social">
        <img src="assets/images/icon-facebook.png" alt="ETTE on Facebook" class="header-top-social-icon header-top-social-facebook">
        <img src="assets/images/icon-youtube.png" alt="ETTE on YouTube" class="header-top-social-icon header-top-social-youtube">
        <img src="assets/images/icon-twitter.png" alt="ETTE on Twitter" class="header-top-social-icon header-top-social-twitter">
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



  
