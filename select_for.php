<?php

  require_once 'option_for.php';
  require_once 'to_attr.php';
  
  /*
    returns a select tag with param-aware option tags
    example:
      select_for('crazy', array('1' => 'Sanity', '2' => 'Umsanity')); # => <select name='crazy' id='crazy' size='1'><option value='1'>Sanity</option><option value='2'>Umsanity</option></select>
  */
  function select_for($name, $options, $html_options = array()) {
    $html_options = array_merge(array('name' => $name, 'id' => $name, 'size' => '1'), $html_options);
    $return_array = array('<select '.to_attr($html_options).'>');
    
    foreach ($options as $key => $value) {
      array_push($return_array, option_for($key, $name, $value));
    }
    
    array_push($return_array, '</select>');
    
    return implode('', $return_array);
  }

?>