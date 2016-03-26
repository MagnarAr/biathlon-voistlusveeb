<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Võistlused
                            <span id="race-count">(<?= $race_count ?>) </span>
                            ja nende tulemused
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->
<p>&nbsp;</p>
<div class="container" id="race-result-container">
    <ul class="list-group">
        <?php
        foreach($all_races as $row){
            echo "<li title='".$row->name."' class='list-group-item result-container__list-element clickable' onclick='openRace(this)'>".$row->name.": ".$row->date."</li>";
        }
        ?>
    </ul>

    <span class="btn-link clickable" id="load_more_button"> Lae juurde. </span>
    <span id="load-more-loader" class="glyphicon glyphicon-repeat fa-spin hidden"></span>
</div>