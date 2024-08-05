<!-- <?php
session_start();

?> -->
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
    .header{
        width:100%;
        height:55px;
        display:flex;
        position:fixed;
        top:0px;left:0px;
        justify-content:space-evenly;
        align-items:center;
        padding: 0px !important;
        color:white;
        /* border:2px solid red; */
        background-color:rgb(60,141,188);
    }
    .logo{
        width:235px;
        height:100%;
        display:flex;
        justify-content:center;
        align-items:center;
        background-color:rgb(54,127,168);
        flex-shrink:0;
        text-align:center;
        /* border:1px solid red; */
    }
    .logo h3{
        font-size:20px;
        font-weight:700;

    }
    .logo h3 span{
        font-weight:600;
    }
    .menu{
        width:calc(100% - 235px);
        height:auto;
        display:flex;
        padding:12px;
        justify-content:space-between;
        align-items:center;
    }
    .menu a{
        text-decoration:none;
    }
    .menu i{
        font-size:20px;
        color:white;
    }
    .menu > .admin-info{
        display:flex;
        align-items:center;
        gap:5px;
    }
    .menu .admin-info img{
        width:34px !important;
        border-radius:50%;
    }
    .menu .admin-info p{
        font-size:14px;
    }
    .menu   button{
        padding:6px 14px;
        color:white;
        background-color:red;
        outline:none;
        border:none;
        cursor:pointer;
        border-radius:5px;
        margin-right:10px;
    }
    </style>
</head>
<body>

    <nav class="header">
            <div class="logo">
                <h3>e-Voting<span>System</span></h3>
            </div>
            <div class="menu">
                    <a href=""><i class="bi bi-list"></i></a>
                    <div class="admin-info">
                        <a href="./?logout=true"><button>Logout</button></a>
                        <img src=<?php echo ".\.".$_SESSION['user']['pimg']  ?> alt="admin img">
                         <p><?php echo $_SESSION['user']['name'];?></p>
                    </div>
            </div>
    </nav>

</body>
</html>