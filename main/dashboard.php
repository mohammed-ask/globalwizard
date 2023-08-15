<?php
include "main/session.php";
$plan = $obj->selectextrawhere("plan", "status =1");
?>
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col mt-6" style="margin-bottom: -10px;">
        <h2 class="page-title">
          Current Membership & Subscribtion
        </h2>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="card">
      <div class="card-body">
        <div class="row g-2 align-items-center">

          <div class="col">
            <h4 class="card-title m-0">
              Subscribed Plan Name
            </h4>
            <div style="color: gray; font-weight: 500;">
              Quarterly/ Half Yearly/ Yearly
            </div>
            <div class="text-secondary bill-date">
              Billed on - Aug 08, 2023
            </div>
            <div class="small mt-1">
              <span style="margin-right: 10px;">Status</span> <span class="badge bg-green"></span> Active
            </div>
          </div>
          <div class="col-auto">
            <a href="/setting-plan.html" class="btn">
              Details
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page header -->
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Membership Plans & Pricing
        </h2>
      </div>
    </div>
  </div>
</div>
<!-- Page body -->
<div class="page-body">

  <div class="container-xl">
    <div class="row row-cards">
      <?php
      while ($rowplan = $obj->fetch_assoc($plan)) { ?>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-md">
            <div class="card-body text-center">
              <div class="text-uppercase text-secondary font-weight-medium mb-3"><?= $rowplan['name'] ?></div>

              <table class="table table-sm table-borderless">
                <!-- <thead>
                        <tr>
                          <th>Page</th>
                          <th class="text-end">Visitors</th>
                        </tr>
                      </thead> -->
                <tbody>
                  <?php
                  $plantype = $obj->selectextrawhere("plandetail", "planid=" . $rowplan['id'] . "");
                  while ($rowplandetail = $obj->fetch_assoc($plantype)) { ?>
                    <tr>
                      <td>
                        <div class="progressbg">
                          <div class="progress progressbg-progress">
                            <div class="progress-bar" style="width: 85%; border-radius: 3px;" role="progressbar" aria-valuenow="82.54" aria-valuemin="0" aria-valuemax="100" aria-label="82.54% Complete">
                              <span class="visually-hidden">82.54% Complete</span>
                            </div>
                          </div>
                          <div class="progressbg-text"><?= $obj->selectfieldwhere("plantypes", "name", "id=" . $rowplandetail['plantypeid'] . "") ?></div>
                        </div>
                      </td>
                      <td class="w-1 fw-bold text-end"><span>₹</span><?= $rowplandetail['price'] ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <div class="text-center mt-4">
                <a class="btn btn-green w-85" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd">Choose plan</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                  <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasEndLabel">Order Summary</h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div class="card">
                      <div class="card-body">
                        <div class="row g-2 align-items-center">

                          <div class="col" style="text-align: left;">
                            <h4 class="card-title m-0">
                              Subscribed Plan Name
                            </h4>
                            <div class="mb-3">
                              <div class="form-label"></div>
                              <select class="form-select  w-85 pb-1 pt-1" fdprocessedid="5a12go">
                                <option value="1">Monthly</option>
                                <option value="2">Quaterly</option>
                                <option value="3">Half Yearly</option>
                                <option value="3">Yearly</option>
                              </select>
                            </div>


                          </div>
                          <div class="col-auto bill-date text-secondary mt-5" style="font-size: 14px;">
                            <span>₹</span> 2,34,623
                          </div>

                        </div>
                        <div class="row g-2 align-items-center">

                          <div class="col" style="text-align: left;">
                            <!-- <h4 class="card-title m-0">
                                  Subscribed Plan Name
                                </h4> -->
                            <div style="color: gray; font-weight: 500;  font-size: 12px;">
                              CGST - 9% & SGST - 9%
                            </div>
                          </div>
                          <div class="col-auto bill-date text-secondary" style="font-size: 14px;">
                            <span>₹</span>4,623
                          </div>

                        </div>
                        <hr class="mt-3" style="margin-bottom: 1px;">
                        <hr class="mt-0 mb-2">
                        <div class="row g-2 align-items-center">

                          <div class="col" style="text-align: left;">

                            <div style="color: rgb(0, 0, 0); font-weight: 500;">
                              Total Amount
                            </div>
                          </div>
                          <div class="col-auto bill-date text-secondary" style="font-size: 14px;">
                            <span>₹</span> 2,34,623
                          </div>

                        </div>

                      </div>
                    </div>

                    <div class="mt-3">
                      <button class="btn btn-primary w-100" style="background-color: black; 
                          font-weight: 700;" type="button" data-bs-dismiss="pay" data-bs-toggle="modal" data-bs-target="#modal-scrollable">
                        I'm Ready to Pay
                      </button>
                    </div>

                    <!-- ----------------------model section start -->

                    <div class="modal modal-blur fade" id="modal-scrollable" tabindex="-1" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Modal Name</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

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
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-success">Send Payment Details For Approval</button>
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-danger">Send Payment Details For Approval</button> -->

                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- --------------------------success model Start--------- -->
                    <div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <div class="modal-status bg-success"></div>
                          <div class="modal-body text-center py-4">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                              <path d="M9 12l2 2l4 -4"></path>
                            </svg>
                            <h3>Payment succedeed</h3>
                            <div class="">Your payment of ₹ 2897690 has been successfully submitted. Your Membership will Active once your payment will Approved</div>
                          </div>
                          <div class="modal-footer">
                            <div class="w-100">
                              <div class="row">
                                <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Go to dashboard
                                  </a></div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <div class="modal-status bg-danger"></div>
                          <div class="modal-body text-center py-4">
                            <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path>
                              <path d="M12 9v4"></path>
                              <path d="M12 17h.01"></path>
                            </svg>
                            <h3>Are you sure?</h3>
                            <div class="text-secondary">Do you really want to remove 84 files? What you've done cannot be undone.</div>
                          </div>
                          <div class="modal-footer">
                            <div class="w-100">
                              <div class="row">
                                <div class="col"><a href="https://preview.tabler.io/modals.html#" class="btn w-100" data-bs-dismiss="modal">
                                    Cancel
                                  </a></div>
                                <div class="col"><a href="https://preview.tabler.io/modals.html#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                                    Delete 84 items
                                  </a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- ---------------------------------Success Model End -->

                    <!-- ---------------------------------------danger Model Start--------------- -->

                    <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <div class="modal-status bg-danger"></div>
                          <div class="modal-body text-center py-4">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path>
                              <path d="M12 9v4"></path>
                              <path d="M12 17h.01"></path>
                            </svg>
                            <h3>Are you sure?</h3>
                            <div class="text-secondary">Do you really want? What you've done cannot be undone.</div>
                          </div>
                          <div class="modal-footer">
                            <div class="w-100">
                              <div class="row">
                                <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Cancel
                                  </a></div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- ----------------------------------------danger model end------------------ -->

                    <!-- ----------------------model section end -->


                    <div class="btn-list mt-4" style="text-align: center; display: block; font-size: 16px; font-weight: 700;">
                      <p>
                        <svg style="color: rgb(1, 219, 114); stroke-width: 2.5px !important; width: 25px; height: 25px;" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v.5"></path>
                          <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                          <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                          <path d="M15 19l2 2l4 -4"></path>
                        </svg>
                        Secure Payment
                      </p>

                    </div>
                    <p style="font-size:12px;">We accept Debit Cards, Credit Card, Netbanking, Paytm, Phonepe, Google Pay & other UPI.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>


      <div class="col-12">
        <div class="card card-md">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="h3">Enterprise-ready. Reach out for a custom quote.</h2>
                <p class="m-0 text-secondary">Tabler is designed to work great for large enterprises. Take a look at our feature comparison.</p>
              </div>
              <div class="col-auto">
                <a href="#" class="btn">
                  Book a demo
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php
$pagemaincontent = ob_get_contents();
ob_end_clean();

$pagemeta = "";
$pagetitle = "Your Dashboard-";
$contentheader = "";
$pageheader = "";
include "main/templete.php"; ?>
<script>

</script>