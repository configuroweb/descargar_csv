<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		if(!empty($_POST['firstname']) || !empty($_POST['lastname']) || !empty($_POST['address']) || !empty($_POST['age']) || !empty($_POST['job'])){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$address = $_POST['address'];
			$age = $_POST['age'];
			$job = $_POST['job'];
			
			$conn->query("INSERT INTO `employee` VALUES('', '$firstname', '$lastname', '$address', '$age', '$job')") or die(mysqli_errno());
			echo "<script>alert('Datos ingresados exitósamente!')</script>";
			echo "<script>window.location = 'index.php'</script>";
		}else{
			echo "<script>alert('Por favor complete el campo requerido!')</script>";
			echo "<script>window.location = 'index.php'</script>";
		}
	
	}
?>