<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php echo $this->lang->line('ADD_RACE_TITLE') ?></h1>
                        <p><?php echo $this->lang->line('ADD_RACE_SUB_TITLE') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<form action='<?php echo site_url("addrace/create_race");?>' onsubmit="return checkConnection()"  method="POST">
    <section id="add_results" class="padding-top">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <label for="race_name"><?php echo $this->lang->line('RACE_NAME') ?> <span title="<?php echo $this->lang->line('RACE_NAME_SPAN') ?>" class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <input id="race_name" title="<?php echo $this->lang->line('RACE_NAME_SPAN') ?>" name="race_name" type="text" placeholder="<?php echo $this->lang->line('RACE_NAME') ?>" class="form-control" value="">
                </div>
                <div class="col-md-4">
                    <label for="name"><?php echo $this->lang->line('RACE_TYPE') ?> <span title="<?php echo $this->lang->line('RACE_TYPE_SPAN') ?>" class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <select id="name" title="<?php echo $this->lang->line('RACE_TYPE_SPAN') ?>" class="form-control" name="racetype">
                        <option value="sprint"><?php echo $this->lang->line('TYPE_SPRINT') ?></option>
                        <option value="pursuit"><?php echo $this->lang->line('TYPE_PURSUIT') ?></option>
                        <option value="individual"><?php echo $this->lang->line('TYPE_INDIVIDUAL') ?></option>
                        <option value="mass"><?php echo $this->lang->line('TYPE_MASS') ?></option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="race_date"><?php echo $this->lang->line('RACE_DATE') ?> <span title="<?php echo $this->lang->line('RACE_DATE_SPAN') ?>" class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <input id="race_date" title="<?php echo $this->lang->line('RACE_DATE') ?>" name="race_date" type="text" placeholder="01/01/2016" class="form-control" value="">
                </div>
            </div>
            <p>&nbsp;</p>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>

                            <tr>
                                <th class="text-center">
                                    <?php echo $this->lang->line('AGE_CLASS') ?> <span title="<?php echo $this->lang->line('AGE_CLASS') ?>" class="glyphicon glyphicon-info-sign btn-link"></span>
                                </th>
                                <th class="text-center">
                                    <?php echo $this->lang->line('DISTANCE') ?> <span title="<?php echo $this->lang->line('DISTANCE_SPAN') ?>" class="glyphicon glyphicon-info-sign btn-link"></span>
                                </th>
                                <th>

                                </th>
                            </tr>
                        </thead>
                        <tbody id="raceTable">
                        <!--
                        {race_attribute_entries}-->
                            <tr id='addr0'>
                                <td>
                                    <select title="<?php echo $this->lang->line('AGE_CLASS') ?>" class="form-control" name="Vanuseklass[]"><option value="N13">N13</option><option value="M13">M13</option><option value="N15">N15</option><option value="M15">M15</option><option value="N17">N17</option><option value="M17">M17</option><option value="N19">N19</option><option value="M19">M19</option><option value="N21">N21</option><option value="M21">M21</option><option value="N">Naised</option><option value="M">Mehed</option><option value="N40">N40</option><option value="M40">M40</option><option value="N50">N50</option><option value="M50">M50</option><option value="N60">N60</option><option value="M60">M60</option><option value="N-Ama">N-Har</option><option value="M-Ama">M-Har</option></select>
                                </td>
                                <td>
                                    <input title="<?php echo $this->lang->line('DISTANCE') ?>" type="text" name='Distants[]'  placeholder='<?php echo $this->lang->line('DISTANCE') ?>' class="form-control"/>
                                </td>
                                <td>
                                   &nbsp;
                                </td>
                            </tr>
                        <!--
                         {/race_attribute_entries}-->
                        </tbody>
                    </table>
                </div>
            </div>
            <a id="add_race_row" class="btn btn-success pull-left"><?php echo $this->lang->line('ADD_ROW') ?> <span class="glyphicon glyphicon-plus-sign"></span></a>

            <button type="submit" id="save_race" class="btn btn-info">
                <?php echo $this->lang->line('SAVE_DATA') ?>
            </button>

        </div>  <br>
    </section>
</form>
<!--/#projects-->

