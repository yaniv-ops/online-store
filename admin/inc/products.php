<div id="bodyright">
    <h3>Add New Product From Here : </h3>
    <form method="post" enctype="multipart/form-data">
        <table cellspacing="0">
            <tr>
                <td>Enter Product Name : </td>
                <td><input type="text" name="pro_name"></td>
            </tr>
            <tr>
                <td>Select Category Name : </td>
                <td><select name="cat_name"><?php include("function.php"); echo viewall_cat();?></select></td>
            </tr>
            <tr>
                <td>Select Sub-Category Name :  </td>
                <td><select name="sub_cat_name"><?php echo viewall_sub_cat();?></select></td>
            </tr>
            <tr>
                <td>Select Product Image 1 : </td>
                <td><input type="file" name="pro_img1"></td>
            </tr>
            <tr>
                <td>Select Product Image 2 : </td>
                <td><input type="file" name="pro_img2"></td>
            </tr>
            <tr>
                <td>Select Product Image 3 : </td>
                <td><input type="file" name="pro_img3"></td>
            </tr>
            <tr>
                <td>Select Product Image 4 : </td>
                <td><input type="file" name="pro_img4"></td>
            </tr>
            <tr>
                <td>Enter Product's Feature 1 : </td>
                <td><input type="text" name="pro_feature1"></td>
            </tr>
            <tr>
                <td>Enter Product's Feature 2 : </td>
                <td><input type="text" name="pro_feature2"></td>
            </tr>
            <tr>
                <td>Enter Product's Feature 3 : </td>
                <td><input type="text" name="pro_feature3"></td>
            </tr>
            <tr>
                <td>Enter Product's Feature 4 : </td>
                <td><input type="text" name="pro_feature4"></td>
            </tr>
            <tr>
                <td>Enter Product's Feature 5 : </td>
                <td><input type="text" name="pro_feature5"></td>
            </tr>
            <tr>
                <td>Enter Product's Price : </td>
                <td><input type="text" name="pro_price"></td>
            </tr>
            <tr>
                <td>Enter Product's Model No. : </td>
                <td><input type="text" name="pro_model"></td>
            </tr>
            <tr>
                <td>Enter Product's Warranty : </td>
                <td><input type="text" name="pro_warranty"></td>
            </tr>
            <tr>
                <td>Enter Product's Keyword : </td>
                <td><input type="text" name="pro_keyword"></td>
            </tr>
        </table>
        <center><button name="add_product">Add Product</button></center>
    </form>
</div>

<?php
    echo add_pro();
?>
    

   