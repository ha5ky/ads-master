<?php
namespace app\index\model;
use think\Model;

/**
* 
*/
class Ad extends Model
{
	
	public function adSearch () {

	}

	public function showFiveAd() {
		$res = $this->order('ad_createtime desc')->limit(5)->select();		//限定取出5条数据
		// $res = $res->toArray();
		return $res;
	}

	public function insAd($content) {
		$data = [
			'ad_article'	=>	$content
		];
		$this->data($data)->save();
	}

	public function getAd() {
		return $this->where('ad_id=1')->select();
	}
}