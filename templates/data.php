<?php
/**
 * Created by PhpStorm.
 * User: GRENADY
 * Date: 29/10/17
 * Time: 12:37 ص
 */
//connection String
echo 'alert("Hello! I am an alert box!!")';
$connect = mysql_connect('localhost', 'root', 'dwddwddwd')
or die('Could not connect: ' . mysql_error());
//Select The database
$bool = mysql_select_db('unit', $connect);
if ($bool === False){
    print "can't find $database";
}
if (isset($_GET['insert']))
{
    // INSERT COMMAND
    $insert_query = "INSERT INTO `employees`(`FirstName`, `LastName`, `Title`, `Address`, `City`, `Country`, `Notes`) VALUES ('".$_GET['FirstName']."','".$_GET['LastName']."','".$_GET['Title']."','".$_GET['Address']."','".$_GET['City']."','".$_GET['Country']."','".$_GET['Notes']."')";

    $result = mysql_query($insert_query) or die("SQL Error 1: " . mysql_error());
    echo $result;
}


?>