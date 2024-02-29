<?php
/**
 * Module Name: Learning Center FAQs
 * Description: Template for Learning Center FAQs Module.
 */
?>
<section id="section_lc-faqs" class="pt-5 pb-5">
    <style>
        #section_lc-faqs {
            background-color: rgba(163, 168, 170, 0.2);
        }
        button.accordion-button {
            background-color: transparent;
            border-bottom: 1px solid #A3A8AA;
            color : #53565A;
            font-family : "Eurostile-Bold";
            font-size : 36px;
            line-height : 55px;
            letter-spacing : 1px;
            padding: 1.25rem 0;
        }
        .accordion-button::after {
            content: none;
        }
        .accordion-button:not(.collapsed) {
            background-color: transparent;
            color: #53565A;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .accordion-button:focus {
            border-color: transparent;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .accordion-collapse.show .accordion-body {
            border-bottom: 1px solid #A3A8AA;
        }
        .accordion-item {
            background: transparent;
        }
        .accordion-body {    
            color: #53565A;
            font-family: "MyriadPro-Regular";
            font-size: 18px;
            line-height: 25px;
        }
        .accordion-button[aria-expanded="false"]:focus {
            border-bottom: 1px solid #A3A8AA;
        }
    </style>
    <div class="container-fluid p-0">
    <div class="accordion accordion-flush" id="accordionLearningCenter">
        <?php
        if ( have_rows('lc_faqs') ) :
            while ( have_rows('lc_faqs') ) : the_row();
                $index = get_row_index();
                $lc_faq_title = get_sub_field('lc_faq_title') ? get_sub_field('lc_faq_title') : '';
                $lc_faq_paragraph = get_sub_field('lc_faq_paragraph') ? get_sub_field('lc_faq_paragraph') : '';
                ?>
                <div class="row g-0 accordion-item border-0 justify-content-start">
                    <div class="col-10">
                        <h2 id="header-<?php echo $index; ?>" class="accordion-header lc-faqs-header ps-5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                                <?php echo $lc_faq_title; ?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse lc-faqs ps-5" aria-labelledby="heading-<?php echo $index; ?>" data-bs-parent="#accordionLearningCenter">
                            <div class="accordion-body">    
                                <?php echo $lc_faq_paragraph; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
        endif; ?>
    </div>
</section>
