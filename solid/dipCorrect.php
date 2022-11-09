<?php

ini_set('display_errors', 1);

interface IMotor {
	public function data();
}

class car {

	private $motor;

	public function __construct (IMotor $motor)
	{
		$this->motor = $motor;
	}

	public function getMotor()
	{
		return $this->motor->data();
	}

}


class MercedesMotor implements IMotor {

	public function data()
	{
		return json_encode(['status'=> 'success']);
	}

}

class BmwMotor implements IMotor {

	public function data()
	{
		return json_encode(['status'=> 'success']);
	}
}


$mercedesCar = new Car(new MercedesMotor);

var_dump($mercedesCar->getMotor());