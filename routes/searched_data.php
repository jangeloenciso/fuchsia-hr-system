<?php
$PageTitle = "Search Employee";
$PageCss = '../CSS/view.css';
include_once('../templates/header.php');
require_once "../config.php";
?>

<p class="top">VIEW RECORD</p>
<div class="main">
  <br>

  <?php
  // Check connection
  $id = $_POST['id'];

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT id, first_name, last_name, company_position, monthly_salary, age, gender, contact_number, home_address, email_address  FROM employees WHERE id=$id";
  $result = $conn->query($sql);


  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo '<center>';
      echo '<div class="container">';

      echo '<div class="id-top">';
      echo 'ID: ' . $row['id'];
      echo '</div>';

      echo '<div class="container-mid">';
      echo '<div class="mid-pic-name">';
      echo '<img src="../img/profile.jpg">';
      echo $row['first_name'] . ' ' . $row['last_name'];
      echo '</div>';

      echo '<div class="mid-mini1">';
      echo '<div class="mini-1">';
      echo 'Position: ';
      echo '</div>';
      echo '<div class="mini-2">';
      echo $row['company_position'];
      echo '</div>';
      echo '</div>';

      echo '<div class="mid-mini2">';
      echo '<div class="mini-3">';
      echo 'Monthly Salary: ';
      echo '</div>';
      echo '<div class="mini-4">';
      echo $row['monthly_salary'];
      echo '</div>';
      echo '</div>';


      echo '</div>';

      echo '<div class="container-bot">';
      echo '<div class="bot-1">';
      echo 'Age: ' . '<mark class="mrk">' . $row['age'] . '</mark>';
      echo '</div>';
      echo '<div class="bot-2">';
      echo 'Gender: ' . '<mark class="mrk">' . $row['gender'] . '</mark>';
      echo '</div>';
      echo '<div class="bot-3">';
      echo 'Phone: ' . '<mark class="mrk">' . $row['contact_number'] . '</mark>';
      echo '</div>';
      echo '<div class="bot-4">';
      echo 'Address: ' . '<mark class="mrk">' . $row['home_address'] . '</mark>';
      echo '</div>';
      echo '<div class="bot-5">';
      echo 'Email: ' . '<mark class="mrk">' . $row['email_address'] . '</mark>';
      echo '</div>';

      echo "</div>";


      echo "</div>";



      echo '<a href="search_delete.php?id=' . $row['id'] . '"><button type="button" class="delete-btn">Delete</button></a>';
      echo "<br />";
      echo "<br />";
      echo "<br />";
      echo "<br />";
      echo '</center>';
    }
  } else {
    echo '<div class="result_view">Record does not exist for ID # ' . $id . '</div>';
  }
  $conn->close();
  ?>

  <?php
  include_once('../templates/footer.php');
  ?>