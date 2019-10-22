

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <style>
  	form {
background-color : #ffc;
}
  </style>
</head>
<body>


	<div class="container">
		<div class="row">
			
                 
			<div class="col-6">
			<h3 class="center">Form-Calculation</h3>
			<hr>
             
			<form action="" method="POST" class="form">
			
				<div class="form-group">
					<div class="col-3">
					<label for="obtain_marks">Obtain_Marks</label>
					</div>
					<div class="col-3">
						<input type="number" name="obtain" min="0" required value="<?php if(isset($_POST['obtain'])){ echo $_POST['obtain']; } ?>">
					</div>
				</div>
				<div class="form-group">
					<div class="col-3">
					<label for="obtain_marks">Total_Marks</label>
					</div>
					<div class="col-3">
						<input type="number" name="total" min="0" required value="<?php if(isset($_POST['total'])){ echo $_POST['total']; } ?>">
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="submit">Calculate</button>
				</div>
				
			</form>	
			</div>
			
			<div class="col-6" style="border-left: 1px solid" >
			<?php
			class Simple{

				function Math(){
					if (isset($_POST['obtain'])&& isset($_POST['total'])) {


					 $obtain=$_POST['obtain'];
					 $total=$_POST['total'];

					 if ($obtain>0) {
					 	
					

					 $result=$obtain/$total*100;
					?>
				<h3 class="text-center">Result</h3>
				<hr>
				<div class="result text-primary">
					<label for="percentage"><strong>Percentage  :</strong>&nbsp&nbsp <?php
                                 if($result<=100){
					 echo number_format($result, 2)  ."%"; }else{ echo "Percentage should not be greater than 100"; }
					 ?> </label><br><br><br>
					<label for="division" class="text-success"><strong>Division   :</strong>&nbsp&nbsp <?php
					if ($result>100) {
						echo "Invalid";
					}
					  else if ($result<=100 &&  $result>=75) {
					 	echo "Distinction";
					 }else if ($result<=75&& $result>=60) {
					 	echo "First Division";
					 }else if ($result<=60&& $result>=45) {
					 	echo "Second division";
					 }else if ($result<=45 && $result>=35) {
					 	echo "Third Division";
					 }else{
					 	
					 	echo  "sorry you are fail";
					 }
					  }else{
					  	echo "total marks doesnot support greater than 500 value";
					  }

					}
					  }
					}
					$obj= new Simple();
					$obj->Math();
					?> 
				</label>

				</div>

		
			</div>

		

		</div>
	</div>

</body>
</html>