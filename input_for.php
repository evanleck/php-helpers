<?php
  
  require_once 'param.php';
  
  /*
    form input helper
    
    * expects either a string containing the variable for the input
      ** or **
    * an array similar to $defaults that specifies the necessary variables

  */
  function input_for($opts) {
    # handles a single param call
    #   input_for("first_name") is the same as input_for(array('var' => 'first_name'))
    if (is_string($opts)) {
      $opts = array('var' => $opts);
    }
    
    # default values and attributes to output
    $defaults = array(
      'type'     => 'text',
      'var'      => null,
      'disabled' => false,
      'class'    => '',
      'options'  => '',
      'value'    => '',
      'id'       => '',
      'name'     => ''
    );

    # merge defaults with defined values for total bliss
    $opts = array_merge($defaults, $opts);

    if (empty($opts['value']) || param($opts['var']) != '') {
      $opts['value'] = param($opts['var']);
    }
    if (empty($opts['id'])) {
      $opts['id'] = $opts['var'];
    }
    if (empty($opts['name'])) {
      $opts['name'] = $opts['var'];
    }
    
    # tack on disabled string if necessary
    if ($opts['disabled']) {
      $opts['disabled'] = "disabled";
    } else {
      unset($opts['disabled']);
    }
    
    $options = $opts['options'];
    
    unset($opts['options']);
    unset($opts['var']);
    
    # put it all together
    return "<input $options ".to_attr($opts).">";
  }

?>