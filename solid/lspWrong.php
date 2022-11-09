<?php

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

	public abstract function has300Speed ();
	
}

class Mercedes extends car
{
	public function has300Speed ()
	{
		return json_encode(['status'=>'error']);
	};	
}

class Ferrari extends car
{
	public function has300Speed ()
	{
		return json_encode(['status'=>'success']);
	};	
}


