<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Remove Staff</title>
	<link rel="stylesheet" type="text/css" href="pages.css">
    <style>
        form{
            text-align:center;
        }
        h2{
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
    <form action="" method="post">
    <h2>enter staff details to remove</h2>
	<?php 
    if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    username: <br>   
    <input type="text" name="username">
    <input name='submit' type="submit">
    </form>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}

if(isset($_POST['submit']))
		{
            $username=$_POST['username'];
            $sql="SELECT * FROM USERS WHERE user_name='$username' && type_of_user='staff'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $sql2="DELETE FROM STAFF WHERE user_name='$username'";
                $result2=mysqli_query($conn,$sql2);
                $sql3="DELETE FROM USERS WHERE user_name='$username'";
                $result3=mysqli_query($conn,$sql3);
                            echo "<h2>successfully removed $username</h2>";
            }
            else{
                echo "<h2>No staff with given username exists</h2>";
            }
        }
 ?>