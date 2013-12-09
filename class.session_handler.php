<?php
class Sessions{
public function redirect($url, $seconds) {
	echo '<meta http-equiv="refresh" content="'.$seconds.';url='.$url.'">';
}
	public function login_session () {
		return(isset($_SESSION['username'])) ? true : false;
	}

	public function isLoggedIn() {
		if ($this->login_session() === true) {
			return true;
			}
			else {
				return false;
		}
	}
	 
	public function isLoggedOut() {
		if ($this->login_session() === false) {
			return true;
		}
		else {
			return false;
		}
	}
