<?php 
	
	function createDB(){
		$server = "localhost";
		$user = "root";
		$password = "";
		$dbname = "bookstore";

		// create connection
		$con = mysqli_connect($server,$user,$password);
		if(!$con){
			die("connection error: ".mysqli_connect_error());
		}

		// create statement
		$sql = "create database if not exists $dbname";

		// process state
		if(mysqli_query($con,$sql)){
			$con = mysqli_connect($server,$user,$password,$dbname);
			$sql = "create table if not exists books(
				id int(3) not null auto_increment primary key,
				book_name varchar(25) not null,
				book_publisher varchar(25),
				book_price float


		)";
		if(mysqli_query($con,$sql)){
			// echo "table created";
			return $con;
		}
		else{
			echo "cannot create table!";

		}

		}
		else{
			echo "error while creating database".mysqli_error($con);
		}
	}

 ?>