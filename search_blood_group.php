<?php

$bg=$_POST['blood'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "select * from donor_details where donor_blood='{$bg}' order by rand() limit 5";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  if(mysqli_num_rows($result)>0)   {
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="row">
    <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
    <div class="card" style="width:300px">
        <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
        <div class="card-body">
          <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
          <p class="card-text">
            <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
            <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
            <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
            <b>Age : </b> <?php echo $row['donor_age']; ?><br>
            <b>Address : </b> <?php echo $row['donor_address']; ?><br>
          </p>

        </div>
      </div>
</div>

<?php
  }
}
  else
  {

      echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';

  } ?>
</div>
<div>
<?php $active ='contact';
include 'head.php'; ?>
<?php
if(isset($_POST["send"])){
  $name=$_POST['fullname'];
$number=$_POST['contactno'];
$email=$_POST['email'];
$message=$_POST['message'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "insert into contact_query (query_name,query_mail,query_number,query_message) values('{$name}','{$number}','{$email}','{$message}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  echo '<div class="alert alert-success alert_dismissible"><b><button type="button" class="close" data-dismiss="alert">&times;</button></b><b>Query Sent, We will contact you shortly. </b></div>';
}?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
    <h1 class="mt-4 mb-3">Contact</h1>
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        <form name="sentMessage"  method="post">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" name="fullname" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="contactno"  required >
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <button type="submit" name="send"  class="btn btn-primary">Send Message</button>
        </form>
    </div>
    <div class="col-lg-4 mb-4">
        <h2>Contact Details</h2>
        </div>
