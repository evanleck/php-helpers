<?php

  /*
    a nice little function to notify someone of something
      note: this should only be called programatically, there is no HTML unescaping or sanitization performed on the text to be emailed.
  */
  function notify_developers($text = '') {
    if ($text != '') {
  		# setup
  		$to      = 'you@yourdomain.com';
  		$subject = "Trouble on the Website!";
  		$headers = "From: notify_developers@yourdomain.com\r\nX-Mailer: PHP/" . phpversion();
  		$message = $text . "\n\nSent at ".date("l dS \of F Y h:i:s A");
	    
      try {
        mail($to, $subject, $message, $headers);
      } catch (Exception $e) {
        # barf
      }
    }
  }

?>