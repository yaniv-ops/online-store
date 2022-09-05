<?php
	function add_cat () {
		include("db.php");
		if(isset($_POST['add_cat'])) {
			$cat_name = $_POST['cat_name'];
			$add_cat=$con->prepare("insert into main_cat(cat_name) values('$cat_name')");
			if($add_cat->execute()) {
				echo "<script>alert('Category Added Successfully !!')</script>";
			} else {
				echo "<script>alert('Category Failed To be Added !!')</script>";
			}
	

		}}
	function add_sub_cat () {
		include("db.php");
		if(isset($_POST['add_sub_cat'])) {
			$cat_id = $_POST['main_cat'];
			$sub_cat_name = $_POST['sub_cat_name'];
			$add_sub_cat=$con->prepare("insert into sub_cat(sub_cat_name, cat_id) values('$sub_cat_name', '$cat_id')");
			if($add_sub_cat->execute()) {
				echo "<script>alert('Sub-Category Added Successfully !!')</script>";
			} else {
				echo "<script>alert('Sub-Category Failed To be Added !!')</script>";
			}
		}

		}

	function add_pro () {
		include("db.php");
		if(isset($_POST['add_product'])) {
			$pro_name = $_POST['pro_name'];
			$cat_id = $_POST['cat_name'];
			$sub_cat_id = $_POST['sub_cat_name'];
			$pro_img1 = $_FILES['pro_img1']['name'];
			$pro_img1_tmp = $_FILES['pro_img1']['tmp_name'];
			$pro_img2 = $_FILES['pro_img2']['name'];
			$pro_img2_tmp = $_FILES['pro_img2']['tmp_name'];
			$pro_img3 = $_FILES['pro_img3']['name'];
			$pro_img3_tmp = $_FILES['pro_img3']['tmp_name'];
			$pro_img4 = $_FILES['pro_img4']['name'];
			$pro_img4_tmp = $_FILES['pro_img4']['tmp_name'];

			move_uploaded_file($pro_img1_tmp, '../img/pro_img/$pro_img1');
			move_uploaded_file($pro_img2_tmp, '../img/pro_img/$pro_img2');
			move_uploaded_file($pro_img3_tmp, '../img/pro_img/$pro_img3');
			move_uploaded_file($pro_img4_tmp, '../img/pro_img/$pro_img4');

			$pro_feature1 = $_POST['pro_feature1'];
			$pro_feature2 = $_POST['pro_feature2'];
			$pro_feature3 = $_POST['pro_feature3'];
			$pro_feature4 = $_POST['pro_feature4'];
			$pro_feature5 = $_POST['pro_feature5'];

			$pro_price = $_POST['pro_price'];
			$pro_model = $_POST['pro_model'];
			$pro_warranty = $_POST['pro_warranty'];
			$pro_keyword = $_POST['pro_keyword'];

			$add_cat=$con->prepare("insert into products
			(pro_name, cat_id, sub_cat_id, pro_img1, pro_img2, pro_img3, pro_img4,
			pro_feature1, pro_feature3, pro_feature3, pro_feature4, pro_feature5, pro_price, pro_model, pro_warranty, pro_keyword, pro_added_date) values
			('$pro_name', '$cat_id', '$sub_cat_id', '$pro_img1', '$pro_img2', '$pro_img3', '$pro_img4', '$pro_feature1', '$pro_feature2',
			 '$pro_feature3', '$pro_feature4', '$pro_feature5',
			 '$pro_price', '$pro_model', '$pro_warranty', '$pro_keyword', NOW())");
			if($add_cat->execute()) {
				echo "<script>alert('Category Added Successfully !!')</script>";
			} else {
				echo "<script>alert('Category Failed To be Added !!')</script>";
			}
		}
	}
	
	function viewall_cat () {
		include("db.php");
		$fetch_cat=$con->prepare("select * from main_cat");
		$fetch_cat->setFetchMode(PDO::FETCH_ASSOC);
		$fetch_cat->execute();
		while($row=$fetch_cat->fetch()):
			echo "<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";
		endwhile; 
	}

	function viewall_sub_cat () {
		include("db.php");
		$fetch_sub_cat=$con->prepare("select * from sub_cat");
		$fetch_sub_cat->setFetchMode(PDO::FETCH_ASSOC);
		$fetch_sub_cat->execute();
		while($row=$fetch_sub_cat->fetch()):
			echo "<option value='".$row['cat_id']."'>".$row['sub_cat_name']."</option>";
		endwhile;
	}