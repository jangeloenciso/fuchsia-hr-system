<?php
$PageCss = '../CSS/delete.css';
include_once('../templates/header.php');
include_once '../config.php';
$sql = "DELETE FROM employees WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo '<div class="result_view_container">';
    echo '<div class="result_view">Record deleted successfully</div>';
    echo '<button class="btn-back" onclick="history.back()">CONFIRM</button>';
    echo '</div>';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>