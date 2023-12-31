<?php
include "main/session.php";
$id = $_GET['hakuna'];
$rowuser = $obj->selectextrawhere('users', 'id="' . $id . '"')->fetch_assoc();
?>
<form id="adduser" onsubmit="event.preventDefault();sendForm('id', '<?= $id ?>', 'updateuser', 'resultid', 'adduser');return 0;">
    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Name</span>
        <input name="username" disabled data-bvalidator="required" class="form-control" value="<?= $rowuser['name'] ?>" placeholder="Client's Name" />
    </label>
    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Email</span>
        <input name="email" disabled data-bvalidator="required,email" class="form-control" value="<?= $rowuser['email'] ?>" placeholder="Client's Email ID" />
    </label>
    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Mob No.</span>
        <input data-bvalidator="required,digit,minlength[10],maxlength[10]" disabled name="mobileno" class="form-control" value="<?= $rowuser['mobile'] ?>" placeholder="Client's Mobile No." />
    </label>
    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">DOB</span>
        <input id="date" disabled data-bvalidator="required,gap18year" onfocus="setcalenderlimit(this.id,'')" data-bvalidator-msg-gap18year="Customer Should be minimum 18 year Old" name="dob" class="form-control" value="<?= changedateformatespecito($rowuser['dob'], "Y-m-d", "d/m/Y") ?>" placeholder="Date of Birth" /></label>
    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Address</span>
        <input data-bvalidator="required" disabled name="address" class="form-control" value="<?= $rowuser['address'] ?>" placeholder="Client's Address" />
    </label>
    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Aadhar No.</span>
        <input data-bvalidator="required" disabled name="adharno" class="form-control" value="<?= $rowuser['adharno'] ?>" placeholder="Enter 12 Digit Aadhar No." /></label>
    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">PAN No.</span>
        <input data-bvalidator="required" disabled name="panno" class="form-control" value="<?= $rowuser['panno'] ?>" placeholder="Client's Pan No." /></label>

    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Bank Name</span>
        <input data-bvalidator="required" disabled name="bankname" class="form-control" value="<?= $rowuser['bankname'] ?>" placeholder="eg. BOI, State bank of India, Kotak etc..." /></label>

    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Account No.</span>
        <input data-bvalidator="required" disabled name="accountno" class="form-control" value="<?= $rowuser['accountno'] ?>" placeholder="Client's A/c No." /></label>
    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">IFSC Code</span>
        <input data-bvalidator="required" disabled name="ifsc" class="form-control" value="<?= $rowuser['ifsc'] ?>" placeholder="IFSC Code of Bank" /></label>

    <!-- <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Investment Amt.</span>
        <input name="investmentamount" value="0" data-bvalidator="required,digit" step="any" onfocus="this.select()" class="form-control" value="<?php //echo $rowuser['investmentamount'] 
                                                                                                                                                    ?>" readonly placeholder="Client's Investment" /></label> -->

    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Password</span>
        <input type="text" id="password" disabled name="password" value="<?= $rowuser['password'] ?>" class="form-control" placeholder="Please Give Strong Password!" />
    </label>
    <label class="block text-sm" style="margin-bottom: 5px;">
        <span class="text-gray-700 dark:text-gray-400">Employee ID</span>
        <input xdata-bvalidator="required" name="employeeref" class="form-control" disabled value="<?= $rowuser['employeeref'] ?>" placeholder="Employee ID For Furthur Reference" /></label>
    <!-- <div>
        <button type="submit" id="modalsubmit" class="w-full px-3 py-1 mt-6 text-sm font-medium hidden">
            Submit
        </button>
    </div> -->
    <div id="resultid"></div>
</form>