<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruit{
        var $name;
        var $color;
        function __construct($name,$color){
            $this->name=$name;
            $this->color=$color;
        }
        function __destruct(){
            echo "The Fruit is {$this->name} and the color is{$this->color}.";
        }
    }
    $apple= new Fruit("Apple","red");
    ?>
</body>
</html>