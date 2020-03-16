<?php
  require('config/db.php');

  session_start();
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  if (!isset($id)) {
    header('Location: login.php');
  }
?>
<!DOCTYPE html>

  <?php require('inc/navbar.php'); ?>


  <div style="cursor: pointer; padding-top: 54px;">
    <div style="margin: 16px; display: flex; justify-content: center;">
      <a href="add.php">
        <i title="Upload" class="fa fa-plus-circle fa-4x" aria-hidden="true"></i>
      </a>
    </div>
    <p style="margin: 16px; display: flex; justify-content: center;">Share your experience</p>
  </div>
  </div>


  <div style="display: flex; flex-wrap: wrap; justify-content: space-around;">
    <div class="card" style="margin: 10px;">
      <a style="text-decoration: none;" href="details.php">
        <img src="images/amikhum.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>Amiakhum Waterfall</b></h4>
          <p>Amiakhum,Thanchi,Bandarban</p>
        </div>
      </a>
    </div>

    <div class="card" style="margin: 10px;">
      <a style="text-decoration: none;" href="details.html">
        <img src="images/amikhum.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>Amiakhum Waterfall</b></h4>
          <p>Amiakhum,Thanchi,Bandarban</p>
        </div>
      </a>
    </div>

    <div class="card" style="margin: 10px;">
      <a style="text-decoration: none;" href="details.html">
        <img src="images/amikhum.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>Amiakhum Waterfall</b></h4>
          <p>Amiakhum,Thanchi,Bandarban</p>
        </div>
      </a>
    </div>

    <div class="card" style="margin: 10px;">
      <a style="text-decoration: none;" href="details.html">
        <img src="images/amikhum.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>Amiakhum Waterfall</b></h4>
          <p>Amiakhum,Thanchi,Bandarban</p>
        </div>
      </a>
    </div>

    <div class="card" style="margin: 10px;">
      <a style="text-decoration: none;" href="details.html">
        <img src="images/amikhum.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>Amiakhum Waterfall</b></h4>
          <p>Amiakhum,Thanchi,Bandarban</p>
        </div>
      </a>
    </div>

  </div>

</body>

</html>