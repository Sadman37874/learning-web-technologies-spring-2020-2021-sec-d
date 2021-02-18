<?php

$array = [ "Dhaka" , "Bogura" , "Rangpur" , "Sundarbon" ,"Dinajpur"];
$find = "Bogura" ;
$count = 0 ;

for($i=0;$i<=count($array);$i++)
{
    if( $i%2!=0)
    echo $array[$i],'<br/>';
}

?>