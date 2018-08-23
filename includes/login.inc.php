<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1) {
			header("Location: ../index.php?login=selectfromerror");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=dehasherror");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//log in the user here
					$_Session['u_id'] = $row['user_id'];
					$_Session['u_first'] = $row['user_first'];
					$_Session['u_last'] = $row['user_last'];
					$_Session['u_email'] = $row['user_email'];
					$_Session['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();

				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=lasterror");
			exit();
}