<?php
//find out the rotation point index.
// We have an array which is halfway sorted. ie from a particular point, the elements of the array is sorted in alphabetical order,
// the elements from the start to the rotation point index, array is sorted.
//error_reporting( E_ALL );
$array = [5,6,1,2,3,4];
$array = ["p","q","r","s","t","v","u","v","w","x","y","z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o"];
$array = [9,8,7,6,5,4,3,1,2];

function findPivotIndex($array)
{
 if(count($array)==1)
    return 1;
  return floor(count($array)/2)-1;
}
$rotation_point = findRotationPoint($array);

echo "\n rotation point ->". $array[$rotation_point];

function findRotationPoint($array)
{
   $last = count($array)-1;
   $pivot = findPivotIndex($array);
   echo "\n Pivot elem -> ". $array[$pivot];   

   if($array[$pivot]> $array[$pivot+1]){
    echo "here";
    return $pivot+1;
   }
   
   if($array[$pivot] < $array[$last])
      $sub_array = createSubArray($array,0,$pivot-1); 
   else if($array[$pivot] > $array[$last])
       $sub_array = createSubArray($array,$pivot+1, $last); 
   
  findRotationPoint($sub_array);
  
  /*if(($array[$pivot-1]< $array[$pivot]) && ($array[$pivot]< $array[$pivot+1]))
  {
    $sub_array = createSubArray($array,0,$pivot); 
    findRotationPoint($sub_array);
  }*/
  

 /* if(($array[$pivot-1]< $array[$pivot]) && ($array[$pivot]< $array[$pivot+1])){
	$sub_array = createSubArray($array,0,$pivot); print_r($sub_array);
        findRotationPoint($sub_array);
  }else{
    return $pivot+1;
  }*/

	//return $rot_pint;

}

function createSubArray($array, $start, $end)
{
   $length = $end-$start;
   return array_slice($array,$start,$length);
}
