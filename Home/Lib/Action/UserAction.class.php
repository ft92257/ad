<?php
/*
 * 用户相关
 */

class UserAction extends BaseAction {
	
	
	public function login() {
		
		echo "login!";
	}
	
	public function register() {
	
		echo "register!";
		$this->display();
	}
	
	/*
	 * 修改个人资料
	 */
	public function update() {
	
		echo "update!";
	}
	
	/*
	 * 修改密码
	 */
	public function password() {
	
		echo "change password!";
	}
}
?>