<?php
include "main/session.php";
$plantype = $obj->selectextrawhere("plantypes", "status=1");
?>
<form id="adduser" onsubmit="event.preventDefault();sendForm('', '', 'insertplan', 'resultid', 'adduser');return 0;">

    <div class="row">
        <label class="form-label col-4" style="margin-bottom: 5px;">
            <span class="text-gray-700 dark:text-gray-400">Name</span>
            <input name="name" data-bvalidator="required" class="form-control" placeholder="Plan Name" />
        </label>
        <label class="form-label col-4" style="margin-bottom: 5px;">
            <span class="text-gray-700 dark:text-gray-400">Plan Type</span>
            <select data-bvalidator="required" class="form-select" name="planfor" id="planfor">
                <option value="">Choose One</option>
                <option value="Universal">Universal</option>
                <option value="Custom">Custom</option>
            </select>
        </label>
        <label class="form-label col-4" id="duser" style="margin-bottom: 5px;">
            <span class="text-gray-700 dark:text-gray-400">User List</span>
            <select multiple data-bvalidator="required" class="form-select select2" name="userid[]" id="userid">
                <option value="">Select User</option>
                <?php
                $role = $obj->selectextrawhereupdate("users", "id,name", "status = 1 and type = 2");
                $emprole = mysqli_fetch_all($role);
                foreach ($emprole as list($id, $name)) { ?>
                    <option value="<?php echo $id; ?>"> <?php echo $name; ?></option>
                <?php
                } ?>
            </select>
        </label>
    </div>
    <?php
    while ($rowplan = $obj->fetch_assoc($plantype)) { ?>
        <div class="row">
            <label class="col-6 form-label" style="margin-bottom: 5px;">
                <span class="text-gray-700 dark:text-gray-400">Plan</span>
                <input readonly value="<?= $rowplan['name'] ?>" class="form-control" placeholder="" />
            </label>
            <label class="col-6 form-label" style="margin-bottom: 5px;">
                <span class="text-gray-700 dark:text-gray-400">Amount</span>
                <input name="price[]" class="form-control" placeholder="Enter Amount" /></label>
            <input hidden readonly value="<?= $rowplan['id'] ?>" name="plantypeid[]" placeholder="" />
        </div>
    <?php } ?>
    <div>
        <button type="submit" hidden id="modalsubmit" class="w-full px-3 py-1 mt-6 text-sm font-medium ">
            Submit
        </button>
    </div>
    <div id="resultid"></div>
</form>
<script>
    $('select').select2()
    $('#planfor').on('change', function() {
        val = $(this).val()
        if (val === 'Custom') {
            $("#duser").attr("class", "block text-md")
        } else {
            $("#duser").attr("class", "block text-md d-none")
        }
    });
</script>