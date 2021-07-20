<?php
$str = "this is a string";
echo $str;
$lenn = strlen($str);
echo " the lengh is the string is: ".$lenn . " . is the cancatination of string";
echo "<br>";
echo "the word in the string are: ". str_word_count($str);
echo "<br> reverse the string: " . strrev($str);
echo "<br> find the char: " .strpos($str, "a");
echo "<br> the replacement of string: " .str_replace("is", "at", $str);
?>