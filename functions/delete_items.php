<?php 

include "db.php";
$id = $_GET['id'];
$sql = "DELETE FROM tbl_products WHERE id='$id'";

if ($con->query($sql) === TRUE) {
	header('Location: ../admin.php?delete=1');
} else {
    echo "Error deleting record: " . $con->error;
}
?>