<?php

if(isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once '00-index-inc.php';
    require_once '01-functions-inc.php';

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../01-login.php");
}