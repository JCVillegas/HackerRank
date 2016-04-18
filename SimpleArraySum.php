<?php
//https://www.hackerrank.com/challenges/simple-array-sum
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$sum=0;
for ($i=0;$i<count($arr);$i++)
	$sum+=$arr[$i];
echo $sum;

?>