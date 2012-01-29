<?php

  /*
    runs a curl request to $post_to with params $post_params
    
    example:
      curl_post('http://example.com/login.php', 'user=joe&pass=secret');
      
  */
  function curl_post($post_to, $post_params) {
    $c = curl_init(); # let's do this!
    curl_setopt($c, CURLOPT_URL, $post_to); # URL
    curl_setopt($c, CURLOPT_POST, true); # do a POST
    curl_setopt($c, CURLOPT_POSTFIELDS, $post_params); # info to POST
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true); # returns string instead of printing it out to the browser
    $result = curl_exec($c); # do it & capture in $result
    curl_close($c); # clean it up
    
    return $result;
  }
  

?>