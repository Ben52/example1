<?php

   $obj = new calculator;

//Set the values for the public properties Note: you can directly access public properties too, but this is the proper style for    
   $obj->setA(4);
   $obj->setB(5);


   echo "Sum=" . $obj->getSum();
   echo " Solution=" . $obj->getDivide();
   echo " Product=" . $obj->seeProduct() . "   "; 

   print_r($obj);

   $obj->setA(78087);
   $obj->setB(12);
   echo "Sum=" . $obj->getSum() . " Solution="; 
   echo $obj->getDivide();
   echo ' Product=' . $obj->seeProduct() . "   ";   

   print_r($obj) ;
// this creates the calculator class, it can be above and below the code above.  This is the schematic.
  class calculator {
//these are the public properties, properties can be public, private, or protected
    public $a;
    public $b;
    public $c;
    public $d;
    public $e;
// this is a function that creates the method used to set the A public property
    function setA($animal)
    {
       $this->a = $animal;
    }
// this is a function that creates the method used to set the B public property
function setB($b)
    {
        $this->b = $b;
    }

// this is a function that creates the method used to get the sum of A + B
function getSum() 
    {
        $this->c = $this->a + $this->b;
          return $this->c;
    }

// this is a function that creates the method used to get the product of A / B
function getDivide() 
  {
  $this->d = $this->a / $this->b; 
    return $this->d; 
  }
  function seeProduct()
  {
  $this->e = $this->a * $this->b; 
    return $this->e;
  }

 }
 ?>
