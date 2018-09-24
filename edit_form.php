<?php 
include "./functions/db.php"; 
include "./functions/functions.php"; 

isloggedin();

$id = $_GET['id'];
$sql = "SELECT * FROM `tbl_products`";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
        $id = $row["id"];
        $name = $row["name"];
        $description = $row["description"];
        $price = $row["price"];
        $category_id = $row["category_id"];
        $quantity = $row["quantity"];
        $image = $row["image"];
    }
} else {
    echo "Item does not exist";
}
$con->close();
?>

<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Edit items</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/admin.css">
</head>

<body>

<div class="container">	
	<div class="container">
		<div class="col-md-6 center-div">
	        <h3> Edit <?php echo $name; ?> </h3>
	        <form name="add_items" method="POST" action="./functions/edit_items.php" enctype="multipart/form-data">
	          <div class="form-group">
	            <label for="itemName">Item name</label>
	            <input type="text" class="form-control" id="itemName" name="name" value="<?php echo $name; ?>">
	          </div>
	          <div class="form-group">
	            <label for="itemDescription">Item Description</label>
	            <textarea class="form-control" rows="5" id="itemDescription" name="description"><?php echo $description; ?></textarea>
	          </div>
	          <div class="form-group">
	            <label for="category">Category</label>
	            <select class="form-control" name="category_id">
	              <option <?php if ($category_id == 1) { ?> selected="selected" <?php } ?> value=1>Uncategorized</option>
	              <option <?php if ($category_id == 2) { ?> selected="selected" <?php } ?> value=2>Makeup</option>
	              <option <?php if ($category_id == 3) { ?> selected="selected" <?php } ?> value=3>Bath & Body</option>
	              <option <?php if ($category_id == 4) { ?> selected="selected" <?php } ?> value=4>Nails</option>
	              <option <?php if ($category_id == 5) { ?> selected="selected" <?php } ?> value=5>Hair</option>
	            </select>
	          </div>
	          <div class="form-group">
	            <label for="price">Price</label>
	            <input type="text" class="form-control" id="price" name="price" value="<?php echo $price; ?>">
	          </div>
	          <div class="form-group">
	            <label for="image">Image</label>
	            <input type="file" id="image" name="image" alt="<?php echo $image; ?>">
	          </div>
	          <div class="form-group">
	            <label for="quantity">Quantity</label>
	            <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $quantity; ?>">
	          </div>
	          <input type="hidden" name="id" value="<?php echo $id; ?>">
	          <button type="submit" class="btn btn-default" name="submit">Submit</button>
	        </form>
		</div>
	</div>	
</div>


<footer>
</footer>

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	

</html>