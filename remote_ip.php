<?php

  /* a smarter way to get the remote client's IP address */
  function remote_ip() {
    if (getenv('HTTP_X_FORWARDED_FOR')) {
      return getenv('HTTP_X_FORWARDED_FOR');
    } else {
      return getenv('REMOTE_ADDR');
    }
  }

?>