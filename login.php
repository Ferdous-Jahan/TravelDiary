<?php
  $err_uname="";
  $uname="";
  $err_pass="";
  $pass="";
  
  if(isset($_POST['submit']))
  {
    if (empty($_POST['uname']))
    {
      $err_uname="*Usename Required";
    }
    else
    {
      $uname=$_POST['uname'];
    }
    if (empty($_POST['pass']))
    {
      $err_pass="*Password Required";
    }
    else
    {
      $pass=$_POST['pass'];
    }
  }
?>

<!DOCTYPE html>

  <?php require('inc/navbar.php'); ?>

  <div style="padding-top: 54px; display: flex; flex-direction: column; align-items: center;">
  	<h1>LogIn</h1>
		<form method="post" action="">
			<table style="text-align: center; border-style: solid; height: 190px; width: 300px;">
				
				<tr>
					<td>Username: </td>
					<td><input type="text" name="uname" value="">
					<br><span style="color:red"><?php echo $err_uname;?></span></td>
					
				</tr>
				<tr>
					<td>Password:</td>
					<td> <input type="password" name="pass" value="">
					<br><span style="color:red"><?php echo $err_pass;?></span></td>
					
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