<?php 
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="pages.css">
    <style>
        p {
            width:50%;
            padding-top:10px;
            padding-bottom:10px;
            margin-left:auto;
            margin-right:auto;
            text-align:center;
            color:red;
            background-color:aqua;
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
    <form action="event-check.php" method="post" class="crt-evnt">
        <h1 class="crt-headings">Create Event</h1>
        <!-- <h2 class="crt-headings">Minimum Booking Amount 20,000/-</h2> -->
        <h2 class="crt-headings">Minimum Guests 50</h2>
        <br><br>
        <?php if (isset($_GET['error'])) { ?>
     		<p class="err"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <label>Type of Event</label><br>
        <input type="radio" name="type_of_event" class="box-radio" id="marriage" value="marriage">
        <label for="marriage">Marriage</label>
        <input type="radio" name="type_of_event" class="box-radio" id="birthday" value="birthday">
        <label for="birthday">Birthday</label>
        <input type="radio" name="type_of_event" class="box-radio" id="engagement" value="engagement">
        <label for="engagement">Engagement</label>
        <br><br>
        <label>Event Date</label><br>
        <input type="date" min="2022-11-30" class="date" name="event_date">
        <br><br>
        <label>Number of Guests</label><br>
        <input type="numeric" placeholder="100" class="guests" name="no_of_guests">
        <br><br>
        <label>Entertainment</label><br>
        <input type="checkbox" name="entertainment1" class="box-radio" id="music" value="music">
        <label for="music">Music (5000/-)</label>
        <input type="checkbox" name="entertainment2" class="box-radio" id="cartoon" value="cartoon">
        <label for="music">Cartoon (10,000/-)</label>
        <input type="checkbox" name="entertainment3" class="box-radio" id="dance" value="dance">
        <label for="music">Dance (10,000/-)</label>
        <br><br>
        <label>Decoration</label><br>
        <input type="checkbox" name="decoration1" class="box-radio" id="flowers" value="flowers">
        <label for="flowers">Flowers (25,000/-)</label>
        <input type="checkbox" name="decoration2" class="box-radio" id="lights" value="lights">
        <label for="lights">Lights (15,000/-)</label>
        <input type="checkbox" name="decoration3" class="box-radio" id="stage" value="stage">
        <label for="stage">Stage (25,000/-)</label>
        <br><br>
        <label>Food</label><br>
        <input type="radio" name="food" class="box-radio" id="veg" value="veg">
        <label for="veg">Veg (400/- per head)</label>
        <input type="radio" name="food" class="box-radio" id="non-veg" value="non-veg">
        <label for="non-veg">Non-Veg (600/- per head)</label>
        <br><br>
        <label>Venue Address</label><br>
        <input type="text" name="city" class="address" placeholder="City name"><br>
        <input type="text" name="function_hall" class="address" placeholder="Xyz functionhall"><br>
        <input type="text" name="do-no" class="address" placeholder="Door number"><br><br>
        <button type="submit" class="book">Book</button>
    </form>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>