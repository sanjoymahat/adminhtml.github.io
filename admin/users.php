<?php
// include header file
    include 'header.php'; ?>
    <div class="admin-content-container">
        <h2 class="admin-heading">All Users</h2>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th >Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-xs btn-primary user-view" data-id="" data-toggle="modal" data-target="#user-detail"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-xs btn-primary user-status" data-id="" data-status="">Block</a>
                                <a href="" class="btn btn-xs btn-primary user-status" data-id="" data-status=""    >Unblock</a>
                            <a class="btn btn-xs btn-danger delete_user" href="javascript:void();" data-id=""><i class="fa fa-trash"></i></a>

                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="not-found clearfix">!!! No Users Found !!!</div>
            <div class="pagination-outer">
            </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="user-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->
<?php
//    include footer file
include "footer.php";
?>
