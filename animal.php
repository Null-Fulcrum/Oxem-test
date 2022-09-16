<?php

class Animal{
    protected $regNum;
    protected $avgHarv = array();
    public function Harvest(){
        return mt_rand($this->avgHarv[0],$this->avgHarv[1]);
    }
    public function regAnimal($num){
        $this->regNum = $num + 1;
    }
}

class Cow extends Animal{  

    function __construct(){
       $this->avgHarv = array(8,12);
    }

}

class Chicken extends Animal{

   function __construct(){
      $this->avgHarv = array(0,1);
   }

}
?>