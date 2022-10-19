<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fuchsia HR</title>
</head>
<body>
  <h1>Fuchsia HR</h1>
  <a href="routes/create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
  <br>
  <?php
    require_once "config.php";

    $sql = "SELECT * FROM employees";

    if ($result = mysqli_query($link, $sql)){
      if (mysqli_num_rows($result) > 0){
          echo "<table>";
            echo "<thead>";
            echo "<tr>";
              echo "<th>Employee ID</th>";
              echo "<th>First Name</th>";
              echo "<th>Last Name</th>";
              echo "<th>Age</th>";
              echo "<th>Gender</th>";
              echo "<th>Address</th>";
              echo "<th>Contact Number</th>";
              echo "<th>Email Address</th>";
              echo "<th>Company Position</th>";
              echo "<th>Monthly Salary</th>";
              echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['first_name'] . "</td>";
              echo "<td>" . $row['last_name'] . "</td>";
              echo "<td>" . $row['age'] . "</td>";
              echo "<td>" . $row['gender'] . "</td>";
              echo "<td>" . $row['address'] . "</td>";
              echo "<td>" . $row['contact_number'] . "</td>";
              echo "<td>" . $row['email_address'] . "</td>";
              echo "<td>" . $row['company_position'] . "</td>";
              echo "<td>" . $row['monthly_salary'] . "</td>";
              echo "</tr>";
            }
            echo "</tbody>";
          echo "</table>";
      } else {
        echo "EMPTY";
      }
    }
  ?>
</body>
</html>