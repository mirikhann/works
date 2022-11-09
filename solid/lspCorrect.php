<?php

interface Fast {
	public function has300Speed ();
}

abstract class car 
{
	public function start ()
	{
		return json_encode(['status'=>'success']);
	};

	public function stop ()
	{
		return json_encode(['status'=>'success']);
	};
}

class Mercedes extends car
{

}

class Ferrari extends car implements Fast
{
	public function has300Speed ()
	{
		return json_encode(['status'=>'success']);
	};
}


