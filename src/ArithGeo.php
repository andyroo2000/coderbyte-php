<?php

/**
 * Have the function ArithGeo(arr) take the array of numbers stored in arr and return the string "Arithmetic" if the
 * sequence follows an arithmetic pattern or return "Geometric" if it follows a geometric pattern. If the sequence
 * doesn't follow either pattern return -1. An arithmetic sequence is one where the difference between each of the
 * numbers is consistent, where as in a geometric sequence, each term after the first is multiplied by some constant or
 * common ratio. Arithmetic example: [2, 4, 6, 8] and Geometric example: [2, 6, 18, 54]. Negative numbers may be
 * entered as parameters, 0 will not be entered, and no array will contain all the same elements.
 *
 * Input = 5,10,15      -> Output = "Arithmetic"
 * Input = 2,4,16,24    -> Output = -1
 *
 */

class ArithGeo
{
	function arith_geo($num_array)
	{
		if ($this->is_arithmetic($num_array))
		{
			return "Arithmetic";
		}

		if ($this->is_geometric($num_array))
		{
			return "Geometric";
		}

		return "-1";
	}



	function is_arithmetic($num_array)
	{
		$last_difference = $this->difference($num_array[0], $num_array[1]);

		for ($i = 0; $i < (sizeof($num_array) - 1); $i++)
		{
			$current_difference = $this->difference($num_array[$i], $num_array[$i + 1]);

			if ($current_difference != $last_difference)
			{
				return false;
			}
		}

		return true;
	}

	function is_geometric($num_array)
	{
		$last_divisor = $this->divisor($num_array[0], $num_array[1]);

		for ($i = 0; $i < (sizeof($num_array) - 1); $i++)
		{
			$current_difference = $this->divisor($num_array[$i], $num_array[$i + 1]);

			if ($current_difference != $last_divisor)
			{
				return false;
			}
		}

		return true;
	}

	function difference($num1, $num2)
	{
		return $num1 - $num2;
	}

	function divisor($num1, $num2)
	{
		return $num2 / $num1;
	}
}
