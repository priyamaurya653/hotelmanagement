
<?php
include_once 'db_conn.php';
$id=$_GET['id'];
$sql="delete from manageroom where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
header('location:hotelmanage.php');

}
?>