<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  </style>
  <body>
  	<div class="p-3 mb-2 bg-transparent text-dark">

  	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand"></a>
	    
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="index.php">Register</a>
	        <a class="nav-link" href="view.php">View</a>
	        
	      </div>
	    </div>
	  </div>
	</nav>
	

	<h5>Task 2</h5>
  			

  	<br>

  	<div class="mx-auto" style="width: 700px;">
  		
  		<form method="post">

		  <div class="form-group">
		    <label>Item Code</label>
		    <input type="text" class="form-control" name="itemcode" placeholder="Item Code" required>
		  </div>
		  <br>

		  <div class="form-group">
		    <label>Item Name</label>
		    <input type="text" class="form-control" name="itemname" placeholder="Item Name" required>
		  </div>
		  <br>

		  <div class="form-group">
		    <label>Item Category</label>
		    <select class="form-control" name="itemcategory" required>
		      <option>1</option>
		      <option>2</option>
		      <option>3</option>
		      <option>4</option>
		      <option>5</option>
		    </select>
		  </div>
		  <br>

		  <div class="form-group">
		    <label>Item Sub Category</label>
		    <select class="form-control" name="itemsubcategory" required>
		      <option>1</option>
		      <option>2</option>
		      <option>3</option>
		      <option>4</option>
		      <option>5</option>
		    </select>
		  </div>
		  <br>

		  <div class="form-group">
		    <label>Quantity</label>
		    <input type="text" class="form-control" name="quantity" placeholder="Quantity" required>
		  </div>
		  <br>

		  <div class="form-group">
		    <label>Unit Price</label>
		    <input type="text" class="form-control" name="unitprice" placeholder="Unit Price" required>
		  </div>
		  <br>

		  <button type="submit" name="submit" class="btn btn-success">Submit</button>

		  
    	</form>
    	</div>

  </body>
</html>

<?php

include_once 'database.php';
if(isset($_POST['submit']))
{  
   $itemCode = $_POST['itemcode'];
   $itemName = $_POST['itemname'];
   $itemCategory = $_POST['itemcategory'];
   $itemSubCategory = $_POST['itemsubcategory'];
   $quantity = $_POST['quantity'];
   $unitPrice = $_POST['unitprice'];

   $sql = "INSERT INTO item (item_code,item_category,item_subcategory,item_name,quantity,unit_price)
   VALUES ('$itemCode','$itemCategory','$itemSubCategory','$itemName','$quantity','$unitPrice')";
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);

}
?>