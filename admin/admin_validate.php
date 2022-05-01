<?php
    session_start();
    $EMAILADDRESS = $_POST['email'];
    $PASSWORD = $_POST['password'];
    include "../config/db_conn.php";
    $querry = "SELECT * FROM admin_sp WHERE email_address = '$EMAILADDRESS' AND password_admin = '$PASSWORD'";
    $res = $conn->query($querry);
    if ($row = $res->fetch_assoc()) {
        $_SESSION['logged_in'] = true;
        $_SESSION['email_address'] = $EMAILADDRESS;
        $_SESSION["id_admin"] = $row[0];
        header('Location: admin_home_page.php?page=dashboard');
    }else{
        $_SESSION['salah'] = 'salah';
        header('Location: index.php');
    }
?>