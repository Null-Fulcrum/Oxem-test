<?php 
include_once "animal.php";
include_once "farm.php";

$farm = new Farm;

for($i= 0;$i < 20;$i++){
    $chicken = new Chicken;
    $farm->addAnimal($chicken);
}

for($i = 0;$i < 10;$i++){
    $cow = new Cow;
    $farm->addAnimal($cow);
}

$farm->showBarn();

$farm->Collect();

for($i= 0;$i < 5;$i++){
    $chicken = new Chicken;
    $farm->addAnimal($chicken);
}

for($i= 0;$i < 1;$i++){
    $cow = new Cow;
    $farm->addAnimal($cow);
}

$farm->showBarn();

$farm->Collect();

?>