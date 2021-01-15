<?php ob_start(); ?>
<?php 
	include 'include/header.php';
    include 'include/admited/functionAdmit.php';
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
    				include 'include/admited/addnew.php';
    				break;
    			case 'edit';
    				include 'include/admited/edit.php';
    				break;
    			default:
    				include 'include/admited/list.php';
    				break;
    		}
    		// include 'include/view_all_post.php';

    	?>
<?php
	include 'include/footer.php';
 ?>
