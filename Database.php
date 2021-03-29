<?php
$server="localhost";
$username="root";
$password="";
$db_name="sanjha";
$connection=mysqli_connect($server,$username,$password);
$link=mysqli_select_db($connection,$db_name);
if($link)
{

}
else{
    echo '<div class="container">
    </div>';
}
?>