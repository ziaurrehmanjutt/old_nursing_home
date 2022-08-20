<div class="modal-header">
  <h5 class="modal-title h5 fw-bold" id="staticBackdropLabel"> <i class="fa fa-home"></i>
    <?= $data->provider_name ?>
  </h5>
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
  <div class="row">
    <div class="col-12">
    <?php if ($pType == 'danger') : ?>
      <div class="alert alert-danger d-flex align-items-center line-height1" role="alert"> <i class="fa fa-exclamation-triangle bi flex-shrink-0 me-3 fa-2x" aria-label="Danger:"></i>
        <div>This nursing home frequently fails to live up to the minimum standards set forth by the state and federal governments. It is likely that this home suffers from poor staffing, poor morale, and poor medical record documentation. These types of homes frequently commit negligent and grossly negligent acts resulting in the death of residents.</div>
      </div>
      <?php elseif ($pType == 'warning') : ?>
      <div class="alert alert-warning d-flex align-items-center line-height1" role="alert"> <i class="fa fa-exclamation-triangle bi flex-shrink-0 me-3 fa-2x" aria-label="Danger:"></i>
        <div>This nursing home struggles to meet the minimum standards required by regulators. These types of nursing homes frequently commit negligence and it is likely that there is poor documentation that the staff properly cared for you or your loved one.</div>
      </div>
      <?php else : ?>
      <div class="alert alert-success d-flex align-items-center line-height1" role="alert"> <i class="fa fa-check-circle bi flex-shrink-0 me-3 fa-2x" aria-label="Danger:"></i>
        <div>This nursing home typically does well on its government inspections. This suggests that the nursing home is adequately financed and is able to accommodate the regulatory requirements imposed by state and federal regulators.</div>
      </div>
      <?php endif; ?>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="rounded-3 p-4 ratings-box my-3"> <strong>Overall Rating <small>(
        <?=$overAll?>
        )</small></strong>
        <div class="clearfix my-2"></div>
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
    <div class="col-lg-3 col-md-6">
      <div class="rounded-3 p-4 ratings-box my-3"> <strong>Health Inspections <small>(
        <?=$healthInspection?>
        )</small></strong>
        <div class="clearfix my-2"></div>
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
    <div class="col-lg-3 col-md-6">
      <div class="rounded-3 p-4 ratings-box my-3"> <strong>Staffing <small>(
        <?=$staffing?>
        )</small></strong>
        <div class="clearfix my-2"></div>
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
    <div class="col-lg-3 col-md-6">
      <div class="rounded-3 p-4 ratings-box my-3"> <strong>Quality Measures <small>(
        <?=$qm_ratting?>
        )</small></strong>
        <div class="clearfix my-2"></div>
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
    <div class="col-12">
      <div class="progress mt-4 mb-4">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-<?= $pType ?>" role="progressbar" aria-valuenow="<?= $totalRatings * 5 ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $totalRatings * 5 ?>%"></div>
      </div>
      <div class="clearfix mb-4"></div>
    </div>
  </div>
  <!-- <div class="row d-flex align-items-stretch">
    <div class="col-lg-3 colmd-6 my-4">
      <div class="px-4 py-5 rounded-3 percent-box text-white text-center h-100"> <i class="fas fa-hand-holding-medical fa-2x mb-2"></i>
        <div class="clearfix"></div>
        <span class="d-inline-block my-3 p-2 rounded-1 bg-white fw-bold">
        <?=$vaccination->percent_vacc_resident?>
        %</span>
        <h5 class="h6 fw-bold">Vaccinated Residents</h5>
      </div>
    </div>
    <div class="col-lg-3 colmd-6 my-4">
      <div class="px-4 py-5 rounded-3 percent-box text-white text-center h-100"> <i class="fas fa-first-aid fa-2x mb-2"></i>
        <div class="clearfix"></div>
        <span class="d-inline-block my-3 p-2 rounded-1 bg-white fw-bold">
        <?=$vaccination->percent_vacc_healthcare?>
        %</span>
        <h5 class="h6 fw-bold">Vaccinated Healthcare Personnel</h5>
      </div>
    </div>
    <div class="col-lg-3 colmd-6 my-4">
      <div class="px-4 py-5 rounded-3 percent-box text-white text-center h-100"> <i class="fas fa-hospital fa-2x mb-2"></i>
        <div class="clearfix"></div>
        <span class="d-inline-block my-3 p-2 rounded-1 bg-white fw-bold">
        <?=$vaccination->percent_full_vacc_resident?>
        %</span>
        <h5 class="h6 fw-bold">Fully Vaccinated Residents who Received a Booster Dose</h5>
      </div>
    </div>
    <div class="col-lg-3 colmd-6 my-4">
      <div class="px-4 py-5 rounded-3 percent-box text-white text-center h-100"> <i class="fas fa-syringe fa-2x mb-2"></i>
        <div class="clearfix"></div>
        <span class="d-inline-block my-3 p-2 rounded-1 bg-white fw-bold">
        <?=$vaccination->percent_full_vaccinated?>
        %</span>
        <h5 class="h6 fw-bold">Fully Vaccinated Staff who Received a Booster Dose</h5>
      </div>
    </div>
    <div class="col-12">
      <div class="table-responsive">
        <table class="table table-striped-columns my-3 bottom-table">
          <tr>
            <th>1</th>
            <th>Ownership Type</th>
            <td><?=$data->ownership_type?></td>
            <th>Penalties</th>
            <td><?=$data->penalities?>
              $</td>
          </tr>
          <tr>
            <th>2</th>
            <th>Address</th>
            <td><?=$data->provider_address?></td>
            <th>City</th>
            <td><?=$data->provider_city?></td>
          </tr>
          <tr>
            <th>3</th>
            <th>ZIP Code</th>
            <td><?=$data->provider_zip?></td>
            <th>Mobile No.</th>
            <td><a href="tel:(<?=$data->phone_number?>) <?=$data->phone_number_code?> "> (
              <?=$data->phone_number_code?>
              )
              <?=$data->phone_number?>
              </a></td>
          </tr>
        </table>
      </div>
    </div>
  </div> -->
</div>
<div class="modal-footer">
  <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" class="btn btn2 text-white mx-auto btn-sm px-4 py-2 my-3 rounded-pill text-uppercase">Tell us what kind of injury the nursing home caused for a valuation</button>
</div>
