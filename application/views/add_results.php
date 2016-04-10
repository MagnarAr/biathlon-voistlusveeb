<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php echo $this->lang->line('ADD_RESULT_TITLE') ?> </h1>
                        <p><?php echo $this->lang->line('ADD_RESULT_SUB_TITLE') ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->


<form action='<?php echo site_url("addresults/create_result_entry");?>' method="POST">
    <section id="add_results" class="padding-top">
        <div class="container">

            <div class="row clearfix">
                <div class="col-md-6">
                    <label for="activeRace"><?php echo $this->lang->line('CHOOSE_RACE') ?>  <span title="<?php echo $this->lang->line('CHOOSE_RACE_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <select class="form-control" name="activeRace" id="activeRace">
                        <option value="zero">Vali</option>
                        <?php
                        foreach($all_races as $row){
                            echo '<option value="'.$row->name.'">'.$row->name.': '.$row->date.'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="raceClasses"><?php echo $this->lang->line('CHOOSE_AGE_CLASS') ?>  <span title="<?php echo $this->lang->line('CHOOSE_AGE_CLASS_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <select class="form-control" name="raceClasses" id="raceClasses">
                    </select>
                </div>
                <p>&nbsp;</p>
                <div class="col-md-12 column table-responsive">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                        <tr >
                            <th class="text-center">
                                <?php echo $this->lang->line('ADD_PLACE') ?> <span title="<?php echo $this->lang->line('ADD_PLACE_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center" id="bibNo">
                                <?php echo $this->lang->line('ADD_NUMBER') ?>  <span title="<?php echo $this->lang->line('ADD_NUMBER_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                <?php echo $this->lang->line('ADD_FIRST_N') ?>  <span title="<?php echo $this->lang->line('ADD_FIRST_N_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                <?php echo $this->lang->line('ADD_LAST_N') ?>  <span title="<?php echo $this->lang->line('ADD_LAST_N_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                <?php echo $this->lang->line('ADD_CLUB') ?>  <span title="<?php echo $this->lang->line('ADD_CLUB_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center" colspan="4">
                                <?php echo $this->lang->line('ADD_PENALTIES') ?>  <span title="<?php echo $this->lang->line('ADD_PENALTIES_SPAN') ?>" class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                <?php echo $this->lang->line('MISS_CALC') ?>  <span title="<?php echo $this->lang->line('MISS_CALC_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                <?php echo $this->lang->line('ADD_START_TIME') ?>  <span title="<?php echo $this->lang->line('ADD_START_TIME_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                <?php echo $this->lang->line('ADD_FINISH_TIME') ?>  <span title="<?php echo $this->lang->line('ADD_FINISH_TIME_SPAN') ?> " class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr id="addr0">
                            <td><input title="Koht" type="text" placeholder="Koht" name="Koht[]" class="form-control"></td>
                            <td><input title="Rinnanumber" type="text" placeholder="Bib" name="Bib[]" class="form-control"></td>
                            <td><input title="Eesnimi" type="text" placeholder="Eesnimi" name="Eesnimi[]" class="form-control"></td>
                            <td><input title="Perenimi" type="text" placeholder="Perenimi" name="Perenimi[]" class="form-control"></td>
                            <td><input title="Klubi" type="text" placeholder="Klubi" name="Klubi[]" class="form-control"></td>
                            <td><input title="Lamades 1" type="text" placeholder="L1" name="L1[]" class="form-control"></td>
                            <td><input title="Lamades 2" type="text" placeholder="L2" name="L2[]" class="form-control"></td>
                            <td><input title="Püsti 1" type="text" placeholder="P1" name="P1[]" class="form-control"></td>
                            <td><input title="Püsti 2" type="text" placeholder="P2" name="P2[]" class="form-control"></td>
                            <td><input title="Kokku" type="text" placeholder="Kokku" name="Kokku[]" class="form-control"></td>
                            <td><input title="Algusaeg: hh:mm:ss" type="text" placeholder="Algus" name="Algus[]" class="form-control"></td>
                            <td><input title="Lõppaeg: hh:mm:ss" type="text" placeholder="Lopp" name="Lopp[]" class="form-control"></td>
                            <td>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a id="add_results_row" class="btn btn-success pull-left"><?php echo $this->lang->line('ADD_ROW') ?> </a>
            <button type="submit" id="save_results" class="btn btn-info">
                <?php echo $this->lang->line('SAVE_DATA') ?>
            </button>
        </div>
    </section>
</form>
<!--/#projects-->


