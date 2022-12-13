
<?php 

phpinfo();

echo "Tomorrow I 'll learn PHP global variables."."<br>";
echo "This is a bad command: del c:."."<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
        <input type= "text" name="name"  >
        <input type="submit" value="Submit Name">
    </form>

    <?php 

    $name= $_POST['name'];
    
    echo "Hello $name ";

    ?>

</body>
</html>