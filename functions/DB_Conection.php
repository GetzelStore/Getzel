<?php
$Conection= new mysqli("localhost","root","root","Getzel");
if ($Conection->connect_error)
{
echo $Conection->connect_error;
}