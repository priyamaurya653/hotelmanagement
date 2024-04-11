<?php
include_once "db_conn.php";
if(isset($_GET['id'])) {
    // $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "select * from persons where id ='".$id."'";
    // $sql = "SELECT * FROM persons WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    <table>
 <thead>
  <tr>
    <!-- <th>Sr.no</th> -->
    <th>Name</th>
    <th>Email</th>
    <!-- <th>password</th> -->
    <th>Phone</th>
    <!-- <th>state</th>
    <th>gender</th>
    <th>dob</th>
    <th>photo</th> -->
   </tr>
  </thead>
   <tbody>
    <tr>
   <td><?php echo $row['id'] ?></td>
   <td><?php echo $row['name'] ?></td>
   <td><?php echo $row['email'] ?></td>
   <!-- <td><?php echo $row['password'] ?></td>  -->
   <td><?php echo $row['phone'] ?></td>
   <!-- <td><?php echo $row['state'] ?></td>
   <td><?php echo $row['gender'] ?></td>
   <td><?php echo $row['dob'] ?></td>
   <td>
<img src="image/<?php echo $row['photo']?>" alt="image" width = "400px" height="200px">
 </td>  -->
</body>
</html>

