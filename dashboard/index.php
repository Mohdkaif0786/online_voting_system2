<?php
 
session_start();    
include('../database/config.php');
include('../database/api.php');
$cand_db=new Database_operation($con,'candidate');
$voters_db=new Database_operation($con,'signup');
$voted_db=new  Database_operation($con,'allvoter');

$total_candidate=count($cand_db->read());
$total_voters=count($voters_db->read());
$total_voted=count($voted_db->read());



if(($_SESSION['user']['mobile']!="8368639598" && $_SESSION['user']['password']!="kaif")){
    echo "<script>window.open('../login.php','_self')</script>"; 
}

$dataPoints = array( 
	array("y" => 3373.64, "label" => "Germany" ),
	array("y" => 2435.94, "label" => "France" ),
	array("y" => 1842.55, "label" => "China" ),
	array("y" => 1828.55, "label" => "Russia" ),
	array("y" => 1039.99, "label" => "Switzerland" ),
	array("y" => 765.215, "label" => "Japan" ),
	array("y" => 612.453, "label" => "Netherlands" )
);
$test=array();
$count=0;
$test_db=new Database_operation($con,'test');
$test_data=$test_db->read();
// echo "<pre>";

foreach($test_data as $data){
    // echo $count;
    $test[$count]['label']=$data['title'];
    $test[$count]['y']=$data['seat'];
    $count++;
}
// echo $count;
// print_r($test);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<script>
    window.onload = function() {
 
    var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Gold Reserves"
	},
	axisY: {
		title: "Gold Reserves (in tonnes)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

    <style>
        

        .dashboard-cards{
            width:100%;
            /* border:1px solid red; */
            display:flex;
            gap:24px;
        }
        .card{
            width:25%;
            height:auto;
            /* padding:30px; */
            /* border:1px solid red; */
            border-radius:2px;
            position:relative;
            top:0px;
            left:0px;
            background-color:rgb(0,192,239);
            color:white;
        }
        .c2{
            background-color:rgb(0,166,90);
        }
        .c3{
            background-color:rgb(243,156,17);
        }
        .c4{
            background-color:rgb(221,76,57);
        }
        .card-body{
            display:flex;
            gap:20px;
            justify-content:space-between;
            padding:12px 12px 32px 12px;
        }
        .card-icon > .bi {
            font-size:70px;
            opacity:0.4;
            /* border:1px solid red; */
        }
        .num-data{                
             font-size:34px;
             font-weight:700;
        }
        .card-heading{
            opacity:0.8;
        }
        .card-footer{
            width:100%;
            background-color:rgb(0,171,215);
            display:flex;
            position:absolute;
            bottom:0px;
            left:0px;
            justify-content:center;
            align-items:center;
            /* border:1px solid red; */
        }
        .c2-footer{
            background-color:rgb(0,149,81);
        }
        .c3-footer{
            background-color:rgb(218,140,16);
        }
        .c4-footer{
            background-color:rgb(198,66,51);
        }
        .card-footer a{
            color:white;
            opacity:0.9;
        }
        .votes-tally h2{
            padding:30px 10px 0px 0px;
        }

    </style>
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
                   <div class="dashboard-cards">
                    <!-- card 1 -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-content">
                                     <div class="num-data"><?php echo 1 ?></div>
                                    <div class="card-heading"> No of Position</div>   
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-menu-button-wide"></i>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="./position.php">more info &#8594;</i></a>
                            </div>
                    </div>
                    <!-- card 2 -->
                    <div class="card c2">
                            <div class="card-body">
                                <div class="card-content">
                                     <div class="num-data"><?php echo $total_candidate?></div>
                                    <div class="card-heading"> No of Candidates</div>   
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-ev-station"></i>
                                </div>
                            </div>
                            <div class="card-footer c2-footer">
                                <a href="./candidates.php">more info &#8594;</i></a>
                            </div>
                    </div>
                    <!-- card 3 -->
                    <div class="card c3">
                            <div class="card-body">
                                <div class="card-content">
                                     <div class="num-data"><?php echo $total_voters?></div>
                                    <div class="card-heading"> Total Voters</div>   
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-person-check-fill"></i>
                                </div>
                            </div>
                            <div class="card-footer c3-footer">
                                <a href="./voters.php">more info &#8594;</i></a>
                            </div>
                    </div>
                    <!-- card 4 -->
                    <div class="card c4">
                            <div class="card-body">
                                <div class="card-content">
                                     <div class="num-data"><?php echo  $total_voted?></div>
                                    <div class="card-heading"> Voters Voted</div>   
                                </div>
                                <div class="card-icon">
                                    <i class="bi bi-pencil-square"></i>
                                </div>

                            </div>
                            <div class="card-footer c4-footer">
                                <a href="./votes.php">more info &#8594;</i></a>
                            </div>
                    </div> 
                    <!-- card end -->
                </div>
            
                <!-- votes tallly -->
                    <div class="votes-tally">
                        <h2>Votes Tally</h2>
                        <div id="chartContainer" style="height: 340px; width: 100%;"></div>
                    </div>

                    
                
                <!--  -->
                
        </div>
    </div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>