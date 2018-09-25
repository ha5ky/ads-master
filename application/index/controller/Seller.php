<?php
namespace app\index\controller;

use think\Controller;
use think\Rerquest;

/**
 * 
 */
class Seller extends Controller
{
	
	public function index() {

	}

	public function qualification() {
		if (request()->isPost()) {
			# code...
		}
		return $this->fetch('qualification/quali');
	}
}