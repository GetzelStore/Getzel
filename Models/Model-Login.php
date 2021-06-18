<?php
require "../Function/DB_Conection.php";


if($_POST["LoginUser"] == "true")
{
    $user=$_POST["username"];
    $password=$_POST["pass"];
    $STMT=$Conection->prepare("select * FROM users where username=?");
    $STMT->bind_param("s",$user);
    $STMT->execute();
    $STMT->bind_result($id,$username,$email,$nombres,$apellidos,$passwordbd,$fav);
    $STMT->fetch();
    if($passwordbd)
    {
        if(password_verify($password,$passwordbd))
        {
            $respuesta = array(
                'respuesta' =>  "Ok",
                "nameuser" => $username
            );
        }
        else
        {
            $respuesta = array(
                'respuesta' =>  "verifique su contraseña"
            );
        }
    }
    else
    {
        $respuesta = array(
            'respuesta' =>  "el usuario no existe"
        );
    }
    die (json_encode($respuesta));
}


?>