<?php include 'indexheader.php'; ?>


<!--    main page -->

<main class="main-content">
    <section class="breadSec py-50">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-md-7">
                    <div class="commonHead mb-0">
                        <h2 class="commonHead_title mt-0 text-white">Pricing</h2>
                        <div class="line-bot bg-white"></div>
                        <!-- <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                    </div>
                </div>
                <div class="col-md-5">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="pricingSec py-80">
        <div class="container">
            <div class="commonHead text-center">
                <span class="commonHead_subtitle">Pricing</span>
                <h2 class="commonHead_title">Check Our Affordable Pricing
                </h2>
                <div class="line-bot"></div>

            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                    <div class="row justify-content-center">
                        <?php
                        while ($rowplan = $obj->fetch_assoc($plan)) {
                            $monthlyprice = $obj->selectfieldwhere("plandetail", 'price', "planid=" . $rowplan['id'] . " and plantypeid=1 and status = 1");
                        ?>

                            <div class="col-md-4 col-sm-6">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3><?= $rowplan['name'] ?></h3>
                                            <div class="price-box">
                                                <span>recommended</span>
                                                <p>Start from </p>
                                                <h2>₹<?= $monthlyprice ?></h2>
                                                
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <tbody>
                                                        <?php
                                                        $plantype = $obj->selectextrawhere("plandetail", "planid=" . $rowplan['id'] . "");
                                                        while ($rowplandetail = $obj->fetch_assoc($plantype)) { ?>
                                                            <tr>
                                                                <th><?= $obj->selectfieldwhere("plantypes", "name", "id=" . $rowplandetail['plantypeid'] . "") ?></th>
                                                                <th><span>₹</span><?= $rowplandetail['price']  ?></th>
                                                            </tr>
                                                        <?php } ?>
                                                        <!-- <tr>
                                                            <th>For 15 Days</th>
                                                            <th><span>₹</span>8000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Monthly</th>
                                                            <th><span>₹</span>15000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Quaterly</th>
                                                            <th><span>₹</span>35,000</th>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="table-footer">
                                            <a href="login" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>

            <!-- seconf row -->
            <!-- <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                        <div class="row justify-content-center">

                            <div class="col-md-4 col-sm-6">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3>Cash Basic</h3>
                                            <div class="price-box">
                                                <span>recommended</span>
                                                <h2>₹5000</h2>
                                                <p>Start from </p>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th>For 7 Days</th>
                                                            <th><span>₹</span>5000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>For 15 Days</th>
                                                            <th><span>₹</span>8000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Monthly</th>
                                                            <th><span>₹</span>15000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Quaterly</th>
                                                            <th><span>₹</span>35,000</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="table-footer">
                                            <a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3>Future Basic</h3>
                                            <div class="price-box">
                                                <span>recommended</span>
                                                <h2>₹5000</h2>
                                                <p>Start from </p>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th>For 7 Days</th>
                                                            <th><span>₹</span>5000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>For 15 Days</th>
                                                            <th><span>₹</span>8000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Monthly</th>
                                                            <th><span>₹</span>15000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Quaterly</th>
                                                            <th><span>₹</span>35,000</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="table-footer">
                                            <a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="pricing-block-one">
                                    <div class="pricing-table">
                                        <div class="table-header">
                                            <h3>Option Basic</h3>
                                            <div class="price-box">
                                                <span>recommended</span>
                                                <h2>₹5000</h2>
                                                <p>Start from </p>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th>For 7 Days</th>
                                                            <th><span>₹</span>5000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>For 15 Days</th>
                                                            <th><span>₹</span>8000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Monthly</th>
                                                            <th><span>₹</span>15000</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Quaterly</th>
                                                            <th><span>₹</span>35,000</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="table-footer">
                                            <a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div> -->

            <div class="table-footer mt-4" style="text-align: center;">
                <a href="#" class="btn btn-primary">View More Plans</a>
            </div>
        </div>
    </section>
</main>



<?php include 'indexfooter.php' ?>
<script>
    // menu toggle

    $(document).ready(function() {

        body = document.querySelector('body');

        $('.menu-icon').click(function() {

            $(body).toggleClass("menuShow");

        });

    });





    //Select

    $('.select-form').selectpicker({
        noneSelectedText: 'Select'
    });

    //Dropdown Hover

    $(document).ready(function() {

        if ($(window).width() >= 1200) {

            $(".mainHeader .mainHeader_down .dropdown").hover(

                function() {

                    $(this).addClass("show");

                    $(this).find(".dropdown-menu").addClass("show");

                },

                function() {

                    $(this).removeClass("show");

                    $(this).find(".dropdown-menu").removeClass("show");

                }

            );

        } else {

            $(".mainHeader .mainHeader_down .dropdown .dropdown-menu").on('click', function(e) {

                e.stopPropagation();

            });

        }

        $('.mainHeader_down .dropdown-menu li a').on('click', function(event) {

            if ($(window).width() <= 1199) {

                $(this).parent('li').toggleClass('active');

                $(this).parent('li').siblings().removeClass('active');

            } else {



            }

        });

    });
</script>

</html>