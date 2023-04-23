<?php
  function userflist($sp, $l){
    $handle = opendir(".");
    $entry;
    $even = "even";
    while(false !== ($entry = readdir($handle))){
      if(!is_numeric($entry))
        continue ;
      
      if($sp > 0){
        $sp = $sp - 1;
        
        continue ;
      }
      
      if($l < 1){
        break ;
      }
      
      $l = $l - 1;
      if($even === "even")
        $even = "";
      else
        $even = "even";
      
      $nohtml = 1;
      include "./$entry/index.php";
      
      echo "<div><div class=\"entry $even\">" .
        "<div class=\"thumbnail\"><div style=\"background-image: $project_thumbnail\"></div></div>" .
        "<div class=\"info\">" .
          "<div class=\"name\">$project_name</div>" .
          "<div class=\"description\">$project_description</div>" .
          "<a href=\"./$entry\">More</a>" .
        "</div>" .
        "<div class=\"detail\" tabindex=\"1\">$project_detail" .
          "<br/>" .
          "<br/>" .
          "<a href=\"#\">Close</a> " .
        "</div>" .
      "</div></div>" ;
    }
  }
  
  userflist(0, 10);
?>