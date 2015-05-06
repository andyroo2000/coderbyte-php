<?php

/**
 * Have the function ArrayAdditionI(arr) take the array of numbers stored in arr and return the string true if any
 * combination of numbers in the array can be added up to equal the largest number in the array, otherwise return the
 * string false. For example: if arr contains [4, 6, 23, 10, 1, 3] the output should return true because
 * 4 + 6 + 10 + 3 = 23. The array will not be empty, will not contain all the same elements, and may contain
 * negative numbers.
 *
 * Input = 5,7,16,1,2   -> Output = "false"
 * Input = 3,5,-1,8,12  -> Output = "true"
 *
 */

class ArrayAdditionI
{

	function combination_equals_largest_number($num_array)
	{
		sort($num_array);
		$largest_number = array_pop($num_array);

		for ($i = sizeof($num_array) - 1; $i >= 0; $i--)
		{
			if ($num_array) {};
		}


		return $largest_number;
	}

	// [20, 15, 13, 2]
	// 20 + 15 + 13 + 2
	// 20 + 15 + 13
	// 20 + 15 + 2
	// 20 + 13 + 2
	// 20 + 2


	// 0, 1, 2
	// 0, 1,

}













