<?php
  
  # fires an include and pulls it in as a string
  function get_file($file) {
    try {
      ob_start();
      include $file;
      return ob_get_clean();
    } catch (Exception $e) {
      return "Problem loading $file. " . $e->getMessage();
    }
  }

?>