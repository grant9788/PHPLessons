<?php 

include_once 'dbh.inc.php';


$first = mysqli_real_escape_String($conn, $_POST['first']); // This will grab the data from the Form and pass it in url to the database so make sure names are correct
$last =  mysqli_real_escape_String($conn, $_POST['last']);
$email = mysqli_real_escape_String($conn, $_POST['email']);
$uid =   mysqli_real_escape_String($conn, $_POST['uid']);
$pwd =   mysqli_real_escape_String($conn, $_POST['pwd']);

$sql = "insert into users (user_first, user_last, user_email, user_uid, user_pwd) 
    VALUES (?, ?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL error";
}else {
    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
    mysqli_stmt_execute($stmt);
}

header("Location: ../index.php?signup=success");

?>