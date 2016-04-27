<?php
//https://www.hackerrank.com/challenges/time-conversion
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$time);
$myTime=explode(':', $time);
$myTime[3]= substr($myTime[2],-2);
$myTime[2]= substr($myTime[2], 0,2);

if  ($myTime[3]=='PM' && $myTime[0]!=12 )
 $myTime[0]=$myTime[0]+12;


	if  ($myTime[3]=='AM')
{

	if  ($myTime[0]=='12')
		$myTime[0]='00';
}
echo($myTime[0].':'.$myTime[1].':'.$myTime[2]);

?>