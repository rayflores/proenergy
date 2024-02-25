<?php
/**
 * Module Name: About Us Register Form
 * Description: Template for About Us Register Form Module.
 */
?>
<section id="section_ab-reg-form" class="p-0">
    <style>
        .ab-reg-form-top-text::before {
        background: linear-gradient(90deg, rgba(163,168,170,0.2) 50%, transparent 50%);
        content: '';
        display: inline-block;
        height: 1px;
        padding-right: 40px;
        position: relative;
        vertical-align: middle;
    }
    .ab-reg-form-top-text {
        color: #a3a8aa;
        content: '';
        letter-spacing: 7.5px;
        position: relative;
        line-height: 25.7px;
        text-transform: uppercase;
        z-index: 0;
        font-family: "Eurostile-Normal";
        font-size: 12px;
    }
        .ab-reg-form-header-container {
            font-family: "Eurostile-Bold";
            font-size: 35px;
            line-height: 36px;
            letter-spacing: 1px;
            color: #862633;
        }
        .ab-reg-form-submit-button {
            width: 100%;
            height: 50px;
            padding: 10px;
            margin: 10px 0;
            font-size: 18px;
            border: 1px solid #53565A;
            background-color: #53565A;
            color: #fff;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="ab-reg-form-top-text">
                Register Here
            </div>
            <div class="col-4">
                <div class="ab-reg-form-header-container ms-5">
                    Sign Up For Updates
                </div>
            </div>
        </div>
        <form method="post">
            <div class="row g-0 justify-content-end">
                <div class="col-4"></div>
                <div class="col-3 ps-2 pb-5">
                    <div class="ab-reg-form-firstname-container pe-3">
                        <input type="text" class="ab-reg-form-firstname-input border-start-0 border-top-0 border-end-0 w-100" placeholder="First Name" value="">
                    </div>
                </div>
                <div class="col-3 ps-2 pb-5">
                    <div class="ab-reg-form-lastname-container pe-3">
                        <input type="text" class="ab-reg-form-lastname-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Last Name" value="">
                    </div>
                </div>
            </div>
            <div class="row g-0 justify-content-end">
                <div class="col-4"></div>
                <div class="col-3 ps-2 pb-5">
                    <div class="ab-reg-form-job-title-container pe-3">
                        <input type="text" class="ab-reg-form-job-title-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Job Title" value="">
                    </div>
                </div>
                <div class="col-3 ps-2 pb-5">
                    <div class="ab-reg-form-company-container pe-3">
                        <input type="text" class="ab-reg-form-company-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Company" value="">
                    </div>
                </div>
            </div>
            <div class="row g-0 justify-content-end">
                <div class="col-4"></div>
                <div class="col-3 ps-2 pb-5">
                    <div class="ab-reg-form-email-container pe-3">
                        <input type="email" class="ab-reg-form-email-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Email" value="">
                    </div>
                </div>
                <div class="col-3 ps-2 pb-5">
                    <div class="ab-reg-form-phone-container pe-3">
                        <input type="tel" class="ab-reg-form-phone-input border-start-0 border-top-0 border-end-0 w-100" placeholder="Phone" value="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-6 pb-4 mb-5">
                    <div class="ab-reg-form-submit-button">
                        Submit
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>