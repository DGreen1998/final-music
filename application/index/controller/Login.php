<?php
namespace app\index\controller;
use think\Controller;

class Login extends Controller
{
	public function login()
	{
		echo 1;
		var_dump(input('code'));		
	}
}