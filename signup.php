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
					<td>Username: </td>
					<td><input type="text" name="uname" value="">
					<br><span style="color:red"></span></td>
					
				</tr>
				<tr>
					<td>Password:</td>
					<td> <input type="password" name="pass" value="">
					<br><span style="color:red"></span></td>
					
				</tr>
				<tr>
					<td>Gender: </td>
					<td><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female</td>
				</tr>
				<tr>
					<td>Hobbies: </td>
					<td><input type="checkbox" name="hobbies[]" value="Movies"> Movies <input type="checkbox" name="hobbies[]" value="Music"> Music <input type="checkbox" name="hobbies[]" value="Games"> Games </td>
				</tr>
				<tr>
					<td>Profession: </td>
					<td>
						<select name="profession">
							<option>Teacher</option>
							<option selected="selected">Student</option>
							<option>Govt. JOb</option>
						</select>
					</td>
                </tr>
                <tr>
                    <td>Birth Date: </td>
                    <td>
                        <input type="date" id="birthday" name="birthday">
                    </td>
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