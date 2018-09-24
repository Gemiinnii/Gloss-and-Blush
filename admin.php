<?php
include "./functions/functions.php"; 
isloggedin();
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Admin panel</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/admin.css">
</head>

<body>

<div class="container">	
    <?php 
        if(isset($_GET["status"])) { ?>
            <script type="text/javascript">
                alert("Item added succesfully!!!");
                window.location = "./admin.php";
            </script>
        <?php }

        if(isset($_GET["delete"])) { ?>
            <script type="text/javascript">
                alert("Item deleted succesfully!!!");
                window.location = "./admin.php";
            </script>
        <?php }

        if(isset($_GET["edit"])) { ?>
            <script type="text/javascript">
                alert("Item edited succesfully!!!");
                window.location = "./admin.php";
            </script>
        <?php }        
    ?>
	<h2>Admin Panel</h2>
	</hr>
	<div class="col-md-4">
        <h3> Add new item </h3>
        <form name="add_items" method="POST" action="./functions/add_items.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="itemName">Item name</label>
            <input type="text" class="form-control" id="itemName" name="name">
          </div>
          <div class="form-group">
            <label for="itemDescription">Item Description</label>
            <textarea class="form-control" rows="5" id="itemDescription" name="description"></textarea>
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" name="category_id">
              <option value=1>Uncategorized</option>
              <option value=2>Makeup</option>
              <option value=3>Bath & Body</option>
              <option value=4>Nails</option>
              <option value=5>Hair</option>
            </select>
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price">
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
          </div>
          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
          </div>
          <button type="submit" class="btn btn-default" name="submit">Submit</button>
        </form>
	</div>	
	<div class="col-md-8">
        <h3> All your items </h3>
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <?php
                include "./functions/db.php"; 
                $sql = "SELECT tbl_products.*,tbl_category.name as category_name FROM `tbl_products` JOIN tbl_category ON tbl_products.category_id = tbl_category.id";
                $result = $con->query($sql);
            ?>
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Manage</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $i = 1;
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>
                        <td><?php echo $row["name"]?></td>
                        <td><?php echo $row["description"]?></td>
                        <td><?php echo $row["price"]?></td>
                        <td><?php echo $row["category_name"]?></td>
                        <td><?php echo $row["quantity"]?></td>
                        <td><img src="./images/uploads/<?php echo $row['image']?>" width='50px' height='60px'/></td>
                        <td>
                            <a href="./edit_form.php?id=<?php echo $row['id']; ?>">Edit</a>  
                            <a href="./functions/delete_items.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
            <?php    }
            } else {
                echo "0 results";
            }
            $con->close();
            ?>
            </tbody>
    </table>
	</div>	
</div>

<footer>
</footer>

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	

</html>