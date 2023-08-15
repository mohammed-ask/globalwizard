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
        <div class="card card-default">
            <div class="card-header">
                <h3>Plans</h3>
                <div class="card-tools">
                    <?php if (in_array(1, $permissions)) { ?>
                        <button data-bs-toggle="modal" data-bs-target="#modal-report" onclick='dynamicmodal("none", "addplan", "Unlink", "Add New Plan")' class="btn btn-primary">
                            Add New Plan
                        </button>
                    <?php } ?>
                </div>
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <!-- /.card-header -->
                <div class="w-full">
                    <table id="example2" class="table w-full whitespace-no-wrap">
                        <thead>
                            <tr>
                                <th class="px-3 py-2">S.No.</th>
                                <th class="px-3 py-2">Name</th>
                                <th class="px-3 py-2">Plan Type</th>
                                <th class="px-3 py-2">Users</th>
                                <th class="px-3 py-2">Added on</th>
                                <th class="px-3 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
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
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "order": [
                [0, "desc"]
            ]
        });
    });
</script>