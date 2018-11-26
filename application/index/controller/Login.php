<?php
namespace app\index\controller;
use think\Controller;

class Log extends Controller
{
	public function log()
	{
		echo 1;
		var_dump(input('code'));		
	}
}