<?php
  require_once('connect.php');
?>
<html>
<body>
  <head>
    <link href="sign.css" rel="stylesheet">
  </head>
  <div class="post1">
   <a href="site2.php"><p id="A1">COFFEE</p></a>
   <a href="website.php"><p id="A2">OUR COFFEE HOUSES</p></a>
   <a href="quest.php"><p id="A3">FOR GUESTS</p></a>
   <a href="index.php"><img src="zn.jpg" width="200px" height="70px" id="P1"></a>
 </div>
   <p id="L">Sign up</p>
  <?php
  if (isset($_POST['button'])) {
    if (!empty($_POST['name']) and !empty($_POST['user']) and !empty($_POST['pass'])) {
      $name = $_POST['name'];
      $user = $_POST['user'];
      $pass = $_POST['pass'];

$query = mysql_query("SELECT * FROM project WHERE USERNAME = '".$user."'");
$numrow = mysql_num_rows($query);

if ($numrow == 0) {
  $sql = "INSERT INTO project(NAME,USERNAME,PASSWORD) VALUES('$name','$user','$pass')";

  $result = mysql_query($sql);

if($result){
  echo "<p align=\"center\" class=\"color\">Successfull registration!!!</p>";
}
else {
  echo "<p align=\"center\" class=\"color\">We can't paste an information!</p>";
}
}
else {
  echo "<p align=\"center\" class=\"color\">This user is already used!</p>";
}
}

else {
  echo "<p align=\"center\" class=\"color\">You have to complete all lines!!!</p>";
}
  }
?>
  <form action = "sign.php" method="post" class="form">
  <center>
  <input type="text" class="JK"name="name" placeholder="Name"><br><br>
  <input type="text" class="K" name="user" placeholder="Username"><br><br>
  <input type="password" name="pass" class="KL" placeholder="Password"><br><br>
  <input type="submit" name = "button" class="NM"  value="Sign up">
</center>
  </form>
</body>
</html>
