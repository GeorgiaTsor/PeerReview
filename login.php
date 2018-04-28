<?php
/**
 * Created by PhpStorm.
 * User: georgia
 * Date: 28/4/2018
 * Time: 12:28
 */
include("connect.php");

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{$username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT regid FROM userreg WHERE username='$userName' and
password='$password'";

    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 1)
    {
        header("location: home.php"); // Redirecting To another Page
    }else
    {
        echo "Incorrect username or password.";
    }
}
