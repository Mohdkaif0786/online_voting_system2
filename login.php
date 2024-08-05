<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <style>
      .login button{
         width:140px;
         padding:14px 12px;
         font-weight:600;
         cursor: pointer;
         border-radius:4px;
         font-size:15px;
         background-color: #4070F4;
         outline:none;
         color:white;
            margin:0px auto;
         border:none;
         /* border:1px solid red; */
         width:100%;
         margin-bottom:10px;
      }
      .login button{

      }
      .heading{
        text-align:center;
      }
      .col input{
        width: 100%;
      }
      .form-msg{
         font-size:15px;
         font-weight:600;
         text-align:center;
         color:rgba(0,0,0,0.6);
      }
      .form-msg a{
        color: #4070F4;
      }
    </style>
</head>
<body>
    <div class="main-content">
        <form action="" class="login" method="post">
                <div class="heading">
                   <h2>Login Voter</h2>
                   <p>Online voting system</p>
                </div>
                 <div class="col">
                    <input type="mobile"  name="mobile" placeholder="Enter mobile">
                 </div>
                 <div class="col">
                    <input type="password"  name="pass" placeholder="Enter PassWord">
                 </div>
                 <button name="submit">Login</button>
                 <p>Already you have account?<a href="./signup.php"> SignUp</a></p>
            </form>
    </div>
</body>
</html>

<?php
echo "<pre>";
include('.\database\config.php');
include('.\database\api.php');

$db=new Database_operation($con,'signup');
$arr=array('name'=>'mohd kaif','age'=>21);

// die();
if(isset($_POST['submit'])){
      $mobile=$_POST['mobile'];
      $password=$_POST['pass'];
      $loginData=$db->findData("mobile",'password',$mobile,$password);
         
      print_r($loginData);
         // die;
      // echo $str;
      
      if(!$loginData){
         echo "<script>alert('constraint could not match')</script>"; 
      }
      else{
            session_start();
            echo "<script>alert('constraint could  match')</script>"; 
            $_SESSION['user']=$loginData;

        
            if(($_SESSION['user']['mobile']=="8368639598" && $_SESSION['user']['password']=="kaif")){
               echo "<script>window.open('./dashboard/index.php','_self')</script>"; 
            }
            else{
               header('Location:./');
            }
      }

}
else{
   echo "something problem";
}