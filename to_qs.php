<?php
  
  /*
    converts an array of key/value pairs into a query string
  
    example:
      to_qs(array('user' => 'you', 'pass' => 'ohsosecret')); # => "user=you&pass=ohsosecret"
    
  */
  function to_qs($attributes = array()) {
    if (empty($attributes)) { return ''; }
    $attr_return = array();
    
    foreach ($attributes as $key => $value) {
      array_push($attr_return, "$key=$value");
    }
    
    return implode('&', $attr_return);
  }

?>
