<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
                *{
            box-sizing:border-box;
        }
        .website-content{
            margin-top:10px;
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
            padding:10px 18px;
            border:none;
            color:white;
            cursor:pointer;
            box-shadow:0px 0px 5px 1px rgba(0,0,0,0.2);
            outline:none;
            font-weight:600;
            border-radius:3px;
            background-color:#EE4E4E;
        } 
        .search-box{
            /* border:2px solid red; */
            display:flex;
            border-radius:none;
              justify-content:right;

        } 
        .search-box input{
            padding:9px 27px  9px 10px;
            font-size:15px;
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
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
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
           gap:3px;
        }
        .pagination  button{
            padding:8px 20px;
            font-size:18px;
            border:none;
            cursor:pointer;
            outline:none;
            font-weight:400;
        }

        .num-btn{
            color:white;
            padding:6px 18px;
            background-color:rgb(60,141,188);
        }

        .pagination  button:last-child,.pagination  button:first-child{
            padding:6px 18px;
             color:rgba(0,0,0,0.4);
        }
    </style>

    <?php
       session_start();
       if(($_SESSION['user']['mobile']!="8368639598" && $_SESSION['user']['password']!="kaif")){
           echo "<script>window.open('../index.php','_self')</script>"; 
       }
       
      echo "<br>";
      include('..\database\config.php');
      include('..\database\api.php');
      $allvotes_db=new Database_operation($con,'allvoter');
     $allvotes_datas= $allvotes_db->read();

     if(isset($_GET['search']) && strlen($_GET['search'])>0){
        // echo "<script>alert('yes')</script>";
        $sch_key=$_GET['search'];

        $allvotes_datas=$allvotes_db->getData_like('user_name',$sch_key);
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
                         <a href=".\votes.php" class="reset-btn">
                                <button>
                                    <i class="bi bi-recycle"></i>
                                     Reset
                                </button>
                            </a>                                              
                            <form method='' class="search-box">
                                <input type="text" name='search'  placeholder="voter name" onchange="changeHandler(5)">
                                <button>search</button>
                            </form>
                        <table class="dashboard-table">
                            <thead>
                                <tr>
                                    <th>Vid</th>
                                    <th>Voter Name</th>
                                    <th>Candidate</th>
                                    <th>Party Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($allvotes_datas as $vote){
                                       ?>
                                        <tr>
                                            <td><?php echo $vote['id'] ?></td>
                                            <td><?php echo $vote['user_name'] ?></td>
                                            <td><?php echo $vote['user_name'] ?></td>
                                            <td><?php echo $vote['party_name'] ?></td>
                                            <td><?php echo $vote['date'] ?></td>
                                            <td><?php echo $vote['time'] ?></td>
                                        </tr>    
                                        <?php
                                     }
                                ?>
                            </tbody>
                        </table>  
                        <div class="table-section-footer">
                            <p>showing 1 to 2 entries</p>
                            <div class='pagination'>
                                <button>previous</button>
                                <button class="num-btn">1</button>
                                <button>next</button>
                            </div>
                        </div>                  
                </div>                

            </div>    
        </div>
</div>


</body>
</html>