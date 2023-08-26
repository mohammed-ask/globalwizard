<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'main/PHPMailer/src/Exception.php';
require 'main/PHPMailer/src/PHPMailer.php';
require 'main/PHPMailer/src/SMTP.php';

include "main/session.php";
$obj->saveactivity("Activation Request Request Approved/Disapprove", "", $_GET["hakuna"], $_GET["hakuna"], "User", "Activation Request Request Approved/Disapprove");
$id = $_GET['hakuna'];
$rowfund = $obj->selectextrawhere("fundrequest", "id=" . $id . "")->fetch_assoc();
$email = $obj->selectfieldwhere("users", "email", "id=" . $rowfund['userid'] . "");
if ($_GET['what'] === 'Approve' && $rowfund['status'] == 0) {
    $xx['status'] = 1;
    $xx["approvedon"] = date('Y-m-d H:i:s');
    $xx['approvedby'] = $employeeid;
    $obj->update("fundrequest", $xx, $id);
    $kk['membershipstatus'] = 'Yes';
    $obj->update("users", $kk, $rowfund['userid']);
} elseif ($_GET['what'] === 'Reject' && $rowfund['status'] == 0) {
    $yy['status'] = 91;
    $yy["approvedon"] = date('Y-m-d H:i:s');
    $yy['approvedby'] = $employeeid;
    $obj->update("fundrequest", $yy, $id);
} elseif ($rowfund['status'] != 0) {
    $obj->saveactivity("Already Approved/Disapprove but run again", "", $_GET["hakuna"], $_GET["hakuna"], "User", "Already Approved/Disapprove but run again");
    die;
}
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = $host;
$mail->SMTPAuth = true;
$mail->Username = "$sendmailfrom";
$mail->Password = "$sendemailpassword";
$mail->isSendmail();
$mail->SMTPSecure = 'ssl';
$mail->Port = $port;
$mail->setFrom("$sendmailfrom", 'Global Wizard');
$mail->addAddress($email);
$mail->isHTML(true);
$mail->addReplyTo("$sendmailfrom", 'Global Wizard');
$mail->Subject = 'PMS Equity Fund Request';
ob_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Subscription Email</title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],
        /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img+div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u~div .email-container {
                min-width: 320px !important;
            }
        }

        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
            }
        }

        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
            }
        }
    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>
        .primary {
            background: #025db5eb;
        }

        .bg_white {
            background: #ffffff;
        }

        .bg_light {
            background: #f7fafa;
        }

        .bg_black {
            background: #000000;
        }

        .bg_dark {
            background: rgba(0, 0, 0, .8);
        }

        .email-section {
            padding: 2.5em;
        }

        /*BUTTON*/
        .btn {
            padding: 5px 15px 5px 15px;
            display: inline-block;
            margin: 10px 0px;
        }

        .btn.btn-primary {
            border-radius: 5px;
            background: #025db5eb;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
        }

        .btn.btn-white {
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }

        .btn.btn-white-outline {
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn.btn-black-outline {
            border-radius: 0px;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }

        .btn-custom {
            color: rgba(0, 0, 0, .3);
            text-decoration: underline;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            color: #000000;
            margin-top: 0;
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, .4);
        }

        a {
            color: #025db5eb;
        }

        table {}

        /*LOGO*/

        .company-name {
            margin: 0;
            color: #025db5eb;
            font-size: 26px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }

        .email-title {
            color: #000;
            margin-top: 45px;
            margin-bottom: 0px;
            font-size: 22px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            line-height: 30px;
        }

        .pvt-ltd {
            margin: 0;
            color: #025db5eb;
            font-size: 12px;
            font-weight: 600;
            margin-top: -4px;
            letter-spacing: 3px;
        }

        /*HERO*/
        .hero {
            position: relative;
            z-index: 0;
        }

        .hero .text {
            color: rgba(0, 0, 0, .3);
        }

        .hero .text h2 {
            color: #000;
            font-size: 13px;
            margin-bottom: 0;
            font-weight: 500;
            line-height: 1.4;
        }

        .hero .text h3 {
            font-size: 24px;
            font-weight: 300;
        }

        .hero .text h2 span {
            font-weight: 600;
            color: #000;
        }

        .text-author {
            bordeR: 1px solid rgba(0, 0, 0, .05);
            color: #000;
            margin: 1rem;
            padding: 1em;
            font-size: 13px;
        }

        .text-author img {
            border-radius: 50%;
            padding-bottom: 20px;
        }

        .text-author h3 {
            margin-bottom: 0;
        }




        @media screen and (max-width: 500px) {
            .email-title {
                font-size: 20px;
            }

            .btn.btn-primary {
                font-size: 25px;
                letter-spacing: 15px;
            }


        }
    </style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
    <center style="width: 100%; background-color: #f1f1f1;">
        <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style="max-width: 600px; margin: 0 auto;" class="email-container">
            <!-- BEGIN BODY -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                <tr>
                    <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="text-align: center;">
                                    <img style="width: 150px; margin-top: 16px;" src="https://globalwizzard.in/main/images/logo/Global.png" alt="">
                                    <!-- <h1 class="company-name">Global Wizard Pvt Ltd.</h1> -->
                                    <!-- <p class="pvt-ltd">Private Limited</p> -->

                                    <h1 class="email-title">Payment Successful for Global Wizard Membership Plan</h1>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr><!-- end tr -->
                <tr>
                    <td valign="middle" class="hero bg_white" style="padding: 1em 0 4em 0;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td style="padding: 0 2.5em; text-align: center; padding-bottom: 2em;">
                                    <div class="text">
                                        <h2>Payment has been done Successfully for Membership Activation.</h2>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: left;">
                                    <div class="text-author">

                                        <table>

                                            <h3 style="text-align: center; margin-bottom: 10px;">Your Transaction Detials</h3>
                                            <tr>
                                                <td style="    font-weight: 600;">Transaction ID</td>
                                                <td><?= $rowfund['transactionid'] ?></td>
                                            </tr>

                                            <tr>
                                                <td style="width: 150px;    font-weight: 600;">Payment Method</td>
                                                <td><?= $rowfund['paymentmethod'] ?></td>
                                            </tr>

                                            <tr>
                                                <td style="    font-weight: 600;">Date & Time</td>
                                                <td><?= changedateformatespecito($rowfund['added_on'], "Y-m-d H:i:s", "d M, Y H:i") ?></td>
                                            </tr>

                                            <tr>
                                                <td style="    font-weight: 600;">Amount</td>
                                                <td>₹ <?= $rowfund['amount'] ?></td>
                                            </tr>

                                        </table>


                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center; margin-bottom:20px;">

                                    <p class="btn btn-primary">Click here to Login</p>


                                </td>

                            </tr>
                            <tr>

                                <td style=" padding: 0 2.5em; text-align: center; padding-bottom: 0em;">
                                    <div class="text">
                                        <h2>If you ever encounter any issues or have questions about your account, our
                                            dedicated support team is ready to assist you. Reach out to us through mail
                                            or call at contact section.
                                            <br>
                                            Thank you for choosing Global Wizard as your advisory company. We look
                                            forward to partnering with you on your journey to success.
                                            <div style="font-weight: 800;">
                                                <br>Best regards,
                                                The Global Wizard Team
                                        </h2>
                                    </div>
        </div>
        </td>

        </tr>
        </table>
        </td>
        </tr><!-- end tr -->
        <!-- 1 Column Text + Button : END -->
        </table>

        </div>
    </center>
</body>

</html>
<?php
$templatedata = ob_get_contents();
ob_end_clean();
$mail->Body = $templatedata;
$mail->send();
