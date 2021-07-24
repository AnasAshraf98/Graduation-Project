<?php 
session_start(); 
include ('../database/DBController.php');
include ('../database/Cart.php');


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        $con=new DBController();
		$cart=new Cart($con);
		

		$result = $cart->check($uname,$pass);
		//echo $result;
		//if (mysqli_num_rows($result) === 1) {
			//$row = mysqli_fetch_assoc($result);
            if ($result['user_name'] === $uname && $result['password'] === $pass) {
            	$_SESSION['user_name'] = $result['user_name'];
            	$_SESSION['name'] = $result['name'];
            	$_SESSION['id'] = $result['id'];
            	header("Location: ../rate.php");
		        exit();
            }else{
				echo $result;
				header("Location: index.php?error=Incorect User name or password");
		        exit();
		 	}
		/*}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		} */
	}
	
}else{
	header("Location: index.php");
	exit();
}