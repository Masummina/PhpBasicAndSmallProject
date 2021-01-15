<?php
    include 'include/header.php';
?>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <?php 
                // Header desing
                include 'include/header-repeat.php';

             ?>
        </div>
        <div class="clear"></div>

        <?php 
            // Header nav menu 
            include 'include/nav-menu.php';

         ?>

        <div class="clear">
        </div>
           <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">Site Option</a>
                            <ul class="submenu">
                                <li><a href="titleslogan.html">Title & Slogan</a></li>
                                <li><a href="social.html">Social Media</a></li>
                                <li><a href="copyright.html">Copyright</a></li>
                                
                            </ul>
                        </li>
						
                         <li><a class="menuitem">Update Pages</a>
                            <ul class="submenu">
                                <li><a>About Us</a></li>
                                <li><a>Contact Us</a></li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Category Option</a>
                            <ul class="submenu">
                               <li><a href="addcat.html">Add Category</a> </li>
                                <li><a href="catlist.html">Category List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Post Option</a>
                            <ul class="submenu">
                                 <li><a href="addpost.html">Add Post</a> </li>
                                <li><a href="postlist.html">Post List</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td>01</td>
							<td>Internet</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="even gradeC">
							<td>02</td>
							<td>Explorer </td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="odd gradeX">
							<td>03</td>
							<td>Internet</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="even gradeC">
							<td>04</td>
							<td>Explorer </td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
							<tr class="odd gradeX">
							<td>05</td>
							<td>Internet</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="even gradeC">
							<td>06</td>
							<td>Explorer </td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="odd gradeX">
							<td>07</td>
							<td>Internet</td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
						<tr class="even gradeC">
							<td>08</td>
							<td>Explorer </td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
					</tbody>
				</table>
               </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
       <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
