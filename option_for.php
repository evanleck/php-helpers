<?php

  require_once 'param.php';
  
  function option_for($val, $name, $text = '') {
    $sel = (param($name) == $val) ? "selected" : "";
    $text = (!empty($text)) ? $text : $val;
    $ret = "<option $sel value='$val'>$text</option>";
    
    return $ret;
  }

?>