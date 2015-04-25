<?php

/**
 * Have the function TimeConvert(num) take the num parameter being passed and
 * return the number of hours and minutes the parameter converts to
 * (ie. if num = 63 then the output should be 1:3). Separate the number of
 * hours and minutes with a colon.
 *
 * Input = 126 -> Output = "2:6"
 * Input = 45 -> Output = "0:45"
 */

class TimeConvert
{
	function time_convert($number)
	{
		$hours = 0;

		while ($number > 59) {
			$this->get_hours($number, $hours);
		}

		$minutes = $number;

		return $hours . ':' . $minutes;
	}

	function get_hours(&$number, &$hours)
	{
		$number -= 60;
		$hours += 1;
	}
}
