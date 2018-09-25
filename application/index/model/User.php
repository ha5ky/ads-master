<?php
namespace app\index\model;
use think\Model;

/**
 * 
 */
class User extends Model
{
	
	public function userSearch($userid,$userpwd) {
		$data	=	[
			'user_id'	=>	$userid,
			'user_pwd'	=>	$userpwd
		];
		return $this->where($data)->find();
	}
}