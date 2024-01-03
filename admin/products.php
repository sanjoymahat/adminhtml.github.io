<?php // include header file
include 'header.php'; ?>
    <div class="admin-content-container">
        <h2 class="admin-heading">All Products</h2>
        <a class="add-new pull-right" href="add_product.php">Add New</a>
            <table id="productsTable" class="table table-striped table-hover table-bordered">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th width="100px">Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td><b></b>PDR001</td>
                        <td>banarashi sharee</td>
                        <td>share</td>
                        <td>banarshi</td>
                        <td>100</td>
                        <td><img src="image/banner-img-1.jpg"</td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <a href="edit_product.php"><i class="fa fa-edit"></i></a>
                            <a class="delete_product" href="javascript:void()" data-id="" data-subcat=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="not-found clearfix">!!! No Products Found !!!</div>
        <div class="pagination-outer">
        </div>
    </div>
<?php //    include footer file
    include "footer.php";
?>
