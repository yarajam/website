
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Salah tracker! track your prayer, encourge your friends, and learn how to pray.">
    <title>Salah tracker</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</head>

<body>
    <?php
    session_start();
    ?>
    <header>
        <div class="logo">
            <a href="./index.php">
                <img src="./assets/logo.png" alt="logo">
            </a>

            <h1>Salah Tracker</h1>
        </div>

        <nav>
            <ul class="nav-big">

                <?php
                if (isset($_SESSION['currentUser'])) {
                    echo "
                <li><a href='./php/Personal.php'>Personal tracker</a></li>
                <li><a href='./php/group.php'>Group tracker</a></li>
                <li><a href='./index.php'>Learn how to pray</a></li>
                <li><a href='./php/myProfile.php'><img src='./assets/profile.png' alt='My profile'></a></li>
                ";
                } else {
                    echo "
                <li><a href='./php/login.php'><box-icon name='log-in'color='#F6F4F0'></box-icon>Login</a></li>
                ";
                }
                ?>

            </ul>
            <ul class="nav-small">
                <h1>Salah Tracker</h1>
                <li><a href="../index.html">
                        <img src="/assets/logo.png" alt="logo">
                    </a></li>

                <li><a href=""><box-icon name='user' type='solid' color="#F6F4F0"></box-icon></a></li>

                <li><a href=""><box-icon type='solid' name='group' color='#F6F4F0'></box-icon></a></li>

                <li><a href=""><box-icon name='book-reader' color='#F6F4F0'></box-icon></a></li>

                <li><a href=""><img src="/assets/profile.png" alt="My profile"></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="upcoming">
            <div id="upcoming-left">
                <p>25/12/2024</p>
                <p>Asr</p>
                <div>
                    <p>3:21pm</p>
                    <box-icon type='solid' name='bell' color="#F6F4F0"></box-icon>

                </div>
                <p>1:34:15 remaining</p>
                <div>
                    <box-icon name='current-location' color="#F6F4F0"></box-icon>
                    <p>Amman, Jordan</p>
                </div>
            </div>
            <div id="upcoming-right">
                <img src="assets/day.png" alt="">
            </div>
        </section>
        <section class="ayah">
            <h3>Allah says:</h3>
            <p>‘Indeed, Salah is an obligation for the believers at the prescribed times.’</p>
            <p id="surah">(Surah al-Nisa’: 103)</p>
        </section>
        <section id="icons">
            <article>
                <box-icon name='up-arrow-alt' color='#4DA1A9' class="arrow"></box-icon>
                <p>Grow closer to god</p>
            </article>
            <article>
                <box-icon name='up-arrow-alt' color='#4DA1A9' class="arrow"></box-icon>
                <p>Find peace and comfort</p>
            </article>
            <article>
                <box-icon name='up-arrow-alt' color='#4DA1A9' class="arrow"></box-icon>
                <p>Build a daily habit</p>
            </article>
        </section>
    </main>
    <?php
    require("./php/footer.php");
    ?>
    <script src="./js/all.js"></script>
</body>

</html>