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
    echo "Welcome beloved user, you are currently logged in!";
  }
  else {
    ?>
    <!-- Form shows if the session isn't created yet -->
  <form method="post" action="">
    <label for="username">
    <input type="text" name="username" id="username" placeholder="Type in your username">
    <input type="submit" value="Continue &raquo;">
  </form>
  <?php
  }
  ?>
</body>
</html>
