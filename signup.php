<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <style>
      .login button{
         width:100%;
         padding:12px 12px;
         font-weight:500;
         cursor: pointer;
         border-radius:4px;
         font-size:18px;
         background-color: #4070F4;
         outline:none;
         color:white;
         border:none;
         margin-bottom:10px;
      }
      .form-msg{
         font-size:15px;
         font-weight:600;
         text-align:center;
         color:rgba(0,0,0,0.3);

      }
      .form-msg a{
        color: #4070F4;
        text-decoration:none;
      }
    </style>
</head>
<body>
    <div class="main-content">
        <form action="" class="login" method="post" enctype= "multipart/form-data">
                <div class="heading">
                   <h2>Register Voter</h2>
                   <p>Online voting system</p>
                </div>
                 <div class="col">
                    <input type="text"  name="name" placeholder="Enter Name">
                    <input type="mobile"  name="mobile" placeholder="Enter mobile">
                 </div>
                 <div class="col">
                    <input type="password"  name="pass" placeholder="Enter PassWord">
                    <input type="text"  name="cpass" placeholder="Confirm Password">
                 </div>
                 <div class="col col-address" >
                    <input type="text" name="address" placeholder="Enter Address">
                 </div>
                 <div class="col">
                    <input type="file" id="profile_img" name="image" >
                    <input type="date" id="dob" name="dob" >
                 </div>
                 <button name="submit">Sign Up</button>
                 <p>Already you have account?<a href="./login.php"> Login</a></p>
            </form>
    </div>
</body>
</html>

<?php
echo "<br>";
   include('.\database\config.php');
   include('.\database\api.php');

   $db=new Database_operation($con,'signup');
   session_start();
   echo "session:";
   print_r($_SESSION['user']);
   
   
   if(isset($_POST['submit'])){
      // asssing varible
      $name=$_POST['name'];
      $mobile=$_POST['mobile'];
      $pass=$_POST['pass'];
      $cpass=$_POST['cpass'];
      $address=$_POST['address'];
      $profile_img=$_FILES['image'];
      $dob=$_POST['dob'];
      // print_r($profile_img);
      
     $checkSignup= $db->searchData('mobile',$mobile);
      $file_name=$profile_img['name'];
      $file_size=$profile_img['size'];
      $file_arr=explode('.',$file_name);
      $file_type=end($file_arr);

   if($name=="" || $mobile=="" || $pass=="" || $cpass=="" || $address=="" || $profile_img==""){
      echo "<script>alert('All field mendeotery')</script>";
   }
   else if($pass!=$cpass){
      echo "<script>alert('password and confirm password does not match')</script>";
   }
   else if($mobile==$checkSignup['mobile']){
      echo "<script>alert('you have already acccount')</script>";
   }
   else if($file_size>2097152){
      echo "<script>alert('image size must 2mb')</script>";
   }
   else if(strlen($mobile)>10 || strlen($mobile)<10){
      echo "<script>alert('enter a valid no')</script>";
   }
   else if(!in_array($file_type,['jpg',"jpeg",'png',"webp"])){
      echo "<script>alert('you can jpg,jpeg and png type image upload')</script>";
   }
  else{
      echo "<script>alert('all is good');</script>";
      $file_path="./upload/$file_name";
      if(move_uploaded_file($profile_img['tmp_name'],$file_path)){
         $request=['name'=>$name,'mobile'=>$mobile,'password'=>$pass,'address'=>$address,'pimg'=>$file_path,'dob'=>$dob];
         $db->insert($request);    
         echo "<script>alert('successfull signup')</script>";
         header('Location:.\login.php'); 
      }
      else{
         echo "<script>alert('some problem coming for upload img')</script>";
      }
  }
}
else{
   echo 'something error';
}
