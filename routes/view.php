<?php
  $PageTitle="View Employees";
  include_once('../templates/header.php'); 
?>
  <h1>View Employees</h1>
  <br>
  <?php
    require_once "../config.php";

    $sql = "SELECT * FROM employees";

    if ($result = mysqli_query($conn, $sql)){
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
              echo "<td>" . $row['home_address'] . "</td>";
              echo "<td>" . $row['contact_number'] . "</td>";
              echo "<td>" . $row['email_address'] . "</td>";
              echo "<td>" . $row['company_position'] . "</td>";
              echo "<td>" . $row['monthly_salary'] . "</td>";
              echo '<td><a href="delete.php?id='. $row['id'] .'">Delete</a></td>';
              echo "</tr>";
            }
            echo "</tbody>";
          echo "</table>";
      } else {
        echo "EMPTY";
      }
    }
  ?>
<?php
include_once('../templates/footer.php');
?>