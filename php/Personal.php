<?php
include("connect.php");
session_start();
$username=$_SESSION["currentUser"];
$tdydate=date("Y-m-d");
$sql="SELECT * FROM `january` WHERE date='$tdydate' AND username= '$username';";
$result=mysqli_query($conn,$sql);
$tdyuser = mysqli_fetch_assoc($result);
if(!$tdyuser){
  $sql="INSERT INTO `january`(`date`, `username`) VALUES ('$tdydate','$username')";
  $result=mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/personal.css">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


</head>

<body>
  <?php
  require("nav.php");
  ?>
  <main>
    <section id="title-personal">
      <h1>Personal Tracker </h1>
      <box-icon name='user' type='solid' color="#2E5077"></box-icon>
    </section>
    <section id="table-container">
      <table>
        <thead>
          <tr>
            <th>January</th>
            <th>Fajr</th>
            <th>Duhr</th>
            <th>Asr</th>
            <th>Maghrib</th>
            <th>Isha</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql= "SELECT * FROM `january` WHERE username='$username';";
          $result=mysqli_query($conn,$sql);
          $personalDays = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach ($personalDays as $day) {
            $date=$day['date'];
            $fajr=$day['fajr'];
            $duhr=$day['duhr'];
            $asr=$day['asr'];
            $maghrib=$day['maghrib'];
            $isha=$day['isha'];
            echo"
            <tr>
            <th>$date</th>
            <td><img src='$fajr' alt='prayer status'></td>
            <td><img src='$duhr' alt='prayer status'></td>
            <td><img src='$asr' alt='prayer status'></td>
            <td><img src='$maghrib' alt='prayer status'></td>
            <td><img src='$isha' alt='prayer status'></td>
            </tr>
            ";
          }
          ?>
          
        </tbody>
      </table>
    </section>
   
    <a href="moreInfo.php"><button type="button" class="info">click for more info</button></a>
    <button type="button" id="save">save</button>

  </main>
  <?php
  require("footer.php");
  ?>
  <script src="../js/all.js"></script>
  <script src="../js/personal.js"></script>

</body>

</html>