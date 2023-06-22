<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) 
{

    $sql = "SELECT * FROM users WHERE type_of_user='customer'";
	$result = mysqli_query($conn, $sql);
	$count=mysqli_num_rows($result);
    $_SESSION["count_of_users"]=$count;

    $sql1 = "SELECT * FROM users WHERE type_of_user='staff'";
	$result1 = mysqli_query($conn, $sql1);
	$count1=mysqli_num_rows($result1);
    $_SESSION["count_of_staff"]=$count1;

    $sql2 = "SELECT * FROM event";
	$result2 = mysqli_query($conn, $sql2);
	$count2=mysqli_num_rows($result2);
    $_SESSION["count_of_event"]=$count2;
    
    $date=date("Y-m-d");
    $sql3 = "SELECT * FROM event where date<'$date'";
	$result3 = mysqli_query($conn, $sql3);
	$count3=mysqli_num_rows($result3);
    $_SESSION["count_of_completed"]=$count3;

    $date=date("Y-m-d");
    $sql4 = "SELECT * FROM event where date>'$date'";
	$result4 = mysqli_query($conn, $sql4);
	$count4=mysqli_num_rows($result4);
    $_SESSION["count_of_upcoming"]=$count4;

    $date=date("Y-m-d");
    $sql5 = "SELECT * FROM event where date='$date'";
	$result5 = mysqli_query($conn, $sql5);
	$count5=mysqli_num_rows($result5);
    $_SESSION["count_of_today"]=$count5;
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" type="text/css" href="pages.css">
    <style>
        .dash{
            height: 150px;
            width:150px;
            margin:10px;
            background-color:aqua;
            border-radius:20px;
            text-align:center;
        }
        .container{
            width:50%;
            border-radius:20px;
            display:flex;
            justify-content:space-evenly;
            flex-wrap:wrap;
            align-content:space-evenly;
            gap: 1em;
            padding:20px;
            margin-left:auto;
            margin-right:auto;
        }
        .welcome{
            text-align:center;
            font-weight:normal;
        }
    </style>
</head>
<body>
    <div class="fixed-header">
        <h1>   Plan Your Event
            <div class="header-links">
                <a href="adminlogin.php" class="h-l">Home</a>
                <a href="viewstaff.php" class="h-l">view staff</a>
                <a href="addstaff.php" class="h-l">Add staff</a>
                <a href="removestaff.php" class="h-l">Remove staff</a>
                <a href="admin_orders.php" class="h-l">Orders</a>
                <a href="logout.php" class="h-l">logout</a></div>
        </h1>
    </div>
    <div class="empty"></div>
    <h1 class="welcome">Welcome admin</h1>
    <h2 class="welcome">stats of users and events</h2>
    <div class="container">
        <div class="dash">
                <h1>
                    <?php
                        echo $_SESSION["count_of_users"];
                    ?>
                </h1>
                 Total number of <br>users
        </div>
        <div class="dash">
        <h1>
           <?php
            echo $_SESSION["count_of_staff"];
            ?>
           </h1>
           Total number of <br> staff
        </div>
        <div class="dash">
            <h1>
            <?php
                echo $_SESSION["count_of_event"];
                ?>
            </h1>
            Total number of events registered
        </div>
        <div class="dash">
        <h1>
           <?php
            echo $_SESSION["count_of_completed"];
            ?>
           </h1>
           Total number of events completed
        </div>
        <div class="dash">
            <h1>
            <?php
                echo $_SESSION["count_of_upcoming"];
                ?>
            </h1>
            Total number of events upcoming
        </div>

        <div class="dash">
            <h1>
                <?php
                    echo $_SESSION["count_of_today"];
                    ?>
                </h1>
                Events present today
        </div>
    </div>
</body>
</html>

<?php  
}else{
     header("Location: index.php");
     exit();
}
 ?>