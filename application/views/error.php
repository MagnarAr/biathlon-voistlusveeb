<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
    <div class="alert alert-danger" role="alert">
      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <?php echo $this->lang->line('ERRORS') ?>:

            <?php echo validation_errors(); ?>

    </div>
</div>