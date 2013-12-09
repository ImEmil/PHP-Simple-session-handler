<?php
  require("engine.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Example</title>
</head>
<body>

  <?php if($s->isLoggedIn())
  {
    echo "Welcome {$_SESSION['username']}, you are currently logged in! Click <a href='destroy_session.php'>here</a> to logout";
  }
  else {
    ?>
    
<!-- Form shows if the session isn't created yet -->
  <form method="post" action="">
    <input type="text" name="username" placeholder="Type in your username">
    <input type="submit" name="session" value="Continue &raquo;">
  </form>
  
  <?php
  if(isset($_POST['session'])) {

    $username = trim(htmlspecialchars($_POST["username"]));

    if(empty($username)) {

      echo "The username cannot be blank";
    }
    else {

    $_SESSION["logged"] = true; // Now the session is set to "true" so the handler will know that we have logged in
    $_SESSION["username"] = $username; // This is just to show how you could use the session handler
    $s->refresh("example.php", "0"); // Refresh the page
    
    }
  }
}
?>
  
</body>
</html>
