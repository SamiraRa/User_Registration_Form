<?php 
session_start();
include('admin/config/dbcon.php');

if(isset($_POST['login_btn'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $login_query = "SELECT * FROM user_reg WHERE email='$email' AND password ='$password' LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0){

        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $username = $data['username'];
            $email = $data['email'];
            $status= $data['status'];
          

        }

        $_SESSION['auth'] = true;
     
        $_SESSION['auth_status'] = "$status";
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'username' => $username,  
            'email' => $email,
        ]; 

        $_SESSION['message'] = "Welcome to the Dashboard";
            header("Location:admin/index.php");
            exit(0);
    }else{
        $_SESSION['message'] = "Invalid Email or Password";
        header("Location:login.php");
        exit(0);
    }
}else
{
    $_SESSION['message'] = "You are not allowed access";
    header("Location:login.php");
    exit(0);
}
?>