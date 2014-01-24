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
# Session::start(); starting the session so we can use it with our functions

Sessions::regenerate_id();
# Session::regenerate_id(); Important information
# Prevents session hijacking, recomemended to be used everytime the user changes his access level
# example > [ login, logout, administrative access etc..]


$username = "Emil ";

Sessions::set("logged_in", null);	// Change null to true and let the magic begin
Sessions::set("firstname", $username);	// You can use $string, works also with $_POST[$string] and _GET
Sessions::set("lastname" , "Nilsson");	// Random value


	if(Sessions::exists("logged_in")) {
          echo "You are currently logged in! \t";	// The name of the function speaks for itself
	}

Sessions::display("firstname");	// Prints out our session value
Sessions::display("lastname");	// Prints out our session value

Sessions::destroy();		// Kills our session & deletes the session cookie safely
?>
