<?php
/*

                                                   +-+-+-+-+-+-+
                                                   |I|m|E|m|i|l|
                                                   +-+-+-+-+-+-+
                                         
*/
spl_autoload_register(function ($class) {
	require_once("classes/class.{$class}.php");
});



Sessions::start();

Sessions::regenerate_id();
# Session::regenerate_id(); Important information
# Prevents session hijacking, recomemended to be used everytime the user changes his access level
# example > [ login, logout, administrative access etc..]


$username = "Emil ";

Sessions::set("logged_in", null);	// Change null to true and let the magic begin
Sessions::set("firstname", $username);
Sessions::set("lastname" , "Nilsson");


	if(Sessions::exists("logged_in")) {
		echo "You are currently logged in! \t";
	}

Sessions::display("firstname");
Sessions::display("lastname");

Sessions::destroy();	// Kills our session & deletes the session cookie safely
?>
