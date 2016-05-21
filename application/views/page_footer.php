<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="<?php echo base_url();?>/assets/images/home/under.png" class="img-responsive inline" alt="">
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="contact-info bottom">
                    <h2><?php echo $this->lang->line('FOOTER_CONTACT') ?></h2>
                    <address>
                        E-mail: <a href="mailto:someone@example.com">info@biathlon.cs.ut.ee</a> <br>
                        <?php echo $this->lang->line('FOOTER_PHONE') ?>: +1 (123) 456 7890 <br>
                    </address>

                    <h2><?php echo $this->lang->line('FOOTER_ADDRESS') ?></h2>
                    <address>
                        J. Liivi 2, Tartu, <br>
                        <?php echo $this->lang->line('FOOTER_ESTONIA') ?> <br>
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="contact-form bottom">
                    <h2><?php echo $this->lang->line('FOOTER_WRITE') ?></h2>
                    <form name="contact-form" method='POST' action='<?php echo site_url("sendmail/send");?>'>
                        <div class="form-group">
                            <input id="form_name" title="<?php echo $this->lang->line('FOOTER_ADD_NAME_INPUT') ?>" type="text" name="name" class="form-control" required="required" placeholder="<?php echo $this->lang->line('FOOTER_ADD_NAME_INPUT') ?>">
                        </div>
                        <div class="form-group">
                            <input title="<?php echo $this->lang->line('FOOTER_ADD_EMAIL_INPUT') ?>" type="email" name="email" class="form-control" required="required" placeholder="<?php echo $this->lang->line('FOOTER_ADD_EMAIL_INPUT') ?>">
                        </div>
                        <div class="form-group">
                            <textarea title="<?php echo $this->lang->line('FOOTER_LETTER_BOX') ?>" name="message" id="message" required="required" class="form-control" rows="8" placeholder="<?php echo $this->lang->line('FOOTER_LETTER_BOX_PLHOLDER') ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <input title="<?php echo $this->lang->line('SUBMIT_BTN') ?>" type="submit" name="submit2" class="btn btn-submit" value="<?php echo $this->lang->line('SUBMIT_BTN') ?>!">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="contact-info">
                    <h2><?php echo $this->lang->line('FOOTER_VENUES') ?></h2>
                    <div id="map" style=" height: 280px; width: 200px; border-radius: 10px;"></div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; Magnar, Eirik, Rio 2016. <?php echo $this->lang->line('COPYRIGHT') ?>.</p>
                    <p><?php echo $this->lang->line('DESIGN_HELP_BY') ?> <a target="_blank" href="http://biathlon.cs.ut.ee">Leonid</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->
<script defer type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="<?php echo base_url();?>"assets/js/jquery.js"><\/script>')</script>
<script defer type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script defer type="text/javascript" src="<?php echo base_url();?>assets/js/lightbox.min.js"></script>
<script defer type="text/javascript" src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<script defer type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
<script defer type="text/javascript" src="<?php echo base_url();?>assets/js/add_rows.js"></script>
<script defer type="text/javascript" src="<?php echo base_url();?>assets/js/populateData.js"></script>
<script defer type="text/javascript" src="<?php echo base_url();?>assets/js/raceVenueMap.js"></script>
<script defer type="text/javascript" src="<?php echo base_url();?>assets/js/getClubsData.js"></script>
<script defer type="text/javascript" src="<?php echo base_url();?>assets/js/localDataController.js"></script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzk9bums0zMg6T-mmbUMNhEovWDVuWybo&callback=initMap"></script>
</body>
</html>