
<?php 

echo "<br>";

$colors = ["red" , "green" , "white"];

print_r ( "The memory of that scene for me is like a frame of film forever frozen at that moment: the  $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" );

echo "<br> <br>";

?>

<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>


<?php 

$color = ["red" , "green" , "white"];

echo "
    <ul>
        <li> $color[0] </li>
        <li> $color[1] </li>
        <li> $color[2] </li>
    </ul>
";


?>


<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>


<?php 

$cities = [ "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ];

foreach ( $cities as $country => $city) {
    echo " The capital of $country is $city <br> ";
}

?>


<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>


<?php 

$color = array (4 => 'white', 6 => 'green', 11=> 'red');

echo current($color) . "<br>";

?>



<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>


<?php 

$original = array( '1','2','3','4','5' );
// echo 'Original array : '."<br>";
// foreach ($original as $x) 
// {echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
// echo " \n After inserting '$' the array is : "."<br>";
foreach ($original as $x) 
{echo "$x ";}
echo "<br>";

?>



<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>



<?php 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value <br>";
}

?>


<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>



<?php 

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of seven lowest temperatures :";
for ($i=0; $i< 7; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of seven highest temperatures :";
for ($i=($temp_array_length-7); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

?>



<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>



<?php 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

echo '<pre>';
print_r (array_merge( $array1 , $array2 ));
echo '</pre>';

?>


<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>



<?php 

$colors = array("red","blue","white","yellow");

// echo strtoupper("$colors");

$upper_colors = array_map('strtoupper' , $colors);

echo '<pre>';
print_r($upper_colors);
echo '</pre>';

?>



<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>



<?php 

$colors = array("RED","BLUE","WHITE","YELLOW");

// echo strtolower("$colors");

$lower_colors = array_map('strtolower' , $colors);

echo '<pre>';
print_r($lower_colors);
echo '</pre>';

?>



<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>



<?php 

echo implode(",",range(200,250,4))."<br>";

?>


<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>



<?php 

$words =  array("abcd","abc","de","hjjj","g","wer");

$word = array_map('strlen' , $words);

echo "The shortest array length is " . min($word) . " The longest array length is " . max($word);

?>


<?php 
    echo "<br><br>---------------------------------------------------------------------------------------------<br><br>";
?>



<?php 

$random = range( 11 , 20 );

shuffle($random);
for ($r=0 ; $r< 10 ; $r++) {
    echo $random[$r]."  " ;
}

?>


<?php 
    echo "<br><br>---------------------------------------------------------------------------------------------<br><br>";
?>



<?php 

$array1 = array( 2, 0, 10, 12, 6);

function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero($array1)."<br>");

?>


<?php 
    echo "<br>---------------------------------------------------------------------------------------------<br><br>";
?>






