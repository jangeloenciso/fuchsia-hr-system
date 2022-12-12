<?php
$PageTitle = "Search Employee";
$PageCss = '../CSS/search.css';
include_once('../templates/header.php');
require_once "../config.php";
?>

<div class="main">
  <div class="main-top">
    <p>SEARCH</p>
  </div>
  <div class="main-bot">

    <div class="card">

      <center>
        <p style="margin: 30px 0px 8px 0px; font-size: 15px;
  font-family: 'Glacial Indifference';
  color: aliceblue;">Enter Employee ID</p>
        <input type="text" name="id" placeholder="ID" required>

        <input type="submit" name="submit" value="SEARCH">
      </center>




    </div>

  </div>
  <?php
  include_once('../templates/footer.php');
  ?>