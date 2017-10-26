<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/animate.css">
	<link rel="stylesheet" href="../assets/css/forum.css">
	<link rel="stylesheet" href="../assets/css/yv.css">
  <link rel="stylesheet" href="../assets/css/account.css">
</head>

<body>

  <div class="full-bg"></div>

    <div class="col-md-6 overlay">
      <div class="section over">
        <center>
          <h2>Sign In</h2>
          <form>
            <div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              	<input class="form-control input" type="text" placeholder="Username or Email">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              	<input class="form-control input" type="password" placeholder="Password">
							</div>

							<input type="submit" value="Log In">

              <p><br><a href="../">Home</a> | <a href="../register">Register</a></p>
            </div>
          </form>
        </center>
      </div>
    </div>

</body>
<footer>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="./assets/js/loremipsum.js"></script>

  <script>
    $(".col-md-6").css("height",$(".over").innerHeight()+120+"px");
  </script>


</footer>
