<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="home-banner position-relative">
  <i class="position-absolute top-0 bottom-0 start-0 end-0 opacity-75 mm"></i>
  <div class="container">
    <div class="row position-relative z-index">
      <div class="col-lg-3 col-md-1"></div>
      <div class="col-lg-6 col-md-10 text-center text-white position-relative">
        <h1 class="display-5 fw-bold animate__animated animate__fadeInDown">Georgia’s Top Nursing Home Lawsuit Resource</h1>
        <a class="line-height2 my-5 d-inline-block animate__animated animate__zoomIn btn bg-white text-uppercase px-4 fw-bold" href="javascript:;">Let’s get started</a> <img src="<?= base_url('assets/theme/') ?>images/arrow.png" width="70" alt="Arrow" class="position-absolute mx-auto start-0 end-0 arrow-curve animate__animated animate__zoomIn" />
      </div>
      <div class="col-lg-3 col-md-1"></div>
      <div class="col-12 mt-4">
        <form>
          <div class="bg-white rounded-3 p-4 shadow mt-md-5 animate__animated animate__bounceIn">
            <div class="row">
              <div class="col-md-4">
                <input type="text" name="text" value="<?= $textSearch ?>" id="textInput" class="form-control p-3" placeholder="Name of Facility" />
              </div>
              <div class="col-md-4">
                <input type="text" name="zip" value="<?= $zipSearch ?>" id="zipInput" class="form-control p-3" placeholder="Zip Code" />
              </div>
              <div class="col-md-4">
                <button onclick="doSearch()" id="searchBtn" name="search" type="button" value="home" class="btn btn-primary2 w-100 p-3 text-white"><i class="fa fa-search"></i> SEARCH</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<div id="allSearchResult">
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

              <?php for ($i = 0; $i < ($count / 9); $i++) {  ?>
                <!-- <button <?= $page == ($i + 1) ? "disabled" : "" ?> name="page" value="<?= $i + 1 ?>" class="btn rounded">
                  <?= $i + 1 ?>
                </button> -->
              <?php } ?>


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
</div>
<section class="bg-light py-5 text-sections">
  <div class="container py-md-5">
    <div class="row align-items-center">
      <div class="col-md-6 pe-md-5 animate__animated animate__slideInLeft">
        <h2 class="h3 fw-bold mb-4">Georgia’s Nursing Home Litigation Data Center</h2>
        <p>You and your loved one deserve competent healthcare treatment. There is no excuse for injuries sustained while staying in a skilled nursing facility. Georgia provides legal remedies for those who are injured or killed due to the negligence of a nursing home’s deficient healthcare administration. </p>
      </div>
      <div class="col-md-6 animate__animated animate__slideInRight"> <img src="<?= base_url('assets/theme/') ?>images/img1.png" alt="Image" class="img-fluid" /> </div>
    </div>
  </div>
</section>
<section class="bg2 py-5 counters text-center text-white overflow-hidden">
  <div class="container py-md-4">
    <div class="row">
      <div class="col-md-4 my-4 animate__animated animate__fadeInDown"> <i class="fa fa-procedures fa-3x text-white"></i>
        <h4 class="h4 fw-bold mt-4">$200,000</h4>
        <b class="d-block mt-4">Average Settlement For Bedsore</b> <small class="text-white opacity-75 line-height1 d-block pt-3">The average nursing home has a large insurance policy which means it is likely that you will receive compensation.</small>
      </div>
      <div class="col-md-4 my-4 animate__animated animate__fadeInDown"> <i class="fa fa-running fa-3x text-white"></i>
        <h4 class="h4 fw-bold mt-4">$300,000 + </h4>
        <b class="d-block mt-4">Average Settlement For Elopement</b> <small class="text-white opacity-75 line-height1 d-block pt-3">Nursing homes owe you a high duty of care. Failure to deliver is a liability to the skilled nursing facility.</small>
      </div>
      <div class="col-md-4 my-4 animate__animated animate__fadeInDown"> <i class="fa fa-user-injured fa-3x text-white"></i>
        <h4 class="h4 fw-bold mt-4">$1,000,000 </h4>
        <b class="d-block mt-4">Common Verdicts for Wrongful Death Lawsuits</b> <small class="text-white opacity-75 line-height1 d-block pt-3">Litigation against a nursing home is highly specialized. Hire a specialist attorney.</small>
      </div>
    </div>
  </div>
</section>