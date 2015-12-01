<?php

namespace Gumbercules\Fizzbuzz;


class FizzBuzz
{
	public function getSequenceItem($n)
	{
		if (!is_int($n)) {
			throw new \InvalidArgumentException("Argument #1 must be int - " . gettype($n) . " given");
		}

		if (!($n % 15)) {
			return "FizzBuzz";
		}

		if (!($n % 5)) {
			return "Buzz";
		}

		if (!($n % 3)) {
			return "Fizz";
		}

		return $n;
	}

	public function getSequence($entries = 100)
	{
		$sequence = [];
		for ($n = 1; $n <= $entries; $n++) {
			$sequence[] = $this->getSequenceItem($n);
		}
		return $sequence;
	}
}