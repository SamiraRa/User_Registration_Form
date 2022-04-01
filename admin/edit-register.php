<?php
session_start();
include('includes/header.php');
include('config/dbcon.php');
?>

<div class="container-fluid px-4 mt-4">
                               
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Dashboard</li>
                                <li class="breadcrumb-item">User List</li>
                            </ol>

                            

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                
                                    <div class="card-header">
                                        <h4>Edit User</h4>
                                        </div>
                                    <div class="card-body">
                                        <?php
                                         include('config/dbcon.php');;
                                        if(isset($_GET['id'])){

                                            $user_id=$_GET['id'];
                                            $users = "SELECT * FROM `user_reg` WHERE id='$user_id'";
                                            $users_run =mysqli_query($con,$users);
                                            if(mysqli_num_rows($users_run)>0){
                                                foreach($users_run as $user){
                                                    ?>

                                                            <form action="code.php" method="POST">
                                                                <input type="hidden" name="user_id" value="<?=$user['id']?>">
                                                                <div class="row">

                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="" >UserName</label>
                                                                        <input type="text" value="<?= $user['username']?>" name="username" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label >Password</label>
                                                                        <input type="Password" value="<?= $user['password']?>" name="password" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label >Date of Birth</label>
                                                                        <input type="date" value="<?= $user['dob'];?>" name="dob"class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label >City</label>
                                                                        <input type="text" name="city" value="<?= $user['city']?>" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label >Country</label>
                                                                        <input type="text" name="country" value="<?= $user['country']?>" class="form-control" >
                                                                    </div>
                                                                    <div class="col-md-6 mb-3 list-unstyled">
                                                                        <label >Status
                                                                            <li><input class="d-inline-block" value="<?= $user['status'] == '1'?  'checked':''?>"type="radio"name="status" value="1"/>Active</li>
                                                                            <li><input class="d-inline-block" value="<?= $user['status'] == '0'?  'checked':''?>"type="radio"  name="status" value="0"/>Inactive</li>
                                                                        </label> 
                                                                    </div>
                                                                    
                                                                    <div class="col-md-12 mb-3">
                                                                        <button type="submit" name="update_submit_btn" class="btn btn-primary btn-center">Update</button>
                                                                        <button type="submit" name="cancel_btn" class="btn btn-light btn-center">Cancel</button>

                                                                    </div>
                                                                
                                                                    
                                                                    </form>
                                                                            <?php
                                                                     }
                                            }
                                        }
                                        ?>
                                        </div>

                     </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </div>

<?php 
require('includes/footer.php'); 
?>  