<?php
namespace app\index\controller;
use think\Controller;

class Log extends Controller
{
	public function log()
	{
		var_dump(input('code'));		
	}
}