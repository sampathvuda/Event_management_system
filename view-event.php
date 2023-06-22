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
    <title>view event</title>
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
        body{
			background-image:url("bgimg3.jpg");
			background-repeat:no-repeat;
            background-attachment:fixed;
			background-size:cover;
		}
        .h-l{
            color:black;
        }
    </style>
</head>
<body>
    <div class="fixed-header">
        <h1>   Plan Your Event
            <div class="header-links">
                <a href="home.php" class="h-l">Home</a>
                <a href="create_event.php" class="h-l">Create Event</a>
                <a href="view-event.php" class="h-l">View Event</a>
                <a href="services.php" class="h-l">Services</a>
                <a href="contactus.php" class="h-l">Contact Us</a>
                <a href="logout.php" class="h-l">logout</a></div>
        </h1>
    </div>
    <div class="empty"></div>
    <h1>View your events <?php echo $_SESSION['name']; ?></h1>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
$user_name=$_SESSION['user_name'];
//$sql="SELECT * FROM `event`,`venue`,`book` WHERE `book.user_name`='$user_name' &&  `book.date`=`event.date` && `venue.hall_name`=`event.hall_name` && `venue.dr_no`=`event.hall_no` order by `event.date`";
$sql="select event.*,venue.city from event,venue where event.user_name='$user_name' && venue.dr_no=event.dr_no && venue.hall_name=event.hall_name order by event.date";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
    echo "<table><tr><th>DATE</th><th>GUESTS</th><th>EVENT TYPE</th><th>FOOD</th><th>LIGHTS</th><th>FLOWERS</th><th>STAGE</th><th>DANCE</th><th>MUSIC</th><th>CARTOON</th><th>CITY</th><th>VENUE DR-NO</th><th>HALL NAME</th><th>AMOUNT PAID</th><th>TOTAL AMOUNT</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row["date"]."</td><td>".$row["no_of_guests"]."</td><td>".$row["event_type"]."</td><td>".$row["food"]."</td><td>".$row["lights"]."</td><td>".$row["flowers"]."</td><td>".$row["stage"]."</td><td>".$row["dance"]."</td><td>".$row["music"]."</td><td>".$row["cartoon"]."</td><td>".$row["city"]."</td><td>".$row["dr_no"]."</td><td>".$row["hall_name"]."</td><td>".$row["amount_paid"]."</td><td>".$row["total_amount"]."</td></tr>";
    }
    echo "</table>";
}
 else{
    echo "0 results";
 }
 ?>