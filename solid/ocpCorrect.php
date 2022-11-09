<?php

ini_set('display_errors', 1);

abstract class car {
	public abstract function getMotor();
}

class Mercedes extends car{

	private $motor;

	public function __construct ()
	{
		$this->motor = new Motor;
	}

	public function getMotor()
	{
		return $this->motor->MercedesMotor();		
	}

}

class Bmw extends car{

	private $motor;

	public function __construct ()
	{
		$this->motor = new Motor;
	}

	public function getMotor()
	{
		return $this->motor->BmwMotor();		
	}

}


class Toyota extends car{

	private $motor;

	public function __construct ()
	{
		$this->motor = new Motor;
	}

	public function getMotor()
	{
		return $this->motor->ToyotaMotor();		
	}

}


class Motor {

	public function MercedesMotor()
	{
		return json_encode(['status'=> 'success']);
	}
	public function BmwMotor()
	{
		return json_encode(['status'=> 'success']);
	}
	public function ToyotaMotor()
	{
		return json_encode(['status'=> 'success']);
	}

}


$car = new Mercedes();

var_dump($car->getMotor());