<?php 
$db = mysqli_connect('localhost','root','','courier');


if(isset($_POST['submit'])) {
  echo "ss";
	$name = $_POST['name'];
	$feedback = $_POST['comments'];

  $query = "INSERT INTO feedback (name, comments) VALUES ('$name','$feedback')";
  mysqli_query($db, $query);
  
  header('location: index.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
   body{
     background-image: url(feedback1.jpg);
     background-repeat: no-repeat;
     background-position: center;
     max-width: 100%;
  height: auto;
  padding: 100px;
   }
  </style>

</head>
<body>

<div class="container">
  <h2>Feedback form</h2>
  <form method="post">
    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="feedback">Feedback:</label>
      <input type="text" class="form-control"  placeholder="Enter feedback" name="comments">
    </div>
    
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>


