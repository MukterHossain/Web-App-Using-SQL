<?php
$sername="localhost";
$uname="root";
$pass="";
$dbname="infoStoreDB";
$conn=new mysqli($sername,$uname,$pass,$dbname);
if ($conn->connect_error){
    die("Connection Error : ".$conn->connect_error);
}
$delet=$_GET["del"];
echo($delet);
$sql_del ="DELETE FROM `infotable` WHERE phone=$delet";
if ($conn->query($sql_del) === TRUE) {
    echo ("record delete successfully");
    header( "Refresh:1; url=index.php");

} else {
    echo "detect problems";
    echo "Error: " . $sql . "<br>" . $conn->error;
    header( "Refresh:3; url=index.php");
}

$conn->close();
?>
