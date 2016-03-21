<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bottom-separator">
                <img src="../../assets/images/home/under.png" class="img-responsive inline" alt="">
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="contact-info bottom">
                    <h2>Kontakt</h2>
                    <address>
                        E-mail: <a href="mailto:someone@example.com">info@biathlon.cs.ut.ee</a> <br>
                        Phone: +1 (123) 456 7890 <br>
                    </address>

                    <h2>Aadress</h2>
                    <address>
                        J. Liivi 2, Tartu, <br>
                        Eesti <br>
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="contact-form bottom">
                    <h2>Kirjuta meile</h2>
                    <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                        <div class="form-group">
                            <input title="Nimi" type="text" name="name" class="form-control" required="required" placeholder="Nimi">
                        </div>
                        <div class="form-group">
                            <input title="Email" type="email" name="email" class="form-control" required="required" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <textarea title="kiri" name="message" id="message" required="required" class="form-control" rows="8" placeholder="Sisu siia"></textarea>
                        </div>
                        <div class="form-group">
                            <input title="Saada" type="submit" name="submit" class="btn btn-submit" value="Saada!">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="contact-info">
                    <h2>Võistluspaigad</h2>
                    <div id="map" style=" height: 280px; width: 200px; border-radius: 10px;"></div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="copyright-text text-center">
                    <p>&copy; Magnar, Eirik, Rio 2016. Kõik õigused kaitstud.</p>
                    <p>Disain <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/add_rows.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/populateData.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/raceVenueMap.js"></script>
<? if ($js_to_load != '') : ?>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/<?=$js_to_load;?>"></script
<? endif;?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzk9bums0zMg6T-mmbUMNhEovWDVuWybo&callback=initMap"></script>
</body>
</html>