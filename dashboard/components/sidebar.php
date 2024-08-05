
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    body,*{
        margin:0px;
        padding:0px;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif; 
    }
    .dashboard-sidebar{
        width:235px;
        height:calc(100vh - 55px);
        background-color:rgb(34,45,49);
        color:white;
        position:fixed;
            left:0px;
            top:55px;
        /* border:2px solid red; */
    }
    .dashboard-sidebar > .admin-info{
        width:100%;
        padding:6px 0px 6px 12px; 
        display:flex;
        align-items:center;
        gap:14px;
        /* border:2px solid green; */
    }
    .admin-info img{
        width:56px;
        /* border:1px solid red; */
        border-radius:50%;
    }
     .info-data p{
        font-size:11px;
        display:flex;
        gap:6px;
        margin-top:3px;
        font-weight:500;
     }
     .info-data .bi{
        color:green;
     }
     .col-sidebar{
        width:100%;
        height:auto;
        
     }
    .col-header{
        width:100%;
        height:auto;
        /* border:1px solid white; */
        padding:8px 12px;
        text-transform:uppercase;
        font-size:14px;
        font-weight:400;
        color:rgb(96,96,96);
       background-color: rgb(26,34,37);
    }
    .active-col{
        border-left:3px solid rgb(54,127,168);
    }
    a{
        text-decoration:none;
        display:block;
    }
    a::visited{
        color:white;
    }
    .sub-col-sidebar {
        display:flex;
          /* border:1px solid red; */
        height:43px;
        gap:8px;
        color:rgb(180,180,190);
        font-size:14px;
        /* color:white; */
        text-transform:capitalize;
        padding-left:15px;
        align-items:center;
    }
    </style>
</head>
<body>
    <?php 
    // session_start();   
    // print_r($_SESSION);
    // // die;
    ?>
 
    <div class="dashboard-sidebar">
            <div class="admin-info">
                  <img src="<?php echo ".\.".$_SESSION['user']['pimg']  ?>" alt="">
                 <div class="info-data">
                    <h4><?php echo $_SESSION['user']['name']?></h4>
                    <p>
                         <i class="bi bi-circle-fill"></i>
                        <span>Online</span>
                    </p>
                 </div>
            </div>
            <div class="col-sidebar">
                <p class="col-header">reports</p>
                <a href="./">
                    <div class="sub-col-sidebar dashborad-sub-col">
                        <i class="bi bi-palette"></i>
                        <p>Dashboard</p>
                    </div>
                </a>
                <a href="./votes.php">
                    <div class="sub-col-sidebar">
                        <i class="bi bi-people-fill"></i>
                        <p>Votes</p>
                    </div>
                </a>

            </div>
            <div class="col-sidebar">
                <p class="col-header">manage</p>
                <a href="./voters.php">
                    <div class="sub-col-sidebar">
                        <i class="bi bi-people-fill"></i>
                        <p>Voters</p>
                    </div>
                </a>
                <a href="./positions.php">
                    <div class="sub-col-sidebar">
                        <i class="bi bi-people-fill"></i>
                        <p>position</p>
                    </div>
                </a>
                <a href="./candidates.php">
                    <div class="sub-col-sidebar">
                        <i class="bi bi-people-fill"></i>
                        <p>Candidates</p>
                    </div>
                </a>
                <a href="./result.php">
                    <div class="sub-col-sidebar">
                        <i class="bi bi-people-fill"></i>
                        <p>Result</p>
                    </div>
                </a>    
            </div>
            
            <div class="col-sidebar">
                <p class="col-header">setting</p>
                <a href="">
                    <div class="sub-col-sidebar">
                        <i class="bi bi-people-fill"></i>
                        <p>Ballat Position</p>
                    </div>
                </a>
                <a href="">
                    <div class="sub-col-sidebar">
                        <i class="bi bi-people-fill"></i>
                        <p>Election Title</p>
                    </div>
                </a>   
            </div>
            
    </div>    
</body>
</html>