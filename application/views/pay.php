<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Example payment usage - Swedbank - Pangalink-net</title>
    </head>
    <body>
<?php

// THIS IS AUTO GENERATED SCRIPT
// (c) 2011-2016 Kreata OÜ www.pangalink.net

// File encoding: UTF-8
// Check that your editor is set to use UTF-8 before using any non-ascii characters

// STEP 1. Setup private key
// =========================

$private_key = openssl_pkey_get_private(
    "-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAxI6Wvd8QWRrJqhavdpkFVn2DiNSWbkq90PEPrOJC4BQHpOKO
xZ+XYLsY+MYDXXKcYXG7kErjaUut7c75jOG8A1RRo4uDeFuKqmcJBszNI/QO3wBj
B9tOVVpcW7fEzPoVqUw1CypTPaA6eBR086y2hcXxFbMKcZB+OU/svQ06gFAqVVwj
IpJJIyFHrpXN6Fzs3G96aYnb5eeuzDM63QHkyGTStxicZHuvJCzQlGAcO5EXSdSw
RCmaNv3IDqUcrB3sgAIVyITOe1ZUSiqnu/HXG5+oDrsKjgqu4WrlimyP8XmM6KFa
jIRBxCJXZ+6tL9C4r7NS+fUXTgCstXJgewoOsQIDAQABAoIBAGGcdhvAxPubI/8F
2QlKoK39Eu9Gs5X+JBm5PRGcI53oFIu7vy9BPAnboGEa5NzpZ+O0eXME3b6SyMNK
f/+IsrfsjcZsKFQDEe/hz0fDOTTbpO714DgsntAgWbFqp58rqsoygD0VPdVi1uZ/
Mj04zkPMsxcVnOAc47JOkMCp6x2A00yaASq/5rp9a5B2O31abiixIV+TUQ4pYBUd
OOBR7PQjhNgzllMWvv6lKDaA5VDiI6o+EN8u1gwGOs+xi5xMgqMvui25IZtbIrGV
ObZYcR4sY8yitqTZk1epfIjsIQbr/T/efRGefKvAfe72/DaJzaB16ziKmE5gvlSI
xxSXx0kCgYEA5QAfpO1ZL2vkJANjlspS+bNxNtL4YPPkCm9IjuuNPBm6K/DINBxZ
SwnIfzHMeEST0kTJThKgmPG0TXkIRLCqFO/NfrK5HGE7Skdk38i8z9O7K/pUVOAX
Xcqc8ATh/XrGMQ4h2LTK3B3uGcvI2Az6Pc+aG/ssqb4EOAWWuMDzzZ8CgYEA27s6
x7Mtan6OiLq1hvVXhq6bbAdLnIFDOie70rWbQRLXcoA19Vt1xIrfGJzKY0c9i2ZY
rgaPDUxtTw5FZbWSZrEM02N70OaMIg8LOc2HXysXhKU01Jx4j80YdlgmhQlPmn9u
FcAJM3q2fCGrkryhLhprRfPNwRrvWIh5IZ7BIa8CgYBzi/hrk4coslvPABbEAxqS
+8PoUdMZuHYb/cKyuo/s/148xaV/Bb7YaftMkqgFFzUvJ54bUrLN+Udsv+E4J5vq
LIWXpD5a34S3GgcAE52Rj9glfI4ItXmUzaMaSJxu9gACyIqzeaXSIxf81CJnQUUS
4ylzbO1ASKyAR/GhD1r1KQKBgQCEbaENfnWeu0uYKD8DaZYou888GmF9n4Iu6IeQ
hJdfbsWeYpsils6xd6jhoo1vrB3xh+tmZtmMgEVY4hb9J6NmdMpwFIMo8en/FOYF
HlO6DbSM4yyl/u/Cay+VE6eTgnsReD+WqDhjaE/XHEvVkg3qRU3lyPx2p48c4pNu
qcloTQKBgF9R1NheGcNSe29Nj8lX367M7dgYk60AfZPx+6WM00EbMf/RU+GChBm2
2lpwiceCqFX1uoYQuaNdm5Df9SyIppB5Lpf5+e95kCplmGdDCwjR7KzAKbJ+jxjR
p0zLImeYOJm7v6oiSrRrVMCir/RoZbw1HSGaYoKD+3WyQT+f86al
-----END RSA PRIVATE KEY-----");

// STEP 2. Define payment information
// ==================================

$fields = array(
        "VK_SERVICE"     => "1011",
        "VK_VERSION"     => "008",
        "VK_SND_ID"      => "uid100010",
        "VK_STAMP"       => "12345",
        "VK_AMOUNT"      => $PAYMENT_AMOUNT,
        "VK_CURR"        => "EUR",
        "VK_ACC"         => "EE152200221234567897",
        "VK_NAME"        => "BiathlonVõistlus OÜ",
        "VK_REF"         => "1234561",
        "VK_LANG"        => "EST",
        "VK_MSG"         => "Võistlusmaks",
        "VK_RETURN"      => site_url("payment/success"),
        "VK_CANCEL"      => site_url("payment/cancelled"),
        "VK_DATETIME"    => "2016-04-22T19:15:32+0300",
        "VK_ENCODING"    => "utf-8",
);

// STEP 3. Generate data to be signed
// ==================================

// Data to be signed is in the form of XXXYYYYY where XXX is 3 char
// zero padded length of the value and YYY the value itself
// NB! Swedbank expects symbol count, not byte count with UTF-8,
// so use `mb_strlen` instead of `strlen` to detect the length of a string

$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1011 */
        str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
        str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* uid100010 */
        str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
        str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 150 */
        str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
        str_pad (mb_strlen($fields["VK_ACC"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_ACC"] .        /* EE152200221234567897 */
        str_pad (mb_strlen($fields["VK_NAME"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_NAME"] .       /* Biathlon Võistlusveeb OÜ */
        str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
        str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* Torso Tiger */
        str_pad (mb_strlen($fields["VK_RETURN"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_RETURN"] .     /* http://localhost:8080/project/bULgxsMnzy8jaSGQ?payment_action=success */
        str_pad (mb_strlen($fields["VK_CANCEL"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_CANCEL"] .     /* http://localhost:8080/project/bULgxsMnzy8jaSGQ?payment_action=cancel */
        str_pad (mb_strlen($fields["VK_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_DATETIME"];    /* 2016-04-22T19:15:32+0300 */

/* $data = "0041011003008009uid10001000512345003150003EUR020EE152200221234567897024Biathlon Võistlusveeb OÜ0071234561011Torso Tiger069http://localhost:8080/project/bULgxsMnzy8jaSGQ?payment_action=success068http://localhost:8080/project/bULgxsMnzy8jaSGQ?payment_action=cancel0242016-04-22T19:15:32+0300"; */

// STEP 4. Sign the data with RSA-SHA1 to generate MAC code
// ========================================================

openssl_sign ($data, $signature, $private_key, OPENSSL_ALGO_SHA1);

/* WSA+7o5vDS34hATsVH5CrC80rvoiV+VH+74qa29vXj63A7Onc1dTVHpgm81eJAgiHR4KY/5IdxxNbgFhEk+x/zclcQSkQj2vTTrziRZFtvg8Jd5DsZ92hPbsKmOtLb4YE55Uam6ggPmXDKJO2qONBxl9m51sVpLQX0547CLOx2co9XfB05b5anc4aVbMeu60uYNz/5VMevtvs7rIknT1jmrh2oBsLYcegkGif8mdXX03gFSIZJINbzVdOia7D6vcPu/6mbt04wZrcQhpxAXCWrfh1Fwaju0gmOJI2OI2HwTS8K/ajSKk41BXZ0lj3iplK8w70iiTi9w6dcmnWeroLQ== */
$fields["VK_MAC"] = base64_encode($signature);

// STEP 5. Generate POST form with payment data that will be sent to the bank
// ==========================================================================
?>
    <div class="container">
        <h1><a href="http://localhost:8080/">Pangalink-net</a></h1>
        <p>Payment demo <strong>"Swedbank"</strong></p>

        <form method="post" action="http://localhost:8080/banklink/swedbank-common">
            <!-- include all values as hidden form fields -->
<?php foreach($fields as $key => $val):?>
            <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($val); ?>" />
<?php endforeach; ?>

            <!-- draw table output for demo -->
            <table>
                <tr>
                    <td>Saaja:</td>
                    <td><?php echo $fields["VK_NAME"]?></td>
                </tr>
                <tr>
                    <td>Konto:</td>
                    <td><?php echo $fields["VK_ACC"]?></td>
                </tr>
                <tr>
                    <td>Summa:</td>
                    <td><?php echo $fields["VK_AMOUNT"]?></td>
                </tr>

                <!-- when the user clicks "Edasi panga lehele" form data is sent to the bank -->
                <tr><td><input type="submit" class="btn btn-info" value="Edasi panga lehele" /></td></tr>
            </table>
        </form>
    </div>
