<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="res/fonts/poor-story.css">
    <style>
      @import url("res/shared.css");
      @import url("res/shared.portrait.css") (orientation: portrait);
      
      @import url("index.app.css");
      @import url("index.app.potrait.css") (orientation: portrait);
      
      @import url("index.css");
      @import url("index.portrait.css") (orientation: portrait);
    </style>
    <script src="res/shared.js"></script>
    <script src="index.app.js"></script>
    <script src="index.js"></script>
    
    <?= @"$theme" ?>
    
    <style class="noscript">
      .app {
        display: none !important;
      }
    </style>
  </head>
  <body><div id="body-wrp">
    <nav class="top">
      <a href="/" class="banner">
        <div>
          <img src="res/logo.png"></img>
          <div>
            <div>Miko0000</div>
          </div>
        </div>
      </a>
      <div class="nav"><div>
        <div>
          <div>
            <a href="projects">Projects</a>
          </div>
        </div>
        <div>
          <div>
            <a href="blog">Blog</a>
          </div>
        </div>
        <div>
          <div>
            <a href="store">Store</a>
          </div>
        </div>
      </div></div>
      <div class="where">
        Projects
      </div>
      <div class="app clock">
        <div>00:00</div>
      </div>
    </nav>
    <div class="top placeholder"></div>
    <div class="banner">
      <div class="description">
        <div class="title">Projects</div>
        <div class="text">List of Project I'm a part of</div>
      </div>
    </div>
    <div class="content">
      <?php
        include "./index.list.php";
      ?>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
    </div>
  </div></body>
</html>