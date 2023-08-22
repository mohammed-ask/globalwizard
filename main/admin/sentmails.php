<?php
include "main/session.php";
/* @var $obj db */
ob_start();


?>
<div class="page-body">
    <div class="container-xl">
        <div class="card">
        <div>
            <!-- Card -->
            <h3 class="card-header">
                Sent Mails
            </h3>
        </div>
       

            <div class="table-responsive fixTableHead" style="height: 400px;">

                <table id="example2" class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Date & Time</th>
                            <th>Sent To</th>
                            <th>Subject</th>
                            <th>View Message</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        
    </div>
</div></div>
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagemeta = "";
$pagetitle = "PMS Equity: Pending Approval";
$contentheader = "";
$pageheader = "";
include "templete.php";
?>
<script>
    $(function() {
        $('#example2').DataTable({
            "ajax": "../main/admin/sentmaildata.php",
            "processing": true,
            "serverSide": true,
            "pageLength": 15,
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