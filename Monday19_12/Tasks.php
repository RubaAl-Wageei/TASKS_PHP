
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST' >
        <label>E-mail</label>
        <input type="email" name="email" >
        <br><br>
        <label>Password</label>
        <input type="password" name="password" >
        <br><br>
        <input type="Submit" value="Send Data" >
        <br><br><br>
    </form>

    <?php 

    // if($_SERVER["REQUEST_METHOD"]=="POST"){
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     echo $email ."<br>". $password;
    //     echo "<br><br><br>";
    // }

    ?>

</body>
</html>




<form method='POST'>
<label for="">URL</label>
<input type="url" name="url">
<input type="Submit" value=GO>
</form>

<?php 

// $URL = $_POST['url'];
// echo $URL;

echo $_SERVER['HTTP_HOST'];


?>