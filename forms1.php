<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Name:<input type="text" name="name" value="<?php echo $name;?>">
    E-mail:<input type="text" name="email" value="<?php echo $email;?>">
    Website:<input type="text" name="website" value="<?php echo $website;?>">
    Comment :<textarea name="comment" row="5" cols="40"><?php echo $comment;?></textarea>
    Gender
     <input type="radio" name="gender"
    <?php if(isset($gender) && $gender=="female") echo "checked";?> value="female">female
    <input type="radio" name="gender"
    <?php if(isset($gender) && $gender=="male") echo "checked";?>
    value="male">male
    <input type ="radio" name="gender"
    <?php if(isset($gender)&& $gender=="other") echo "checked";?>
    value="other">Other
</body>
</html>