<?php

class Mercedes{

	public $liter = 4;

	public function start()
	{
		
	}

	public function stop()
	{
		
	}
}

class calculateService{

	public $hour;
	public $marka;

	public function __construct($marka,$hour)
	{
		$this->hour = $hour;
		$this->marka = $marka;
	}

	public function spendOil()
	{
		return $this->hour*$this->marka->liter;
	}

}

$mercedes = new Mercedes;
$calculateService = new calculateService($mercedes,2);

var_dump($calculateService->spendOil());