<?php

/*
 Take both parameters being passed and return the string true if num2 is greater than num1,
 otherwise return the string false. If the parameter values are equal to each other then
 return the string -1.
*/

class CheckNums
{
	function check_nums($num1, $num2)
	{
		if ($num1 == $num2) {
			return "-1";
		} elseif ($num2 > $num1) {
			return true;
		} else {
			return false;
		}
	}
}
