<?php
include "main/session.php";
/* @var $obj db */
ob_start();
// if (!in_array(4, $permissions)) {
//     header("location:index");
// }
?>
<div class="page-body">
    <div class="container-xl">
    <div class="mb-3" style="text-align: right;">
                    <?php if (in_array(1, $permissions)) { ?>
                        <button data-bs-toggle="modal" data-bs-target="#modal-report" onclick='dynamicmodal("none", "addplan", "Unlink", "Add New Plan")' class="btn btn-primary py-2">
                            Add New Plan
                        </button>
                    <?php } ?>
                </div>
        <div class="card card-default">
            <div class="card-header">
                <h3>Plans</h3>
                
            </div>
            <div>
                <!-- /.card-header -->
                <div class="table-responsive fixTableHead" style="height: 450px;">
                    <table id="example2" class="table card-table table-vcenter text-nowrap datatable" >
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Plan Type</th>
                                <th>Users</th>
                                <th>Added on</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagemeta = "";
$pagetitle = "Global Wizard: Plan List";
$contentheader = "";
$pageheader = "";
include "templete.php";
?>
<script>
    $(function() {
        $('#example2').DataTable({
            "ajax": "../main/admin/membershipplandata.php",
            "processing": true,
            "serverSide": true,
            "pageLength": 1000,
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "order": [
                [0, "desc"]
            ]
        });
    });
</script>