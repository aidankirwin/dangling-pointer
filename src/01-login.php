<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/01-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="scripts/dropdown.js"></script>
    <title>Dangling Pointer</title>
</head>
<body class="login-body">
    <!--Navigation bar-->
    <div class="nav-placeholder">
    </div>
    <script>
        $(function(){
            $(".nav-placeholder").load("nav.php");
        });
    </script>
    <!--end of Navigation bar-->
    <div class = "login-container">
        <img id = "login-logo" src = "images/logo_box.png">
        <div class = "login-form">
            <form action="includes/01-login-inc.php" method="post">
                <p>Username</p>
                <input type="text" name="uid">
                <p>Password</p>
                <input type="password" name="pwd">
                <button type="submit" name="submit">Log in</button>
            </form>
            <p id="have-acc">Don't have an account? <a href="01-signup.php">Sign up</a></p>
        </div>
    </div>
</body>