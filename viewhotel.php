<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hotel view</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    
    <style>
    .heding {
        /* height: 30px; */
    }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once('nabar.php'); ?>
        <?php include_once('sidebar.php'); ?>
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
            <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <span class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="registration.php"><button> Add User</button></a></li>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="heding">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>password</th>
                                <th>phone </th>
                                <th>state</th>
                                <th>gender</th>
                                <th>dob</th>
                                <th>photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <i class="fa fa-edit text-primary"></i>
                                    <i class="fa fa-eye text-info"></i>
                                    <i class="fa fa-trash-alt text-danger"></i>  
                                </td>
                            </tr>
                           
                        </tbody>
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
<script>
    new DataTable('#example');
</script>
</body>
<?php
        include_once('jsheader.php');
    ?>

</html>