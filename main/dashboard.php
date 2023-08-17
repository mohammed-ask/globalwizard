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
      while ($rowplan = $obj->fetch_assoc($plan)) {
        $monthlyplan = $obj->selectextrawhere("plandetail", "planid=" . $rowplan['id'] . " and plantypeid=1 and status = 1")->fetch_assoc(); ?>
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
                  while ($rowplandetail = $obj->fetch_assoc($plantype)) {

                  ?>
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
                <a class="btn btn-green w-85" data-bs-toggle="offcanvas" href="#offcanvasEnd<?= $rowplan['id'] ?>" role="button" aria-controls="offcanvasEnd<?= $rowplan['id'] ?>">Choose plan</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd<?= $rowplan['id'] ?>" aria-labelledby="offcanvasEndLabel">
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
                              <input type="text" hidden class="inp" value="<?= $rowplan['id'] ?>">
                              <select class="form-select plantype w-85 pb-1 pt-1" fdprocessedid="5a12go">
                                <?php
                                $types = $obj->selectextrawhereupdate("plantypes", "id,name", "status = 1");
                                $types = mysqli_fetch_all($types);
                                foreach ($types as list($id, $name)) { ?>
                                  <option value="<?= $id ?>"><?= $name ?></option>
                                <?php } ?>
                              </select>
                            </div>


                          </div>
                          <div class="col-auto bill-date text-secondary mt-5 amt" style="font-size: 14px;">
                            <span>₹</span> <?= $monthlyplan['price'] ?>
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
                          <div class="col-auto bill-date text-secondary gstamt" style="font-size: 14px;">
                            <span>₹</span><?php
                                          $gst = $monthlyplan['price'] * 18 / 100;
                                          echo $gst ?>
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
                          <div class="col-auto bill-date text-secondary totalamt" style="font-size: 14px;">
                            <span>₹</span> <?= $monthlyplan['price'] + $gst ?>
                          </div>

                        </div>

                      </div>
                    </div>

                    <div class="mt-3 modalbtn">
                      <button data-bs-toggle="modal" data-bs-target="#modal-report" onclick='dynamicmodal("<?= $rowplan["id"] ?>", "addpayment", "1", "Add Payment")' class="btn btn-primary w-100" style="background-color: black; 
                          font-weight: 700;" type="button" data-bs-dismiss="pay" data-bs-toggle="modal" data-bs-target="#modal-scrollable">
                        I'm Ready to Pay
                      </button>
                    </div>

                    <!-- --------------------------success model Start--------- -->
                    <!-- <div class="modal modal-blur fade" id="modal-success" tabindex="-1" role="dialog" aria-hidden="true">
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
                    </div> -->


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
  $('.plantype').on('change', function() {
    ref = $(this).closest('.offcanvas-body')
    planid = $(this).closest('.offcanvas-body').find('.inp').val()
    plantypeid = $(this).val()
    console.log(plantypeid)
    $.post({
      url: "main/fetchplanamount.php",
      data: {
        plantypeid: plantypeid,
        planid: planid
      },
      success: function(response) {
        console.log(response, 'rrr')
        gstamt = parseFloat(response) * 18 / 100
        totalamt = parseFloat(response) + gstamt
        $(ref).find('.amt').html('₹' + response)
        $(ref).find('.gstamt').html('₹' + gstamt)
        $(ref).find('.totalamt').html('₹' + totalamt)
        $(ref).find('.modalbtn').html(`<button data-bs-toggle="modal" data-bs-target="#modal-report" onclick="dynamicmodal('${planid}', 'addpayment', '${plantypeid}', 'Add Payment Immidiate')" class="btn btn-primary w-100" style="background-color: black; font-weight: 700;" type="button" data-bs-dismiss="pay" data-bs-toggle="modal" data-bs-target="#modal-scrollable">
                        I'm Ready to Pay
                      </button>`);
      },
    });
  });
</script>