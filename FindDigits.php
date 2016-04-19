<?php
//https://www.hackerrank.com/challenges/find-digits
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
$remainder='';

for($i = 0; $i < $t; $i++)
{
    fscanf($handle,"%d",$n);   
    $number=str_split($n);
    $sum=0;   
    for ($j=0;$j<sizeof($number);$j++)
    {
	      if ($number[$j]!=0)
	      {
	    
	       if ($n%$number[$j]==0)
	         $sum= $sum+1;
	      }
    }
   
    $remainder=$remainder.$sum."\n";      
}
echo $remainder;

?>