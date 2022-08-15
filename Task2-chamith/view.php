<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM item");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> View Data</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 </head>
 <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
 </style>
<body>
<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand"></a>
	    
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link" aria-current="page" href="index.php">Register</a>
	        <a class="nav-link active" href="view.php">View</a>
	        
	      </div>
	    </div>
	  </div>
	</nav>
    <br><br>


<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>ID</td>
    <td>Item Code</td>
    <td>Item Name</td>
    <td>Item Category</td>
    <td>Item Sub Category</td>
    <td>Quantity</td>
    <td>Unit Price</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["item_code"]; ?></td>
    <td><?php echo $row["item_name"]; ?></td>
    <td><?php echo $row["item_category"]; ?></td>
    <td><?php echo $row["item_subcategory"]; ?></td>
    <td><?php echo $row["quantity"]; ?></td>
    <td><?php echo $row["unit_price"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>