<?php
session_start();
class logout {

function process_logout () {





if (isset($_SESSION["username"]) & isset($_SESSION["password"]))
{

session_unset();

    header('Location: index.php');

    
}else if(!isset($_SESSION["username"]) & !isset($_SESSION["password"])){
    echo  "you didn't login can not make log out !";
    
                                   echo "
<meta http-equiv='refresh' content='0.22; url=index.php'>
";
}



}
}


$lo = new logout;

$lo->process_logout ();
?>