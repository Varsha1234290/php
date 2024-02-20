<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $favcolor="blue";
    switch($favcolor){
        case"red";
        echo "your favourite color is red";
        break;
        case "blue";
        echo  "Your favourite color is blue";
        break;
        case "green";
        echo "Your favourite color is grren";
        break;
        default;
        echo "Your favourite color is neither red,blue nor green!";
    }
        ?>
    
</body>
</html>