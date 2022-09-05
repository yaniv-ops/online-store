<div id="bodyright">
    <h3>Add New Sub Category From Here</h3>
    <form method="post">
        <table>
            <tr>
                <td>Select Category Name : </td>
                <td><select name="main_cat">
                    <?php
                    include('function.php');
                    echo viewall_cat();
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Enter Sub Category Name : </td>
                <td><input type="text" name="sub_cat_name"></td>
            </tr>
        </table>
        <center><button name="add_sub_cat">Add Category</button></center>
    </form>
</div>

<?php 
echo add_sub_cat();
?>
