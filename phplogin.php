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
		$password = md5(mysqli_real_escape_string($link, $_POST['password']));
		
		if (empty($username) || empty($password)) {
           
			send_message('please fillout the form in full','error');

		}
		else{
			

        $sql = "SELECT username, passwd, roleID ,userID FROM users WHERE username='$username' and passwd='$password'";
		$result = mysqli_query($link, $sql) or die(mysqli_error($link));
		$count = mysqli_num_rows($result);
		
		if ($count == 1) {
			$row = mysqli_fetch_assoc($result);
			$role = $row['roleID'];
			
			$_SESSION['username'] = $username;
			$_SESSION['passwd'] = $password;
			$_SESSION['roleID'] = $role;
			$_SESSION['userID'] = $row['userID'];
			echo $username;
			echo $password;
			} else {
			send_message('Wrong Credentials Try Again', 'error');
            
			header("Location: Login.php");
			exit();
		}
		switch ($_SESSION['roleID']) {
		case 1: //admin
            echo "success!";
            header("Location: graphpage.php");
            exit();
            break;
		case 2: //writer
            header("Location: index.php");
            exit();
            break;
		case 3: //reader
            header("Location: index.php");
            exit();
            break;
		}   
        }
		
	?>

Notice: Undefined index: uid in C:\xampp\htdocs\VGN\Post.php on line 7 Warning: mysqli_fetch_array() expects parameter 1 to be mysqli_result, bool given in C:\xampp\htdocs\VGN\article.php on line 8 Warning: mysqli_fetch_array() expects parameter 1 to be mysqli_result, bool given in C:\xampp\htdocs\VGN\article.php on line 19 Notice: Undefined index: userID in C:\xampp\htdocs\VGN\Post.php on line 10
Notice: Undefined index: pid in C:\xampp\htdocs\VGN\Post.php on line 7

Warning: mysqli_fetch_array() expects parameter 1 to be mysqli_result, bool given in C:\xampp\htdocs\VGN\article.php on line 8

Warning: mysqli_fetch_array() expects parameter 1 to be mysqli_result, bool given in C:\xampp\htdocs\VGN\article.php on line 19
