<?php

class car {

	private $motor;

	public function __construct ()
	{
		$this->motor = new MercedesMotor;
	}

	public function getMotor()
	{
		return $this->motor->data();
	}

}


class MercedesMotor {

	public function data()
	{
		return json_encode(['status'=> 'success']);
	}

}


$car = new Car;

var_dump($car->getMotor());