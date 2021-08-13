<?php
$SALT = "asdjhbqwuidnwipr7y289ehiydvqiux";

$db_conn       = NULL;
$db_servername = "localhost";
$db_username   = "root";
$db_password   = "";
$db_name       = "msec";
$host          ="localhost";

function get_db_connection() {
	global $db_conn;
	global $db_servername;
	global $db_username;
	global $db_password;
	global $db_name;

	if ($db_conn != NULL) {
		return $db_conn;
	} else {
		$db_conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);
		if (!$db_conn) {
			die("Connection failed: ".mysqli_connect_error());
		} else {
			return $db_conn;
		}
	}
}

function get_hashed_passwd($password) {
	global $SALT;
	return md5(strrev($password.$SALT));
}

/*
1. Save the details to the database
2. Password has to be hashed.
3. OTP has to be generated and saved
 */
function do_signup($username, $password,$emailid) {
	$hashed_passwd = get_hashed_passwd($password);
	$query         = "INSERT INTO `msec`.`main` (`user_name`,`mail_id`, `password`) VALUES ('$username','$emailid','$hashed_passwd');";
	$db_conn       = get_db_connection();
	if (mysqli_query($db_conn, $query)) {
		return 1;
	} else {
		echo mysqli_error($db_conn);
		return 0; //user already exists
	}
}



/*
1. Check if user exists in the database
2. If user exists, check if the password is right.
3. If password is right, set cookies.
 */

function do_login($username, $password) {
	$hashed_passwd = get_hashed_passwd($password);
	$query   = "SELECT * FROM msec.main WHERE user_name='$username' AND password='$hashed_passwd';";
	$db_conn = get_db_connection();
	$result  = mysqli_query($db_conn, $query);
	if (mysqli_num_rows($result) == 1) {
		$token = get_hashed_passwd(rand(100000,999999));
		$expiry = time()+(60*60*2); //means 2 hour from now.
		return add_session($username, $token, $expiry);
	} else {
		return 0;
	}
}

/*
1. On successful login, we generate a $token and add it to the sessions table.
2. Set the proper expiry time for the same as the cookie.
 */
function add_session($username, $token, $expiry) {
	$mysqltime = date('Y-m-d H:i:s', $expiry);
	$query = "INSERT INTO `msec`.`session` (`user_name`, `token`, `expiry`) VALUES ('$username', '$token', '$mysqltime');";

	$db_conn = get_db_connection();
	if (mysqli_query($db_conn, $query)) {
		setcookie('username', $username ,$expiry,'/', $host);
		setcookie('token', $token ,$expiry,'/', $host);
		return 1;
	} else {
		return mysqli_error($db_conn);
	}
}

/*
1. Everytime when a user access any page, we check the $username and $token combo from $_COOKIE to ensure that the session is still valid and not expired.
2. If valid, let him through.
3. If not, invalidate the session and send him to login.
 */
function verify_session($username, $token) {
	$query   = "SELECT * FROM msec.session WHERE user_name='$username' AND token = '$token';";
	$db_conn = get_db_connection();
	$result  = mysqli_query($db_conn, $query);
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		if((int)$row['active'] == 1){
			$expiry = strtotime($row['expiry']);
			if($expiry > time()){
				return 1;
			} else {
				return 0;
			}
		} else {
			return 0;
		}
	} else {
		return 0;
	}
}

/*
1. Set the expiry to current time and set the active to 0.
This is also logout
 */
function invalidate_session($username, $token) {
	$query   = "UPDATE `msec`.`session` SET `active` = '0' WHERE `user_name` = '$username' AND `token` = '$token';";
	$db_conn = get_db_connection();
	setcookie('username', $username ,time()-3600,'/', $host);
	setcookie('token', $token ,time()-3600,'/', $host);
	return mysqli_query($db_conn, $query);
}

function get_current_username(){
	if(verify_session($_COOKIE['username'], $_COOKIE['token'])){
		return $_COOKIE['username'];
	} else {
		return NULL;
	}
}


?>