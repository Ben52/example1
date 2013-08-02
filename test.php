<?php

class MyClass  {
  public $prop1 = "I'm a class property!";

  function __construct() {
    echo 'The class"',__CLASS__, '" was instantiated. <br />';
    
  }
  public function setProperty($newval)  {
    $this->prop1 = $newval;
  }
  public function getProperty()  {
    return $this->prop1 . '<br>';
  }
  public function __destruct() {
    echo 'The class "', __CLASS__, '" was destroyed.<br />';
  }
}


$obj = new myClass;
echo $obj->getProperty();

echo "End of File.<br />";

?>
