<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		 body{
			background-image:url("bgimg8.jpg");
			background-repeat:no-repeat;
            background-attachment:fixed;
			background-size:cover;
		}
	</style>
</head>
	<body>
		<div>
		<form action="" method='post'>
			<h2><?php
					// $total=$_SESSION['budget'];
					// echo "Total amount:".$total." ";
					echo "pay minimum: 20,000";
			?></h2>
			<h2>Payment Details</h2>
			<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     		<?php } ?>
			<div>CARD NUMBER<input name="card_no" type="number" min="100000000000" max="999999999999"></div>
            <div>EXPIRATION DATE <input name='exp_date' type="text" minlength="5" maxlength="5" placeholder="MM/YY"></div>
			<div>CVC CODE <input name='cvv' type="number" min="100" max="999"></div>
			<div>AMOUNT <input name='amount' type="number" min="20000" required></div>
            <input name='submit' type="submit">
		</form>	
		</div>	
	</body>
</html>	
<?php 
session_start();
include "db_conn.php";
	if(isset($_POST['submit']))
		{
			$amount=$_POST['amount'];
			$cardnumber=$_POST['card_no'];
			$budget=$_SESSION['budget'];
            echo $amount;
            echo $cardnumber;
			if($amount<20000)
			{
				header("Location: payment.php?error=Amount paid is less than minimum advance amount.");
	    		exit();
			}
			// else if($amount>$budget)
			// {
			// 	header("Location: payment.php?error=Amount paid is more than total.");
	    	// 	exit();
			// }
			else
				{
					$do_no=$_SESSION['do_no'];
					$hall_name=$_SESSION['hall_name'];
					$city=$_SESSION['city'];
					$sql = "SELECT * FROM venue WHERE dr_no='$do_no' && hall_name='$hall_name'";
					$result = mysqli_query($conn, $sql);
					$result2=0;
					if (mysqli_num_rows($result) < 1)
					{
						$sql2 = "INSERT INTO venue(dr_no,hall_name,city) VALUES('$do_no', '$hall_name','$city')";
						$result2 = mysqli_query($conn, $sql2);
					}
					if ($result2 || mysqli_num_rows($result) > 0)
					{
						$type=$_SESSION['type'];
						$city=$_SESSION['city'];
						$hall_name=$_SESSION['hall_name'];
						$dono=$_SESSION['do_no'];
						$food=$_SESSION['food'];
						$flowers=$_SESSION['flowers'];
						$stage=$_SESSION['stage'];
						$lights=$_SESSION['lights'];
						$date=$_SESSION['date'];
						$guests=$_SESSION['guests'];
						$music=$_SESSION['music'];
						$dance=$_SESSION['dance'];
						$cartoon=$_SESSION['cartoon'];
						$budget=$_SESSION['budget'];
						$uname=$_SESSION['user_name'];
						$sql3 = "INSERT INTO `event`(`date`,`user_name`, `no_of_guests`, `event_type`, `food`, `lights`, `flowers`, `stage`, `dance`, `music`, `cartoon`, `dr_no`, `hall_name`, `amount_paid`, `total_amount`) VALUES ('$date','$uname','$guests','$type','$food','$lights','$flowers','$stage','$dance','$music','$cartoon','$dono','$hall_name','$amount','$budget')";
						$result3 = mysqli_query($conn, $sql3);
						header("Location: create_event.php?success=payment successful,Your event is booked.");
	    					exit();
					}  
					else 
						{
							header("Location: create_event.php?error=unknown error occurred&$user_data");
							exit();
						}
				}
		}
    ?>
