<html>
	<head>
	<?php
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=(int)$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$hospital = (int)$_POST['hospital'];
$address=$_POST['address'];
if (intval($age) >=65 || intval($age) < 18) {
	?>
	<script>
	 alert("cannot exceed 60 or be less than 18")
	 window.location = "home.php"
	 </script>
		<?php
	// header("location: ./home.php");
}
else {
 ?>
	</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address,hospital_id) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}',{$hospital})";
$result=mysqli_query($conn,$sql);

mysqli_close($conn);
header("location: home.php");

// echo "HELLO";
}


?>
hi
</body>
</html>