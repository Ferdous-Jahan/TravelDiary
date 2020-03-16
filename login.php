<?php
  $errEmail="";
  $email="";
  $errPassword="";
  $password="";
  session_start();
  session_destroy();
  
  if(isset($_POST['submit'])){
    if (empty($_POST['email']))
    {
      $errEmail="Email Required";
    }
    else
    {
      $email=$_POST['email'];
    }
    if (empty($_POST['password']))
    {
      $errPassword="Password Required";
    }
    else
    {
      $password=$_POST['password'];
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
					<br><span style="color:red"><?php echo $errPassword;?></span></td>
					
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