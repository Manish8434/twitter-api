<!DOCTYPE html>
<html>
<head>
	<title>Twitter Follower</title>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
  	<div class="cc">
  		<h2>TWITTER FOLLOWER COUNT</h2>
  	</div>
  	<form action="twitter_follower.php" method="post">
	  <div class="form-group">
	    <input type="text" class="form-control" id="twt_name" name="twt_name" placeholder="Enter Username" required="required">
	  </div>
	 <center><button type="submit">Submit</button></center> 
    </form>
  </div>
</body>
</html>