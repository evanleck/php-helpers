<?php
  
  require_once 'param.php';
  require_once 'to_attr.php';
  
  /*
    form input helper
    
    * expects either a string containing the variable for the input
      ** or **
    * an array similar to $defaults that specifies the necessary variables

  */
  function input_for($options) {
    # handles a single param call
    #   input_for("first_name") is the same as input_for(array('var' => 'first_name'))
    if (is_string($options)) {
      $options = array('name' => $options);
    }
    
    # default values and attributes to output
    $defaults = array(
      'type'     => 'text',
      'class'    => '',
      'value'    => '',
      'id'       => '',
      'name'     => ''
    );

    # merge defaults with defined values for total bliss
    $options = array_merge($defaults, $options);
    
    # if there's no value passed in OR there's a param value
    if (empty($options['value']) || param($options['name']) != '') {
      $options['value'] = param($options['name']);
    }
    # no ID defaults to the name of the param
    if (empty($options['id'])) {
      $options['id'] = $options['name'];
    }
    
    # put it all together
    return "<input ".to_attr($options).">";
  }

?>