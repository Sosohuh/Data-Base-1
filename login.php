<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host, $user, $password); 
mysql_select_db($db);

if (isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password']; 

    $sql="select * from loginform where user='".$uname."' AND Pass='".$password."' limit 1"; 

    $result=mysql_query($sql);

    if (mysql_num_rows($result)==1){
        echo "Ungenile mntanam"; 
        exit(); 
    }
    else{
        echo "Uiphosile mntanam";
        exit(); 
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form in Design</title>
        <link rel="stylesheet" a href="login.css"> 
    </head>

    <body>
        <div class="">
            <form method="POST" action="">
                <div class="">
                    <input type="text" name="username" placeholder="Enter Your User Name"/>
                </div>
                <div class="">
                    <input type="password" name="password" placeholder="Enter Your Password"/>
                </div>
                <input type="submit" name="submit" value="LOGIN" class=""/> 
            </form>
        </div>
    </body>
</html>