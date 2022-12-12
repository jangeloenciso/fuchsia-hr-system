<?php
$PageTitle = "Employee";
$PageCss = 'CSS/employee.css';
include_once('templates/header.php');
?>

<div class="emp_main">
  <div class="emp_main_top">
    <h1>
      <center>WELCOME EMPLOYEE<center>
    </h1>
  </div>


  <div class="emp_main_bot">

    <div class="card2">

      <a href="routes/view_emp.php"><button type="button" class="auv-btn">View All <img src="img/view.png" /></button></a>

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