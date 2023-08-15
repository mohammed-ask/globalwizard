<?php
include "main/session.php";
/* @var $obj db */
ob_start();
?>
<div class="page-body">
    <div class="container-xl">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="my-0 text-1xl font-semibold text-gray-700 dark:text-gray-200">Users Last Login Details</h3>

            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <!-- /.card-header -->
                <div class="w-full">
                    <table id="example2" class="table w-full whitespace-no-wrap">
                        <thead>
                            <tr>
                                <th class="px-4 py-3">S.No.</th>
                                <th class="px-4 py-3">User Name</th>
                                <th class="px-4 py-3">IP Address</th>
                                <th class="px-4 py-3">Login Date & Time</th>
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
$pagetitle = "PMS Equity: User Login Detail";
$contentheader = "";
$pageheader = "";
include "main/admin/templete.php";
?>
<script>
    $(function() {
        $('#example2').DataTable({
            "ajax": "../main/admin/logindata.php",
            "processing": true,
            "serverSide": true,
            "pageLength": 15,
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