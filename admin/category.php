<?php
include 'header.php'; ?>
<div class="admin-content-container">
    <h2 class="admin-heading">All Categories</h2>
    <a class="add-new pull-right" href="add_category.php">Add New</a>
           <table class="table table-striped table-hover table-bordered">
            <thead>
            <th>Title</th>
            <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>
                        <a href="edit_cat.php"><i class="fa fa-edit"></i></a>
                        <a class="delete_category" href="javascript:void()" data-id=""><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="not-found">!!! No Category Available !!!</div>
    <div class="pagination-outer">
    </div>
</div>
<?php
//    include footer file
    include "footer.php";
?>
