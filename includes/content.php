<?php
//Add logic here
if(isset($_POST['p1'])){
	
	for($row=0; $row<3; $row++):	
		for($col=0; $col<3; $col++):
			$id = $row.$col;
			if(isset($_POST[$id]) && !in_array($_POST[$id], $_SESSION["p2"]))
				$_SESSION["p1"][$id] = $_POST[$id];
		endfor;
	endfor;

	checkWinner();
}

if(isset($_POST['p2'])){
	for($row=0; $row<3; $row++):	
		for($col=0; $col<3; $col++):
			$id = $row.$col;
			if(isset($_POST[$id]) && !in_array($_POST[$id], $_SESSION["p1"]))
				$_SESSION["p2"][$id] = $_POST[$id];
		endfor;
	endfor;
	
	checkWinner();
}
if(isset($_POST['reset'])){
	$_SESSION["p1"] = array();
	$_SESSION["p2"] = array();
	unset($_POST);
}

print_r($_SESSION["p1"]);
print_r($_SESSION["p2"]);

function checkWinner(){
	
}
?>

<div class="p-3 mb-2 bg-success text-white">Player 1</div>
<div class="p-3 mb-2 bg-danger text-white">Player 2</div>
<form action="" method="post">
<?php
for($row=0; $row<3; $row++):
	echo '<div class="row" id="row-'.$row.'">';
		
	for($col=0; $col<3; $col++):
		$id = $row.''.$col;
		?>
		<div class="col-sm-4 tictactoecol">
			<div class="card h-100">
			  <div class="card-body <?php 
									if(isset($_POST[$id])){
										if(in_array($_POST[$id], $_SESSION["p1"]))
											echo "bg-success";
										if(in_array($_POST[$id], $_SESSION["p2"]))
											echo "bg-danger";
									}
									?> ">
				<h2 class="card-title">
					<input type="checkbox" name="<?php echo $id; ?>" value="<?php echo $row.' X  '.$col; ?>" <?php echo (isset($_POST[$id]))? "checked":""; ?>/>
					<?php echo $row.' X  '.$col; ?>
				</h2>
			  </div>
			</div>
		</div>
	  <?php
	endfor;	
	echo '</div>';
endfor;
?>
<input type="submit" name="p1" class="btn btn-primary" value="Player1">
<input type="submit" name="p2" class="btn btn-primary" value="Player2">
<input type="submit" name="reset" class="btn btn-primary" value="Reset">
</form>