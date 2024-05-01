<html>
	<head>
	<?php
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=(int)$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$address=$_POST['address'];
if (intval($age) >=65 && intval($age) < 18) {
	?>
	<script>
	 alert("cannot exceed 60 or be less than 18")
	 </script>
		<?php
	// header("location: ./home.php");
}
 ?>
	</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}')";
$result=mysqli_query($conn,$sql);

mysqli_close($conn);

// echo "HELLO";
header("location: home.php");
?>
hi
</body>
</html>