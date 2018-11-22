<?php
//$string = 'AFFILIATION';
$string = 'MALAYALAM';
$max = 0;

for($i=0; $i < strlen($string); $i++)
{
  if(array_key_exists($string[$i],$letters)) {
     $letters[$string[$i]] = $letters[$string[$i]]+1;
  }else{
    $letters[$string[$i]] =1;
    echo $string[$i];
  }
};
$max = max(array_values($letters));

echo '<br/>';
for($i =1; $i<=$max;$i++){
 foreach($letters as $key=>$value){
    if($i<= $value)
      echo 'x';
    else
     echo '0';
 }
echo '<br/>';

}

