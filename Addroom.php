<?php
    session_start();
    include_once('db_conn.php');
    if(isset($_POST['add'])){
        $Addroom= $_POST['Addroom'];
        $status=$_POST['status'];
        $data="insert into room(Addroom,status)values('$Addroom','$status')";
        $run=mysqli_query($conn,$data);
        $_SESSION['error']="Add User successfully";
        header('location:roomtype.php');
        exit();
        // if($run){
        //     echo "done";
        // }
    }
    $check = 0;
    $Addroom= "";
    $status="";
   
   
    if(isset($_GET['id'])){
        $check =1;
        $id=$_GET['id'];
        $update="select * from room where id= '$id'";
        $run=mysqli_query($conn,$update);
        while($row = mysqli_fetch_assoc($run)){
            $Addroom= $row['Addroom'];
            $status=$row['status'];
         
        }
    }
    if(isset($_POST['update'])){
        $Addroom= $_POST['Addroom'];
        $status=$_POST['status'];
        $sql="update room set Addroom='$Addroom',status ='$status'  where id='$id'";
        $update=mysqli_query($conn,$sql);
        if($update){
        $_SESSION['error']="Update User successfully";
        header('location:roomtype.php');
        exit();
        } 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add room</title>
    <style>
        .my {
	        box-shadow: 0 0.9rem 1.7rem rgba(0, 0, 0, 0.25),0 0.7rem 0.7rem rgba(0, 0, 0, 0.22);
            background-color:#fcb103;
            height:50px;
        }
        .text-color1{
        text-shadow:5px 6px 5px yellow;
        color:red;
        text-transform: uppercase;
    }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php// include_once('navbar.php')?>
        <?php include_once('sidebar.php'); ?>
        <div class="content-wrapper bg-white">
            <!-- Content header form -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mt-4 mb-2">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 border">
                            <div class="">
                                <h1 class="text-center border my pt-2 text-color2">
                                    Aarav Hotel
                                </h1>
                                <h5 class="text-center mt-4 text-danger">
                                    <?php
                                        if(isset($_SESSION['error'])){
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                        }
                                    ?>
                                    </h5>
                            </div>
                        <div class="container">
                            <form method="POST">
                                <div class="form-group mt-4">
                                    <label for="Addroom">Addroom:</label>
                                    <input type="text" class="form-control" id="Addroom" placeholder="Enter your room" name="Addroom" value="<?php echo $Addroom; ?>" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="status">status:</label>
                                    <select class="form-control" id="status" name="status" value="<?php echo $status; ?>">
                                        <option value="status">status</option>
                                        <option value="active"
                                        <?php
                                        if($status == 'active'){
                                            echo "selected";
                                        }
                                       ?>
                                       >active</option>
                                        <option value="inactive"
                                        <?php
                                        if($status == 'active'){
                                            echo "selected";
                                        }
                                       ?>
                                       >inactive</option>
                                      
                                    </select>
                               <div class="form-group">
                                <?php
                                    if($check==0){
                                        echo '<input type="submit" name="add" value="add" class="btn bt-info">';
                                    }
                                    else{
                                        echo '<input type="submit" name="update" value="update" class="btn bt-info">';
                                    }
                                ?>
                               </div>
                            </form>
                        </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('footer.php'); ?>
</body>

</html>