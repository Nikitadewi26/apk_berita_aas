<?php
include_once 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = $koneksi->query("SELECT * FROM user where email = '$email' && password = '$password'");

    $check_login = $user->fetch_array();
    
    if($check_login[0]){
session_start();
$_SESSION['user_login'] = $check_login;
header("Location: dashboard.php");
    }

// print_r($user);
?>