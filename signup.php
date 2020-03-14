
<!DOCTYPE html>

  <?php require('inc/navbar.php'); ?>

  <div style="padding-top: 54px; display: flex; flex-direction: column; align-items: center;">

	<h1>Registration</h1>
		<form method="post" action="">
			<table style="text-align: center; border-style: solid; height: 300px;">
				<tr>
					<td>Name:</td>
					<td><input type="text" value="" name="name" >
						<br><span style="color:red"></span></td> 
					
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email" value="">
					<br><span style="color:red"></span></td>
					
				</tr>
				<tr>
					<td>Password:</td>
					<td> <input type="password" name="pass" value="">
					<br><span style="color:red"></span></td>
					
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