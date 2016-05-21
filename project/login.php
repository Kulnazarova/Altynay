<?php
  require_once("connect.php");
?>
<html>
<body>
  <head>
    <link href="login.css" rel="stylesheet">
  </head>
  <div class="post1">
   <a href="site2.php"><p id="A1">COFFEE</p></a>
   <a href="website.php"><p id="A2">OUR COFFEE HOUSES</p></a>
   <a href="quest.php"><p id="A3">FOR GUESTS</p></a>
   <a href="index.php"><img src="zn.jpg" width="200px" height="70px" id="P1"></a>
  </div>
  <?php
  session_start();
  $counter = 0;
  if (isset($_SESSION['name'])) {
    $counter = 1;
    echo "<p class=\"python\">".$_SESSION['name']."</p>";
  }
  ?>
  <p id="L">Log in</p>
<?php
  if (isset($_POST['submit'])) {
    if (!empty($_POST['login']) and !empty($_POST['password'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];

  $query = mysql_query("SELECT * FROM project WHERE USERNAME = '".$login."' AND PASSWORD = '".$password."'");
  $numrows = mysql_num_rows($query);

  if ($numrows!=0) {
    while ($row = mysql_fetch_assoc($query))
  {
    $dbuser = $row['USERNAME'];
    $dbpass = $row['PASSWORD'];
    $_SESSION['name'] = $row['NAME'];
  }

  if ($login == $dbuser && $password = $dbpass) {
    echo "<p class=\"color\" align=\"center\">You are logged in!</p>";
  }
  }
  else {
    echo "<p class=\"color\" align=\"center\">There is no such kind of account!</p>";
  }
  }
  else {
    echo "<p class=\"color\" align=\"center\">Please complete all lines!</p>";
  }
  }
  ?>
  <form action = "login.php" method="post" class="form"><br><br>
  <input type="text" name="login" class="JK" placeholder="Login"><br><br>
  <input type="password" name="password" class="KL" placeholder="Password"><br><br>
  <input type="submit" name="submit" class="NM" value="Log in"/>
  </form>
</body>
</html>
