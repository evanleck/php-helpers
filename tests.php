<?php

  require 'all.php';
  
  # input_for
  echo "input_for:\n";
  echo input_for(array('name' => 'boby', 'value' => 'sue'));
  
  # select_for
  echo "\n\nselect_for:\n";
  echo select_for('shamoo', array('name' => 'boby', 'value' => 'sue'));
  
  # link_to
  echo "\n\nlink_to:\n";
  echo link_to(array('href' => '#boby', 'text' => 'go here!'));
  
  # to_attr
  echo "\n\nto_attr:\n";
  echo to_attr(array('href' => '#boby', 'text' => 'go here!'));
  
  # to_qs
  echo "\n\nto_qs:\n";
  echo to_qs(array('href' => '#boby', 'text' => 'go here!'));
  
  # from_qs
  echo "\n\nfrom_qs:\n";
  echo var_dump(from_qs(to_qs(array('href' => '#boby', 'text' => 'go here!'))));
  
  # remote_ip
  echo "\n\nremote_ip:\n";
  echo remote_ip();
  
  # get_file
  echo "\n\nget_file:\n";
  echo get_file('README.md');

?>