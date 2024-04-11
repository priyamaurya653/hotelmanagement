

<?php
include_once 'db_conn.php';
$id=$_GET['id'];
$sql="delete from facility where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
header('location:roomfacility.php');
}
?>