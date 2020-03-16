<?php
  require('config/db.php');
  $errEmail = "";
  $email = "";
  $errPassword = "";
  $password = "";
  $errFinal = "";
  session_start();
  session_destroy();
  
  if(isset($_POST['submit'])){
    if (empty($_POST['email']))
    {
      $errEmail="Email Required";
    }else {
      $email=$_POST['email'];
    }

    if (empty($_POST['password']))
    {
      $errPassword="Password Required";
    }else {
      $password=$_POST['password'];
    }

    if ($email != NULL && strlen($email) > 0 && $password != NULL && strlen($password) > 0) { 
      $query = 'SELECT * FROM users';
      $result = mysqli_query($conn, $query);
      $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
      mysqli_free_result($result);
      mysqli_close($conn);
      foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
          session_start();
          $_SESSION['id'] = $user['id'];
          $_SESSION['name'] = $user['name'];
          header('Location: index.php');
        }else {
          $errFinal = "Invalid email or password";
        }
      }
    }
  }
?>

<!DOCTYPE html>

  <?php require('inc/navbar.php'); ?>

  <div style="padding-top: 54px; display: flex; flex-direction: column; align-items: center;">
  	<h1>LogIn</h1>
		<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">
			<table style="text-align: center; border-style: solid; height: 190px; width: 300px;">
				
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email" value="<?php echo $email; ?>">
					<br><span style="color:red"><?php echo $errEmail;?></span></td>					
				</tr>

				<tr>
					<td>Password:</td>
					<td> <input type="password" name="password" value="<?php echo $password; ?>">
					<br><span style="color:red"><?php echo $errPassword;?></span><span style="color:red"><?php echo $errFinal;?></span></td>
				</tr>

				<tr>
					<td colspan="2" align="center">
						<input style="width: 100%; height: 30px;" type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
    </form>
  </div>
	</body>
</html>