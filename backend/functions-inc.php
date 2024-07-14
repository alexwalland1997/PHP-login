<?php 

function invalidUser($username) {
    $result;    
    if (preg_match("/^[a-zA-Z0-9]*£", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function pwordMatch($password, $passwordRP) {
    $result;
    if ($password !== $passwordRP) {
        $result = false;
    }
    else {
        $result = true;
    }

    return $result;
}

function userAvail($conn, $username, $email) {
    $sql ="SELECT * FROM login WHERE userName = ? or email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=dbfail");
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $rData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($rData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $password) {
    $sql ="INSERT INTO login (userName, email, pword) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=dbfail");
        exit(); 
    }

    //hash password before entering it into database
    $hashedPword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../register.php?error=none");
    exit(); 
}