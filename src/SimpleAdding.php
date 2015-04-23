<?php

class SimpleAdding
{
	function simple_adding($number)
	{
		$total = null;

		for ($i = 1; $i <= $number; $i++) {
			$total += $i;
		}

		return $total;
	}
}
