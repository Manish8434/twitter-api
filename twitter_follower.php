<?php
$tw_username = $_POST['twt_name']; 
// print_r($tw_username); die;
$data = file_get_contents('https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names='.$tw_username); 
$parsed =  json_decode($data,true);
$tw_followers =  $parsed[0]['followers_count'];
// echo  $tw_followers;
?>
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
  	<div class="tweet">
  		<h2>TWITTER FOLLOWER COUNT</h2>
  	</div>
      <div class="result">
  	 <h2>Name: <span><?php echo $tw_username; ?></span></h2>
  	 <h3>Followers Count: <span><?php echo  $tw_followers; ?></span></h3>
  	<center> <a href="index.php"><button class="btn btn-primary">Check Again</button></a></center>
</div>
  </div>
</body>
</html>