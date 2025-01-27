<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/group.css">
</head>

<body>
<?php
    require("nav.php");
  ?>
    <main>
        <section>
            <div class="title-group">
                <h1>Group Tracker</h1>
                <box-icon type='solid' name='group' color='#2E5077'></box-icon>
            </div>
        </section>
        <section class="join">
            <form action="groupTracker.php" method="post">
                <p>Add the group code</p>
                <div>
                    <input type="number" name="groupCode" id="groupCode" min=1 placeholder="EX:1234">
                    <button type="submit">Next</button>
                </div>
                
            </form>
        </section>
        <section class="create">
            <form action="groupTracker.php" method="post">
            <button type="submit">Create a new group</button>
                
            </form>
        </section>
        
    </main>
    <?php
    require("footer.php");
  ?>
    <script src="../js/all.js"></script>
</body>

</html>