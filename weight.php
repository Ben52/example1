<?php

class person {
protected $height;
public $weight;
protected $name;
}

class joe extends person {
  function __construct() {
    $this->name = 'joe';
  }
  
  function setHeight($Ft) {
    $this->height = $Ft;
  }
  function getHeight() {
    $this->height;
      return $height;
  }
}

class steve extends joe {
  function __construct() {
    $this->name = 'steve';
  }
 
}

$joe = new joe;
$steve = new steve;
$joe2 = new joe;
$joe2->weight = 200 . ' lbs.';
$joe->weight = 100 . ' lbs.';
$steve->weight = 150 . ' lbs.';
$steve->setHeight(6 . 'Ft');
print_r($joe);
print_r($steve);
print_r($joe2);

?>
