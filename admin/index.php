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
                                        <h4>Registered User</h4>
                                    </div>
                                    <div class="card-body">
                                    <table id="datatablesSimple">
                                        <div class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Date of Birth</th>
                                                    <th>City</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
                                                if(isset($_GET['id'])){
                                                    $id = mysqli_real_escape_string($con,$_GET['id']);
                                                    $status = mysqli_real_escape_string($con,$_GET['status']);
                                                    if($status =='active'){
                                                        $status == '1' ;
                                                    }
                                                    elseif($status =='inactive'){
                                                        $status =='0';
                                                    }
                                                    mysqli_query($con, "update user_reg set status='$status' WHERE 'id'='$id'");
                                                }
                                                $query = "SELECT * FROM user_reg";
                                                $query_run=mysqli_query($con,$query);

                                                if(mysqli_num_rows($query_run) > 0){
                                                    foreach($query_run as $row){
                                                        
                                                ?>
                                                <tr>

                                                    <td><?= $row['username']?></td>
                                                    <td><?= $row['email']?></td>
                                                    <td><?= $row['dob']?></td>
                                                    <td><?= $row['city']?></td>
                                                    <td><?= $row['country']?></td>
                                                    <td>
                                                        <?php
                                                         if($row['status'] == '0'){
                                                             ?>
                                                             <a href="#" target="_blank" class="link-info">Active</a>
                                                             <?php
                                                         }elseif($row['status'] == '1'){
                                                            ?>
                                                            <a href="#" target="#" class="link-danger"">Inactive</a>
                                                            <?php
                                                         }
                                                    ?>
                                                    </td>
                                                    <td><a href="edit-register.php?id=<?= $row['id']?>" class="btn btn-success">Edit</a></td>
                                                    <td>
                                                        <form action="code.php" method="POST">
                                                        <button type="submit" value="<?= $row['id'];?>" name="delete_id" class="btn btn-danger">Delete</button>
                                                        </form>
                                                     </td>
                                                   
                                                </tr>
                                                <?php
                                                    }
                                                }else{
                                                    ?>
                                                    <tr>
                                                        <td colspan="5"> No Record Found</td>
                                                    </tr>
                                                    <?php
                                                }
                                               ?>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<?php 
include('includes/footer.php'); 
include('includes/scripts.php'); ?>