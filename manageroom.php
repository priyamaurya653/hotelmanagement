<?php
    session_start();
    include_once('db_conn.php');
    if(isset($_POST['add'])){
        $Addlocation= $_POST['Addlocation'];
        $Addroom = $_POST['Addroom'];
        $facility = $_POST['facility'];
        $totalroom = $_POST['totalroom'];
        $price = $_POST['price'];
        $status=$_POST['status'];
        $data="insert into manageroom(Addlocation,Addroom,facility,totalroom,price,status)values('$Addlocation','$Addroom','$facility',$totalroom,'$price','$status')";
        $run=mysqli_query($conn,$data);
        $_SESSION['error']="Add User successfully";
        header('location:hotelmanage.php');
        exit();
       
    }
    $check = 0;
    $Addlocation= "";
    $Addroom = "";
    $facility = "";
    $totalroom = "";
    $price = "";
    $status="";
   
   
    if(isset($_GET['id'])){
        $check =1;
        $id=$_GET['id'];
        $update="select * from manageroom where id= '$id'";
        $run=mysqli_query($conn,$update);
        while($row = mysqli_fetch_assoc($run)){
            $Addlocation= $row['Addlocation'];
            $Addroom = $_POST['Addroom'];
            $facility = $_POST['facility'];
            $totalroom = $_POST['totalroom'];
            $price = $_price['price'];
            $status=$row['status'];
         
        }
    }
    if(isset($_POST['update'])){
        $Addlocation= $_POST['Addlocation'];
        $status=$_POST['status'];
        $sql="update manageroom set Addlocation='$Addlocation', Addroom ='$Addroom', facility = '$facility',totalroom = $totalroom,price = $price,status ='$status'  where id='$id'";
        $update=mysqli_query($conn,$sql);
        if($update){
        $_SESSION['error']="Update User successfully";
        header('location:hotelmanage.php');
        exit();
        } 
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
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
    /* .form-group{
        width:300px;
    } */
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
                            <div class="form-group">
                                    <label for="Addlocation">Addlocation:</label>
                                    <select class="form-control"  name="Addlocation" >
                                       <?php
                                       $sql = "select * from location where status = 'active'";
                                       $result =mysqli_query($conn,$sql);
                                       if(mysqli_num_rows($result)>0){
                                       while($row = mysqli_fetch_assoc($result)){
                                     echo "<option value ='".$row['id']."'>".$row['Addlocation']."</option>";
                                       }

                                       }
                                       else{
                                        echo "0 result";
                                       }
                                       ?>  
                                    </select>
                                    <div class="form-group">
                                    <label for="Addroom">Add type:</label>
                                    <select class="form-control" id="Addroom" name="Addroom" >
                                    <?php
                                       $sql = "select * from room where status = 'active'";
                                       $result =mysqli_query($conn,$sql);
                                       if(mysqli_num_rows($result)>0){
                                       while($row = mysqli_fetch_assoc($result)){
                                     echo "<option value ='".$row['id']."'>".$row['Addroom']."</option>";
                                       }

                                       }
                                       else{
                                        echo "0 result";
                                       }
                                       ?>
                                    </select>
                                    <div class="form-group">
                                    <label for="facility">property type:</label>
                                    <select class="form-control" id="facility" name="facility" >
                                        <!-- <option value="propertytype">propertytype</option> -->
                                        <?php
                                       $sql = "select * from facility where status = 'active'";
                                       $result =mysqli_query($conn,$sql);
                                       if(mysqli_num_rows($result)>0){
                                       while($row = mysqli_fetch_assoc($result)){
                                     echo "<option value ='".$row['id']."'>".$row['facility']."</option>";
                                       }

                                       }
                                       else{
                                        echo "0 result";
                                       }
                                       ?>
                                    </select>
                                    <div class="form-group mt-4">
                                    <label for="totalroom">totalroom:</label>
                                    <input type="text" class="form-control" id="totalroom" placeholder="Enter your totalroom" name="totalroom" value="<?php echo $totalroom; ?>" />
                                </div>
                                <div class="form-group mt-4">
                                    <label for="price">price:</label>
                                    <input type="text" class="form-control" id="price" placeholder="Enter your price" name="price" value="<?php echo $price; ?>" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="status">status:</label>
                                    <select class="form-control" id="status" name="status" value="<?php echo $status; ?>">
                                        <option value="status">status</option>
                                        <option value="active">active</option>
                                        <option value="inactive">inactive</option>
                                      
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