
<?php
include_once 'db_conn.php';
$id=$_GET['id'];
$sql="delete from room where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
header('location:roomtype.php');
}
?>