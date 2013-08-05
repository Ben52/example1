<?php

class blueprint {
  
  private $myname;
  public $email;
  public $address;  
 
  function setmyname($val) {
    $this->myname = ($val);
  }
  function getmyname() {
      return $this->myname;
 }
}
class radio extends blueprint {
  public $station = '107.9';
}
$object = new radio;
$object->email = 'noam@gmail.com';
$object->address = '1600 Pennsylvania Ave.';
$object->setmyname('Noam');
print_r($object);

?>
