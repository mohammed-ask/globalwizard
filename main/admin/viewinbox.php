<?php
include "main/session.php";
/* @var $obj db */
ob_start();
?>
<div class="page-body">
    <div class="container-xl">
        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-2">
            <!-- Card -->
            <h3 class="card-header">
                Inbox
            </h3>
        </div>
        <div>

            <div class="table-responsive fixTableHead" style="height: 450px;">

                <table id="example2" class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Date & Time</th>
                            <th>Sender</th>
                            <th>Subject</th>
                            <th>View Message</th>
                            <th>Read Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y text-s dark:divide-gray-700 dark:bg-gray-800">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagemeta = "";
$pagetitle = "PMS Equity";
$contentheader = "";
$pageheader = "";
include "templete.php";
?>
<script>
    $(function() {
        $('#example2').DataTable({
            "ajax": "../main/admin/inboxdata.php",
            "processing": true,
            "serverSide": true,
            "pageLength": 1500,
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "order": [
                [0, "desc"]
            ],
            columnDefs: [{
                render: function(data, type, full, meta) {
                    return "<div class='text-wrap width-200 bg-red'>" + data + "</div>";
                },
                targets: 5,
                visible: false,
            }],
            "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                console.log(aData)
                if (aData[5] == 1) {

                } else {
                    $('td', nRow).attr('style', 'background-color: hsl(138, 39%, 56%) !important');
                }
            },
        });
    });
</script>