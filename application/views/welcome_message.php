<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="home-slider">
	<div class="container">
		<div class="row">
			<div class="main-slider">
				<div class="col-md-6 col-sm-4">
					<h1><?php echo $this->lang->line('WELCOME_MESSAGE_TITLE') ?></h1>
					<p><?php echo $this->lang->line('WELCOME_MESSAGE_SUB_TITLE') ?></p>
					<a href="<?php echo site_url('races')?>" class="btn btn-common"><?php echo $this->lang->line('LATEST_RESULTS') ?></a>
				</div>

			</div>
		</div>
	</div>
</section>
<!--/#home-slider-->


