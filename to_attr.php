<?php
  
  /*
    converts an array of key/value pairs into HTML attributes
  
    example:
      to_attr(array('href' => 'example.com', 'target' => '_blank')); # => "href='example.com' target='_blank'"
    
  */
  function to_attr($attributes = array()) {
    if (empty($attributes)) { return ''; }
    $attr_return = array();
    
    foreach ($attributes as $key => $value) {
      array_push($attr_return, "$key='$value'");
    }
    
    return implode(' ', $attr_return);
  }

?>