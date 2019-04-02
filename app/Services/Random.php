<?php

namespace App\Services;

class Random
{
	public function generate(int $min, int $max): int
	{
		return random_int($min, $max);
	}
}