<html>
<head>
  <link rel="stylesheet" type="text/css" href="tea.css">
  <style>
  .dr{
    width:150px;
    height:150px;
    float:left;
    margin-left: 130px;
    margin-top: 50px;
  }
  .dr img{
    width:150px;
    height:120px;
  }
  </style>
  </head>
  <div class="post1">
   <p id="A1">COFFEE</p>
   <a href="website.php"><p id="A2">OUR COFFEE HOUSES</p></a>
   <p id="A3">FOR GUESTS</p>
   <a href="index.php"><img src="zn.jpg" width="200px" height="70px" id="P1"></a>
  </div>
  <?php
  $mysqli=mysqli_connect("localhost","root","","tables");
  $query="SELECT * FROM images";
  $row=mysqli_query($mysqli,$query);
  while($row_pro=mysqli_fetch_array($row)){
    $id=$row_pro['ID'];
    $image=$row_pro['IMAGE'];
    $name=$row_pro['NAME'];
    echo "
    <div class='dr'><img src='$image'>
    <a href='tea.php?deleteID=$id'>DELETE</a>
    </div>
    ";
  }
  ?>
<div class="kn">
<a href="menu.php" class="button">BACK</a>
</div>
<?php
if(isset($_GET['deleteID'])){
  $id=$_GET['deleteID'];
  mysqli_query($mysqli,"DELETE FROM `images` WHERE ID='$id'");
  header("location: tea.php");
}
 ?>
