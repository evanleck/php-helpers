<?php

  # return possessive version of a string
  function possessive($string) {
    $last_character = substr($string, -1);
	
    if ($last_character == 's' || $last_character == 'S') {
    	return "$string'";
    } else {
    	return "$string's";
    }
  }

?>