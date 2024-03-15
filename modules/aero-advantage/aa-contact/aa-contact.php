<?php
/**
 * Module Name: AeroAdvantage Contact Form
 * Description: Template for AeroAdvantage Contact Form Module.
 * 
 */
$aa_cf_apply = get_sub_field('aa_cf_apply') ? get_sub_field('aa_cf_apply') : false;
if ( $aa_cf_apply ) {
?>

<section id="section_aa-contact" class="p-0">
    <style>
        #section_aa-contact {
            background-color: rgba(163, 168, 170, 0.2);
        }
        #section_aa-contact .overlay {
            background: rgba(0,0,0,0.2);
        }
        #section_aa-contact input {
            border-color: rgba(163, 168, 170, 0.5);
        }
        #section_aa-contact input:focus-visible {
            border-color: rgba(163, 168, 170, 0);
            outline: none;
        }
        #section_aa-contact input::placeholder {
            color: rgba(163, 168, 170, 0.5);
        }
        #section_aa-contact label {
            color: rgba(163, 168, 170, 0.5);
        }
        textarea#full-description {
            background: rgba(163, 168, 170, 0.2);
            box-shadow: none;
        }
        button.btn.btn-outline-grey {
            color: rgba(163,168,171, 0.5);
            border: 1px solid ;
        }
        .aa-contact-header-container h2 {
            font-family: "eurostile", sans-serif;
            font-size: 2.92em;
            font-weight: 900;
        }
    </style>
    <div class="container-fluid overlay p-5">
        <div class="row g-0">
            <div class="col-12 col-lg-3">
                <div class="aa-contact-header-container pt-5">
                    <h2 class="text-white ps-5 mx-auto">Contact</h2>
                </div>
            </div>
            <form method="post" class="p-5 bg-light col-12 col-lg-9">
                <div class="row g-5">
                    <div class="col-6 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="text" class="aa-contact-form-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Company Name and Location" value="" required>
                        </div>
                    </div>
                    <div class="col-6 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="email" class="ab-reg-form-email-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Email" value="" required>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    
                    <div class="col-6 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="text" class="ab-reg-form-job-title-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Name" value="" required>
                        </div>
                    </div>
                    <div class="col-6 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="tel" class="ab-reg-form-phone-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Phone" value="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    
                    <div class="col-6 pb-5">
                        <div class="ab-reg-form-container pe-3">
                            <input type="text" class="ab-reg-form-company-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Application" value="" required>
                        </div>
                    </div>
                    <div class="col-6 pb-5">
                        <div class="ab-reg-form-container pe-3">
                        <input type="text" class="aa-contact-form-part-number-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Part Number" value="" required>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-12 pb-5">
                        <label for="full-description" class="form-label border-0">Full Description</label>
                        <textarea class="form-control rounded-0 border-0" id="full-description" name="full-description" rows="5" required></textarea>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-12">
                        <div class="ab-reg-form-submit-button text-end">
                            <button type="submit" class="btn btn-outline-grey rounded-0">Submit</button>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php } ?>