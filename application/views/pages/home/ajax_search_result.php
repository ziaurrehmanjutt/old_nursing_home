<?php if ($isSearch) : ?>
    <section class="search-result py-5" id="search-result">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center" id="youridhere">
            <h2 class="fw-bold h3">All Search Result</h2>
            <hr class="w-25 mx-auto" />
          </div>
        </div>
        <div id="search_result_div" class="row d-flex align-items-stretch homes-container">
          <?php foreach ($data as $key => $value) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
              <div class="bg-white rounded-3 p-4 shadow home-b h-100" onclick="showModel(<?= $value['rowid'] ?>)">
                <a href="javascript:;" class="text-decoration-none fw-bold mb-3 d-block">
                  <?= $value['provider_name'] ?>
                </a>
                <i class="fa fa-map-marker-alt float-start me-1 text-muted"></i>
                <p class="d-block overflow-hidden text-muted"><?= $value['provider_address'] ?>, <small><?= $value['provider_city'] ?></small></p>
                <div class="clearfix my-3"></div>
                <i class="fa fa-star float-start me-1 text-warning"></i>
                <span class="text-muted">Over All Ratting <?= $value['overall_ratting'] ?>/5</span>
              </div>
            </div>
          <?php }   ?>
        </div>
        <br /><br />

        <div style="text-align: right">
          <?php if ($count > 9) : ?>
            <form>
              <input type="hidden" value="home" name="search" />
              <input type="hidden" value="<?= $textSearch ?>" name="text" />
              <input type="hidden" value="<?= $zipSearch ?>" name="zip" />

              <!-- <?php for ($i = 0; $i < ($count / 9); $i++) {  ?>
                <button <?= $page == ($i + 1) ? "disabled" : "" ?> name="page" value="<?= $i + 1 ?>" class="btn rounded">
                  <?= $i + 1 ?>
                </button>
              <?php } ?> -->



              <button class="btn btn-primary" name="page" value="<?= $page-1?>" <?= $page == 1 ? "disabled" : "" ?>>Previous</button>
              <button class="btn btn-primary"  name="page" value="<?= $page+1?>" <?= $page+1 > ($count / 9) ? "disabled" : "" ?>  >Next</button>

            </form>
          <?php endif  ?>
        </div>
      </div>
    </section>
    <div class="modal fade" id="modelDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content" id="all_model_data"> </div>
      </div>
    </div>

    <!-- Show Model -->

    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title h5 fw-bold" id="exampleModalToggleLabel2">Tell us what kind of injury the nursing home caused for a valuation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="POST" action="<?= base_url('details') ?>">
            <div class="modal-body calc">
              <div class="row">
                <div class="col-md-6 my-2">
                  <label><input name="Negligence" type="checkbox" /> Negligence</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Pressure_Ulcers" type="checkbox" /> Pressure Ulcers</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Sexual_Assault" type="checkbox" /> Sexual Assault</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Medication_Errors" type="checkbox" /> Medication Errors</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Premature_Death" type="checkbox" /> Premature Death</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Bed_Rail_Entrapment" type="checkbox" /> Bed Rail Entrapment</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Covid_19" type="checkbox" /> Covid-19</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Slips_Falls" type="checkbox" /> Slips &amp; Falls</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Elopements" type="checkbox" /> Elopements</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Fractures" type="checkbox" /> Fractures</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Weight_Malnutrition" type="checkbox" /> Weight Loss or Malnutrition</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Neglect" type="checkbox" /> Neglect</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Choking" type="checkbox" /> Choking</label>
                </div>
                <div class="col-md-6 my-2">
                  <label><input name="Other" type="checkbox" /> Other</label>
                </div>
                <input type="hidden" name="current_id" id="current_id" />
              </div>
            </div>
            <div class="modal-footer">
              <button name="submit_row" class="btn btn2 text-white rounded-pill px-4">Calculate</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Show Model -->

  <?php endif;  ?>