<?php include '../connDB.php';
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form  method="POST" class="firm">
  <div class="form-group">
    <label for="formGroupExampleInput">First Name</label>
    <input type="text" name="firstname" class="form-control" id="formGroupExampleInput" placeholder="Username......."    required >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="formGroupExampleInput" placeholder="Username......."  required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="text"  name="password" class="form-control" id="formGroupExampleInput2" placeholder="Your password here"  required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Email Address here..."  required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Phone No</label>
    <input type="number" name="contact" class="form-control" id="formGroupExampleInput2" placeholder="Phone No."  required>
  </div>
  <button class="submit" name="submit" >Submit</button>
</form>
<?php 
if(isset($_POST["submit"])){
    $usernameOne=$_POST["firstname"];
    $usernameTwo=$_POST["lastname"];
    $phoneNo=$_POST["contact"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="INSERT INTO `userinfo`( `FIRSTNAME`, `EMAIL`, `PASSWORD`, `LASTNAME`, `CONTACT_NUMBER`) VALUES ('$usernameOne','$usernameTwo','$email','$password','$phoneNo')";
$res=mysqli_query($conn,$sql);
if($res){
    echo"data is inserted successfully";
}
else{
    echo"error in data insertion";
    echo mysqli_error($conn);
}
}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->  </body>
    <script class="">
<script>
    if (window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href);
    }
</script>


    </script>
</html>