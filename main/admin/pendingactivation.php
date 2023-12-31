<?php
include "main/session.php";
/* @var $obj db */
ob_start();


?>

<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div>
                <h3 class="card-header">
                    Pending Activation Approvals
                </h3>
            </div>
            <div>
                <div class="table-responsive fixTableHead" style="height: 450px;">
                    <table id="example2" class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Client Name</th>
                                <th>Mobile No.</th>
                                <th>Transaction Id</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Payment Method</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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
$pagetitle = "PMS Equity: Pending Investment";
$contentheader = "";
$pageheader = "";
include "templete.php";
?>
<script>
    $(function() {
        $('#example2').DataTable({
            "ajax": "../main/admin/pendingactivationdata.php",
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

    $(document).on("click", ".showbox", function() {
        status = $(this).parents('.tr').find('.showbtn').css("display");
        if (status === 'none') {
            $(this).parents('.tr').find('.showbtn').css({
                display: 'block',
                position: 'absolute',
                backgroundColor: 'white',
                zIndex: 30,
                width: 150,
                bottom: 0,
                left: 160,
                boxShadow: '5px 10px 10px #888888',
                padding: '10px',
            });
        } else if (status === 'block') {
            $(this).parents('.tr').find('.showbtn').css({
                "display": "none",
            });
        }

    })
</script>