
<?php 

// Task 1 
// function primeCheck($number)
// {
//     if ($number == 1)
//     return 0 ;

//     for($n = 2; $n <= sqrt($number); $n++)
//     {
//         if ($number % $n == 0)
//         return 0 ;
//     }
//     return 1 ;
// }

// $number = 3;
// $flag = primeCheck($number);
// if ($flag == 1)
//     echo "prime";
// else 
//     echo "Not Prime";



// function primeCheck($number){
//     if ($number == 1)
//     return 0;
//     for ($i = 2; $i <= $number/2; $i++){
//         if ($number % $i == 0)
//             return 0;
//     }
//     return 1;
// }
 
// // Driver Code
// $number = 31;
// $flag = primeCheck($number);
// if ($flag == 1)
//     echo "Prime";
// else
//     echo "Not Prime"

?>
 

<?php
// PHP code to check whether a number is prime or Not
// function to check the number is Prime or Not
// function primeCheck($number){
//     if ($number == 1)
//     return 0;
     
//     for ($i = 2; $i <= sqrt($number); $i++){
//         if ($number % $i == 0)
//             return 0;
//     }
//     return 1;
// }
 
// // Driver Code
// $number = 31;
// $flag = primeCheck($number);
// if ($flag == 1)
//     echo "Prime";
// else
//     echo "Not Prime"

?>


<?php 

// Task 1

function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$a = IsPrime(3);
$num=$a;
if ($a==0)
echo "3 is not a Prime Number....."."<br>";
else
echo "3 is a Prime Number.."."<br>";


echo "<br>---------------------------------------------------------------------------------------------<br><br>";


// Task 2

$string = "Remove";
echo strrev($string)."<br><br>";


echo "<br>---------------------------------------------------------------------------------------------<br><br>";


// Task 3

$string = "Remove";
if (ctype_lower($string)){
    echo "Your String is Ok"."<br>";
} else {
    echo "Your String is NOT Ok"."<br><br>";
}


echo "<br>---------------------------------------------------------------------------------------------<br><br>";


// Task 4 && Task 5

$x = 12;
$y = 10;

echo " x=$y y=$x "."<br><br>";


echo "<br>---------------------------------------------------------------------------------------------<br><br>";



// Task 6


// function armstrong ($num)
//       {
//         $string=(string)$num;
//         $str=strlen($string);
//         for($i=0;$i<$str;$i++)
//         {

//         }
               
//               }

//       function armstrong ($num1,$num2,$num3,$num)
// {
//          $num1= pow($num1,3);
//          $num2= pow($num2,3);
//          $num3= pow($num3,3);
//          if(($num1+$num2+$num3)==$num)
//          {
//               echo ("$num"."is Armstrong Number ");
//          }
//          else 
//          {
//             echo ("$num"."is not  Armstrong Number ");
//          }
//         }

//         $numbers=407;
//         armstrong($numbers);





echo "<br>---------------------------------------------------------------------------------------------<br><br>";



// Task 7

function check_palindrome($string) 
{
  if ($string == strrev($string))
      echo "yes it is palindrom";
  else
  echo "no it isn't palindrom";
}
check_palindrome('madam')."<br>";



echo "<br>---------------------------------------------------------------------------------------------<br><br>";


// Task 8 

$array1=array(2,4,7,4,8,4);
$array1=array_unique($array1);
print_r($array1);



echo "<br>---------------------------------------------------------------------------------------------<br><br>";



// Task 9





?>