<?php

//https://www.hackerrank.com/challenges/utopian-tree

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);

$result='';
for($i=0; $i < $t; $i++)
{
    fscanf($handle,"%d",$n);
    $sum=0;

	for($j=0; $j <= $n; $j++)
	{
	    if ($j%2==0)	
	    	$sum=$sum+1;
	    else
	    	$sum=$sum*2;
	}

	$result.=$sum."\n";

}
echo $result;

?>