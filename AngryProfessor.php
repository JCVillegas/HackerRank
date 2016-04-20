<?php
//https://www.hackerrank.com/challenges/find-digits
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
$answer='';
for($i = 0; $i < $t; $i++)
{
   
    fscanf($handle,"%d %d",$n,$k);
    $a_temp = fgets($handle);
    $a = explode(" ",$a_temp);
    $sum=0;
   for ($j=0;$j<sizeof($a);$j++)
   {
     if ($a[$j]<=0)
     		$sum++;
   }
   
   if ($sum>=$k)
     	 $answer=$answer.'NO'."\n";
     else
     	 $answer=$answer.'YES'."\n";
}
echo $answer;

?>