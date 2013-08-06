<?php
    $obj = new Calculator();
    $obj->setA(4);
    $obj->setB(5);
    echo $obj->getSum() . ' <br>' ;
    echo $obj->getDivide();
    var_dump($obj);

  class Calculator  {
    
    public $a;
    public $b;
    public $c;
    public $d;

    function setA($a)  {
      $this->a = $a;
    }
    function setB($b)  {
      $this->b = $b;
    }
    function getSum()  {
      $this->c= $this->a + $this->b;
      return $this->c;
    }
    function getDivide()  {
      $this->d= $this->a / $this->b;
      return $this->d;
    }
  }

  //$text1='This is not a joke';
  //$text2 = 'This is a test';
  //$obj = new Intro ($text1,$text2);
 
  //class Intro {
    //function __construct($line1,$line2) {
      //echo $line1 ' . ' <br>;
      //echo $line2;
  //}
//}
?>

