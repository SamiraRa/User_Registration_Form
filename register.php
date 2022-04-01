<?php
session_start();
require('includes/header.php');
 ?>
 
 <div class="py-5">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-4">

             <?php include('message.php'); ?>
                 <div class="card">
                     <div class="card-header">
                         <h4>Register</h4>
                     </div>
                     <div class="card-body">
                         <form action="registercode.php" method="POST">
                     <div class="form-group mb-2">
                           <label >UserName</label>
                           <input type="text" name="username" placeholder="Enter First Name" class="form-control" required>
                       </div>
                       <div class="form-group mb-2">
                           <label >Email ID</label>
                           <input type="email" name="email" placeholder="Enter Email Address" class="form-control" required>
                       </div>
                       <div class="form-group mb-2">
                           <label >Password</label>
                           <input type="Password" name="password" placeholder="Enter Password" class="form-control" required>
                       </div>
                       <div class="form-group mb-2">
                           <label >Confirm Password</label>
                           <input type="Password" name="cpassword" placeholder="Enter Confirm Password" class="form-control" required>
                       </div>
                       <div class="form-group mb-2">
                           <label >Date of Birth</label>
                           <input type="date" name="dob" placeholder="yy-mm-dd" class="form-control" required>
                       </div>
                       <div class="form-group mb-2">
                           <label >City</label>
                           <input type="text" name="city" placeholder="City Name" class="form-control" >
                       </div>
                       <div class="form-group mb-2">
                           <label >Country</label>
                           <input type="text" name="country" placeholder="Country Name" class="form-control" required>
                       </div>
                       <div class="form-group mb-2 list-unstyled">
                           <label >Status
                               <li><input class="d-inline-block" type="radio"name="status" value="active"/>Active</li>
                               <li><input class="d-inline-block" type="radio"  name="status" value="inactive"/>Inactive</li>
                            </label> 
                       </div>
                       <center>
                       <div class="form-group mb-2">
                           <button type="submit" name="register_btn" class="btn btn-primary btn-center">Register</button>

                        </div>
                       </center>
                       
                        </form>

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