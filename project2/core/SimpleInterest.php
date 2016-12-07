<?php
/**
* 
*/
class SimpleInterest
{
	private $amount;
	private $time;
	private $frequecy;
	private $rate;
	public function __construct($amount,$time,$rate)
	{
		$this->amount=$amount;
		$this->time=$time;
		$this->frequecy=1;
		$this->rate=$rate;
	}

	public function calculate_si(){
		$this->time=$this->time/$this->frequecy;
		$si = ($this->amount*$this->rate*$this->time)/100;
		return $si;
	}
}