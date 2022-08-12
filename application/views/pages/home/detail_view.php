<section class="home-banner position-relative contact-banner"><i class="position-absolute top-0 bottom-0 start-0 end-0 bg-dark opacity-50"></i>
    <div class="container">
        <div class="row position-relative z-index">
            <div class="col-lg-3 col-md-1"></div>
            <div class="col-lg-6 col-md-10 text-center text-white">
                <h1 class="h1 fw-bold animate__animated animate__fadeInDown mb-3">
                    <?=$data->provider_name?>
                </h1>

                <p>
                <?=$data->provider_address?>
                </p>
            </div>
            <div class="col-lg-3 col-md-1"></div>
        </div>
    </div>
</section>

<section>
    <div>
        <table class="table">
            <tr>
                <th>Type of Injury</th>
                <th>Low Valuation</th>
                <th>High Valuation</th>
                <th>Average</th>
            </tr>
            <?php foreach ($points  as $key => $value) { ?>
                <tr>
                    <td><?=$value['name']?></td>
                    <th><?=$value['low']?></th>
                    <th><?=$value['high']?></th>
                    <th></th>
            </tr>
            <?php } ?>
        </table>
    </div>
</section>
<section class="about py-md-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-12 animate__animated animate__fadeInDown text-center">
                <h3 class="h3 fw-bold mb-3">Contact Us</h3>
                <p class="line-height1 opacity-75 mt-2 mb-4">Please complete the contact form below and an attorney will contact you within 24-hours. <br />
                    If you require immediate assistance, please call 770-609-4929.</p>
            </div>
            <div class="col-lg-4 mt-4 animate__animated animate__zoomIn">
                <div class="bg-white rounded-3 border shaow text-center p-5 h-100 c-boxes"> <i class="fa fa-phone-alt fa-3x text-primary2"></i> <strong class="fs-5 d-block mb-3 mt-4">Phone Number</strong>
                    <p class="line-height1"><a target="_blank" class="text-primary2 text-decoration-none" href="tel:7706094929">770-609-4929</a></p>
                </div>
            </div>
            <div class="col-lg-4 mt-4 animate__animated animate__zoomIn">
                <div class="bg-white rounded-3 border shaow text-center p-5 h-100 c-boxes"> <i class="fa fa-globe fa-3x text-primary2"></i> <strong class="fs-5 d-block mb-3 mt-4">Our Website</strong>
                    <p class="line-height1"><a target="_blank" class="text-primary2 text-decoration-none" href="http://nursinghomesuit.com">www.nursinghomesuit.com</a></p>
                </div>
            </div>
            <div class="col-lg-4 mt-4 animate__animated animate__zoomIn">
                <div class="bg-white rounded-3 border shaow text-center p-5 h-100 c-boxes"> <i class="fa fa-envelope fa-3x text-primary2"></i> <strong class="fs-5 d-block mb-3 mt-4">Our Email</strong>
                    <p class="line-height1"><a class="text-primary2 text-decoration-none" href="mailto:admin@nursinghomesuit.com">admin@nursinghomesuit.com</a></p>
                </div>
            </div>
            <div class="my-2"></div>
            <div class="mb-4 col-lg-4 mt-4 animate__animated animate__fadeInUp">
                <label for="field1" class="form-label">Your Name</label>
                <input type="text" class="form-control p-3" id="field1" placeholder="Name Here" />
            </div>
            <div class="mb-4 col-lg-4 mt-4 animate__animated animate__fadeInUp">
                <label for="field2" class="form-label">Your Email</label>
                <input type="text" class="form-control p-3" id="field2" placeholder="Email Here" />
            </div>
            <div class="mb-4 col-lg-4 mt-4 animate__animated animate__fadeInUp">
                <label for="field2" class="form-label">Telephone Number</label>
                <input type="text" class="form-control p-3" id="field2" placeholder="Telephone Number" />
            </div>
            <div class="mb-4 pt-2">
                <button type="button" class="btn btn-primary2 py-2 px-5 text-white rounded-pill animate__animated animate__zoomIn">Send</button>
            </div>
        </div>
    </div>
</section>