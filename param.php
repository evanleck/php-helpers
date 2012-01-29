<?php
  
  require_once 'h.php';
  
  /*
    grabs the requested param from POST, GET and COOKIE in that order
    
    example:
      Given the URL: http://example.com/?neat=true
      param('neat'); # => 'true'
    
  */
  function param($var, $escape = true) {
    $ret = '';
    if (isset($_POST[$var]) && !empty($_POST[$var])) {
      $ret = $_POST[$var];
    } elseif (isset($_GET[$var]) && !empty($_GET[$var])) {
      $ret = $_GET[$var];
    } elseif (isset($_COOKIE[$var]) && !empty($_COOKIE[$var])) {
      $ret = $_COOKIE[$var];
    }

    return ($escape) ? h(trim($ret)) : trim($ret);
  }

?>