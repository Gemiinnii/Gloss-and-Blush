<?php

include "db.php";

$target_dir = "../images/uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$name = $_POST["name"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];
$price = $_POST["price"];
$image = $_FILES["image"]["name"];
$quantity = $_POST["quantity"];

$sql = "INSERT INTO `tbl_products`(`name`, `description`, `category_id`, `price`, `image`, `quantity`) VALUES ('$name','$description','$category_id','$price','$image','$quantity')";

if($uploadOk != 0){
    $run_query = mysqli_query($con,$sql);
    if($run_query){
        header('Location: ../admin.php?status=1');
    }
}

?>