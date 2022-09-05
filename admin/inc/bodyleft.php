<div id="bodyleft">
	<h3>Content Management</h3>
    
    <ul>
    	<li><a href="index.php">Home</a></li>
        <h3>Category Management</h3>
        <li><a href="index.php?viewall_cat">Viewall Categories</a></li>
        <li><a href="index.php?viewall_sub_cat">Viewall Sub Categories</a></li>
		<li><a href="index.php?viewall_products">Viewall Products</a></li>
    </ul>        	
</div><!--end of bodyleft-->

<?php
	if(isset($_GET['viewall_cat'])) {
		include("cat.php");
	}

	if(isset($_GET['viewall_sub_cat'])) {
		include("sub_cat.php");
	}

	if(isset($_GET['viewall_products'])) {
		include("products.php");
	}


