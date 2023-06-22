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
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="pages.css">
    <style>
        body
        {
            background-image:url('event3.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-size:cover;
        }
        .quote{
            /* background-color:blue; */
            margin-top:100px;
            font-size:50px;
            color:white;
            text-align:center;
        }
        /* .fixed-header{
            opacity: 0.6;
        }
        .h-l{
            color:black;
        } */
        .fixed-header{
            background-color:rgba(255,255,255,0.2);
            border-color:rgba(255,255,255,0.2);
        }
        h1,.h-l{
            color:white;
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
    <h1 class="quote">We Create You Celebrate</h1>
    <h1 class="quote">Hello: <?php echo $_SESSION['name']; ?></h1>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>