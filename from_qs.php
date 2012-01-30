<?php

  # creates an array from a query string
  function from_qs($qs) {
    if (empty($qs)) { return ''; }
    
    $pairs = explode('&', urldecode($qs));
    $return_array = array();
    
    foreach($pairs as $pair) {
      $key_val = explode('=', $pair);
      $return_array[$key_val[0]] = $key_val[1];
    }
    
    return $return_array;
  }

?>