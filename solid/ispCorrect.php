<?php

interface ICoupe{
	public function hasTwoDoors();
}

interface ILuke{
	public function hasLuke();
}


class Hyundai implements ICoupe, ILuke
{
	public function hasTwoDoors ()
	{
		return json_encode(['status'=>'success']);
	};

	public function hasLuke ()
	{
		return json_encode(['status'=>'success']);
	};
}


class Mercedes implements ICoupe
{
	public function hasTwoDoors ()
	{
		return json_encode(['status'=>'success']);
	};	
}


