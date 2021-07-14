<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) 
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

		$sql = "SELECT * FROM loging WHERE email='$email'";
		$result = mysqli_query($koneksi, $sql);
		if (!$result->num_rows > 0) 
        {
			$sql = "INSERT INTO loging (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($koneksi, $sql);
			if ($result) 
            {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
			} else 
            {
				echo "<script>alert('Something Went Wrong')</script>";
			}
		} else 
        {
			echo "<script>alert('Email Already Exists! ')</script>";
		}
}

?>

<!DOCTYPE html>
<html lang = "en">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="regist.css">

        <div class="testbox">
        <h1>Registration</h1>

            <form action="" method="POST" class="form-login">
                    <label id="iconz" for="name"><i class="iconz-envelope"></i></label>
                    <input type="text" name="email" id="email" placeholder="Email" required/>
                    <label id="iconz" for="name"><i class="iconz-user"></i></label>
                    <input type="text" name="username" id="username" placeholder="Username" required/>
                    <label id="iconz" for="name"><i class="iconz-shield"></i></label>
                    <input type="password" name="password" id="password" placeholder="Password" required/>
                <div class="gender">
                    <input type="radio" value="None" id="male" name="gender" checked/>
                    <label for="male" class="radio" chec>Male</label>
                    <input type="radio" value="None" id="female" name="gender" />
                    <label for="female" class="radio">Female</label>
                </div> 
                <div class="input-group">
				<button name="submit" class="button">Register</button>
			    </div>
                <p class="login-register-text">Already Registered? <a href="login.php">Login Here</a>.</p>
            </form>
        </div>
</html>