
<header>
    <div class="logo">
        <a href="../index.php">
            <img src="../assets/logo.png" alt="logo">
        </a>

        <h1>Salah Tracker</h1>
    </div>

    <nav>
        <ul class="nav-big">
            
            <?php
            if (isset($_SESSION['currentUser'])) {
                echo "
                <li><a href='./Personal.php'>Personal tracker</a></li>
                <li><a href='./group.php'>Group tracker</a></li>
                <li><a href='https://www.mymasjid.ca/beginners-guide-learn-pray-salah/chapter-4/'>Learn how to pray</a></li>
                <li><a href='./myProfile.php'><img src='../assets/profile.png' alt='My profile'></a></li>
                ";
            } else {
                echo "
                <li><a href='./login.php'><box-icon name='log-in'color='#F6F4F0'></box-icon>Login</a></li>
                ";
            }
            ?>
            
        </ul>
        <ul class="nav-small">
            <h1>Salah Tracker</h1>
            <li><a href="../index.html">
                    <img src="../assets/logo.png" alt="logo">
                </a></li>

            <li><a href=""><box-icon name='user' type='solid' color="#F6F4F0"></box-icon></a></li>

            <li><a href=""><box-icon type='solid' name='group' color='#F6F4F0'></box-icon></a></li>

            <li><a href=""><box-icon name='book-reader' color='#F6F4F0'></box-icon></a></li>

            <li><a href=""><img src="../assets/profile.png" alt="My profile"></a></li>
        </ul>
    </nav>
</header>