<?php
include "main/session.php";
/* @var $obj db */
ob_start();
if (!in_array(4, $permissions)) {
    header("location:index");
}
?>
<div class="page-body">
    <div class="container-xl">
        <div class="card card-default">
            <div class="card-header">
                <h3>Users List</h3>
                <div class="card-tools">
                    <?php if (in_array(1, $permissions)) { ?>
                        <button @click="openModal" onclick='dynamicmodal("none", "adduser", "Unlink", "Add New User")' class="btn btn-primary">
                            Add User
                        </button>
                    <?php } ?>
                    </button>
                </div>
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <!-- /.card-header -->
                <div class="table-responsive fixTableHead" style="height: 400px;">
                    <table id="example2" class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>User Name</th>
                                <th>DOB</th>
                                <th>Emp ID</th>
                                <th>Email ID</th>
                                <th>Mob No.</th>
                                <th>PAN No.</th>
                                <th>Addresss</th>
                                <th>Bank Name</th>
                                <th>A/c No.</th>
                                <th>IFSC</th>
                                <th>Aadhar No.</th>
                                <th>Password</th>
                                <!-- <th>Cost</th> -->
                                <!-- <th>Value</th> -->
                                <th>Email</th>
                                <th>Status</th>
                                <th>Plan History</th>
                                <th>View Docs</th>
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
$pagetitle = "PMS Equity: Users List";
$contentheader = "";
$pageheader = "";
include "templete.php";
?>
<script>
    $(function() {
        $('#example2').DataTable({
            "ajax": "../main/admin/usersdata.php",
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

    $(document).on("click", ".setactive", function() {
        value = $(this).val();
        id = $(this).data("id");
        type = $(this).data("type");
        $.ajax({
            type: "post",
            url: "../main/admin/setactivation.php",
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
    $(document).on('click', '#eye', () => {
        iconname = $("#eye").attr("class");
        if (iconname === 'fa fa-eye') {
            $('#password').attr('type', 'text')
            $("#eye").attr('class', 'fa fa-eye-slash')

        } else {
            $('#password').attr('type', 'password')
            $("#eye").attr('class', 'fa fa-eye')
        }
    })

    function nodelete() {
        alertify.alert('Can\'t delete this user as their stock is in Open Position')
    }

    $(document).on('click', '#switchtype', () => {
        var data = $("#stype").html().trim();
        if (data.substring(0, 6) == '<selec') {
            $("#switchtype").html("<i class='fa-solid fa-caret-left'></i> Return to Default")
            $("#stype").html('<input name="message" id="message" class="block w-full  text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Enter Custom Message" />')
        } else {
            $("#switchtype").html("Custom Message")
            $("#stype").html('<select data-bvalidator="required" name="message" class="select2 block w-full  text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"><option value="Withdrawal temporarily unavailable due to a technical problem. Our team is working to resolve it promptly. Thank you for your patience.">Withdrawal temporarily unavailable due to a technical problem. Our team is working to resolve it promptly. Thank you for your patience.</option><option value="Withdrawal Restriction: You are currently unable to make a withdrawal for the next 24 hours. Please try again after the specified time has elapsed. Apologies for any inconvenience caused.">Withdrawal Restriction: You are currently unable to make a withdrawal for the next 24 hours. Please try again after the specified time has elapsed. Apologies for any inconvenience caused.</option> temporarily unavailable due to suspicious activity. Please re-verify your account to ensure security. To re-verify send your document(PAN, Aadhar & Bank Details) on mail. It will take 7 working days for verification.">Withdrawal temporarily unavailable due to suspicious activity. Please re-verify your account to ensure security. To re-verify send your document(PAN, Aadhar & Bank Details) on mail. It will take 7 working days for verification.</option><option value="Withdrawal Limit: You can only withdraw once every 7 days. Please wait until the specified time period has passed to initiate a withdrawal.">Withdrawal Limit: You can only withdraw once every 7 days. Please wait until the specified time period has passed to initiate a withdrawal.</option></select>')
            $("select").select2({
                minimumResultsForSearch: -1
            })
        }
    })
</script>