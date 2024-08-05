<?php
session_start();
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
            height:250vh;
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
            width:110px;
            background-color:rgb(77,34,120);
        }
        .tools-col a:nth-child(2)> button{
            background-color:green;
        }
        .tools-col a:nth-child(3)> button{
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
    justify-content:space-between;
    /* margin */
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

.menifesto-wraper,.opaq-wraprer-content{
            width: 70%;
            max-width:700px;
            padding:15px 20px 40px 15px;
            position:absolute;
            top:40px;
            left:50%;
            background-color:white;
            transform:translateX(-50%);
            heigth:fit-content;
            border-radius:5px;
            box-shadow:0px 0px 10px 2px rgba(0,0,0,0.7);
            /* border:2px solid yello/w; */
         }
         .menifesto-header{
            width:100%;
            padding-bottom:13px;
            display:flex;
            justify-content:space-between;
            align-item:center;
         }
        .menifesto-header h2{
            font-weight:500;
            font-size:23px;
        }
         .menifesto-content{
            width: 100%;
            padding:0px 0px 0px 10px;
            border:1px solid red;
            height:auto;
         }
         .menifesto-content li{
            font-size:15px;
            list-style-type: circle;
            color:rgb(140,140,140);
            font-weight:400;
         }
         .cross{
            font-size:20px;
            cursor:pointer;
         }
         .hidden{
            display:none;
         }
    </style>


    <?php
        include('../database/config.php');
        include('../database/api.php');
        $candidate_db=new Database_operation($con,'candidate');
        $candidate_data=$candidate_db->read();
        // echo count($candidate_data)<=0?'none':'block';

        if((isset($_GET['search']) && strlen($_GET['search'])>0)){
           echo '<br>true';
           $sch_val=$_GET['search'];
           $candidate_data=$candidate_db->getData_like('name',$sch_val); 
        }
    

        if(isset($_GET['editcandidate'])){
            // echo "<pre>";
              $eid=$_GET['editcandidate'];
              echo $eid;
              $edit_data=$candidate_db->searchData('id',$eid);
            //   die;
        }

        if(isset($_GET['menifesto'])){
            echo "<pre><br>yes here menifesto";
            $menfs_id=$_GET['menifesto'];
            $mensfData=$candidate_db->searchData('id',$menfs_id);
            $mensfArr=explode('&',$mensfData['menifesto']);
            
            // die;
        }
        echo "</pre>";
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
                            <a href=".\candidates.php?addcandidate=true" class="reset-btn">
                                    <button>
                                    <i class="bi bi-plus"></i>
                                     New
                                </button>
                            </a>
                                              
                            <form method='' class="search-box">
                                <input type="text" name="search" placeholder="candidates Name">
                                <button>search</button>
                            </form>
                        <table class="dashboard-table" style="display:<?php echo count($candidate_data)<=0?'none':'inline'?>">
                            <thead>
                                <tr >
                                    <th class="vid-col">Vid</th>
                                    <th>Image</th>
                                    <th>candidate Name</th>
                                    <th>Mobile</th>
                                    <th>Party Name</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    foreach($candidate_data as $candidate){
                                       ?>
                                        <tr>                             
                                            <td class="vid-col"><?php echo $candidate['id'] ?></td>
                                            <td><img src="../<?php echo $candidate['pimg']?>" alt="candidate img"></td>
                                            <td><?php echo $candidate['name'] ?></td>
                                            <td><?php echo $candidate['mobile'] ?></td>
                                            <td><?php echo $candidate['party_name'] ?></td>
                                             <td class="tools-col">
                                                <a href=".\candidates.php?menifesto=<?php echo $candidate['id']?>"><button><i class="bi bi-pencil-square"></i><span>Menefisto</span></button></a>
                                                <a href=".\candidates.php?editcandidate=<?php echo $candidate['id']?>"><button><i class="bi bi-pencil-square"></i><span>Edit</span></button></a>
                                                <a href=".\candidates.php?deletecandidate=<?php echo $candidate['id']?>"><button><i class="bi bi-archive-fill"></i><span>Delete</span></button></a>
                                            </td>
                                        </tr>
                                        <?php
                                     }
                                ?>                                
                            </tbody>
                        </table>  
                        <div class="table-section-footer" style="display:<?php echo count($candidate_data)<=0?'none':'block'?>">
                            <p>showing 1 to 2 entries</p>
                            <div class='pagination'>
                                <button>previous</button>
                                <button class="num-btn">1</button>
                                <button>next</button>
                            </div>
                        </div> 
                        <div class="data-no-found" style="display:<?php echo count($candidate_data)<=0?'flex':'none'?>">
                            <i class="bi bi-database-fill-exclamation"></i>
                            <h2>No Data Available</h2>
                            <p>There is no data to show you right now</p>
                            <a href="./candidates.php"><button>Contnue</button></a>
                        </div>                 
                </div>                

            </div>    
        </div>
        <!-- opaq div  -->
        <div class="opaq-wraper" style="display:<?php echo isset($_GET['addcandidate']) ? 'block': 'none'?>">
            <div class="opaq-wraper-content">
            <form action=""  method="post" enctype= "multipart/form-data">
                    <div class="heading">
                        <h2>Add candidate</h2>
                        <a href=".\candidates.php"><div class="close-btn">X</div></a>
                    </div>
                    <div class="col">
                        <label for="">candidate Name</label>
                        <input type="text"  name="cname" placeholder="Enter Name" >
                    </div>
                    
                    <div class="col">
                        <label for="">Mobile</label>
                        <input type="number"  name="mobile" placeholder="Enter mobile" >
                    </div>
                    
                    <div class="col col-img" id="col-img">
                        <div class="sub-col">
                            <label for="">candidate D.O.B</label>
                            <input type="date" id="dob" name="dob" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="sub-col">
                            <label for="">candidate Image</label>
                            <input type="file" id="cimg" name="cimg"  >
                        </div>
                    </div>

                    <div class="col col-img" id="col-img">
                        <div class="sub-col">
                            <label for="">Party Name</label>
                            <input type="text" id="dob" name="pname" placeholder="dd/mm/yyyy" >
                        </div>
                        <div class="sub-col">
                            <label for="">Party Image</label>
                            <input type="file" id="pimg" name="pimg" >
                        </div>
                    </div>
                    <div class="col">
                        <label for="">Menifesto</label>
                           <textarea id="menifesto" name="menifesto" placeholder="Eter Menifesto with & operator"></textarea>
                    </div>
                        
                    <button name="submit"   class="add_btn">
                    <i class="bi bi-floppy2-fill"></i>
                    <span>Add</span>
                    </button>
                </form>
            </div>
        </div>
        
        <div class="opaq-wraper2" style="display:<?php echo isset($_GET['editcandidate']) ? 'block': 'none' ?>">
            <div class="opaq-wraper-content">
                 <form action=""  method="post" enctype= "multipart/form-data">
                    <div class="heading">
                        <h2>Update candidate</h2>
                        <a href=".\candidates.php"><div class="close-btn">X</div></a>
                    </div>
                    <div class="col">
                        <label for="">candidate id</label>
                        <input type="text" name="cid"  disabled  value='<?php echo $edit_data['id'];?>'>
                    </div>
                    <div class="col">
                        <label for="">candidate Name</label>
                        <input type="text"  name="cname" placeholder="Enter Name" value='<?php echo $edit_data['name'];?>'>
                    </div>
                    
                    <div class="col">
                        <label for="">Mobile</label>
                        <input type="number"  name="mobile" placeholder="Enter mobile" value='<?php echo $edit_data['mobile'];?>'>
                    </div>
                    
                    <div class="col col-img" id="col-img">
                        <div class="sub-col">
                            <label for="">candidate D.O.B</label>
                            <input type="text" id="dob" name="dob" placeholder="dd/mm/yyyy" value='<?php echo $edit_data['dob'];?>'>
                        </div>
                        <div class="sub-col">
                            <label for="">candidate Image</label>
                            <input type="file" id="cimg" name="cimg"  >
                        </div>
                    </div>

                    <div class="col col-img" id="col-img">
                        <div class="sub-col">
                            <label for="">Party Name</label>
                            <input type="text" id="dob" name="pname" placeholder="dd/mm/yyyy" value='<?php echo $edit_data['party_name'];?>'>
                        </div>
                        <div class="sub-col">
                            <label for="">Party Image</label>
                            <input type="file" id="pimg" name="pimg"   value='<?php echo $edit_data['party_img'];?>' >
                        </div>
                    </div>
                    <div class="col">
                        <label for="">Menifesto</label>
                           <textarea  id="" name="menifesto"  placeholder="update menifesto"><?php echo $edit_data['menifesto'];?></textarea>
                    </div>
                        
                    <button name="update" value="<?php echo $edit_data['id'];?>"  class="add_btn">
                    <i class="bi bi-floppy2-fill"></i>
                    <span>Update</span>
                    </button>
                </form>
            </div>
        </div>

        <div class="opaq-wraper" style="display:<?php echo  !$_GET['menifesto']?'none': 'block' ?>">
         <div class="menifesto-wraper">
            <div class="menifesto-header">
                <h2><?php echo $mensfData['party_name'] ?> Menifesto</h2>
                 <div class="cross"><a href=".\candidates.php">X</a></div>
            </div>  
            
            <ul class="menifesto-content">
                <?php
                // die;
                    if($mensfArr){
                        foreach($mensfArr as $item){
                            ?>
                        <li><?php echo $item; ?></li> 
                     <?php
                    }
                    } 
                 ?>
            </ul>
      </div>
     </div>

        <!--  -->
</div>

<?php
       if(isset($_POST['submit'])){
          $cname=$_POST['cname'];
          $mobile=$_POST['mobile'];
          $dob=$_POST['dob'];
          $party_name=$_POST['pname'];
          $menifesto=$_POST['menifesto'];
          $profile_files=$_FILES['cimg'];
          $party_files=$_FILES['pimg'];
          $checkSignup= $candidate_db->searchData('mobile',$mobile);

         $Cfile_name=$profile_files['name'];
         $Cfile_size=$profile_files['size'];
         $Cfile_arr=explode('.',$Cfile_name);
         $Cfile_type=end($Cfile_arr);
         
         $Pfile_name=$party_files['name'];
         $Pfile_size=$party_files['size'];
         $Pfile_arr=explode('.',$Pfile_name);
         $Pfile_type=end($Pfile_arr);

         if($cname=="" || $mobile=="" || $dob=="" || $party_name=="" || $Cfile_name=="" || $Pfile_name=="" || $menifesto==""){
            echo "<script>alert('All field mendeotery')</script>";
         }

         else if($mobile==$checkSignup['mobile']){
            echo "<script>alert('enter your personal no')</script>";
         }
         else if($Cfile_size>2097152 || $Pfile_size>2097152 ){
            echo "<script>alert('party and profile image size must less 2mb')</script>";
         }
         else if(strlen($mobile)>10 || strlen($mobile)<10){
            echo "<script>alert('enter a valid no')</script>";
         }
         else if(!in_array($Cfile_type,["jpg","jpeg",'png',"webp"])){
            echo "<script>alert('you can uplode profile image  type png')</script>";
         }
         else if(!in_array($Pfile_type,["jpg","jpeg",'png',"webp"])){
            echo "<script>alert('you can uplode party image  type png')</script>";
         }
         else{
            echo "<script>alert('alls ok')</script>";
            
            $Candidatefile_path='./candidate/'.$Cfile_name;
            $Partyfile_path='candidate/'.$Pfile_name;
            // echo $Candidatefile_path;
            // echo $Partyfile_path;
            // die;
            $request=[
                'name'=>$cname,
                'mobile'=>$mobile,
                'party_name'=>$party_name,
                'dob'=>$dob,
                'pimg'=>$Candidatefile_path,
                'party_img'=>$Partyfile_path,
                'menifesto'=>$menifesto
            ];

          if(move_uploaded_file($_FILES['cimg']['tmp_name'],'.'.$Candidatefile_path) && move_uploaded_file($_FILES['pimg']['tmp_name'],'../'.$Partyfile_path)){
                $res=$candidate_db->insert_candidate($request);
                if($res){
                    echo "<script>alert('successfull add candidate')</script>";
                }
          } 
          else{
            echo "<script>alert('did not add because server problem try to some time')</script>";
            echo "<script>window.open('./candidates.php','_self')</script>"; 
          }          

          } 
        }

       if(isset($_POST['update'])){
        echo "<pre>";
        // print_r($_REQUEST);
        $oldCandimg=$edit_data['pimg'];
        $oldPartyimg=$edit_data['party_img'];
        echo $oldPartyimg;
         $cname=$_POST['cname'];
         $mobile=$_POST['mobile'];
         $dob=$_POST['dob'];
         $party_name=$_POST['pname'];
          $menifesto=$_POST['menifesto'];
          echo $menifesto; 
         $profile_imgPath=strlen($_FILES['cimg']['name'])>0?'./candidate/'.$_FILES['cimg']['name']:$oldCandimg;
        $party_imgPath=strlen($_FILES['pimg']['name'])>0?'./candidate/'.$_FILES['pimg']['name']:$oldPartyimg;
       
         $checkSignup= $candidate_db->searchData('mobile',$mobile);
         $Cfile_name=$_FILES['cimg']['name'];
         $Cfile_size=$_FILES['cimg']['size'];
                  
        //  echo "<br>".$Cfile_size==0?'true':'false'; 

          $Pfile_name=$_FILES['pimg']['name'];
          $Pfile_size=$_FILES['pimg']['size'];


         if($cname=="" || $mobile=="" || $party_name=="" || $dob==""  ){
            echo "<script>alert('All field mendeotery')</script>";
         }
         else if(($Pfile_size>2097152)|| ($Cfile_size>2097152)){
            echo "<script>alert('image size must 2mb')</script>";
         }
         else if(strlen($mobile)>10 || strlen($mobile)<10){
            echo "<script>alert('enter a valid no')</script>";
         }

         else{
             
            if(!file_exists(".".$profile_imgPath)){ 
                move_uploaded_file($_FILES['cimg']['tmp_name'],'.'.$profile_imgPath);
                if(file_exists('.'.  $oldCandimg)){
                    unlink( ".$oldCandimg");
                }
            }
            if(!file_exists("../".$party_imgPath)){
                move_uploaded_file($_FILES['pimg']['tmp_name'],'../'.$party_imgPath);
                if(file_exists('../'.  $oldPartyimg)){
                    unlink( "../$oldPartyimg");
                }
            }

            // die;
            $request=[
                'name'=>$cname,
                'mobile'=>$mobile,
                'party_name'=>$party_name,
                'dob'=>$dob,
                'pimg'=>$profile_imgPath,
                'party_img'=>$party_imgPath,
                'menifesto'=>$menifesto
            ];

            $uid=$_POST['update'];
            echo $uid;

            $res=  $candidate_db->update_candidate($request,'id',$uid);
            
            if($res){
                echo "<script>alert('successfull update'); </script>";
                echo "<script>window.open('./candidates.php','_self')</script>"; 
            }
            else{
                echo "<script>alert('server problem,please try again some time')</script>";
            }
         } 
        }     
      
        if(isset($_GET['deletecandidate'])){
            $did=$_GET['deletecandidate'];
            // echo "<script>alert('delete function,$did')</script>";
            // die;
             $res= $candidate_db->deleteData('id',$did);
                if($res){
                    echo "<script>alert('delete successfull')</script>";
                    echo "<script>window.open('./candidates.php','_self')</script>"; 
                }
           }
     
   
  
  ?> 


</body>
</html>