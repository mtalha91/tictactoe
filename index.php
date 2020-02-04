<?php
session_start();
$_SESSION["p1"];
$_SESSION["p2"];

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tic Tac Toe</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">

</head>

<body>

<?php
include "includes/navigation.php";
?>
<!-- Page Content -->
<div class="container">
	<?php
	include "includes/content.php";
	?>
</div>
<!-- /.container -->

<?php
include "includes/footer.php";
?>

</body>

</html>
