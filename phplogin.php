<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="styles/basic/style.css" type="text/css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

    <?php
		session_start();
		include "connect.php";
		include "functions.php";
		include "common.php";

		$_SESSION['roleID'] = 0;
		$username = mysqli_real_escape_string($link,$_POST['username']);
		$password = mysqli_real_escape_string($link, $_POST['password']);
		
		if (empty($username) || empty($password)) {
           
			// send_message('Πρέπει να συμπληρώσετε και τα 2 πεδία (όνομα και κωδικό χρήστη)','error');
			header("Location: index.html");
			exit();
		}
		else{
         $sql = "SELECT username, passwd, roleID FROM users WHERE username='$username' and passwd='$password'";
		$result = mysqli_query($link, $sql) or die(mysqli_error($link));
		$count = mysqli_num_rows($result);
		
		if ($count == 1) {
			$row = mysqli_fetch_assoc($result);
			$role = $row['roleID'];
			
			$_SESSION['username'] = $username;
			$_SESSION['passwd'] = $password;
			$_SESSION['roleID'] = $role;
			$_SESSION['userID'] = $row['userID'];
			} else {
			send_message('Wrong Credentials Try Again', 'error');
            
			header("Location: Login.php");
			exit();
		}
		
		switch ($_SESSION['roleID']) {
		case 1: //admin
            echo "success!";
            header("Location: index.php");
            // exit();
            break;
		case 2: //writer
            header("Location: writer.php");
            exit();
            break;
		case 3: //reader
            header("Location: reader.php");
            exit();
            break;
		}   
        }
		
	?>
