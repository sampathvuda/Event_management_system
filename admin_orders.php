<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> orders</title>
	<link rel="stylesheet" type="text/css" href="pages.css">
    <style>
         table{
	        border-collapse: collapse;
            margin-left:10px;
            margin-right:10px;
            text-align:center;
        }
        th{
            color: #800808;
        }
        th,td{
            border:1px solid black;
            padding:8px;
        }
        h1,h2{
            font-weight:normal;
            margin-left:10px;
        }
        .heading{
            margin-left:0;
            font-weight:bold;
        }
    </style>
</head>
<body>
<div class="fixed-header">
        <h1 class="heading">   Plan Your Event
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
     
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}

echo "<h1>Today's Events</h1>";
$date=date("Y-m-d");
$sql="select * from event,venue,users where event.user_name=users.user_name && event.date ='$date'&& venue.dr_no=event.dr_no && venue.hall_name=event.hall_name";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
    echo "<table><tr><th>DATE</th><th>CUSTOMER NAME</th><th>USER NAME</th><th>PHONE NUMBER</th><th>GUESTS</th><th>EVENT TYPE</th><th>FOOD</th><th>LIGHTS</th><th>FLOWERS</th><th>STAGE</th><th>DANCE</th><th>MUSIC</th><th>CARTOON</th><th>CITY</th><th>VENUE DR-NO</th><th>HALL NAME</th><th>AMOUNT PAID</th><th>TOTAL AMOUNT</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row["date"]."</td><td>".$row["name"]."</td><td>".$row["user_name"]."</td><td>".$row["phone_number"]."</td><td>".$row["no_of_guests"]."</td><td>".$row["event_type"]."</td><td>".$row["food"]."</td><td>".$row["lights"]."</td><td>".$row["flowers"]."</td><td>".$row["stage"]."</td><td>".$row["dance"]."</td><td>".$row["music"]."</td><td>".$row["cartoon"]."</td><td>".$row["city"]."</td><td>".$row["dr_no"]."</td><td>".$row["hall_name"]."</td><td>".$row["amount_paid"]."</td><td>".$row["total_amount"]."</td></tr>";
    }
    echo "</table>";
}
 else{
    echo "<h2>0 results</h2>";
 }

echo "<br><br>";
echo "<h1>Upcoming Events</h1>";
$date=date("Y-m-d");
$sql="select * from event,venue,users where event.user_name=users.user_name && event.date >'$date'&& venue.dr_no=event.dr_no && venue.hall_name=event.hall_name";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
    echo "<table><tr><th>DATE</th><th>CUSTOMER NAME</th><th>USER NAME</th><th>PHONE NUMBER</th><th>GUESTS</th><th>EVENT TYPE</th><th>FOOD</th><th>LIGHTS</th><th>FLOWERS</th><th>STAGE</th><th>DANCE</th><th>MUSIC</th><th>CARTOON</th><th>CITY</th><th>VENUE DR-NO</th><th>HALL NAME</th><th>AMOUNT PAID</th><th>TOTAL AMOUNT</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row["date"]."</td><td>".$row["name"]."</td><td>".$row["user_name"]."</td><td>".$row["phone_number"]."</td><td>".$row["no_of_guests"]."</td><td>".$row["event_type"]."</td><td>".$row["food"]."</td><td>".$row["lights"]."</td><td>".$row["flowers"]."</td><td>".$row["stage"]."</td><td>".$row["dance"]."</td><td>".$row["music"]."</td><td>".$row["cartoon"]."</td><td>".$row["city"]."</td><td>".$row["dr_no"]."</td><td>".$row["hall_name"]."</td><td>".$row["amount_paid"]."</td><td>".$row["total_amount"]."</td></tr>";
    }
    echo "</table>";
}
 else{
    echo "<h2>0 results</h2>";
 }

 echo "<br><br>";
 echo "<h1>Completed Events</h1>";
 $date=date("Y-m-d");
 $sql="select * from event,venue,users where users.user_name=event.user_name && event.date<'$date'&& venue.dr_no=event.dr_no && venue.hall_name=event.hall_name";
 $result = mysqli_query($conn, $sql);
 if(mysqli_num_rows($result)>0)
 {
    echo "<table><tr><th>DATE</th><th>CUSTOMER NAME</th><th>USER NAME</th><th>PHONE NUMBER</th><th>GUESTS</th><th>EVENT TYPE</th><th>FOOD</th><th>LIGHTS</th><th>FLOWERS</th><th>STAGE</th><th>DANCE</th><th>MUSIC</th><th>CARTOON</th><th>CITY</th><th>VENUE DR-NO</th><th>HALL NAME</th><th>AMOUNT PAID</th><th>TOTAL AMOUNT</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row["date"]."</td><td>".$row["name"]."</td><td>".$row["user_name"]."</td><td>".$row["phone_number"]."</td><td>".$row["no_of_guests"]."</td><td>".$row["event_type"]."</td><td>".$row["food"]."</td><td>".$row["lights"]."</td><td>".$row["flowers"]."</td><td>".$row["stage"]."</td><td>".$row["dance"]."</td><td>".$row["music"]."</td><td>".$row["cartoon"]."</td><td>".$row["city"]."</td><td>".$row["dr_no"]."</td><td>".$row["hall_name"]."</td><td>".$row["amount_paid"]."</td><td>".$row["total_amount"]."</td></tr>";
    }
    echo "</table>";
     echo "<br><br>";
 }
  else{
     echo  "<h2>0 results</h2>";
  }
 ?>