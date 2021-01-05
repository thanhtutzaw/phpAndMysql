<?php 
		require_once 'component.php';
		require_once 'db.php';

		$con = createDB();

		if(isset($_POST['btn-create'])){
			// require_once 'message.ht'
			// echo "<h4>Clicked</h4>";
			// echo " clicked";
			createData();
		
		}
		function createData(){
			$bookname=checkInput('book_name');
			$bookpublisher=checkInput('book_publisher');
			$bookprice=checkInput('book_price');

			if($bookname && $bookpublisher && $bookprice){
				$sql = "
				insert into books(book_name,book_publisher,book_price)
				values ('$bookname' , '$bookpublisher' , '$bookprice');
				";
			// 	$sql = "
			// 	insert into	books(book_name,book_publisher,book_price)
			// 	values 	('$bookname','$bookpublisher','$bookprice');
			// ";

				if(mysqli_query($GLOBALS['con'],$sql)){
					// echo "record success";
					showMessage('alert alert-success alert-dismissible fade show  text-center ',"Record inserted sucessfully!");
				}
				else{
					// echo "error".mysqli_error($GLOBALS['con']);
					showMessage('alert alert-danger alert-dismissible fade show text-center ',"error".mysqli_error($GLOBALS['con']));
				}
			}
			else{
				// echo "provide data into text boxes";
				showMessage('alert alert-danger alert-dismissible fade show  text-center',"Provide data into text boxes");
			}



		}

		//get data from table
		function getData(){
			$sql = "select * from books";
			$result = mysqli_query($GLOBALS['con'],$sql);

			if(mysqli_num_rows($result) > 0){
				return $result;
			}
		}

		
		function checkInput($value){
			$inputValue = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
			if(empty($inputValue)){
				return false;
			}
			else{
				return $inputValue;
			}
		}

		function showMessage($style,$msg){
			// $element = "<h6 class='$style'>$msg</h6>";
				$element = "
					<div class='$style' role='alert'>
					   $msg
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>
					";

			echo "$element";
		}
 ?>
