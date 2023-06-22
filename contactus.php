<?php 
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="pages.css">
    <style>
        h2{
            width:70%
            text-align:center;
        }
        .qa{
            background-color:white;
            border: 0.5px solid #ccc;
            border-radius:30px; 
            text-align:center;
            width:50%;
            padding-top:10px;
            padding-bottom:10px;
            margin-left:auto;
            margin-right:auto;
            margin-top:10px;
        }
        h2{
            font-weight:normal;
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
    <div class="qa"><h2>Most Frequently Asked Questions</h2></div>
    <div class="qa">
        Q)does ur website palns events  in all places/ does ur website palns events  in foreign?<br>
        ans)We plans events in all places across india.
    </div>
    <div class="qa">
        Q)how many yrs of experience do you have?<br>
        ans)We are a start up company but all of our staff are experienced in all kinds of works.
    </div>
    <div class="qa">
        Q)how do u plan the events? <br>
        ans)Our staff will reach the given venue location and will do the works which are requested by you.
    </div>
    <div class="qa">
        Q)how many days before we have to register for a event? <br>
        ans)you need to book your event atleast one day before the event day.
    </div>
    <div class="qa">
        Q)will you return the advance amount in case of canceling event? <br>
        ans)No amount will be given back in case of canceling the event.
    </div>
    <div class="qa">
        <h2>For Any Further Queries</h2>
        <h2>contact us at: 6305487934</h2>
        <h2> what's app : 6305487934</h2>
        <h2>E-mail : sampathvuda789@gmail.com</h2>
    </div>
    <br><br>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>