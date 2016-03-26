<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Lisa võistlus!</h1>
                        <p>Lisa uus võistlus, hiljem tulemuste sisestamiseks</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->

<form action='<?php echo site_url("addrace/create_race");?>' method="POST">
    <section id="add_results" class="padding-top">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <label for="race_name">Nimi <span title="Võistluse nimi" class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <input id="race_name" name="race_name" type="text" placeholder="Nimi" class="form-control" value="">
                </div>
                <div class="col-md-4">
                    <label for="name">Tüüp <span title="Võistluse tüüp" class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <select id="name" class="form-control" name="racetype">
                        <option value="sprint">Sprint</option>
                        <option value="pursuit">Jälitussõit</option>
                        <option value="individual">Individuaal</option>
                        <option value="mass">Ühisstart</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="race_date">Kuupäev <span title="Võistluse toimumise kuupäev PP/KK/AAAA" class="glyphicon glyphicon-info-sign btn-link"></span> </label>
                    <input id="race_date" name="race_date" type="text" placeholder="01/01/2016" class="form-control" value="">
                </div>
            </div>
            <p>&nbsp;</p>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>

                            <tr>
                                <th class="text-center">
                                    Vanuseklass <span title="Vanuseklass" class="glyphicon glyphicon-info-sign btn-link"></span>
                                </th>
                                <th class="text-center">
                                    Distants <span title="Võistluse distants" class="glyphicon glyphicon-info-sign btn-link"></span>
                                </th>
                                <th>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <!--
                        {race_attribute_entries}-->
                            <tr id='addr0'>
                                <td>
                                    <select title="Vanuseklass" class="form-control" name="Vanuseklass[]"><option value="N13">N13</option><option value="M13">M13</option><option value="N15">N15</option><option value="M15">M15</option><option value="N17">N17</option><option value="M17">M17</option><option value="N19">N19</option><option value="M19">M19</option><option value="N21">N21</option><option value="M21">M21</option><option value="N">Naised</option><option value="M">Mehed</option><option value="N40">N40</option><option value="M40">M40</option><option value="N50">N50</option><option value="M50">M50</option><option value="N60">N60</option><option value="M60">M60</option><option value="N-Ama">N-Har</option><option value="M-Ama">M-Har</option></select>
                                </td>
                                <td>
                                    <input title="Distants" type="text" name='Distants[]'  placeholder='Distants' class="form-control"/>
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
            <a id="add_race_row" class="btn btn-success pull-left">Lisa rida <span class="glyphicon glyphicon-plus-sign"></span></a>

            <button type="submit" id="save_race" class="btn btn-info">
                Salvesta andmed
            </button>

        </div>  <br>
    </section>
</form>
<!--/#projects-->

