<?php

if(isset($_POST["submit"])){
    
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];

    //TODO: add checks here for
        // - empty inputs
        // - unused username
        // - valid email
        // - good pwd?
        // - other things?

    require_once '00-index-inc.php';
    require_once '01-functions-inc.php';

    createUser($conn, $username, $email, $password);
    
}
else{
    header("location: ../01-signup.php");
}