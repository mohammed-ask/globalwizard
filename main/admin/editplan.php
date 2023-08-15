<?php
include "main/session.php";
$id = $_GET['hakuna'];
$rowplan = $obj->selectextrawhere("plan", "id=$id")->fetch_assoc();
$plantype = $obj->selectextrawhere("plandetail", "status=1 and planid=$id");
?>
<form id="adduser" onsubmit="event.preventDefault();sendForm('id', '<?= $id ?>', 'updateplan', 'resultid', 'adduser');return 0;">
<div class="row">
    <label class="form-label col-4" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Name</span>
        <input name="name" data-bvalidator="required" class="form-control" value="<?= $rowplan['name'] ?>" placeholder="Plan Name" />
    </label>
    <label class="form-label col-4" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Plan Type</span>
        <select data-bvalidator="required" class="form-control select2" name="planfor" id="planfor">
            <option value="">Choose One</option>
            <option value="Universal" <?= ($rowplan['planfor'] == 'Universal') ? 'selected' : '' ?>>Universal</option>
            <option value="Custom" <?= ($rowplan['planfor'] == 'Custom') ? 'selected' : '' ?>>Custom</option>
        </select>
    </label>
    <label class="form-label col-4" <?= $rowplan["planfor"] === 'Universal' ? 'd-none' : '' ?>" id="duser" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">User List</span>
        <select multiple data-bvalidator="required" class="form-control select2" name="userid[]" id="userid">
            <option value="">Select User</option>
            <?php
            $role = $obj->selectextrawhereupdate("users", "id,name", "status = 1 and type = 2");
            $emprole = mysqli_fetch_all($role);
            foreach ($emprole as list($id, $name)) {
                $isSelected = in_array($id, explode(',', $rowplan['userid']));
                echo '<option value="' . $id . '" ' . ($isSelected ? 'selected' : '') . '>' . $name . '</option>';
            } ?>
        </select>
    </label> </div>
    <?php
    while ($rowplan = $obj->fetch_assoc($plantype)) { ?>
        <div class="row">
            <label class="col-6 block text-sm" style="margin-bottom: 5px;">
                <span class="text-gray-700 dark:text-gray-400">Plan</span>
                <input readonly value="<?= $obj->selectfieldwhere("plantypes", "name", "id=" . $rowplan['plantypeid'] . "") ?>" class="form-control" placeholder="" />
            </label>
            <label class="col-6 block text-sm" style="margin-bottom: 5px;">
                <span class="text-gray-700 dark:text-gray-400">Amount</span>
                <input name="price[]" class="form-control" placeholder="Enter Amount" value="<?= $rowplan['price'] ?>" /></label>
            <input hidden readonly value="<?= $rowplan['id'] ?>" name="plandetailid[]" placeholder="" />
        </div>

    <?php } ?>
    <div>
        <button type="submit" id="modalsubmit" class="w-full px-3 py-1 mt-6 text-sm font-medium hidden">
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