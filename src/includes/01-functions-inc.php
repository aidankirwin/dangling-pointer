<?php

function createUser($conn, $username, $email, $password){
    $sql = "INSERT INTO users (uName, uEmail, uPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../01-signup.php?error=stmtfailed");
        exit();
    }

    $hshPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hshPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../01-signup.php?error=none");
    exit();
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE uName = ? OR uEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../01-signup.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $username, $pwd) {
    $exists = uidExists($conn, $username, $username);

    if($exists === false) {
        header("location: ../01-login.php?error=wronglogin");
        exit();
    }

    $pwdHashExists = $exists["uPwd"];
    $pwdHashEntered = password_hash($pwd, PASSWORD_DEFAULT);

    if($pwdHashEntered === $pwdHashEntered) {
        session_start();
        $_SESSION["uid"] = $exists["uName"];
        header("location: ../index.php");
    }
    else {
        header("location: ../01-login.php?error=wronglogin");
        exit();
    }
}