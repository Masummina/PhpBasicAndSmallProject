<?php 

	if(isset($_GET['class'])){
		$ClassName = $_GET['class'];
		echo $ClassName;
	}

 ?>


  <table class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Class</th>
			<th>Roll</th>
			<th>Fat Name</th>
			<th>Mot Name</th>
			<th>Ban</th>
			<th>End</th>
			<th>Math</th>

			<?php if(isset($ClassName)){
				if($ClassName == 'nine' OR $ClassName == 'ten'){
					?>
					<th>dep01</th>
					<th>dep02</th>
					<th>dep03</th>
				<?php
				}
			} ?>

			
			<th>Religion</th>
			<th>Science</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	
	

<?php 
	
	
	$sql = "SELECT * FROM `results` WHERE classname = '$ClassName'";
	$connData = $conn->query($sql);
	
	//$rowCount = ();

	if($connData->num_rows > 0){
		while($results = $connData->fetch_assoc()){
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



			?>
			<tr>
				<td><?php echo $id ?></td>
				<td><?php echo $std_nam ?></td>
				<td><?php echo $classname ?></td>
				<td><?php echo $roll ?></td>
				<td><?php echo $fat_name ?></td>
				<td><?php echo $mot_name ?></td>
				<td><?php echo $ban ?></td>
				<td><?php echo $eng ?></td>
				<td><?php echo $math ?></td>

				<?php if(isset($ClassName))
				{
					if($ClassName == 'nine' OR $ClassName == 'ten'){
						?>
							<td><?php echo $dep01 ?></td>
							<td><?php echo $dep02 ?></td>
							<td><?php echo $dep03 ?></td>
						<?php
					}
				} ?>
				<td><?php echo $religion ?></td>
				<td><?php echo $science ?></td>
				<td>
					
					<a href='all_students.php?view=$id'><i class='fa fa-eye' aria-hidden='true'></i></a> | 
   						<a href='class_info.php?source=studentInformation&class=<?php echo $ClassName ?>&edit=<?php echo $id ?>'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> | 
   						<a href='all_students.php?delete=$id'><i class='fa fa-trash' aria-hidden='true'></i></a> 


				</td>
			</tr>


			<?php

		}
	}else{
		echo "No data Yet";
	}
 ?>

</tbody>
</table>












