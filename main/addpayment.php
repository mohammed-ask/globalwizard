<?php
include 'main/session.php';
print_r($_GET);
?>
<div>
    <h4 class="m-0 text-center font-15 py-3 px-0 font-weight-700">Pay Using Bank Transfer, NEFT, IMPS, Net Banking or UPI Options</h4>
</div>
<div class="border rounded">
    <div class="bg-light">
        <h5 style="padding-left:16px !important;" class="m-0 font-14 p-2">Bank : HDFC Bank</h5>
    </div>

    <div class="row p-3" style="overflow-wrap: break-word;">

        <div class="col-4" style="border-right: 1px solid lightgray;">
            <h5 class="m-0">Holder Name</h5>
            <p class="mb-0 custom-para-size">Global Wizard Pvt Ltd</p>
        </div><!--end col-->

        <div class="col-4" style="border-right: 1px solid lightgray;">
            <h5 class="m-0">Account No.</h5>
            <p class="mb-0 custom-para-size">89898989898989</p>
        </div><!--end col-->

        <div class="col-4">
            <h5 class="m-0">IFSC Code</h5>
            <p class="m-0 custom-para-size">HDFC0006578</p>
        </div><!--end col-->


    </div><!--end row-->
</div>
<div class="border rounded mt-3" style="overflow-wrap: break-word;">
    <div class="row p-3">
        <div class="col-lg-6">
            <img style="width:200px; height: 200px; border: 1px solid lightgrey; padding: 3px;border-radius: 5px;" height="85px" class="m-0" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/QR_Code_Example.svg/552px-QR_Code_Example.svg.png?20111025115625" alt="Scan QR & Pay">

        </div><!--end col-->
        <div class="col-lg-6">
            <div>
                <h3 class="my-5">Scan Qr Using Your UPI App & Pay</h3>
            </div><!--end col-->

            <div>
                <h4 class="m-0">Or Pay Using UPI ID</h4>
                <p class="mb-0 mt-1">78787878787@ybl</p>

            </div><!--end col-->
        </div>

    </div><!--end row-->
</div>
<h4 style="margin-top: 30px !important; margin-bottom: 15px !important; text-align: center; font-size: 13px;" class="my-3">** Pay First, Then Add Transaction Details Below **</h4>
<div class="modal-body p-0" style="text-align: left;     overflow: hidden;">

    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label mb-0">Mobile No.</label>
                <input type="text" class="form-control" placeholder="Mobile No. Used for Payment">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label mb-0">Transaction Id/UTR</label>
                <input type="text" class="form-control" placeholder="Payment Transaction Id">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label mb-0">Payment Mode</label>
                <input type="text" class="form-control" placeholder="UPI, PhonePe, Bank">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label mb-0">Amount</label>
                <input type="number" class="form-control" placeholder="Paid Amount">
            </div>
        </div>

    </div>

    <h5 style="margin-top: 5px !important; margin-bottom: 3px !important;" class="my-3 text-danger">Important*</h5>
    <ul class="mb-0 custom-para-size">
        <li>Your Payment will take 30 mins to 1hr to reflect in Your Account after reviewing by our team.</li>

        <li>There is no any hidden Charges like transaction fee, processing fee & more.</li>
    </ul>

</div>