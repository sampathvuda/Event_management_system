<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .btn{
            background-color:silver;
            border-radius: 8px;
        }
        button:hover
        {
            opacity: 0.7;
        }
        body {
            background-color:#e4d1d1;
            margin:10px;
            display:flex;
        }
        form {
            background-color:#f0efef;
            margin-left:auto;
            width:1000px;
            margin-right:auto;
            text-align:center;
            border: 1px solid #ccc;
        }
        #heading{
            font-size:32px;
            padding-top:56px;
            padding-bottom:32px;
        }
        #buttons{
            text-align:right;
            background-color: #f2f6ff;
            padding-right:10px;
        }

    </style>
</head>
<body>
    <form action="">
        <div id="buttons">
            <h2 id="heading">PLAN YOUR EVENT</h2>
            <button><a href="index.php">login</a></button>
            <button><a href="signup.php">signup</a></button>
        </div>
    </form>
</body>
</html> -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starting page</title>
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
        .buttons{
                display:flex;
                justify-content:center;
                align-items:center;
                height:200px;
        }
        button{
            background-color: whitesmoke;
            border-radius:20px;
            padding-left:15px;
            padding-right:15px;
            padding-top:10px;
            padding-bottom:10px;
            margin:30px;
        }
        a{
            text-decoration:none;
            font-size:20px;
            font-weight:bold;
        }
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
    <div class="buttons">
        <button><a href="index.php">login</a></button>
        <button><a href="signup.php">signup</a></button>
    </div>

</body>
</html>