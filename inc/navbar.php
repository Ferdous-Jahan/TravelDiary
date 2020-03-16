<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="details.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
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
  <div style="width: 100%; height: 60px; background-color: #dfdfdf; display: flex; justify-content: space-between; position: fixed;">
    <div style="padding-left: 30px; padding-bottom: 10px;">
      <h2><a style="text-decoration: none; color: black;" href="index.php">Travel Diary</a></h2>
    </div>
    <?php if (isset($id)): ?>
      <div style="padding-top: 24px;">
        <form action="">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>

      <div style="margin: 16px;">
        <a href="user.php"><i style="padding-right: 14px;" title="Profile" class="fa fa-user fa-2x" aria-hidden="true"><?php echo $name; ?></i></a>
        <!-- <a href="signup.php"><i style="padding-right: 14px;" class="fa fa-user-plus fa-2x" title="Sign Up" aria-hidden="true"></i></a> -->
        <!-- <a href="login.php"><i style="padding-right: 14px;" class="fa fa-sign-in fa-2x" title="Log In" aria-hidden="true"></i></a> -->
        <a href="login.php"><i style="padding-right: 14px;" title="Logout" class="fa fa-sign-out fa-2x" aria-hidden="true"></i></a>
      </div>
    <?php endif ?>
    
  </div>