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
    			case 'studentInformation':
    				include 'include/classes/studentInformation.php';
    				break;
    			case 'result':
    				include 'include/classes/result.php';
    				break;
                case 'studentlist':
                    include 'include/classes/studentlist.php';
                    break;	
                case 'findResult':
                    include 'include/classes/findResult.php';
                    break;  
    			default:
    				include 'include/classes/list.php';
    				break;
    		}
    		// include 'include/view_all_post.php';

    	?>

<?php
	include 'include/footer.php';
 ?>
