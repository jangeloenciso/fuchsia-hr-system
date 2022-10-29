<?php
$PageTitle = "Admin";
$PageCss = 'CSS/admin.css';
include_once('templates/header.php');
?>

<div class="admin_main">
  <div class="admin_main_top">
    <h1>
      <center>WELCOME ADMIN<center>
    </h1>
  </div>


  <div class="admin_main_bot">



    <div class="card1">
      <a href="routes/create.php"><button type="button" class="auv-btn">Add <img src="img/add.png" /></button></a>

      <hr style="border-top: 2px solid #205a68;">
      <center>
        <p>
          Create a new employee record.
        </p>
      </center>

    </div>

    <div class="card2">
      <a href="routes/update.php"><button type="button" class="auv-btn">Update <img src="img/update.png" /></button></a>

      <hr style="border-top: 2px solid #205a68;">
      <center>
        <p>
          Update an employee's record
        </p>
      </center>

    </div>

    <div class="card3">

      <a href="routes/view.php"><button type="button" class="auv-btn">View <img src="img/view.png" /></button></a>

      <hr style="border-top: 2px solid #205a68;">
      <center>
        <p>
          View every employee's current record that is available.
        </p>
      </center>

    </div>


  </div>
</div>
</body>

</html>