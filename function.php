<?php
class Car {
    public $color;
    public $model;
    public function_construct($color,$model){
        $this->color=$color;
        $this->model=$model;
    }
    public function message(){
        return "My car is a" .$this->color ."".$this->model ."!";
    }
}
$myCar=new Car("red","Volvo");
var_dump($myCar);
?>
</body>
</html>