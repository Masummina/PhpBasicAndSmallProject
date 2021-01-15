<?php ob_start(); ?>
<?php 
	include 'include/header.php';
?>

 	<?php
    		if(isset($_GET['source']))
    		{
    			$source = $_GET['source'];
    		}else{
    			$source ="";
    		}
    		switch ($source) {
    			case 'addnew':
    				include 'include/teachers/addnew.php';
    				break;
    			case 'edit';
    				include 'include/teachers/edit.php';
    				break;
    			default:
    				include 'include/teachers/list.php';
    				break;
    		}
    		// include 'include/view_all_post.php';

    	?>
<?php
	include 'include/footer.php';
 ?>
