<?php
include "main/session.php";
/* @var $obj db */
ob_start();
if (!in_array(12, $permissions)) {
    header("location:index");
}
?>
<div class="page-body">
    <div class="container-xl">
        <div>
            <div style="text-align: right;">
            <?php if (in_array(9, $permissions)) { ?>
                <button data-bs-toggle="modal" data-bs-target="#modal-report" onclick='dynamicmodal("none", "addemployee", "", "Add Employee")' class="btn btn-primary mb-3 py-2">
                    Add Employee
                </button>
            <?php } ?>
            </div>

        <div class="card">

        <h3 class="card-header">Employee Details</h3>

            <div class="table-responsive fixTableHead" style="height: 450px;">

                <table id="example2" class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>User Name</th>
                            <th>Emp ID</th>
                            <th>Mob No.</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Clients</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>
        </div>
        </div>
        <br>
    </div>
</div>
<?php
//Assign all Page Specific variables
$pagemaincontent = ob_get_contents();
ob_end_clean();
$pagemeta = "";
$pagetitle = "Global Wizard Pvt Ltd";
$contentheader = "";
$pageheader = "";
include "templete.php";
?>
<script>
    $(function() {
        $('#example2').DataTable({
            "ajax": "../main/admin/employeelistdata.php",
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
</script>