<?php
class Animal {
    public $color;
    public $category;
    public $legs;
    public $can_fly;
    public $can_swim;

    public function __construct($color, $category, $legs, $can_fly, $can_swim){
        echo $this->color = $color . "<br>";
        echo $this->category = $category . "<br>";
        echo $this->legs = $legs . "<br>";
        echo $this->can_fly = $can_fly . "<br>";
        echo $this->can_swim = $can_swim . "<br><br>";
    }
}

$tiger = new Animal("Orange", "Mammal", 4, "No", "Yes");
$parrot = new Animal("Green", "Bird", 2, "Yes", "No");
?>
