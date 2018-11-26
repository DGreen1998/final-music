<?php
namespace app\index\controller;
use think\Controller;

class Login extends Controller
{
	public function login()
	{
		var_dump(input('code'));		
	}
}