<!-- Tran Quoc Huy 1711060583
Truong Dang Khoa
VO Hong Tu -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1" name="lbUserName">NAME</label>
    <input type="text" name="txtUserName"class="form-control"placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PASSWORD</label>
    <input type="pass" class="form-control"  name="txtPassword"  placeholder="Enter password">
  </div>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnLogin'])) {
    // collect value of input field
    
    $name = $_POST['txtUserName'];
    $pass = $_POST['txtPassword'];
    if($name == "admin" && $pass == "admin"){
      echo "LOGIN SUCCESSFULL";
    }
    else{
      echo "LOGIN ERROR ";
    }
}
?> </br>
  <button type="submit" id="btnLogin" name="btnLogin" class="btn btn-primary">Login</button>
  

</form>

</body>
</html>
