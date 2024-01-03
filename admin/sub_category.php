<?php
// include header file
include 'header.php'; ?>
<div class="admin-content-container">
    <h2 class="admin-heading">All SubCategory</h2>
    <a class="add-new pull-right" href="add_sub_category.php">Add New</a>
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <th>Title</th>
            <th>Category</th>
            <th>Show in Header</th>
            <th>Show in Footer</th>
            <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td>
                        <a href="edit_sub_category.php"><i class="fa fa-edit"></i></a>
                        <a class="delete_subCategory" href="javascript:void();" data-id=""><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="not-found">!!! No Sub Categories Available !!!</div>
    <div class="pagination-outer">
    </div>
</div>
<?php
//    include footer file
    include "footer.php";
?>