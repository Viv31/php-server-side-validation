<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP SERVER SIDE VALIDATIONS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="message_box">
    <?php //include_once('emailchecking.php');

if(isset($_SESSION['all_req'])){
  echo $_SESSION['all_req'];
}
unset($_SESSION['all_req']);
//$email_exist;
if(isset($_SESSION['firstname_error'])){
  echo $_SESSION['firstname_error'];
}
unset($_SESSION['firstname_error']);

if(isset($_SESSION['email_exist'])){
  echo $_SESSION['email_exist'];

}
unset($_SESSION['email_exist']);

if(isset($_SESSION['register_done'])){
  echo $_SESSION['register_done'];
}
unset($_SESSION['register_done']);


if(isset($_SESSION['letters_req'])){
  echo $_SESSION['letters_req'];
}
unset($_SESSION['letters_req']);

if(isset($_SESSION['only_number'])){
  echo $_SESSION['only_number'];
}
unset($_SESSION['only_number']);
?>

</div>
  <h2>Insert form</h2>
  <form action="insert_sub.php" method="POST">
    <div class="form-group">
      <input type="text" name="first_name" class="form-control" placeholder="enter first name" value="<?php if(isset($_SESSION['first_name'])){ echo $_SESSION['first_name'];} ?>">
      <span><?php  
      if(isset($_SESSION['firstname_error'])){
        echo $_SESSION['firstname_error'];

      } 
      unset($_SESSION['firstname_error']);

      ?>
        
      </span>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($_SESSION['user_email'])){ echo $_SESSION['user_email'];} ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div> 
    <div class="form-group">
      <label for="pwd">Mobile:</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile" value="<?php if(isset($_SESSION['user_mob'])){ echo $_SESSION['user_mob']; }else{ unset($_SESSION['user_mob']);} ?>">
    </div>
    <div class="form-group">
      <select class="form-control" name="city">
        <option value="">--SELECT CITY--</option>
        <option value="mumbai">Mumbai</option>
        <option value="ujjain">Ujjain</option>
        <option value="bhopal">Bhopal</option>
      </select>
    </div>
    <div class="form-group">
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">FeMale

    </div>
   
    <button type="submit" class="btn btn-primary"  name="insert">Submit</button>
  </form>
</div>

</body>
</html>
