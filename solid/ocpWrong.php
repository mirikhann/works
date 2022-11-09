<?php

class car {

	private $motor;
	private $marka;

	public function __construct ($marka)
	{
		$this->marka = $marka;
		$this->motor = new Motor;
	}

	public function getMotor()
	{
		if($this->marka == 'mercedes'){
			return $this->motor->MercedesMotor();
		}else if($this->marka == 'bmw'){
			return $this->motor->BmwMotor();
		}else if($this->marka == 'toyota'){
			return $this->motor->ToyotaMotor();
		}
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


$car = new Car('mercedes');

var_dump($car->getMotor());