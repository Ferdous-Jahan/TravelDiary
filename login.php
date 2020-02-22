<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="file:///C:/Users/USER/Desktop/TravelDiary/font-awesome-4.7.0/css/font-awesome.css">
  <title>TravelDiary</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav .search-container {
      float: right;
    }

    .topnav input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .topnav .search-container button:hover {
      background: #ccc;
    }

    @media screen and (max-width: 600px) {
      .topnav .search-container {
        float: none;
      }

      .topnav a,
      .topnav input[type=text],
      .topnav .search-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }
    }
  </style>
</head>

<body>

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

  <div
    style="width: 100%; height: 60px; background-color: #dfdfdf; display: flex; justify-content: space-between; position: fixed;">
    <div style="padding-left: 30px; padding-bottom: 10px;">
      <h2><a style="text-decoration: none; color: black;" href="home.html">Travel Diary</a></h2>
    </div>
    
    <div style="margin: 16px;">
      <a href="signup.html"><i style="padding-right: 14px;" class="fa fa-user-plus fa-2x" title="Sign Up" aria-hidden="true"></i></a>
    </div>
  </div>


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