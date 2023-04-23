<!DOCTYPE html>
<html>
  <head>
    <?php include "res/parts/head.php"; ?>
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
    <div class="banner noinvert">
      <div class="image" style="background-image: url(local/banner.svg);"></div>
      <div class="description">
        <div class="title">Projects</div>
        <div class="text">List of Project I'm a part of</div>
      </div>
    </div>
    <div class="content">
      <?php
        include "./index.list.php";
      ?>
    </div>
  </div></body>
</html>