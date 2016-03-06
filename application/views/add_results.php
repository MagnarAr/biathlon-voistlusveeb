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



<section id="add_results" class="padding-top">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                    <thead>
                    <tr >
                        <th class="text-center">
                            Koht
                        </th>
                        <th class="text-center" width="6%">
                            Nr
                        </th>
                        <th class="text-center">
                            Eesnimi
                        </th>
                        <th class="text-center">
                            Perenimi
                        </th>
                        <th class="text-center">
                            Klubi
                        </th>
                        <th class="text-center" colspan="4">
                            Trahvid
                        </th>
                        <th class="text-center">
                            Kokku
                        </th>
                        <th class="text-center">
                            Algus
                        </th>
                        <th class="text-center">
                            Lõpp
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='addr0'>
                        <td>
                            <input type="text" name='place0'  placeholder='1' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='bibno0'  placeholder='##' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='first0' placeholder='Eesnimi' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='last0' placeholder='Perenimi' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='country0' placeholder='Klubi' class="form-control"/>
                        </td>
                        <!--- Trahvid -->
                        <td>
                            <input type="text" id='prone1_0' name='prone1_0'  placeholder='L' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='prone2_0'  placeholder='L' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='stand1_0'  placeholder='P' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='stand2_0'  placeholder='P' class="form-control"/>
                        </td>
                        <!-- /trahvid -->
                        <td>
                            <input type="text" id="totalmiss0" name='totalmiss0'  placeholder='0' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='starttime0'  placeholder='hh:mm:ss' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='endtime0'  placeholder='hh:mm:ss' class="form-control"/>
                        </td>

                    </tr>
                    <tr id='addr1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a id="add_results_row" class="btn btn-success pull-left">Lisa rida</a><a id='delete_row' class="btn pull-left btn btn-danger">Kustuta rida</a>
    </div>
</section>
<!--/#projects-->

