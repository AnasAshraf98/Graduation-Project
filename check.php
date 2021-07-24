<?php 
	session_start(); 
	include ('./database/DBController.php');
	include ('./database/Cart.php');

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = "anas";
    $pass = "anas";

    $re_pass = "anas";
    $name = "anas";
    
    $con=new DBController();
    $cart=new Cart($con);	
    // hashing the password
    //$pass = md5($pass);

	
	
    $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
	
    $result2 =$cart->db->con->query($sql2);
    
    if (!$cart->db->con->query($sql2)) {
        printf("Error message: %s\n",mysqli_error($cart->db->con)) ;
      }

