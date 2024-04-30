<html>
<head>
  <style>
  #footer {

  position:absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: fit-content;
  padding: 5px;
  background-color:#000000;
  color:white;
  text-align: center;
}
  </style>
</head>
<body>

  <div id="footer" >
  
  LIFE-LINKER
  <br>
  <?php
  $conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
  $sql= "SELECT * FROM `donor_details`";
  $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  $num_rows = mysqli_num_rows($result);
  ?>
  DONORS ENROLLED :<b style='color: yellow;'> <?php echo $num_rows; ?></b>
  <br>
  
  </center>
  </div>


</body>

</html>
