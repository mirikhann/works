<?php

interface ICoupe{
	public function hasTwoDoors();
	public function hasLuke();
}

class Hyundai implements ICoupe
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

	public function hasLuke ()
	{
		return json_encode(['status'=>'false', 'message'=>'Mercedes does not have luke']);
	};
}


