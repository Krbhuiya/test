<?php 
$Starting_date = '01-10-2010'; 
$Ending_date = '05-10-2010'; 
countDate($Starting_date,$Ending_date);

function countDate($starting,$end)
{
  $array = array();
  $d1 = $starting;
  $d2 = $end;
  
  $get_str1 = strtotime($d1); 
  $get_str2 = strtotime($d2); 

  for ($currentDate = $get_str1; $currentDate <= $get_str2; $currentDate += (86400)) 
  {  
    $Store = date('Y-m-d', $currentDate); 
    $array[] = $Store; 
  } 

  for ($i=0; $i<count($array); $i++)
  {
    echo $array[$i]."  ";
  }
}
?> 
