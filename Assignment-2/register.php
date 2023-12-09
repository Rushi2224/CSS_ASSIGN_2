
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/Style.css">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 form-container">
      <!-- Register Form -->
      <h2>Register</h2>
      <form action="insert.php" method="post">
        <div class="form-group">
          <label for="registerName">First Name</label>
          <input type="text" class="form-control" id="rfname" name="rfname" required>
        </div>
        <div class="form-group">
          <label for="registerName">Last Name</label>
          <input type="text" class="form-control" id="rlname" name="rlname" required>
        </div>                                    
        <div class="form-group">
          <label for="registerEmail">Email address</label>
          <input type="email" class="form-control" id="registerEmail" name="registerEmail" required>
        </div>
        <div class="form-group">
          <label for="registerPassword">Password</label>
          <input type="password" class="form-control" id="registerPassword" name="registerPassword" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <a href="login.html">Login here!</a>
      </form>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
