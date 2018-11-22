<?php
/*Sometimes (when I nest them (my parentheticals) too much (like this (and this))) they get confusing."

Write a function that, given a sentence like the one above, along with the position of an opening parenthesis, finds the corresponding closing parenthesis.

Example: if the example string above is input with the number 10 (position of the first parenthesis), the output should be 79 (position of the last parenthesis).*/
$string = "Sometimes (when I nest them (my parentheticals) too much (like this (and this))) they get confusing.";
echo $position = findParenthesis($string,28);
echo substr($string,$position);

function findParenthesis($string,$pos) {

 $length = strlen($string);
 
 $counter = 0;
 for($i= $pos; $i<= $length; $i++) {
	
	switch($string[$i]){
		case '(': $counter++;break;
		case ')': $counter--; break;
        }

        if($counter ==0)
	   return $i;
 }

}
