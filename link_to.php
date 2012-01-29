<?php
  
  /* example to come soon */
  function link_to($options) {
    $uri = $_SERVER['REQUEST_URI'];
    
    $defaults = array(
      'href'  => '#',
      'text'  => 'Placeholder Text',
      'id'    => '',
      'class' => ''
    );
    
    if (is_string($options)) {
      $options = array('text' => 'Placeholder Text');
    }
    
    $options = array_merge($defaults, $options);
    
    # check URI for path we're looking for
    if ($options['href'] != '/' && $options['href'] != '#' && stristr($uri, $options['href'])) {
      # add 'current' as class if it matches
      $options['class'] .= ' current';
    # if we're looking for the root URL we have to do some fancyness
    } elseif ($options['href'] == '/' && $uri == '/') {
      $options['class'] .= ' current';
    }
    
    $text = $options['text'];
    unset($options['text']);
    
    if (empty($options['id'])) {
      unset($options['id']);
    }
    
    return "<a " . to_attr($options) . ">$text</a>";
  }

?>