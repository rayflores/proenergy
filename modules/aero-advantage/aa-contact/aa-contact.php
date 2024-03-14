<?php
/**
 * Module Name: AeroAdvantage Contact Form
 * Description: Template for AeroAdvantage Contact Form Module.
 * 
 */
$aa_cf_apply = 'Yes' === get_sub_field('aa_cf_apply') ? true : false;
if ( $aa_cf_apply ) {
?>

<section id="section_aa-contact" class="p-5">
    <style>
        #section_aa-contact {
            background-color: #53565A;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="row g-0 justify-content-end">
            <form method="post" class="pt-5 bg-light col-7">
                <div class="row g-0 justify-content-end">
                    <div class="col-4 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="text" class="ab-reg-form-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Company Name and Location" value="">
                        </div>
                    </div>
                    <div class="col-4 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="email" class="ab-reg-form-email-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Email" value="">
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row g-0 justify-content-end">
                    
                    <div class="col-4 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="text" class="ab-reg-form-job-title-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Name" value="">
                        </div>
                    </div>
                    <div class="col-4 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="tel" class="ab-reg-form-phone-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Phone" value="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row g-0 justify-content-end">
                    
                    <div class="col-4 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="text" class="ab-reg-form-company-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Application" value="">
                        </div>
                    </div>
                    <div class="col-4 pb-5">
                        <div class="ab-reg-form-container pe-3">
                        <input type="text" class="ab-reg-form-job-title-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Part Number" value="">
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row g-0 justify-content-end">
                    <div class="col-8 pb-4 mb-5">
                        <label for="full-description" class="form-label">Full Description</label>
                        <textarea class="form-control" id="full-description" name="full-description" rows="5" required=""></textarea>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row g-0 justify-content-end">
                    <div class="col-8 pb-4 mb-5">
                        <div class="ab-reg-form-submit-button text-end pe-5">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php } ?>