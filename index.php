<?php
        // echo "<pre>";
        include('.\database\config.php');
        include('.\database\api.php');
        date_default_timezone_set('Asia/Kolkata');
        $db=new Database_operation($con,'signup');
        $db2=new Database_operation($con,'candidate');
        



       session_start();    
       if(!isset($_SESSION['user'])){
        header('Location:.\login.php');
       }
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        
        body,*{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif; 
        }
        .home-content{
            width:100%;
            height:100vh;
            /* border:2px solid green; */
           margin:0px;
           position:relative;
           padding:0px;
           box-sizing:border-box;
           backrgroud-image:url('el.png')
           /* background-color:rgb(244,247,253);  */
        }
        .header{
            box-shadow:0px 0px 5px 2px rgba(0,0,0,0.2);
            width: 100%;
            padding:10px 20px;
            box-sizing:border-box;
            border:2px solid red;
            display:flex;
            /* position:sticky !important; */
            top:0px;
            left:0px;
            z-index: 1000000 !important;
            align-items:center;
            justify-content:space-between;
        }
        a{
            text-decortion:none;
            color:black;
        }
        .header-sticky{
            position:sticky !important;
            top:0px;
            left:0px;
            transiton:all 0.5s;
        }
        .logo{
            width:290px ;
            /* border:1px solid red; */
        }
        .logo img{
            width:100%;
        }
        .menu{
            display: flex;
            gap:20px;
            align-items:center;
        }
        .menu a{
            text-decoration:none;
            color: #4070F4;
            font-size:22px;
            display:block;
        }
        .menu button,.btn{
            width: 110px;
            border:2px solid  #4070F4;
            color: #4070F4;
            transition:all 0.4s ;
            font-size:17px;
            font-weight:600;
            cursor:pointer;
            border-radius:5px;
            background-color:white;
            padding:12px 10px;
        }
        .vote-btn{
            background-color:green !important;
            color:white !important;
            width:140px !important;
           border:2px solid black !important:
        }
        .menu button:hover{
            background-color: #4070F4;
        color:white;
        }
        .election-banner{
            width:100%;
            overflow:hidden;
            postion:relative;
            z-index: 2;
            /* border:2px solid red; */
        }
        .election-banner img{
            width:100%;
        }
        .main-content{
            width:100%;
            height:auto;
            /* border:2px solid red; */
            display:flex;
            margin:15px;
            justify-content:space-around;
        }
        .voter-card{
            max-width: 300px;
            min-width:250px;
            height:auto;
            background-image: linear-gradient(0deg, rgba(19, 136, 8, 0.3) 33%, #ffffff 33%, #ffffff 66%, rgba(255, 153, 51, 0.3) 66% );
            padding:23px;
            border:2px solid rgba(0,0,0,0.2);
            display:flex;
            border-radius:10px;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            gap:15px;
        }
        .voter-card img{
            width:130px;
            border-radius:50%;
            height:auto;
            /* border:1px solid red; */
        }
        .col{
            width:100%;
            display:flex;
             gap:20px;
        }
        .voter-name{
            font-size:20px;
            color:green;
            text-transform:capitalize;
        }
        .col p{
            font-size:16px;
            font-weight:500;
            color:rgba(0,0,0,0.8);
        }
        .show-status{ 
            font-weight:600 !important;
            text-transform:capitalize;
        }

        .candidate-cards-wraper{
            /* width:max-content; */
            width:45%;
            min-width:300px;
            //border:3px solid red; 
            display:flex;
            flex-direction:column;
            gap:10px;  
        }

        .candidate-card{
            width:100%;
            height:fit-content;
            padding:10px 15px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            border:2px solid rgba(0,0,0,0.2);
            font-weight:600 !important;    
        }
         .candidate-card img{
            width: 100px;
         }   
         .btn-wraper {
            display:flex;
            gap:15px;
         }
         .btn-wraper  button{
            width:100px;
            padding:12px;
            font-size:15px;
            color:white;
            outline:none;
            border:none;
            border-radius:5px;
            cursor:pointer;
            /* transition:all 0.4s; */
         }
         .btn-wraper  button::hover{
            opacity:0.6;
         }
         .btn-wraper  .menifesto{
            background-color:rgb(77,34,120);
         }
         .btn-wraper  .vote{
            width:80px; 
            background-color:green;
         }
         .opaq-wraper{
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
            /* border:1px solid red; */
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
</head>
<body>
    <?php
            $session_data=$_SESSION['user'];
            $user= $db->searchData('id',$session_data['id']);
             $candidate= $db2->read();
    ?>

    <div class="home-content">
    <nav class="header">
        <div class="logo">
            <img src="https://www.eci.gov.in/newimg/eci-logo.svg" alt="not found">
        </div>
        <div class="menu">
            <a href="">Result</a>
            <a href=""><button class="btn vote-btn">Go for Vote</button></a>
            <a href=".\?logout=true"><button class="logout_btn btn">Logout</button></a>
        </div>
    </nav>
    <section class="election-banner">
        <img src="https://ecisveep.nic.in/chunav%20ka%20parv/img/chunav-ka-parv/Banner.png" alt="">
    </section>
        

    <div class="main-content">
            <div class="voter-card">
                <img src="<?php  echo $user['pimg']; ?>" alt="profile img">
                <h3 class="voter-name"><?php echo $user['name']; ?></h3>
                <div class="col">
                    <h3>Mobile</h3>
                    <p><?php echo $user['mobile']; ?></p>
                </div>
                <div class="col">
                    <h3>Address</h3>
                    <p><?php echo $user['address']; ?></p>
                </div>
                <div class="col">
                    <h3>D.O.B</h3>
                    <p><?php echo $user['dob']; ?></p>
                </div>
                <div class="col">
                    <h3>Status</h3>
                    <p class="show-status" style="font-size:18px;<?php echo $user['status']==0?'color:red': 'color:green' ?>"><?php echo $user['status']==0?'Not Voted': 'Voted' ?></p>
                </div>
            </div>
            <div class="candidate-cards-wraper">
                <?php
                     foreach($candidate as $key=>$data){
                        ?>
                        
                        <div class="candidate-card">
                            <p><?php echo $key+1; ?></p>
                            <div class="cadidate-name-wraper">
                                <h3><?php echo strtoupper($data['party_name']); ?></h3>
                                <span>(MLA)</span>
                            </div>
                            <img src="<?php echo $data['party_img'] ?>" alt="" alt="party-sign">
                            <div class="btn-wraper">
                            <a href="./?id=<?php echo $data['id'];?>&menifesto=true"><button class="menifesto" name='menifesto' value="<?php echo $data['id'] ?>">Menifesto</button></a>
                                <a href="./?id=<?php echo $data['id'];?>&voted=true" style="display:<?php echo $user['status']?'none':'block' ?>"><button class="vote" >Vote</button></a>
                            </div>
                        </div>

                        <?php
                    }
                ?>
            </div>
    </div>

  <?php
  echo "<pre>";
     if(isset($_GET['menifesto'])){
        $id=$_GET['id'];
         $res= $db2->searchData('id',$id);
        $menfStr=$res['menifesto'];
        $menfArr=explode('&',$menfStr);
        // print_r($menfArr);

     }
     
     if(isset($_GET['voted'])){
    ///////////////////////////////////////
    // update user status
        $vid=$user['id'];
        $res=$db->updateData("status","id",$vid,1);
        
        //update cadidate vote
        $cand_id=$_GET['id'];
        $old_vote=$db2->searchData('id',$cand_id);
        $new_vote=$old_vote['vote']+1;
        $res2=$db2->updateData("vote","id",$cand_id,$new_vote);
        
        //insert data in allvoter table
        $allvoter_db=new Database_operation($con,'allvoter');
        
        $allvoter_data=array(
            "party_id"=>$old_vote['id'],
            "party_name"=>$old_vote['party_name'],
            "candidate"=>$old_vote['name'],
            "user_id"=>$vid,
            "user_name"=>$user['name'],
            "user_mobile"=>$user['mobile'],
             "date"=>date("d/m/Y"),
             "time"=>date("h:i:sa")
        );
        
        // print_r($allvoter_data);
       $res3 = $allvoter_db->insert_allVoter($allvoter_data);
         
        if($res && $res2 && $res3 ){
        echo "<script>
            alert('Successfull Voted')
            window.location.href='./';
        </script>";
        
       }
     /////////////////////////////////////// 
     }
     if(isset($_GET['logout'])){
         session_unset();
         session_destroy();
         echo "
         <script>
                 window.location.href='./login.php';
        </script>";
     }
     else{
        echo "none";
     }
     echo "</pre>";
  ?>


  <div class="opaq-wraper" style="display:<?php echo  !$_GET['menifesto']?'none': 'block' ?>">
      <div class="menifesto-wraper">
       <div class="menifesto-header">
         <h2>View Menifesto</h2>
         <div class="cross"><a href=".\">X</a></div>
       </div>  
       <ul class="menifesto-content">
         <?php
            if($menfArr){
                foreach($menfArr as $menfData){
                    ?>
                       <li><?php echo $menfData; ?></li> 
                    <?php
                }
            } 
         ?>
       </ul>
      </div>
  </div>


  

<script>
    
    let crossBtn=document.querySelector('.cross');
         let menifestoElm=document.querySelector('.opaq-wraper');
         let menifesto_btn=document.querySelector('.menifesto');
         let headerElm=document.querySelector('.header');
         console.log(headerElm);
         //  alert('hello india')
        console.log(menifesto_btn);
         function OpenModel(){
            console.log('click start');
            menifestoElm.classList.remove('hidden');
            
        }
        // alert('hekki')
        // function CloseModel(){
        // console.log('clock delete');
        //     menifestoElm.classList.add('hidden');           
        // }

        function headerSticky(e){
            console.log('hello');
            console.log(e);
            let scrol=scrollY;
            console.log(scrol);
        }


       window.addEventListener('scroll',headerSticky)
       menifesto_btn.addEventListener('click',OpenModel)
       crossBtn.addEventListener('click',CloseModel);



</script>
  
</body>
</html>