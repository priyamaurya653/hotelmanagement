<?php
    session_start();
    include_once('db_conn.php');
    if(isset($_POST['add'])){
        $name= $_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $state=$_POST['state'];
        $gender=$_POST['gender'];
        $data="insert into persons(name,email,phone,dob,state,gender)values('$name','$email',$phone,'$dob','$state','$gender')";
        $run=mysqli_query($conn,$data);
        $_SESSION['error']="Add User successfully";
        header('location:alluser.php');
        exit();
        // if($run){
        //     echo "done";
        // }
    }
    $check = 0;
    $name= "";
    $email="";
    $phone="";
    $dob="";
    $state="";
    $gender="";
    if(isset($_GET['id'])){
        $check =1;
        $id=$_GET['id'];
        $update="select * from persons where id= '$id'";
        $run=mysqli_query($conn,$update);
        while($row = mysqli_fetch_assoc($run)){
            $name= $row['name'];
            $email=$row['email'];
            $phone=$row['phone'];
            $dob=$row['dob'];
            $state=$row['state'];
            $gender=$row['gender'];
        }
    }
    if(isset($_POST['update'])){
        $name= $_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $state=$_POST['state'];
        $gender=$_POST['gender'];
        $sql="update persons set name='$name',email='$email',phone='$phone',dob='$dob',state='$state',gender='$gender' where id='$id'";
        $update=mysqli_query($conn,$sql);
        if($update){
        $_SESSION['error']="Update User successfully";
        header('location:alluser.php');
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
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" value="<?php echo $name; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" value="<?php echo $email; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" name="phone" value="<?php echo $phone; ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select class="form-control" id="gender" name="gender" value="<?php echo $gender; ?>">
                                        <option value="">Select Gender</option>
                                        <option value="male"
                                        <?php
                                        if($gender == 'male'){
                                            echo "selected";
                                        }
                                       ?>>male</option>

                                          <option value="female"
                                        <?php
                                        if($gender == 'female'){
                                            echo "selected";
                                        }
                                       ?>>female</option>
                                       
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $dob; ?>"/>
                                </div>
                                <div class="form-group">
                                    <label for="city">state:</label>
                                    <input type="text" class="form-control" id="city" placeholder="Enter your state" name="state" value="<?php echo $state; ?>" />
                                </div>
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