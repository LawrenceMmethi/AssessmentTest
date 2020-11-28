<?php

	include('dbConnection.php');

		$surname = $_POST['surname'];
		$firstName = $_POST['firstName'];
		$contactNumber = $_POST['contactNumber'];
		$date_d = $_POST['date_d'];
		$age = $_POST['age'];
		$typeOfFood = $_POST['typeOfFood'];
		$eatOut = $_POST['eatOut'];
		$movies = $_POST['movies'];
		$watchTv = $_POST['watchTv'];
		$listenRadio = $_POST['listenRadio'];
		$check = "";

			foreach($typeOfFood as $check1){
				$check .= $check1.",";
		}

			if (!empty($firstName)){
			if (!empty($contactNumber)){
			if (!empty($date_d)){
			if (!empty($age)){
			if (!empty($typeOfFood)){
			if (!empty($eatOut)){
			if (!empty($movies)){   
			if (!empty($watchTv)){
			if (!empty($listenRadio)){
	
	
			if (mysqli_connect_error()){
				die('Connect Error ('.mysqli_connect_error() . ')' . mysqli_connect_error());
		}
			else {
					$sql = "INSERT INTO survey (surname, firstName, contactNumber, date_d, age, typeOfFood, eatOut, movies, watchTv, listenRadio)
							VALUES ('$surname', '$firstName', '$contactNumber', '$date_d', '$age', '$check1', '$eatOut', '$movies', '$watchTv','$listenRadio')";
		
			if ($conn->query($sql)){
				echo "New record is inserted successfully";
		}
			else {
				echo "Error: ". $sql . "". $conn->error;
		}
			$conn->close();
		}
	}	
			else {
				echo "surname should not be empty";
				die();
		}
	}
			else {
				echo "first should not be empty";
				die();
		}
	}	
			else {
				echo "contact number should not be empty";
				die();
		}
	}
			else {
				echo "date should not be empty";
				die();
		}
	}
			else {
				echo "type of food should not be empty";
				die();
		}     
    }
			else {
				echo "age should not be empty";
				die();
		}
	}
			else {
				echo "movies should not be empty";
				die();
		}
	}
			else {
				echo "watch tv should not be empty";
				die();
		}
	}
			else {
				echo "listen to radio should not be empty";
				die();
	}
?>