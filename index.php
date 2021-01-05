<?php 
		require_once 'component.php';
		require_once 'operation.php';
		// require_once 'db.php';

		// createDB();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="library/fontawesome/fontawesome-all.min.css">

	<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">

	<link rel="stylesheet" href="css/style.css">

	<title>Book Store</title>
</head>
<body>
	<div class="container text-center">
		<h1 class="bg-dark text-white py-4 rounded"><i class="fas fa-swatchbook mr-3"></i> Book Store</h1>
	

		<div class="d-flex justify-content-center">
			<form action="" method="post" class="w-50">
				<div class="py-2">
					<?php inputElement("<i class='fas fa-id-badge'></i>","ID","book_id"); ?>

					
				</div>

				<div class="py-2">
					<?php inputElement("<i class='fas fa-book'></i>","Book Name","book_name"); ?>
				</div>

				<div class="row">
					<div class="col">
						<?php inputElement("<i class='fas fa-people-carry'></i>"," Publisher","book_publisher"); ?>
					</div>
					<div class="col">
						<?php inputElement("<i class='fas fa-dollar-sign'></i>","Price","book_price"); ?>
					</div>
				</div>

				<div class="d-flex justify-content-center mt-4">                    
                    <?php 
                      buttonElement("btn btn-success mr-3","<i class=\"fas fa-plus\"></i>",'btn-create','create',"Create"); 
                      buttonElement("btn btn-primary mr-3","<i class=\"fas fa-sync\"></i>",'btn-read','read',"Read"); 
                      buttonElement("btn btn-light border mr-3","<i class=\"fas fa-pen-alt\"></i>",'btn-update','update',"Update"); 
                      buttonElement("btn btn-danger","<i class=\"fas fa-trash-alt\"></i>",'btn-delete','delete',"Delete"); 
                    ?>
                </div>



			</form>
		</div>

		<div class="d-flex mt-5">
			<table class="table table-dark table-striped w-75 mx-auto">
				<thead>
					<tr>
						<th>ID</th>
						<th>Book Name</th>
						<th>Publisher</th>
						<th>Price</th>
						<th>Edit</th>
					</tr>
				</thead>

				<tbody>
					<?php

						if(isset($_POST['btn-read'])){
							$result = getData();
							if($result){
								while ($row = mysqli_fetch_assoc($result)) { ?>

							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['book_name']; ?></td>
								<td><?php echo $row['book_publisher']; ?></td>
								<td><?php echo $row['book_price']; ?></td>
								<td><i class="fas fa-edit btn-edit"></i></td>
							</tr>
								<?php }
							}
						} 
					?>	
				</tbody>
				
			</table>
		</div>
	</div>


<script src="library/bootstrap/jquery-3.4.1.slim.min.js"></script>
<script src="library/bootstrap/popper.min.js"></script>
<script src="library/bootstrap/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>