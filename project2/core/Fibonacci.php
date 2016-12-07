<?php

/**
* Fibonacci series
*/
class Fibonacci 
{
	private $n;
	public function __construct($n)
	{
		$this->n=$n;
	}
	public function getFib()
	{
		$first = 0;
		$second = 1;
		echo $first.' '.$second.' ';
		for($i = 2; $i < $this->n; $i++){
			$third = $first + $second;
			echo $third.' ';
			$first = $second;
			$second = $third;
		}
	}
}