<?php
/**
* Random password gerator
*/
class PasswordGenerator
{
	private $length;
	public function __construct($length)
	{
		$this->length=$length;
	}
	public function generateRandomPass() {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $this->length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}