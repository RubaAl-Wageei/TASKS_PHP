
   <?php 
    $A = 1000;
    $B = 1200;
    $C = 1400;
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
    <table border=2px>
        <tr>
            <td>
                <?php 
                echo "Salary of Mr.A is";
                ?>
            </td>
            <td>
            <?php 
                echo $A;
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            <?php 
                echo "Salary of Mr.C is";
                ?>
            </td>
            <td>
            <?php 
                echo $B;
                ?> 
            </td>
        </tr>
        <tr>
            <td>
            <?php 
                echo "Salary of Mr.C is";
                ?>
            </td>
            <td>
            <?php 
                echo $C;
                ?> 
            </td>
        </tr>
    </table>

    <?php 
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>

</body>
</html>







    <?php 

        $A = 1000;
        $B = 1200;
        $C = 1400;

        echo <<<"Here"
        <table border=2px> 
            <tr>
                <td> Salary of Mr.A is </td>
                <td> $A </td>
            </tr>
             <tr>
                <td> Salary of Mr.B is </td>
                <td> $B </td>
            </tr>
             <tr>
                <td> Salary of Mr.C is </td>
                <td> $C </td>
            </tr>
        </table>

        Here;
    ?>





    <?php 

        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "Last Modified is : " .date("F d Y H:i:s.", filemtime("Tasks.php"));
    ?>




    <?php 

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $filePath = "Tasks.php";
        $lines = count(file($filePath));
        echo " Count Number of Lines : " .$lines; 

    ?>