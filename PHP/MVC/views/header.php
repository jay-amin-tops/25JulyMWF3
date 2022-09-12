<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    -->
    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <title>Estate sale - Real Estate Category Bootstrap Responsive Website Template - Home : W3layouts</title>
    
        <!-- google fonts -->
        <!-- <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet"> -->
    
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo $this->base_url_assets; ?>css/style-starter.css">
      </head>
      <body>
    
    <!--header-->
    <header id="site-header" class="fixed-top">
      <div class="container">
          <nav class="navbar navbar-expand-lg stroke px-0">
              <h1> <a class="navbar-brand" href="index.html">
                      <span class="fa fa-home"></span> Estate sale
                  </a></h1>
              <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
              <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                  data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                  <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav ml-lg-5 mr-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item @@listing__active">
                          <a class="nav-link" href="listing.html">Listing</a>
                      </li>
                      <li class="nav-item dropdown @@property__active">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Property <span class="fa fa-angle-down"></span>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item @@ps__active" href="property-single.html">Single property</a>
                          </div>
                      </li>
                      <li class="nav-item dropdown @@pages__active">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pages <span class="fa fa-angle-down"></span>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item @@about__active" href="about">About us</a>
                              <a class="dropdown-item @@contact__active" href="contact.html">Contact us</a>
                          </div>
                      </li>
                  </ul>
                  <div class="top-quote mt-lg-0">
                      <a href="#buytheme" class="btn btn-style btn-primary"><span class="fa fa-home"></span> Add
                          listiing</a>
                  </div>
                  <!--/search-right-->
                  <div class="search mx-3">
                      <input class="search_box" type="checkbox" id="search_box">
                      <label class="fa fa-search" for="search_box"></label>
                      <div class="search_form">
                          <form action="error.html" method="GET">
                              <input type="text" placeholder="Search"><input type="submit" value="search">
                          </form>
                      </div>
                  </div>
                  <!--//search-right-->
              </div>
    
              <!-- toggle switch for light and dark theme -->
              <div class="mobile-position">
                  <nav class="navigation">
                      <div class="theme-switch-wrapper">
                          <label class="theme-switch" for="checkbox">
                              <input type="checkbox" id="checkbox">
                              <div class="mode-container">
                                  <i class="gg-sun"></i>
                                  <i class="gg-moon"></i>
                              </div>
                          </label>
                      </div>
                  </nav>
              </div>
              <!-- //toggle switch for light and dark theme -->
          </nav>
      </div>
    </header>
    <!--/header-->