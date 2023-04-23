<!DOCTYPE html>
<html>
  <head>
    <?php include "res/parts/head.php"; ?>
  </head>
  <body><div id="body-wrp">
    <div class="top placeholder"></div>
    <?php
      $top_nav = <<<PHP_STREND
        
      PHP_STREND;
      
      $top_where = "Main Page";
      
      include "res/parts/top-nav.php";
    ?>
    <div class="banner noinvert">
      <div style="background-image: url(local/banner.jpg)" class="image"></div>
      <div class="description">
        <div class="title">Miko0000</div>
        <div class="text">Fullstack Web Developer</div>
      </div>
      <div class="nav">
        <div>
          <a href="https://github.com/miko0000/miko0000.github.io" class="logo right">
            <div>
              <img src="res/github/github-mark/github-mark-white.svg"></img>
            </div>
          </a>
        </div>
        <div>
        
        </div>
      </div>
      <div class="credit">
        <a rel="noopener noreferer" target="_blank" href="https://www.pexels.com/photo/bird-s-eye-view-photography-of-lighted-city-3573383">
          Photo by Josh Hild from Pexels
        </a>
      </div>
    </div>
    <div class="content">
      <div class="title">Greetings!</div>
      <p class="box">
        &nbsp;&nbsp;&nbsp;&nbsp;I'm Miko. I'm a Fullstack Web Developer.
        I design, write, and build Websites
      </p>
      <p class="right box">
        &nbsp;&nbsp;&nbsp;&nbsp;I'm an Open Source Enthusiast! I look forward 
        to contributing to the Open Source community, may it be by helping 
        Open Source projects or creating one!
      </p>
      <p class="left box">
        I also do some writing in my spare time, check out the <a href="unfinished">library</a>
      </p>
      <p class="right box">
        For a list of my projects, see <a href="unfinished">projects</a>
      </p>
    </div>
    <?php include "res/parts/footer.php"; ?>
  </div></body>
</html>