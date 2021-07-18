<?php
require("security.php");
if(isset($_POST['button'])){
    echo "Hello ".$_POST['email'];
    $_SESSION['login']=$_POST['email'];
}


?>
<html>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="css/style.css">

    </head>
<body>
<?php require("navbar.php"); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid collapse navbar-collapse" style="justify-content: flex-end;"> 
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</div>
</nav>
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Welcome <?php echo $_SESSION['login']; ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center">Inventory</h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>&nbsp;</th>
						    	<th>Product</th>
						      <th>Price</th>
						      <th>Quantity</th>
						      <th>total</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<div class="img" style="background-image: url(images/product-1.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td>$44.99</td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="2" min="1" max="100">
				          	</div>
				          </td>
				          <td>$89.98</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<div class="img" style="background-image: url(images/product-2.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td>$30.99</td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
				          	</div>
				          </td>
				          <td>$30.99</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<div class="img" style="background-image: url(images/product-3.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td>$35.50</td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
				          	</div>
				          </td>
				          <td>$35.50</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
						    		<div class="img" style="background-image: url(images/product-4.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td>$76.99</td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
				          	</div>
				          </td>
				          <td>$76.99</td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						    <tr class="alert" role="alert">
						    	<td class="border-bottom-0">
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td class="border-bottom-0">
						    		<div class="img" style="background-image: url(images/product-1.png);"></div>
						    	</td>
						      <td class="border-bottom-0">
						      	<div class="email">
						      		<span>Sneakers Shoes 2020 For Men </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
						      <td class="border-bottom-0">$40.00</td>
						      <td class="quantity border-bottom-0">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
				          	</div>
				          </td>
				          <td class="border-bottom-0">$40.00</td>
						      <td class="border-bottom-0">
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src='index.js'> </script>
        
	
  <script src="js/main.js"></script>
    </body>
</html>
