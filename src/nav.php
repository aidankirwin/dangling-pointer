<?php
    session_start();
?>

<nav class = "navbar">
    <div class = "dropdown">
        <button onclick = "dropdown()" class = "dropbtn">
            <i id = "nav_waffle" class="fa fa-bars"></i>
        </button>
        
        <div id = "nav_down" class = "dropdown_content">
            <a href = "index.php"><b>Home</b></a>
            <a href = "02-questions.php">Questions</a>
            <a href = "02-topics.php">Topics</a>
            <a href = "02-users.php">Users</a>
            <a href = "#">About</a>
        </div>
    </div>

    <div id = "logobtn">
        <a class = "nav_a" href = "index.php"><img id = "nav_logo" src = "images/logo.png"></img></a>
    </div>

    <div class = "search">
        <!-- TODO: redirect to correct location -->
        <form action="/test.php">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <?php
        // TODO: allow users to have a profile image, show image instead of Account
        if(isset($_SESSION["uid"])){
            echo 
            "<div class = 'dropdown'>
                <button onclick = 'dropdownAcc()' class = 'accbtn'>
                    <i id = 'acc_icon' class = 'fa fa-user'></i>
                </button>

                <div id = 'acc_down' class = 'acc_content'>
                    <a href = '#'><b>Profile</b></a>
                    <a href = '#'>Settings</a>
                    <a href = 'includes/01-logout-inc.php'>Log out</a>
                </div>
            </div>";
        }
        else{
            echo "<div id = 'log_in'><a class = 'nav_a' href = '01-login.php'>Log in</a></div>";
            echo "<div id = 'sign_up'><a class = 'nav_a' href = '01-signup.php'>Sign up</a></div>";
        }
    ?>
</nav>
