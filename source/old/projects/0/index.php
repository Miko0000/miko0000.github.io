<?php  
  $project_name = "miko0000.github.io";
  $project_description = "The project this page created on";
  $project_thumbnail = "url(res/logo.png)";
  $project_banner = "url(0/local/banner.svg)";
  $project_detail = shell_exec("cd " . __DIR__ . " && php index.detail.php");
  
  if($nohtml)
    return ;
  
  include "../local/template.php";
?>