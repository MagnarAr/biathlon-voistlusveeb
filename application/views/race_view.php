<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="home-slider">
    <div class="container">
            <h1><?php echo $race_id ?></h1>

            <?php foreach($resultswithgroups as $rwg){ ?>
                <div class="panel panel-primary">
                    <!-- Default panel contents -->
                    <div class="panel-heading"> <?= $rwg[0] ?> </div>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>Koht</th>
                            <th>Eesnimi</th>
                            <th>Perenimi</th>
                        </thead>
                        <tbody>
                        <?php foreach($rwg[1] as $result){ ?>
                            <tr>
                                <td>
                                    <?= $result->place ?>
                                </td>
                                <td>
                                    <?= $result->firstname ?>
                                </td>
                                <td>
                                    <?= $result->lastname ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--/#home-slider-->


