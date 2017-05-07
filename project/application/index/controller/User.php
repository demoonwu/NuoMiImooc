<?php
namespace app\index\controller;

use think\Controller;

class User extends Controller
{
    public function register()
    {
        return $this->fetch();
    }
	public function login()
    {
        return $this->fetch();
    }
}
