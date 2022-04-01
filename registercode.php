<?php
session_start();

include('admin/config/dbcon.php');

if(isset($_POST['register_btn'])){
    // $id = mysqli_real_escape_string($con,$_POST['id']);
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
    $q = date('m-d-y',strtotime($_POST['dob']));
    $dob = mysqli_real_escape_string($con,$q);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $country = mysqli_real_escape_string($con,$_POST['country']);
    $status = mysqli_real_escape_string($con,$_POST['status']);
    
    if($pswd == $cpswd)
    {
        $checkemail = "SELECT email FROM user_reg WHERE email='$email'";
        $checkemail_run = mysqli_query($con,$checkemail);

        if(mysqli_num_rows($checkemail_run)>0)
        {
            $_SESSION['message'] = "Already Email Exists";
            header("Location: register.php");
            exit(0);
        }
        else{
            $user_query = "INSERT INTO user_reg (id,username,email,password,dob,city,country,status) VALUES('$id','$username','$email','$password','$dob','$city','$country','$status')";
            $user_query_run = mysqli_query($con,$user_query);

            if($user_query_run){
                $_SESSION['message'] = "Registered Successfully";
                header("Location: admin/index.php");
                exit(0);

                
            }
            else{
                $_SESSION['message'] = "Something Went Wrong!";
                header("Location: register.php");
                exit(0);
            }
        }
    }
    else{
        $_SESSION['message'] = "Password and Confirm Password does not Match";
        header("Location: register.php");
        exit(0);
    }
}
else{
    header();
    exit(0);
}
?>