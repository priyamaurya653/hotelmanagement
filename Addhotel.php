<?php
    session_start();
    include_once('db_conn.php');
    if(isset($_POST['add'])){
        $Addlocation = $_POST['Addlocation'];
        $Addroom = $_POST['Addroom'];
        $facility= $_POST['facility'];
        $totalroom = $_POST['totalroom'];
        $price = $_POST['price'];
        $status=$_POST['status'];
        $data="insert into manageroom(Addlocation,Addroom,facility,totalroom,price,status)values('$Addlocation','$Addrooom','$facility',$totalroom,$price,'$status')";
        $run=mysqli_query($conn,$data);
        $_SESSION['error']="Add User successfully";
        header('location:hotelmanage.php');
        exit();
       
    }
    $check = 0;
    $Addlocation = "";
    $Addroom = "";
    $facility= "";
    $totalroom = "";
    $price = "";
    $status="";
    if(isset($_GET['id'])){
        $check =1;
        $id=$_GET['id'];
        $update="select * from manageroom where id= '$id'";
        $run=mysqli_query($conn,$update);
        while($row = mysqli_fetch_assoc($run)){
            $Addlocation = $_POST['Addlocation'];
            $Addroom = $_POST['Addroom'];
            $facility= $row['facility'];
            $totalroom = $_POST['totalroom'];
            $price = $_POST['price'];
            $status=$row['status'];
        }
    }
    if(isset($_POST['update'])){
        $Addlocation = $_POST['Addlocation'];
        $Addroom = $_POST['Addroom'];
        $facility= $_POST['facility'];
        $totalroom = $_POST['totalroom'];
        $price = $_POST['price'];
        $status=$_POST['status'];
        $sql="update manageroom set Addlocation ='$Addlocation',Addroom = '$Addrooom', facility='$facility',totalroom = $totalroom,price = $price,status ='$status'  where id='$id'";
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
                                <h1 class="text-center border my pt-2 text-color3">
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
                                    <label for="Addlocation">Addlocation:</label>
                                    <input type="text" class="form-control" id="Addlocation" placeholder="Enter your Addlocation" name="Addlocation" value="<?php echo $Addlocation; ?>" />
                                </div>   
                                <div class="form-group mt-4">
                                    <label for="Addroom">Addroom:</label>
                                    <input type="text" class="form-control" id="Addroom" placeholder="Enter your Addroom" name="Addroom" value="<?php echo $Addroom; ?>" />
                                </div>
                               
                                <div class="form-group">
                                    <label for="totalroom">totalroom:</label>
                                    <select class="form-control" id="totalroom" name="totalroom" value="<?php echo $totalroom; ?>">
                                    <option value="totalroom">totalroom</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <!-- <option value="propertytype">propertytype</option> -->
                                    </select>
                                    <div class="form-group">
                                    <label for="price">price:</label>
                                    <select class="form-control" id="price" name="price" value="<?php echo $price; ?>">
                                        <!-- <option value="propertytype">propertytype</option> -->
                                        <option value="price">price</option>
                                        <option value="500">500</option>
                                        <option value="1000">1000</option>
                                    </select>
                                <div class="form-group mt-4">
                                    <label for="roomfacility">roomfacility:</label>
                                    <input type="text" class="form-control" id="facility" placeholder="Enter your facility" name="facility" value="<?php echo $facility; ?>" />
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select class="form-control" id="status" name="status" value="<?php echo $status; ?>">

                                        <option value="status">status</option>

                                        <option value="active"
                                        <?php
                                        if($status == 'active'){
                                            echo "selected";
                                        }
                                       ?>
                                       >active</option>
                                        <option value="inactive 
                                        <?php
                                        if($status == 'active'){
                                            echo "selected";
                                        }
                                       ?>"
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