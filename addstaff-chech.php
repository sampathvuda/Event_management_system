<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
		&& isset($_POST['name']) && isset($_POST['re_password'])&& isset($_POST['phno'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	function valid_phone($phone)
	{
    	if(preg_match('/^[0-9]{10}+$/', $phone))
		{
			return $phone;
		}
		else{
			header("Location: addstaff.php?error=Enter a Valid Phone Number&$user_data");
	    	exit();
		}
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$user_data = 'uname='. $uname. '&name='. $name;
	$phno=valid_phone($_POST['phno']);
    $salary=validate($_POST['salary']);
    $work=validate($_POST['work']);

	if (empty($uname)) {
		header("Location: addstaff.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: addstaff.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: addstaff.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if(empty($phno)){
        header("Location: addstaff.php?error=Phone Number is required&$user_data");
	    exit();
	}

	else if(empty($salary)){
        header("Location: addstaff.php?error=Salary is required&$user_data");
	    exit();
	}
    else if(empty($work)){
        header("Location: addstaff.php?error=Work is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: addstaff.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{
        $pass = $pass; 
	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: addstaff.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $ty="staff";
           $sql2 = "INSERT INTO users(user_name, phone_number, password, name,type_of_user) VALUES('$uname', '$phno','$pass', '$name','$ty')";
           $result2 = mysqli_query($conn, $sql2);
           $sql3 = "INSERT INTO staff(user_name, work, salary) VALUES('$uname', '$work','$salary')";
           $result3=mysqli_query($conn,$sql3);
           if ($result2 && $result3) {
           	 header("Location: addstaff.php?success=successfully entered staff details");
	         exit();
           }else {
	           	header("Location: addstaff.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: addstaff.php");
	exit();
}