<div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel"><?= $data->provider_name ?></h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

    <?php
    $overAll = $data->overall_ratting;
    $healthInspection = $data->health_inspection;
    $staffing = $data->staffing_ratting;
    $qm_ratting = $data->qm_ratting;

    $totalRatings = $overAll + $healthInspection + $staffing + $qm_ratting;

    $pType = 'success';
    if ($totalRatings < 11) {
        $pType = 'danger';
    } else if ($totalRatings < 16) {
        $pType = 'warning';
    }

    ?>
    <div class="row" style="text-align: center;">
        <div class="col-sm-3">
            Overall Ratting(<?=$overAll?>)

            <div>
                <?php
                if ($overAll == 0) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($overAll > 0 && $overAll < 1) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($overAll <= 1) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($overAll > 1 && $overAll < 2) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($overAll <= 2) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($overAll > 2 && $overAll < 3) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($overAll <= 3) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($overAll > 3 && $overAll < 4) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($overAll <= 4) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($overAll > 4 && $overAll < 5) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }
                ?>
            </div>
        </div>
        <div class="col-sm-3">
            Health inspections(<?=$healthInspection?>)
            <div>
                <?php
                if ($healthInspection == 0) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($healthInspection > 0 && $healthInspection < 1) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($healthInspection <= 1) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($healthInspection > 1 && $healthInspection < 2) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($healthInspection <= 2) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($healthInspection > 2 && $healthInspection < 3) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($healthInspection <= 3) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($healthInspection > 3 && $healthInspection < 4) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($healthInspection <= 4) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($healthInspection > 4 && $healthInspection < 5) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }
                ?>
            </div>
        </div>
        <div class="col-sm-3">
            Staffing(<?=$staffing?>)
            <div>
                <?php
                if ($staffing == 0) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($staffing > 0 && $staffing < 1) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($staffing <= 1) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($staffing > 1 && $staffing < 2) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($staffing <= 2) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($staffing > 2 && $staffing < 3) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($staffing <= 3) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($staffing > 3 && $staffing < 4) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($staffing <= 4) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($staffing > 4 && $staffing < 5) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }
                ?>
            </div>
        </div>

        <div class="col-sm-3">
            Quality measures(<?=$qm_ratting?>)
            <div>
                <?php
                if ($qm_ratting == 0) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($qm_ratting > 0 && $qm_ratting < 1) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($qm_ratting <= 1) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($qm_ratting > 1 && $qm_ratting < 2) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($qm_ratting <= 2) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($qm_ratting > 2 && $qm_ratting < 3) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($qm_ratting <= 3) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($qm_ratting > 3 && $qm_ratting < 4) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }

                if ($qm_ratting <= 4) {
                    print '<span class="fa fa-star-o"></span>';
                } else if ($qm_ratting > 4 && $qm_ratting < 5) {
                    print '<span class="fa fa-star-half-o"></span>';
                } else {
                    print '<span class="fa fa-star checked"></span>';
                }
                ?>
            </div>
        </div>

    </div>



    <div class="progress" style="    margin: 20px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-<?= $pType ?>" role="progressbar" aria-valuenow="<?= $totalRatings * 5 ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $totalRatings * 5 ?>%"></div>
    </div>



    <?php if ($pType == 'danger') : ?>
        <p class="text-danger">This nursing home frequently fails to live up to the minimum standards set forth by the 
            state and federal governments. It is likely that this home suffers from poor staffing, 
            poor morale, and poor medical record documentation. These types of homes frequently commit 
            negligent and grossly negligent acts resulting in the death of residents.</p>
    <?php elseif ($pType == 'warning') : ?>
        <p class="text-warning">This nursing home struggles to meet the minimum standards required 
            by regulators. These types of nursing homes frequently commit negligence and it is 
            likely that there is poor documentation that the staff properly cared for you or your 
            loved one.</p>
    <?php else : ?>
        <p class="text-success">This nursing home typically does well on its government inspections. 
            This suggests that the nursing home is adequately financed and is able to accommodate the 
            regulatory requirements imposed by state and federal regulators.</p>
    <?php endif; ?>
</div>
<div class="modal-footer">

        <div class="row">
            <div class="col-sm-3">
                <div style="text-align: center;">
                    <span><?=$vaccination->percent_vacc_resident?>%</span>
                    <p><small>Vaccinated Residents</small></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div style="text-align: center;">
                    <span><?=$vaccination->percent_vacc_healthcare?>%</span>
                    <p> <small>Vaccinated Healthcare Personnel</small></p>
                </div>
            </div><div class="col-sm-3">
                <div style="text-align: center;">
                    <span><?=$vaccination->percent_full_vacc_resident?>%</span>
                    <p> <small>Fully Vaccinated Residents who Received a Booster Dose</small></p>
                </div>
            </div><div class="col-sm-3">
                <div style="text-align: center;">
                    <span><?=$vaccination->percent_full_vaccinated?>%</span>
                    <p><small>Fully Vaccinated Staff who Received a Booster Dose</small></p>
                </div>
            </div>
        </div>

        <hr style="width: 100%;">
        <table class="table">
   
            <tr>
                <th>ownership type</th>
                <td><?=$data->ownership_type?></td>

                <th>penalties</th>
                <td><?=$data->penalities?>$</td>
            </tr>

            <tr>
                <th>Address</th>
                <td><?=$data->provider_address?></td>

                <th>CITY</th>
                <td><?=$data->provider_city?></td>
            </tr>

            <tr>
                <th>ZIP</th>
                <td><?=$data->provider_zip?></td>

                <th>Mobile</th>
                <td><a href="tel:(<?=$data->phone_number?>) <?=$data->phone_number_code?> "> (<?=$data->phone_number_code?>) <?=$data->phone_number?> </a></td>
            </tr>

        </table>

        <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" class="btn btn-secondary" style="margin: auto;">Tell us what kind of injury the nursing home caused for a valuation.</button>
</div>