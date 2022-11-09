<?php

class Mercedes{

	public $hour;

	public function __construct($hour)
	{
		$this->hour = $hour;
	}

	public function start()
	{
		
	}


	public function stop()
	{
		
	}

	public function calculateSpendOil()
	{
		return $this->hour*4;
	}

}

$mercedes = new Mercedes(2);

var_dump($mercedes->calculateSpendOil());