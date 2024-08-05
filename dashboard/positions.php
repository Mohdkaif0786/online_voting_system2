<?php 
session_start();
    if(($_SESSION['user']['mobile']!="8368639598" && $_SESSION['user']['password']!="kaif")){
            echo "<script>window.open('../index.php','_self')</script>"; 
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <style>
            *{
                box-sizing:border-box;
             }
        .website-content{
            margin-top:0px;
            height:200vh;
            margin-bottom:20px;
        }
        .table-section{
            witdth:100%;
            margin-top:5px;
            box-shadow:0px 0px 6px 2px rgba(0,0,0,0.2);
            height:auto;
            padding:20px 15px;
            /* border:1px solid red; */
            display:flex;
            background-color:white;
            flex-direction:column;
            gap:18px;
        }
        .reset-btn {
            display:flex;
            gap:6px;
        }  
        .reset-btn button{
            padding:8px 18px;
            border:none;
            color:white;
            cursor:pointer;
            box-shadow:0px 0px 5px 1px rgba(0,0,0,0.2);
            outline:none;
            font-weight:600;
            border-radius:3px;
            background-color:rgb(60,141,188);
        } 
     
        .reset-btn button .bi{
            font-weight:900p;
            font-size:16px;
        }
        .search-box{
            /* border:2px solid red; */
            display:flex;
            border-radius:none;
              justify-content:right;

        } 
        .search-box input{
            padding:9px 27px  9px 10px;
            font-size:16px;
            outline:none;
            text-align:center;
            font-weight:400;
            border:1px solid rgba(0,0,0,0.1);
            border-right:none;
        }
        .search-box input::placeholder{
            font-weight:500;
            font-size:16px;
        }
        .search-box button{
            width:80px;
            height:43px;
            cursor:pointer;

            outline:none;
            border:none;
            /* border-radius:5px; */
            border-radius-right-bottom:5px;
            border-radius-right-top:5px;
            font-size:15px;
            font-weight:600;
            color:white;
            background-color:rgb(60,141,188);
            text-transform:capitalize;
            transform:translateX(-20px);
        }
        a{
            text-decoration:none;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            display: block;
        }
        table tbody,thead{
            width:100%;
            /* border:2px solid red; */
            display:table-row-group;
        }
        table tr{
            width:100%;
            display:table-row;
        }
        th, td {
            text-align: left;
            padding: 8px;
            display:table-col;
            width:18%;
        }
        .vid-col{
            width:fit-content;
            /* border:2px solid red; */
        }
    
        .table-section td img{ 
            width:78px;
        }
        .table-section-footer{
            width:100%;
            /* border:2px solid red; */
            display:flex;
            align-items:center;
            justify-content:space-between;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}
        .table-section-footer p{
            color:rgba(0,0,0,0.6);
        }
        .pagination{
           /* border:2px solid red; */
           display:flex;
           /* gap:3px; */
        }
        .pagination  button{
             width:97px;
            font-size:18px;
            border:none;
            cursor:pointer;
            outline:none;
            padding:6px 0px;
            font-weight:400;
        }

        .num-btn{
            color:white;
            width:40px !important;
            background-color:rgb(60,141,188);
        }

        .pagination  button:last-child,.pagination  button:first-child{
            padding:6px 18px;
             color:rgba(0,0,0,0.4);
        }
        .tools-col{
            display:flex;
            align-items:center;
            gap:5px;
        }
        .tools-col button{
            width:96px;
            outline:none;
            border:none;
            cursor:pointer;
            height:40px;
            border-radius:4px;
            font-size:16px;
            color:white;
            font-weight:500;
        }
        .tools-col button:hover{
            opacity:0.8;
        }
        .tools-col a:nth-child(1)> button{
            background-color:green;
        }
        .tools-col a:nth-child(2)> button{
            background-color:rgb(238,78,78);
        }
        .tools-col button span{
            margin-left:4px;
        }
        .opaq-wraper,.opaq-wraper2{
             width:100%;
             height:100%;
             /* border:2px solid red; */
             position:fixed !important;
             top:0px;
             left:0px;
             transition:all 0.2s;
             background-color:rgba(0,0,0,0.4);
             z-index: 600000 !important;
             display:none;
         }
          .opaq-wraper-content{
            width: 70%;
            max-width:700px;
            padding:15px 20px 40px 15px;
            position:absolute;
            top:60px;
            left:56%;
            background-color:white;
            transform:translateX(-50%);
            heigth:fit-content;
            border-radius:5px;
            box-shadow:0px 0px 10px 2px rgba(0,0,0,0.7);
            /* border:2px solid yello/w; */
         } 
         .opaq-wraper-content form{
            /* border:1px solid red; */
            padding-bottom:30px;
         }
        .col {
            padding: 0px 30px;
        }
         .heading{
     margin-bottom: 20px;
     display: flex;
     justify-content:space-between;
}
.heading h2 {
    font-size: 25px;
    position: relative;
    display: inline;
    margin-bottom: 10px;
    /* color:; */

}
.heading h2::after{
    display: block;
    content: "";
    position: absolute;
    width: 50px;
    bottom: 0px;
    right: 0px;
    height:3px;
    background-color: #4070F4;
}
.heading .close-btn {
    font-size: 20px;
    color:grey;
    padding:2px 7px;
    font-weight: 400;
    transition:all 0.4s;
    margin-bottom: 5px;    
}
.heading .close-btn:hover{
    border:1px solid rgba(0,0,0,0.2);
    opacity:0.8;
}
.col{
    width:100%;
    display:flex;
    gap:20px;
    align-items:center;
    margin-bottom:20px;   
   /* border:1px solid red; */
}

#col-img{
    flex-direction:row;
    gap:0px;
    /* border:1px solid red; */
    padding:0px;
}
.sub-col{
    display:flex;
    /* border:1px solid red; */
    width:50%;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
.sub-col input,.col input{
    width:70%;
    padding:9px 15px;
    outline:none;
    border:1px solid rgba(0,0,0,0.2);
    font-size: 16px;
    font-weight: 500;
    color:rgba(0,0,0,0.8);
    
}
.sub-col label,.col label{
    font-weight:500;
}
.col input::focus{
    border:2px solid rgba(0,0,0,0.4);
}

.col-address input{
    width:100%;
}
input[type='file']{
   width: 70%;
}

.col textarea{
    width:80%;
    padding:9px 15px;
    outline:none;
    /* height:40px; */
    border:1px solid rgba(0,0,0,0.2);
    font-size: 16px;
    font-weight: 500;
    color:rgba(0,0,0,0.8);
}
.add_btn{
    width:105px;
    padding:9px 10px;
    border:none;
    outline:none;
    border-radius:3px;
    display:flex;
    float:right;
    transform:translateX(-20px);
    justify-content:center;
    align-items:center;
    gap:5px;
    color:white;
    font-size:17px;
    font-weight:400;
    background-color:rgb(60,141,188); 

}
.data-no-found{
    width:100%;
    padding:30px;
    height:305px;
    display:flex;
    background-color:rgba(0,0,0,0.2);
    flex-direction:column;
    justify-content:center;
    /* border:1px solid red; */
    align-items:center;
    gap:12px;
}
.data-no-found .bi{
    font-size:88px;
    color:#09C5A3;
}
.data-no-found h2{
    line-height:10px;
    /* border:1px solid red; */
    margin:0px;
    color:rgba(0,0,0,0.8);  
}
.data-no-found p{
    line-height:15px;
    /* border:1px solid red; */
    margin:0px; 
    font-size:18px;
    color:rgba(0,0,0,0.6); 
}
.data-no-found button{
    width:100px;
    padding:10px 9px;
    border:none;
    outline:none;
    font-size:16px;
    cursor:pointer;
    font-weight:600;
    color:white;
    border-radius:4px;
   background-color:#09C5A3;
}
    </style>


    <?php
        include('../database/config.php');
        include('../database/api.php');
        $voters_db=new Database_operation($con,'signup');
        $voters_data=$voters_db->read();
    
        
        if((isset($_GET['search']) && strlen($_GET['search'])>0)){
           $voters_data=$voters_db->getData_like('name',$sch_val);
        //   echo count($voters_data)<=0?'none':'block';
        }

        if(isset($_GET['editvoter'])){
              $eid=$_GET['editvoter'];
              $edit_data=$voters_db->searchData('id',$eid);
        }

    ?>

</head>
<body>

<div class="dashboard-content">
        <?php include('./components/header.php'); ?>
        <div class="main-content">
             <?php include('./components/sidebar.php'); ?>
           <div class="website-content">
                <div class="website-content-header">
                       <h2>Dashboard</h2>
                       <div class="website-content-links">
                          <a href=""><i class="bi bi-palette"></i>Home</a>>
                          <a href="">Dashboard</a>
                       </div>
                </div> 

                <div class="table-section">
                            <a href=".\voters.php?addvoter=true" class="reset-btn">
                                    <button>
                                    <i class="bi bi-plus"></i>
                                     New
                                </button>
                            </a>
                                              
                            <form method='' class="search-box">
                                <input type="text" name="search" placeholder="Voters Name">
                                <button>search</button>
                            </form>
                        <table class="dashboard-table" style="display:<?php echo count($voters_data)<=0?'none':'inline'?>">
                            <thead>
                                <tr >
                                    <th class="vid-col">Vid</th>
                                    <th>Image</th>
                                    <th>Voter Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    foreach($voters_data as $voter){
                                       ?>
                                        <tr>                             
                                            <td class="vid-col"><?php echo $voter['id'] ?></td>
                                            <td><img src="../<?php echo $voter['pimg']?>" alt="voter img"></td>
                                            <td><?php echo $voter['name'] ?></td>
                                            <td><?php echo $voter['mobile'] ?></td>
                                            <td><?php echo $voter['address'] ?></td>
                                             <td class="tools-col">
                                                <a href=".\voters.php?editvoter=<?php echo $voter['id']?>"><button><i class="bi bi-pencil-square"></i><span>Edit</span></button></a>
                                                <a href=".\voters.php?deletevoter=<?php echo $voter['id']?>"><button><i class="bi bi-archive-fill"></i><span>Delete</span></button></a>
                                            </td>
                                        </tr>
                                        <?php
                                     }
                                ?>                                
                            </tbody>
                        </table>  
                        <div class="table-section-footer" style="display:<?php echo count($voters_data)<=0?'none':'flex'?>">
                            <p>showing 1 to 2 entries</p>
                            <div class='pagination'>
                                <button>previous</button>
                                <button class="num-btn">1</button>
                                <button>next</button>
                            </div>
                        </div> 
                        <div class="data-no-found" style="display:<?php echo count($voters_data)<=0?'flex':'none'?>">
                            <i class="bi bi-database-fill-exclamation"></i>
                            <h2>No Data Available</h2>
                            <p>There is no data to show you right now</p>
                            <a href="./voters.php"><button>Contnue</button></a>
                        </div>                 
                </div>                

            </div>    
        </div>
        <!-- opaq div  -->
        <div class="opaq-wraper" style="display:<?php echo isset($_GET['addvoter']) ? 'block': 'none'?>">
            <div class="opaq-wraper-content">
                 <form action=""  method="post" enctype= "multipart/form-data">
                    <div class="heading">
                        <h2>Add New Voters</h2>
                        <a href=".\voters.php"><div class="close-btn">X</div></a>
                    </div>
                    <div class="col">
                        <label for="">Voters Name</label>
                        <input type="text"  name="vname" placeholder="Enter Name">
                    </div>
                    
                    <div class="col">
                        <label for="">Mobile</label>
                        <input type="number"  name="mobile" placeholder="Enter mobile">
                    </div>

                    <div class="col">
                        <label for="">Address</label>
                        <input type="Address"  name="address" placeholder="Enter Name">
                    </div>

                    <div class="col col-img" id="col-img">
                        <div class="sub-col">
                            <label for="">Voter D.O.B</label>
                            <input type="date" id="dob" name="dob" >
                        </div>
                        <div class="sub-col">
                            <label for="">Voter Image</label>
                            <input type="file" id="vimg" name="vimg" >
                        </div>
                    </div>
                        
                    <button name="submit" class="add_btn">
                    <i class="bi bi-floppy2-fill"></i>
                    <span>Save</span>
                    </button>
            </form>
            </div>
        </div>
        
        <div class="opaq-wraper2" style="display:<?php echo isset($_GET['editvoter']) ? 'block': 'none' ?>">
            <div class="opaq-wraper-content">
                 <form action=""  method="post" enctype= "multipart/form-data">
                    <div class="heading">
                        <h2>Update Position</h2>
                        <a href=".\voters.php"><div class="close-btn">X</div></a>
                    </div>
                    <div class="col">
                        <label for="">Position Name</label>
                        <input type="text" name="vid"  disabled  value='<?php echo $edit_data['id'];?>'>
                    </div>
                    <div class="col">
                        <label for="">Total Seats</label>
                        <input type="text"  name="vname" placeholder="Enter Name" value='<?php echo $edit_data['name'];?>'>
                    </div>
                    
                        
                    <button name="update" value="<?php echo $edit_data['id'];?>"  class="add_btn">
                    <i class="bi bi-floppy2-fill"></i>
                    <span>Update</span>
                    </button>
            </form>
            </div>
        </div>
        <!--  -->
</div>

<?php
       if(isset($_POST['submit'])){

         $vname=$_POST['vname'];
         $mobile=$_POST['mobile'];
         $address=$_POST['address'];
         $dob=$_POST['dob'];
         $profile_img=$_FILES['vimg'];
        
         
         $checkSignup= $voters_db->searchData('mobile',$mobile);
         $file_name=$profile_img['name'];
         $file_size=$profile_img['size'];
         $file_arr=explode('.',$file_name);
         $file_type=end($file_arr);

         if($vname=="" || $mobile=="" || $address=="" || $profile_img==""){
            echo "<script>alert('All field mendeotery')</script>";
         }

         else if($mobile==$checkSignup['mobile']){
            echo "<script>alert('you have already acccount from this mobile no')</script>";
         }
         else if($file_size>2097152){
            echo "<script>alert('image size must 2mb')</script>";
         }
         else if(strlen($mobile)>10 || strlen($mobile)<10){
            echo "<script>alert('enter a valid no')</script>";
         }
         else if(!in_array($file_type,["jpg","jpeg",'png',"webp"])){
            echo "<script>alert('you can upload image  type png')</script>";
         }
         else{
            echo "<script>alert('alls ok')</script>";
            $file_path='../upload/'.$file_name;
            $request=[
                'name'=>$vname,
                'mobile'=>$mobile,
                'password'=>$vname,
                'address'=>$address,
                'dob'=>$dob,
                'pimg'=>'./upload/'.$file_name
            ];

             if(move_uploaded_file($profile_img['tmp_name'],$file_path)){
                $voters_db->insert($request); 
                echo "
                    <script>
                        alert('successfull addvoter')
                    </script>";
                    echo "<script>window.open('./voters.php','_self')</script>"; 
                
             }
             else{
                echo "<script>alert('server problem try to some time')</script>";
             }
             
         }
       } 

       if(isset($_POST['update'])){
        // die;
        
         
         $vname=$_POST['vname'];
         $mobile=$_POST['mobile'];
         $address=$_POST['address'];
         $dob=$_POST['dob'];
         $profile_img=$_FILES['vimg'];
         
    
         $checkSignup= $voters_db->searchData('mobile',$mobile);
         $file_name=$profile_img['name'];
         $file_size=$profile_img['size'];
         $file_arr=explode('.',$file_name);
         $file_type=end($file_arr);
         $file_path='../upload/'.$file_name;
    
         
        // die;
         if($vname=="" || $mobile=="" || $address=="" || $dob=="" ){
            echo "<script>alert('All field mendeotery')</script>";
         }
         else if($file_size>2097152){
            echo "<script>alert('image size must 2mb')</script>";
         }
         else if(strlen($mobile)>10 || strlen($mobile)<10){
            echo "<script>alert('enter a valid no')</script>";
         }
         else if(!in_array($file_type,["jpg","jpeg",'png',"webp"]) && $file_name){
            echo "<script>alert('you can upload image  type png')</script>";
         }
         else{
    
        
            $oldImg=$edit_data['pimg'];
            echo'------------------------------<br>';
            echo $oldImg;    

            $fileName=$file_name?'./upload/'.$file_name:$oldImg;
            
            echo '<br>'.$fileName;
            // die;

            if(!file_exists($file_path)){
                move_uploaded_file($profile_img['tmp_name'],$file_path);
                echo '<br>file not exist';
                if(file_exists( ".$oldImg")){
                    unlink( ".$oldImg");
                }

            }

            $request=[
                'name'=>$vname,
                'mobile'=>$mobile,
                'address'=>$address,
                'dob'=>$dob,
                'pimg'=>$fileName
            ];
            print_r($request);
            // die;
            $id=$_POST['update'];
            $res=  $voters_db->update_voter($request,'id',$id);
            
            if($res){
                echo "<script>alert('successfull update'); </script>";
                echo "<script>window.open('./voters.php','_self')</script>"; 
            }
            else{
                echo "<script>alert('server problem,please try again some time')</script>";
            }
          
           
             
         } 
            
       }
       if(isset($_GET['deletevoter'])){
        echo "<script>alert('delete function')</script>";
        $did=$_GET['deletevoter'];
         $res= $voters_db->deleteData('id',$did);
            if($res){
                echo "<script>alert('delete successfull')</script>";
                echo "<script>window.open('./voters.php','_self')</script>"; 
            }
       }
    ?> 


</body>
</html>