

<?php 

// Task 1
$stringg="ruba Salahuddin AlWagee";
echo (strtoupper($stringg)."<br>");
echo strtolower(($stringg)."<br>");
echo ucfirst(($stringg)."<br>");
echo strtolower(($stringg)."<br>");

?>

<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>

<?php 

// Task 2
$time_input = strtotime("085119"); 
$date_input = getDate($time_input); 
echo "<pre>";
print_r($date_input);    
echo "</pre>";

?>

<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>

<?php 

// Task 3
$word = "orange";
$myString = "I am a full stack developer at orange coding academy";

if (strpos($myString, $word) !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}

?>

<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>

<?php 


// Task 4
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n";

?>

<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>

<?php 

// Task 5
$mailid  = 'info@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";

?>

<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>

<?php 

// Task 6
$str1 = 'rayy@example.com';
echo substr($str1, -3)."\n";

?>

<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>

<?php 

// Task 7
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(12)."\n";

?>