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
    echo "Welcome {$_SESSION['username'])}, you are currently logged in!";
  }
  else {
    ?>
    
<!-- Form shows if the session isn't created yet -->
  <form method="post" action="">
    <label for="username">
    <input type="text" name="username" id="username" placeholder="Type in your username">
    <input type="submit" name="session" value="Continue &raquo;">
  </form>
  
  <?php
  if(isset($_POST['session'])) {
    $_SESSION["logged"] = true; // Now the session is true so the handler will know that we are logged in
    $_SESSION["username"] = trim(htmlspecialchars($_POST["username"])); // This is just to show how you could use the session handler
    header("Location example.php"); // Refresh the page
    }
  }
  ?>
  
</body>
</html>
