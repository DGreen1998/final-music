<?php
namespace app\index\controller;
use think\Controller;
use my\Curl;

class Login extends Controller
{
	public function login()
	{
		//使用code凭证请求微信登陆接口，获取openid和session_key
		$url = 'https://api.weixin.qq.com/sns/jscode2session?appid=APPID&secret=SECRET&js_code=JSCODE&grant_type=authorization_code';
		$curl = new Curl($url , 0);
		echo '<pre>';
		var_dump($curl);
		echo '</pre>';
	}
}