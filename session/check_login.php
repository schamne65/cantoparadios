<?php
session_start();
function checkLogin(){
    if (!isset($_SESSION['username'])) {
        header('Location: /pages/usuarios/login.php');
        exit();
    }
}