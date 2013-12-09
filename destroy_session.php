<?php
  require("engine.php");

  if($s->isLoggedIn())
  {
    echo "Please be patient while you are being redirected";
    
    session_destroy(); // Destroys the session we created earlier
    
    $cookie = session_get_cookie_params(); // The sessions creates a cookie that we must destroy
    
    setcookie(session_name(), '', 0, $cookie['path'], $cookie['domain'], $cookie['secure'], $cookie['httponly']); // Reset the cookie
    
    unset($_SESSION); // Unsets the session for additional security
    
    $s->refresh("example.php", "1"); // Redirect the user to the example page where we started
  }
  else {
  
    $s->refresh("example.php", "0"); // If the session already has been destroyed then redirect to example page
  
  }
?>
