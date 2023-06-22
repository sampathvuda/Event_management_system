<?php 
session_start(); 
include "db_conn.php";
if ( isset($_POST['event_date'])
		&& isset($_POST['no_of_guests']) && isset($_POST['city'])&& isset($_POST['do-no']) && isset($_POST['function_hall'])) {

	function validate($data)
    {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	function check_date($data)
    {
       if(date("Y-m-d")>=$data)
	   {
	   return 1;
	   }
	   else{
		return 0;
	   }
	}

	$type = validate($_POST['type_of_event']);
	$date = validate($_POST['event_date']);
	$guests=validate($_POST['no_of_guests']);
	$city = validate($_POST['city']);
	$do_no = validate($_POST['do-no']);
	$hall_name = validate($_POST['function_hall']);
	$flowers='NO';
	$lights='NO';
	$stage='NO';
	$cartoon='NO';
	$music='NO';
	$dance='NO';
	$budget=0;
	$food=validate($_POST['food']);
	if(isset($_POST['decoration1']))
	{
		$flowers="YES";
		$budget=$budget+25000;
	}
	if(isset($_POST['decoration2']))
	{
		$lights="YES";
		$budget=$budget+15000;
	}
	if(isset($_POST['decoration3']))
	{
		$stage="YES";
		$budget=$budget+25000;
	}
	if(isset($_POST['entertainment1']))
	{
		$music="YES";
		$budget=$budget+5000;
	}	
	if(isset($_POST['entertainment2']))
	{
		$cartoon="YES";
		$budget=$budget+10000;
	}
	if(isset($_POST['entertainment3']))
	{
		$dance="YES";
		$budget=$budget+10000;
	}
	if($food=="veg")
	{
		$budget=$budget+$guests*400;
	}
	else if($food=="non-veg")
	{
		$budget=$budget+$guests*600;
	}
	if (empty($type)) {
		header("Location: create_event.php?error=type of event is required");
	    exit();
	}
	else if(empty($date)){
        header("Location: create_event.php?error=date is required");
	    exit();
	}
	else if(check_date($date)){
        header("Location: create_event.php?error=please choose a upcoming date");
	    exit();
	}
	else if(empty($guests)){
        header("Location: create_event.php?error=count of guests is required");
	    exit();
	}
	else if($guests<50){
        header("Location: create_event.php?error=Number of guests is less than 50");
	    exit();
	}
	else if( ($music=='NO') && ($dance=='NO')&&($cartoon=='NO'))
	{
        header("Location: create_event.php?error=choose some kind of entertainment");
	    exit();
	}
	else if( ($flowers=='NO') && ($stage=='NO')&&($lights=='NO'))
	{
        header("Location: create_event.php?error=choose some kind of decoration");
	    exit();
	}
	else if(empty($food)){
        header("Location: create_event.php?error=choose the kind of food required");
	    exit();
	}
	else if(empty($city)){
        header("Location: create_event.php?error=city name is required");
	    exit();
	}
	else if(empty($do_no)){
        header("Location: create_event.php?error=Door number is required");
	    exit();
	}
    else if(empty($hall_name)){
        header("Location: create_event.php?error=Name of function hall is required");
	    exit();
	}
    else
	{
		$sql = "SELECT * FROM event WHERE date='$date'"; 

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			header("Location: create_event.php?error=sry we are busy in the given date");
	    	exit();
		}
		else
		{
		$_SESSION['type']=$type;
		$_SESSION['city']=$city;
		$_SESSION['hall_name']=$hall_name;
		$_SESSION['do_no']=$do_no;
		$_SESSION['food']=$food;
		$_SESSION['flowers']=$flowers;
		$_SESSION['stage']=$stage;
		$_SESSION['lights']=$lights;
		$_SESSION['date']=$date;
		$_SESSION['guests']=$guests;
		$_SESSION['music']=$music;
		$_SESSION['dance']=$dance;
		$_SESSION['cartoon']=$cartoon;
		$_SESSION['budget']=$budget;
		header("Location: payment.php");
	    exit();
		}
		//INSERT INTO `user` (`name`, `job_title`) VALUES ('john', NULLIF('$jobTitle', ''));
		//INSERT INTO `user` (`name`, `job_title`) VALUES ('john', IF('$jobTitle' = '', NULL, '$jobTitle'));
    }
}else{
	header("Location: create_event.php");
	exit();
}
	