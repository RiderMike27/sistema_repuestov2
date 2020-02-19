<?php
require 'conexion/conexion.php';
$sql="select * from v_user where usuarionick = '".$_REQUEST['usuario']."' "
        . "and usuariopass = md5('".$_REQUEST['pass']."')";
$resultado= consultas::get_datos($sql);

session_start();
if($resultado[0]['usuarioid']==null){
    $_SESSION['error']='Usuario o Contraseña Incorrecta';
    header('location:index.php');
}else{
    $_SESSION['id_usu']=$resultado[0]['usuarioid'];
    $_SESSION['nick']=$resultado[0]['usuarionick'];
    $_SESSION['nombres']=$resultado[0]['usuarionombre'];
    $_SESSION['rol']=$resultado[0]['rolnombre']; 
    header('location:home.php');
}