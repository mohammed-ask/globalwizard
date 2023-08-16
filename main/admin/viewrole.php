<?php
include "main/session.php";
/* @var $obj db */
ob_start();
?>
<div class="page-body">
    <div class="container-xl">
    <div class="mb-3" style="text-align: right;">
                    <?php if (in_array(25, $permissions)) { ?>
                        <a href="addrole" class="btn btn-primary">
                            Add New Role</a>
                    <?php } ?>
                    </button>
                </div>
        <div class="card card-default">
            <div class="card-header">
                <h3>Roles</h3>
                
            </div>
            <div>
                <!-- /.card-header -->
                <div class="table-responsive fixTableHead" style="height: 400px;">
                    <table id="example2" class="table card-table table-vcenter text-nowrap datatable">
                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
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
</div>
<?php
$pagemaincontent = ob_get_clean();
ob_clean();
$extracss = "";
$extrajs = '';
$pagemeta = "";
$pagetitle = "View Role::.Manage Roles-Admin";
$pageheader = "Manage Roles";
$breadcrumb = '<ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Role Management</li>
            </ol>';
include "templete.php";
?>
<script>
    $(function() {
        $('#example2').DataTable({
            "ajax": "../main/admin/rolesdata.php",
            "processing": true,
            "serverSide": true,
            "pageLength": 10,
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