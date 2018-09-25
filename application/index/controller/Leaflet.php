<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use app\index\model\Ad;

/**
* 
*/
class Leaflet extends Controller
{
	
	public function index() {

	}

	public function add () {
		if (request()->isPost()) {
			$content = input('ads_content');
			$content = new Ad();
			$ads = $content->getAd()->toArray();
			$this->assign('content',$ads[0]['ad_article']);
			return $this->fetch('leaflet/add');
		}
		return $this->fetch('leaflet/add');
	}
}