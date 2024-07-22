<?php
function connection(){
    try{
        $base = new PDO('mysql:host=localhost;dbname=cantoparadios','root','mysql');
        $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $base;
    }catch (PDOException $e){
        echo 'Error de conexion ' . $e->getMessage();
        return null;
    }
};