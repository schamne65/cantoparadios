<?php

include '../../db/connection.php';




function userRegister($userName,$userPassword,$userEmail){
    try{
        $base =connection();
        $consult='INSERT INTO user (user_name,user_email,user_password) VALUES ( ?, ?, ?)';
        $stmt= $base->prepare($consult);
        $stmt->execute([$userName,$userEmail,$userPassword]);
        return true;

    }catch(PDOException $e){
        echo "error al registrar" .$e->getMessage();
        return false;
    }
};
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['tipo'] == 'register_user') {
        $userName = $_POST['user_name'];
        $userPassword = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
        $userEmail = $_POST['user_email'];
        

    

    // Insertar el proveedor en la base de datos
    if (userRegister($userName,$userPassword,$userEmail)) {
        echo "usuario registrado";
    } else {
        echo "usuario no registrado";
    }
}
 }
