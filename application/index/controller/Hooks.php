<?php
namespace app\index\controller;

class Hooks
{
	public function hook()
	{
		echo exec('git pull');
	}
}

