<?php
include "main/session.php";
/* @var $obj db */
ob_start();
$id = $_GET['hakuna'];

?>
<div class="page-body">
    <div class="container-xl">
        <div class="card">
        <div class="card-header">
            <h3 class="m-0">Plan History</h3>

        </div>


        <div>

            <div class="table-responsive fixTableHead" style="height: 450px;">

                <table id="example2" class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Mobile</th>
                            <th>Transaction ID</th>
                            <th>Payment Method</th>
                            <th>Payment For</th>
                            <th>Date & Time</th>
                            <!-- <th class="px-4 py-3">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>
        </div>

    </div></div>
</div>
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagemeta = "";
$pagetitle = "PMS Equity: Investment Log";
$contentheader = "";
$pageheader = "";
include "main/admin/templete.php";
?>
<script>
    $(function() {
        $('#example2').DataTable({
            "ajax": "../main/admin/fundhistorydata.php?hakuna=<?= $id ?>",
            "processing": true,
            "serverSide": true,
            "pageLength": 10,
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

    // $('.sms1').click(() => {
    //     alert('yoyo')
    //     alert($(this).val())
    // })

    $(document).on("click", ".setactive", function() {
        value = $(this).val();
        id = $(this).data("id");
        type = $(this).data("type");
        $.ajax({
            type: "post",
            url: "main/setactivation.php",
            data: {
                value: value,
                id: id,
                type: type
            },
            success: function(response) {
                if (response == 'Success') {
                    location.reload(true);
                }
            }
        });
        // sendForm('id', [id, decision], 'edit_indent_approve.php', 'resultid', 'indentdec');

    })
</script>