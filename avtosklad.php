<?php
session_start();

if(isset($_POST['button'])){
	
    
	require 'login.php';
	
}

if(isset($_POST['regbutt'])){
	
	
	require 'register.php';
}


//require_once 'security.php';
require "product.php";
$odj = new Page_access;
$odj->checkuser();
?>
<html>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="css/style.css">

    </head>
<body>
	<script>
		function catchd(){
		  
	  }
	</script>
<?php require("navbar.php"); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid collapse navbar-collapse" style="justify-content: flex-end;"> 
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
</div>
</nav>
<section>


		<div class="container">
	
			<div class="button d-flex justify-content-between">
				<ul class="nav nav-pills mb-3 w-100" id="pills-tab" role="tablist">
				<li class="nav-item " role="presentation">
					<a class="active btn btn-success" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Універсальні</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="btn btn-success" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Запчастини</a>
				</li>
				<li class="nav-item ml-auto" role="presentation">
					<a class="btn btn-success" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" onclick="catchd()">Редагувати</a>
				</li>
			</ul>
		
			</div>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			<div class="col-md-20">
					<h3 class="h5 mb-1 text-center">Запчастини</h3>
					<div class="">
						<table class="table ">
						  <thead class="thead-primary">
						    <tr>
							<th>&nbsp;</th>
						    	<th class ="">№</th>
						    	
						    	<th>Товар</th>
								<th>Автомобіль</th>
						      	<th>Ціна</th>
						      <th>Кількість</th>
						      <th>Загально</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
							  <?php
							 	$uni = new UniversalReader();
								$universal = $uni->readAll();
							    for ($i=0;$i<sizeof($universal);$i++){
							  ?>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td>
								<td>
									<div>
									<span><?php echo $universal[$i]['id']; ?></span>
									</div>
									
									
								</td>
								
						    	<td>
						    		<div class="img" style="background-image: url(images/product-1.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
								  <?php echo $universal[$i]['name']; ?>
						      	</div>
						      </td>
						      <td><?php echo $universal[$i]['price']." $"; ?></td>
						      <td class="quantity">
							  	<?php echo $universal[$i]['count']; ?>
				          	</div>
				          </td>

						      <td>
						      	<?php echo $universal[$i]['count']*$universal[$i]['price'].' $'; ?>
				        	</td>
						    </tr>
						<?php } ?>

						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="row">
				<div class="col-md-20">
					<h3 class="h5 mb-1 text-center">Запчастини</h3>
					<div class="">
						<table class="table ">
						  <thead class="thead-primary">
						    <tr>
							<th>&nbsp;</th>
						    	<th class ="">№</th>
						    	<th>Код</th>
						    	<th>Товар</th>
								<th>Автомобіль</th>
						      	<th>Ціна</th>
						      <th>Кількість</th>
						      <th>Загально</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
							  <?php
							 	$cog = new CogReader();
								$cogs = $cog->readAll();
							    for ($i=0;$i<sizeof($cogs);$i++){
							  ?>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td>
								<td>
									<div>
									<span><?php echo $cogs[$i]['id']; ?></span>
									</div>
									
									
								</td>
								<td>
									<div><?php echo $cogs[$i]['cod']; ?></div>
								</td>
						    	<td>
						    		<div class="img" style="background-image: url(images/product-1.png);"></div>
						    	</td>
						      <td>
						      	<div class="email">
								  <?php echo $cogs[$i]['name']; ?>
						      	</div>
						      </td>
						      <td><?php echo $cogs[$i]['price']." $"; ?></td>
						      <td class="quantity">
							  	<?php echo $cogs[$i]['count']; ?>
				          	</div>
				          </td>

						      <td>
						      	<?php echo $cogs[$i]['count']*$cogs[$i]['price'].' $'; ?>
				        	</td>
						    </tr>
						<?php } ?>

						    
						  </tbody>
						</table>
					</div>
				</div>
			</div></div>
			<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
			</div>
			
			<?php var_dump($cog->getAllCount()); ?>
		</div>
	</section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src='index.js'> </script>
        
	
  <script src="js/main.js"></script>
  <script src="">
	  
	  
  </script>
    </body>
</html>
