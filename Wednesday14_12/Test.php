<?php 

// Chunk_split (String[Required], Length[Optional], End[Optional])
echo chunk_split("Orange Coding Academy", 3, "@");
echo '<br>';
echo '<br>';


// substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])

var_dump(substr_count("Hello Hello", "He")); // 2
echo '<br>';
var_dump(substr_count("Hello Hello", "He", 1)); // 1
echo '<br>';
var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
echo '<br>';
var_dump(substr_count("abcdabcda", "abcda")); // 1


// str_split(String[Required], Length[Optional])

echo '<pre>';
print_r(str_split("Orange coding Academy "));
echo '</pre>';

echo '<pre>';
print_r(str_split("Orange", 2));
echo '</pre>';

?>

