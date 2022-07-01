<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/01-signup.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="scripts/dropdown.js"></script>
    <title>Dangling Pointer</title>
</head>
<body class = "signup-body">
    <!--Navigation bar-->
    <div class="nav-placeholder">
    </div>
    <script>
        $(function(){
            $(".nav-placeholder").load("nav.php");
        });
    </script>
    <!--end of Navigation bar-->

    <div class = "signup-container">
        <div id = "signup-heading">Join the Dangling Pointer community</div>
        <div class = "signup-form">
            <form action="includes/01-signup-inc.php" method="post">
                <p>Username</p>
                <input type="text" name="uid">
                <p>Email</p>
                <input type="email" name="email">
                <p>Password</p>
                <input type="password" name="pwd">
                <button type="submit" name="submit">Sign up</button>
            </form>
            <p id="terms">By clicking "Sign up", you agree to our <a href="#">terms of service</a>.</p>
            <p id="have-acc">Already have an account? <a href="01-login.php">Log in</a></p>
        </div>
    </div>
</body>