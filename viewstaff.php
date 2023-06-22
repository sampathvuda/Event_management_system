<?php 
session_start();
include "db_conn.php";
if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view staff</title>
    <link rel="stylesheet" type="text/css" href="pages.css">
    <style>
         table{
	        border-collapse: collapse;
            margin-left:auto;
            margin-right:auto;
            text-align:center;
        }
        th{
            color: #800808;
        }
        th,td{
            border:1px solid black;
            padding:8px;
        }
        .heading{
            text-align:center;
            margin-left:0;
            font-weight:bold;
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
            </div>
        </h1>
    </div>
    <div class="empty"></div>
    <h1 class="heading">staff details:</h1>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
$sql="select * from users,staff where users.user_name=staff.user_name";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
    echo "<table><tr><th>NAME</th><th>USERNAME</th><th>WORK</th><th>PHONE NUMBER</th><th>SALARY</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row["name"]."</td><td>".$row["user_name"]."</td><td>".$row["work"]."</td><td>".$row["phone_number"]."</td><td>".$row["salary"]."</td></tr>";
    }
    echo "</table>";
}
 else{
    echo "0 results";
 }
 ?>