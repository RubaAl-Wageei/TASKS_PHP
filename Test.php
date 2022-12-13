
<!-- Type Casting -->

<?php

echo (int)12.5 . '<br>'; 
echo (int)12.1 . '<br>'; 
echo (int)12.9 . '<br>'; 
echo (int)-12.9 . '<br>'; 

echo 5 + (int)'5 mohamed'; //(int) : to remove waring 
echo '<br>';
echo 5 + (integer)'5 aseem'; //(integer) : to remove waring 
echo '<br>';
echo 5 + ( integer )'5 ruba'; //( integer ) : to remove waring 
echo '<br>';
echo gettype(5 + (int)'5 tabark');
echo '<br>';
// -----------------------------
echo 5 + (int) 15.5; //(int) : to casting it from double to int 
echo '<br>';
echo 10.5 + 10.5 ; //21
echo '<br>';
echo gettype(10.5 + 10.5); //double +double =double 
echo '<br>';
echo (int)10.5 + (int)10.5 ; //20 //int
echo '<br>';
echo (int) (10.5 + 10.5 ); //21 //int
echo '<br>';
echo gettype((int) (10.5 + 10.5 ));

?>
