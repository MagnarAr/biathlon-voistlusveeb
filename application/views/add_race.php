<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Lisa võistlus</h1>
                        <p>Lisa uus võistlus, hiljem tulemuste sisestamiseks</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->


<section id="add_results" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <label for="name">Nimi</label>
                <input id="race-name" type="text" class="form-control" placeholder="" value="">
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                    <thead>

                        <tr>
                            <th class="text-center">
                                Vanuseklass
                            </th>
                            <th class="text-center">
                                Distants
                            </th>
                        </tr>



                    </thead>
                    <tbody>
                    <!--
                    {race_attribute_entries}-->
                        <tr id='addr0'>
                            <td>
                                <input type="text" name='age-group0' value='M15'  placeholder={placeholder} class="form-control"/>
                            </td>
                            <td>
                                <input type="text" name='distance0'  placeholder='10' class="form-control"/>
                            </td>
                        </tr>
                    <!--
                     {/race_attribute_entries}-->
                    </tbody>
                </table>
            </div>
        </div>
        <a id="add_race_row" class="btn btn-success pull-left">Lisa rida</a><a id='delete_row' class="btn pull-left btn btn-danger">Kustuta rida</a>
        <button id="save_race" class="btn btn-info pull-left">
            Salvesta andmed
        </button>
    </div>
</section>
<!--/#projects-->

