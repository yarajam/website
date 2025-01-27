<?php
session_start();
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
  <link rel="stylesheet" href="../css/groupTracker.css">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>

<body>
<?php
    require("nav.php");
  ?>
  <main>
    <div class="title-group">
      <div >
        <h1>Group Tracker </h1>
        <box-icon type='solid' name='group' color='#2E5077'></box-icon>
      </div>
      <p>Group Code: 1234</p>
    </div>
    <div id="table-container">
      <table>
        <thead>
          <tr>
            <th>1/1/2025</th>
            <th>Fajr</th>
            <th>Duhr</th>
            <th>Asr</th>
            <th>Maghrib</th>
            <th>Isha</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Yara Abu Ammar</th>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>

          </tr>
          <tr>
            <th>Rama Al kalabani</th>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>

          </tr>
          <tr>
            <th>Hamza Ahmad</th>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>
            <td><img src="../assets/questionMark.png" alt="Question Mark"></td>

          </tr>
        </tbody>
      </table>
    </div>
    
  </main>
  <?php
    require("footer.php");
  ?>
  <script src="../js/all.js"></script>
</body>

</html>