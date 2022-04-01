<?php
session_start();
require('includes/header.php');
 ?>
 
 <div class="py-5">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-5">
             <?php include('message.php'); ?>
                 <div class="card">
                     <div class="card-header">
                         <h4>Login</h4>
                     </div>
                     <div class="card-body">
                         <form action="logincode.php" method="POST">
                             <div class="form-group mb-3">
                                 <label >Email ID</label>
                                 <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
                             </div>
                             <div class="form-group mb-3">
                                 <label >Password</label>
                                 <input type="Password" name="password" placeholder="Enter Password" class="form-control">
                             </div>
                             <div class="form-group mb-3">
                                 <button type="submit" name="login_btn" class="btn btn-primary mx-auto">Login</button>
     
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

<?php 
require('includes/footer.php'); 
?>