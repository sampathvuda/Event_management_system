<?php 
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> Add staff</title>
	<link rel="stylesheet" type="text/css" href="pages.css">
    <style>
     h2{
          font-weight:normal;
     }
    form{        
	width:800px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 70px;
    text-align:center;
    }
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
     select,option{
          width:190px;
          padding:5px;
          margin-top:5px;
          margin-bottom:15px;
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
     <form action="addstaff-chech.php" method="post">
        <h2>Enter staff details</h2><br>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <label>Name</label><br>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label><br>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
          
          <label>Phone Number</label><br>
     	<input type="tel" 
                 name="phno" 
                 placeholder="Phone Number"><br>

        <label>Work</label><br>
        <select name="work">
          <option value="dance">dance</option>
          <option value="chef">chef</option>
          <option value="decoration">decoration</option>
          <option value="cartoon">cartoon</option>
          <option value="music">music</option>
        </select><br>
        <!-- <input type="text" 
                 name="work" 
                 placeholder="designation"><br> -->

        <label>salary</label><br>
        <input type="number" 
                 name="salary" 
                 placeholder="salary"><br>

     	<label>Password</label><br>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label><br>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>
          <button type="submit">Sign Up</button>
     	
     </form>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>