<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bistros</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="categories.php">Categories</a></li>
      <li class="active"><a href="menuitems.php">Menu Items</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-12">

<?
include 'db.php';

//////////////////
// Create a Category
if(isset($_POST['addcategory'])) {
    echo $_POST['cat_name'];
    echo '<br>';
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "INSERT INTO menu (cat_name)
    VALUES ('{$_POST['cat_name']}')";
    
    
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    }

/////////////////////
// Update a Category
if(isset($_POST['update'])){
   
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE menu SET cat_name='{$_POST['cat_name']}' WHERE cat_id='{$_POST['cat_id']}'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}

////////////////////////
// Delete a Category
if(isset($_POST['delete'])){


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM menu WHERE cat_id='{$_POST['cat_id']}'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
}





?>
<form action="menuitems.php" method="POST">
<input type="text" name="cat_name" value="<?  if(isset($_POST['updatecategory'])) { echo $_POST['cat_name'];}?>">
<? if(isset($_POST['updatecategory'])) { ?>
<input type="hidden" name="cat_id" value="<?=$_POST['cat_id']?>">
    <input type="submit" name="update">
<? } else { ?>
<input type="submit" name="addcategory">
<? } ?>
</form>
<h3>Menu Items</h3>

<div class="table-responsive">
<table class="table table-hover table-striped">
<tr>
<th>ID</th>
<th>Category</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM menu";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)) {

        ?>
        <tr>
        <td><?=$row["item_id"]?></td>
        <td><?=$row["item_name"]?></td>
        <td><?=$row["item_price"]?></td>
        <td><?=$row["category"]?></td>
        <td><?=$row["item_img"]?></td>
        <td><?=$row["item_description"]?></td>
        <td><form action="menuitems.php" method="POST">
<input type="hidden" name="item_id" value="<?=$row["item_id"]?>">
<input type="hidden" name="item_name" value="<?=$row["item_name"]?>">
<input type="hidden" name="item_price" value="<?=$row["item_price"]?>">
<input type="hidden" name="category" value="<?=$row["category"]?>">
<input type="hidden" name="item_img" value="<?=$row["item_img"]?>">
<input type="hidden" name="item_description" value="<?=$row["item_description"]?>">
<input type="hidden" name="updatecategory" value="yes">
<button type="submit" class="btn btn-default">Update</button>
</form></td>
<td><form action="menuitems.php" method="POST">
<input type="hidden" name="item_id" value="<?=$row["item_id"]?>">
<input type="hidden" name="delete" value="yes">
<button type="submit" class="btn btn-default">Delete</button>
</form></td>
        </tr>
        <?

    }

        echo '</table></div>';
        
} else {
    echo "0 results";
}
mysqli_close($conn);
?>

</div><!---col--->
</div><!---row--->
</div><!---container--->
</body>
</html>