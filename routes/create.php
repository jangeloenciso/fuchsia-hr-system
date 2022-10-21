<?php
  $PageTitle="Add New Employee";
  include_once('../templates/header.php'); 
  require_once "../config.php";

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (! get_magic_quotes_gpc()) {
      $first_name = addslashes($_POST['first_name']);
      $last_name = addslashes($_POST['last_name']);
      $age = addslashes($_POST['age']);
      $gender = addslashes($_POST['gender']);
      $home_address = addslashes($_POST['home_address']);
      $contact_number = addslashes($_POST['contact_number']);
      $email_address = addslashes($_POST['email_address']);
      $company_position = addslashes($_POST['company_position']);
      $monthly_salary = addslashes($_POST['monthly_salary']);
    } else {
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $age = $_POST['age'];
      $gender = $_POST['gender'];
      $home_address = $_POST['home_address'];
      $contact_number = $_POST['contact_number'];
      $email_address = $_POST['email_address'];
      $company_position = $_POST['company_position'];
      $monthly_salary = $_POST['monthly_salary'];
    }

    $sql = "INSERT INTO `employees` (
      `id` ,
      `first_name` ,
      `last_name` ,
      `age` ,
      `gender` ,
      `home_address` ,
      `contact_number` ,
      `email_address` ,
      `company_position` ,
      `monthly_salary`
      )
      VALUES (
      NULL ,
      '$first_name', 
      '$last_name', 
      '$age', 
      '$gender', 
      '$home_address', 
      '$contact_number', 
      '$email_address', 
      '$company_position', 
      '$monthly_salary'
      );";


    if (mysqli_query($conn, $sql)) {
      $home = 'http://localhost/fuchsia/index.php';
      echo "New record created successfully";
      header("location: $home");
      exit();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
  } 
?>

<h1>Add New Employee</h1>
<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
  <input type="text" name="first_name" placeholder="First Name" required>
  <br>
  <input type="text" name="last_name" placeholder="Last Name" required>
  <br>
  <input type="text" name="age" placeholder="Age" required>
  <br>
  <input type="text" name="gender" placeholder="Gender" required>
  <br>
  <input type="text" name="home_address" placeholder="Address" required>
  <br>
  <input type="text" name="contact_number" placeholder="Contact Number" required>
  <br>
  <input type="text" name="email_address" placeholder="Email Address" required>
  <br>
  <input type="text" name="company_position" placeholder="Company Position" required>
  <br>
  <input type="text" name="monthly_salary" placeholder="Monthly Salary" required>
  <br>

  <input type="submit" name="submit" value="Submit">    
</form>
<?php
include_once('../templates/footer.php');
?>