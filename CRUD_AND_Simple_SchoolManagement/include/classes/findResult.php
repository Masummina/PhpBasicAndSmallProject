<?php 
	if (isset($_GET['class'])) {
		$cls = $_GET['class'];
	}

 ?>
<h3>Search By Roll:</h3>
<table>
	<tr>
		<td><strong>Roll:</strong></td>
			<td>
				<form method="POST" action="">
					<input type="text" name="roll" id="roll" placeholder="Enter Your Roll">
					<input type="submit" name="submit" value="Search">
				</form>

			</td>
	</tr>
	
</table>

<?php 
	function resultcalculate($number){
			if($number >= 80){
				echo $pass =  "A+";
			}elseif($number >= 70 AND  $number < 80){
				echo $pass = "A";
			}elseif($number >= 60 AND $number < 70){
				echo $pass = "A-";
			}elseif($number >= 50 AND $number < 60){
				echo $pass = "B";
			}elseif($number >= 40 AND $number < 50){
				echo $pass = "C";
			}elseif($number >= 33 AND $number < 40){
				echo $pass = "D";
			}else{
				echo $fail = "Fail";
			}
		}

		// Result Status Pass Or Fail


	 ?>

	<?php 

	if(isset($_POST['submit'])){
		$roll = $_POST['roll'];
		if(empty($roll) or $roll == ""){
			echo "Enter Your Roll";
		}else{
			// result status
			
		$sql = "SELECT * FROM `results` WHERE classname = '$cls' AND `roll` = $roll";
		$rows = $conn->query($sql);
		 $rowcount = $rows->num_rows;
		if($rowcount > 0){
			while($results = $rows->fetch_assoc())
			{
				$id = $results['id'];
				$std_nam = $results['std_nam'];
				$classname = $results['classname'];
				$roll = $results['roll'];
				$fat_name = $results['fat_name'];
				$mot_name = $results['mot_name'];
				$ban = $results['ban'];
				$eng = $results['eng'];
				$math = $results['math'];
				$dep01 = $results['dep01'];
				$dep02 = $results['dep02'];
				$dep03 = $results['dep03'];
				$religion = $results['religion'];
				$science = $results['science'];
			}

			?>



			<?php // Result Status

			 if($cls == 'nine' or $cls=='ten'){
			 	if($ban > 32 AND $eng > 32 AND $math > 32 AND $religion > 32 AND $science > 32 AND $dep01 > 32 AND $dep02 > 32 AND $dep03 > 32){
			 		$ResultStatus = "PASS";
			 	}else {
			 		$ResultStatus = "FAIL";
			 	}
			 	
			 }else{
			 	if($ban > 32 AND $eng > 32 AND $math > 32 AND $religion > 32 AND $science > 32){
					$ResultStatus = "PASS";
				}else{
					$ResultStatus = "FAIL";
				}
			 }

				

			?>

				


			<div class="result" style="max-width: 400px; margin-top: 10px;">
			   <table class="table table-bordered">
				<thead>
					<tr>
						<th>Subject</th>
						<th>Number</th>
						<th>Grade</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td><strong>Name:</strong></td>
					<td><?php echo $std_nam ?></td>
				</tr>
				<tr>
					<td><strong>Class:</strong></td>
					<td><?php echo $classname ?></td>
				</tr>
				<tr>
					<td><strong>Father Name:</strong></td>
					<td><?php echo $fat_name ?></td>
				</tr>
				<tr>
					<td><strong>Mother Name:</strong></td>
					<td><?php echo $mot_name ?></td>
				</tr>
				<tr>
					<td><h6>Sub Result</h6></td>
					<td></td>
					<td>Status</td>
					<td><?php if(isset($ResultStatus)){
						echo $ResultStatus;
					} ?></td>
				</tr>
				<tr>
					<td>Bangla:</td>
					<td><?php echo $ban ?></td>
					<td><?php resultcalculate($ban); ?></td>
				</tr>
				<tr>
					<td>English:</td>
					<td><?php echo $eng ?></td>
					<td><?php resultcalculate($eng); ?></td>
				</tr>
				<tr>
					<td>Math:</td>
					<td><?php echo $math ?></td>
					<td><?php resultcalculate($math); ?></td>
				</tr>
				<tr>
					<td>Religion:</td>
					<td><?php echo $religion ?></td>
					<td><?php resultcalculate($religion); ?></td>
				</tr>
				<tr>
					<td>Science:</td>
					<td><?php echo $science ?></td>
					<td><?php resultcalculate($science); ?></td>
				</tr>
				<?php  
					if($cls == 'nine' OR $cls == 'ten'){
						?>
					<tr>
						<td>Department subject</td>
					</tr>

					<tr>
						<td>dep01</td>
						<td><?php echo $dep01 ?></td>
						<td><?php resultcalculate($dep01); ?></td>
					</tr>
					<tr>
						<td>dep02</td>
						<td><?php echo $dep02 ?></td>
						<td><?php resultcalculate($dep02); ?></td>
					</tr>
					<tr>
						<td>dep03</td>
						<td><?php echo $dep03 ?></td>
						<td><?php resultcalculate($dep03); ?></td>
					</tr>
					</tbody>

						<?php
					}

				?>
					


			</table>
		</div>


			<?php


		}else{
			echo "Can't find any student";
		}


	}

	}

	?>



