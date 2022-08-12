<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="home-banner position-relative"><i class="position-absolute top-0 bottom-0 start-0 end-0 opacity-75 mm"></i>
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
                                <input type="text" name="text" name="text" class="form-control p-3" placeholder="Name of Facility" />
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="zip" name="text" class="form-control p-3" placeholder="Zip Code" />
                            </div>
                            <div class="col-md-4">
                                <button name="search" value="home" class="btn btn-primary2 w-100 p-3 text-white"><i class="fa fa-search"></i> SEARCH</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php if ($isSearch) : ?>
    <section class="services py-5">
        <h2>All Search Result</h2>

        <?php foreach ($data as $key => $value) { ?>
            <div onclick="showModel(<?= $value['rowid'] ?>)" class="row" style="border: 1px solid #9e9e9e;margin: 30px 10%;padding: 20px;border-radius: 10px;box-shadow: 2px 2px 2px 1px rgb(0 0 0 / 20%);">
                <div class="col-md-8" style="text-align: center;">
                    <a>
                        <h3><?= $value['provider_name'] ?></h3>
                    </a>
                    <p><?= $value['provider_address'] ?></p>
                    <p><?= $value['provider_city'] ?></p>

                </div>
                <div class="col-md-4">
                    Over all ratting
                    <?= $value['overall_ratting'] ?>/5
                </div>
            </div>
        <?php }   ?>
    </section>



    <div class="modal fade" id="modelDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" id="all_model_data">

            </div>
        </div>
    </div>



    <!-- Show Model -->
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Tell us what kind of injury the nursing home caused for a valuation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" action="<?=base_url('details')?>">
                    <div class="modal-body">
                        <div class="mb-3"> <label><input name="Negligence" type="checkbox" />Negligence </label></div>
                        <div class="mb-3"><label> <input name="Pressure_Ulcers" type="checkbox" /> Pressure Ulcers </label></div>
                        <div class="mb-3"><label> <input name="Sexual_Assault" type="checkbox" /> Sexual Assault </label></div>
                        <div class="mb-3"><label> <input name="Medication_Errors" type="checkbox" /> Medication Errors </label></div>
                        <div class="mb-3"><label> <input name="Premature_Death" type="checkbox" /> Premature Death </label></div>
                        <div class="mb-3"><label> <input name="Bed_Rail_Entrapment" type="checkbox" /> Bed Rail Entrapment </label></div>
                        <div class="mb-3"><label> <input name="Covid_19" type="checkbox" /> Covid-19 </label></div>
                        <div class="mb-3"><label> <input name="Slips_Falls" type="checkbox" /> Slips & Falls </label></div>
                        <div class="mb-3"><label> <input name="Elopements" type="checkbox" /> Elopements</label></div>
                        <div class="mb-3"><label> <input name="Fractures" type="checkbox" /> Fractures</label></div>
                        <div class="mb-3"><label> <input name="Weight_Malnutrition" type="checkbox" /> Weight Loss or Malnutrition</label></div>
                        <div class="mb-3"><label> <input name="Neglect" type="checkbox" /> Neglect</label></div>
                        <div class="mb-3"><label> <input name="Choking" type="checkbox" /> Choking</label></div>
                        <div class="mb-3"><label> <input name="Other" type="checkbox" /> Other</label></div>

                    </div>
                    <input type="hidden" name="current_id" id="current_id"/>
                    <div class="modal-footer">
                        <button name="submit_row" class="btn btn-primary">Calculate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <!-- Show Model -->


<?php endif;  ?>
<section class="services py-5">
    <div class="container py-5">
        <div class="row justify-content-center"> <a href="slips-falls" class="text-center rounded-3 border shadow p-4 d-block text-decoration-none m-3 animate__animated animate__zoomIn text-dark"> <img src="<?= base_url('assets/theme/') ?>images/icon1.png" alt="Falls" width="70" class="mt-1" /><br />
                <b class="fs-6 mt-4 d-block line-height1">Falls Are Preventable</b> </a> <a href="bed-rail-entrapment" class="text-center rounded-3 border shadow p-4 d-block text-decoration-none m-3 animate__animated animate__zoomIn text-dark"> <img src="<?= base_url('assets/theme/') ?>images/icon2.png" alt="Bedsores" width="70" class="mt-1" /><br />
                <b class="fs-6 mt-4 d-block line-height1">Bedsore Development</b> </a> <a href="elopement" class="text-center rounded-3 border shadow p-4 d-block text-decoration-none m-3 animate__animated animate__zoomIn text-dark"> <img src="<?= base_url('assets/theme/') ?>images/icon3.png" alt="Bedsores" width="60" class="mt-1" /><br />
                <b class="fs-6 mt-4 d-block line-height1">Elopement (Unauthorized Exit)</b> </a> </div>
</section>
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