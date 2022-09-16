<?php
include_once "animal.php";
class Farm{
    public $barn = array();

    function addAnimal($animal){
       if(get_parent_class($animal) == "Animal"){
            $this->barn[] = $animal;
            $animal->regAnimal(array_key_last($this->barn));
        }
        else{
            echo "Error";
        }
    }

    function showBarn(){
        echo "Animals at the barn:\n";
        $res = array();
        foreach($this->barn as $row){
            if(array_key_exists(get_class($row),$res)){
                $res[get_class($row)] += 1; 
            }else{
                $res[get_class($row)] = 1;
            }    
        }
        
        foreach($res as $key => $value){
            echo $key . ":" . $value . "\n";
        }
        
    }
    
    function Collect(){
        echo "Weekly Harvest statistic:\n ";
        $res = array();
        for($i=0;$i < 7;$i++){
            foreach($this->barn as $row){
                if(array_key_exists(get_class($row),$res)){
                    $res[get_class($row)] += $row->Harvest();
                }else{
                    $res[get_class($row)] = $row->Harvest();
                }
            }
        }     
        foreach($res as $key => $value){
            echo $key . ":" . $value . "\n";
        }
    }
}
?>