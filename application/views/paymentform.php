<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php echo $this->lang->line('PAYMENT_TITLE') ?></h1>
                        <p><?php echo $this->lang->line('PAYMENT_SUB_TITLE') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<form action='<?php echo site_url("payment/pay");?>' method="POST">
    <section id="payment_section" class="padding-top">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <label for="payment_amount"><?php echo $this->lang->line('INSERT_PRICE') ?> <span title="<?php echo $this->lang->line('INSERT_PRICE') ?>" class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <input id="payment_amount" title="<?php echo $this->lang->line('PRICE_CELL_TITLE') ?>" name="payment_amount" type="text" placeholder="<?php echo $this->lang->line('PRICE_CELL_PLACEHOLDER') ?>" class="form-control" value="">

                </div>
            </div>
            <p>&nbsp;</p>
            <button type="submit" id="make_payment" class="btn btn-info">
                <?php echo $this->lang->line('MAKE_PAYMENT') ?>
            </button>

        </div>  <br>
    </section>
</form>
<!--/#projects-->

