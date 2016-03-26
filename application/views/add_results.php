<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Lisa/muuda tulemusi</h1>
                        <p>Vali võistlus, mille tulemusi soovid muuta</p>
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
                    <label for="activeRace">Võistlus <span title="Vali võistlus" class="glyphicon glyphicon-info-sign btn-link"></span> </label>
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
                    <label for="raceClasses">Võistlusklass <span title="Vali võistlusklass" class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <select class="form-control" name="raceClasses" id="raceClasses">
                    </select>
                </div>
                <p>&nbsp;</p>
                <div class="col-md-12 column table-responsive">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                        <tr >
                            <th class="text-center">
                                Koht<span title="Koht võistlustel, näiteks 1" class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center" id="bibNo">
                                Nr <span title="Võistleja rinnanumber, näiteks 22" class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                Eesnimi <span title="Võistleja eesnimi" class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                Perenimi <span title="Võistleja perenimi" class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                Klubi <span title="Võistleja klubi või riik" class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center" colspan="4">
                                Trahvid <span title="Võistleja möödalasud, kui oli vähem tiire, märkida ikkagi 0" class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                Kokku <span title="Trahve kokku, arvutab automaatselt kui klikite lahtrisse" class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                Algus <span title="Võistleja stardiaeg kujul: hh:mm:ss" class="glyphicon glyphicon-info-sign btn-link"></span>
                            </th>
                            <th class="text-center">
                                Lõpp <span title="Võistleja lõpuaeg kujul: hh:mm:ss" class="glyphicon glyphicon-info-sign btn-link"></span>
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
            <a id="add_results_row" class="btn btn-success pull-left">Lisa rida</a>
            <button type="submit" id="save_results" class="btn btn-info">
                Salvesta andmed
            </button>
        </div>
    </section>
</form>
<!--/#projects-->


