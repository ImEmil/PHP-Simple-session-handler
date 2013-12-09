<?php
class Sessions{
	
	public function c_session () {
		return(isset($_SESSION['logged'])) ? true : false;
	}
	
	public function isLoggedIn() {
		if ($this->c_session() === true) {
			return true;
			}
			else {
				return false;
			}
		}
	 
	public function isLoggedIn() {
		if ($this->c_session() === false) {
			return true;
			}
			else {
				return false;
			}
		}
?>
