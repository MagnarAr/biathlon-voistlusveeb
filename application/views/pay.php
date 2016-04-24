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
MIIEpAIBAAKCAQEAu7vmtlyeEnzlFlZqmi/5TXM3wy/JmUOP8Ugmv2/epKWbR8Pk
ralSXS7nIeKXfAJx1qa0Wqj0hFxAuV08zR95WY+VisHQesQ2TRsx6kYwWbASxxwq
RFiwTsjSDTAXrorfIYDl9Imv22EwY0hMUPeHVc3lnm94Th6ExSwLEEW23MfZsv+f
y8eaIh67HAcKsnoNOjdtQqCcmbfy96VBD+kxcFlyI/HesTVP+LYUuHUNJHHcMSGb
WJIsxb+AvcvPd00bGnJE0E/mrZNQ+3Yy78MuwbEHXzgKJwA2P/A6IAjWznA6QpSV
/pjO0Yfcd/lAMcnuZdosLi3cFBxFysvCBdbO3wIDAQABAoIBAQCjcgqBxs0Qx5Ak
DISvTQk+NwvbceWQ/FN7/BdQILO0oUI6DwEvePVuj4FH7SF6JB68hVMMg4CvJCpt
uBFRfQ+HvAy0S92YpO+p3f1tPEKoMzWGCK1758NINGs8dByKJ/nwD2slpiJnW4xn
Q/C9pWQ8fhBmCiKx0LxDdf8D4c49FHoaODa8D7aV41Z44nNAHnP9+lLwpbYjdSL1
MTX+LgQM5qFJ6MH8+TjsZf3CkxQQAqghB1C6UPlhRwJCYEBtwFZFruKU7sR0tyK2
/7NzxPFduNruUflLFCPwy6uXV3jDva1f8R39tQf/FMqil1yPJida6mKr64l2m9go
1fh4q6JBAoGBAPSppg6vft0n1MKwYY78i92f52tEsanxdaTBYndMaQ4pe/8wKSyD
UNFqhsFZo2uNjqOaAvsEKOrWkcZPmDquXZO/d+kb0KYVmt+S6Es4jSu9Jazal2eL
uxlYZhIYirG+THd9UIe+9NNU841mI/mr7G/43QpOhgcQmmHisS/0NxfxAoGBAMRu
7S7HkKEr0CWb8hjN2sj9qezkKwVRCFYCIAd1QMtHwBZj17fDCq9vUAF8ex3URVf/
lKK1lar738dvgmGediMx7cR4LmoUYzE2b7nPfbQcwN4Y/1LNURZ1GHsE3iZgbleT
seqYCD4fPoZwFsRBPjTCSAsiRcrUDPJJsCi1zKPPAoGAA2trmsDxMP4hhycX9fup
qMtXXLR1Fz78ufTJ/4jd3wjNZt+xc6HSO1sVzxYFprcvyzGX4RJJ0B53oyHxqsBN
JoeCkYuF+wxKQd23yXVc48OdBzF29EeLser+YjpdleZnAzSJL5yHp3yEevF2h0LT
5yy/SimWzfp5bezRNS5gpsECgYAcjJayRtTxZ8G/xZOBIWIb9iodQOgzxJw2i+aF
zvfU05/KYUZ38cP6zW3OWX43TqOpb371yvhuul7CyKUldPdslBQfiuwMBNyJyYSh
d9OoOsmZPf7V1PtlDS26q3FyGG/REKk6FFCWXsoileXpLiZRWq9H1vpXyUv8ZtNQ
h2OvpwKBgQC4Ynr1u1eM3uo0XKoaCMEcYf35kS1mtdDFZGsCb1Y3XaSvEjrEm37c
oc+oxiCbQSOzS8AEJhs1GnwUWIqErTIDVsW88ZRPGW+cq9KQrotyo+vs7jhuIREe
/H4HPHAO9hu29MEZ8S86zHAHtGOLnOEOr3LveNYSl3zZvsm1VOpUTg==
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
        "VK_NAME"        => "Biathlon Võistlusveeb OÜ",
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
