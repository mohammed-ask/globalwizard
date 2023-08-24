<?php
include "main/session.php";
?>
<form id="adduser" onsubmit="event.preventDefault();sendForm('', '', 'approveuser', 'resultid', 'adduser');return 0;">

    <div class="row">
        <label class="col-12 block form-label">
            <span class="text-gray-700 dark:text-gray-400">Activation Amount</span>
            <input type="number" name="activationmoney" data-bvalidator='required' class="form-control" placeholder="Enter Activation Amount" />
            <input name="what" class="form-control" readonly value="Approve" hidden />
            <input name="hakuna" class="form-control" readonly value="<?= $_GET['hakuna'] ?>" hidden />
        </label>
        <div>
            <button type="submit" hidden id="modalsubmit" class="w-full px-3 py-1 mt-6 text-sm font-medium hidden">
                Submit
            </button>
        </div>
        <div id="resultid"></div>
</form>
<script>
    $('select').select2()
</script>