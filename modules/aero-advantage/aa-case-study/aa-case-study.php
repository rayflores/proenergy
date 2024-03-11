<?php
/**
 * Module Name: AeroAdvantage Case Study
 * Description: Template for AeroAdvantage Case Study Module.
 */
$aa_case_study_top_text = get_sub_field('aa_case_study_top_text') ? get_sub_field('aa_case_study_top_text') : '';
$aa_case_study_header = get_sub_field('aa_case_study_header') ? get_sub_field('aa_case_study_header') : '';
$aa_case_study_paragraph = get_sub_field('aa_case_study_paragraph') ? get_sub_field('aa_case_study_paragraph') : '';
$aa_case_study_left_desc = get_sub_field('aa_case_study_left_desc') ? get_sub_field('aa_case_study_left_desc') : '';
$aa_case_study_right_highlights = get_sub_field('aa_case_study_right_highlights') ? get_sub_field('aa_case_study_right_highlights') : '';
?>
<section id="aa-case-study" class="pt-5">
    <style>
        #aa-case-study {
            background-color: #862633;
        }
        .aa-case-study-top-text::before {
            background: rgba(255, 255, 255, 0.5);
            content: '';
            display: inline-block;
            height: 1px;
            left: 0;
            position: relative;
            top: 50%;
            width: 52px;
            z-index: 1;
            vertical-align: middle;
        }
        .aa-case-study-top-text::after {
            color: #ffffff;
            content: attr(data-content);
            display: inline-block;
            letter-spacing: 0.5em;
            padding-left: 28px;
            position: relative;
            line-height: 25.7px;
            text-transform: uppercase;
            z-index: 0;
            font-family: "eurostile", sans-serif;
            font-size: 18px;
            font-weight: 700;
        }
        .aa-case-study-header h2{
            font-family : "eurostile", sans-serif;
            font-size : 35px;
            font-weight: 700;
            line-height : 36px;
            letter-spacing : 0.35px;
            color : #ffffff;
        }
        .aa-case-study-paragraph {
            font-family : "myriad-pro", sans-serif;
            font-size : 18px;
            line-height : 25px;
            color : #ffffff;
        }
        .aa-case-study-left-desc {
            font-family : "myriad-pro", sans-serif;
            font-size : 18px;
            line-height : 33px;
            color : #ffffff;
        }
        .aa-case-study-left-bullets,
        .aa-case-study-right-bullets {
            color: #ffffff;
        }
        .aa-case-study-left-bullet-percentage,
        .aa-case-study-right-bullet-percentage {
            font-family : "eurostile", sans-serif;
            font-size : 35px;
            font-weight: 700;
            line-height : 55px;
            text-transform : uppercase;
        }
        .aa-case-study-left-bullet-desc,
        .aa-case-study-right-bullet-desc {
            font-family : "myriad-pro", sans-serif;
            font-size : 24px;
            line-height : 26px;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12 col-md-7 p-0 aa-case-study-left-side">
                <div class="aa-case-study-top-text pt-5" data-content="<?php echo $aa_case_study_top_text; ?>"></div>
                <div class="aa-case-study-header ps-5 pt-4 ms-4">
                    <h2 class="ps-2">
                        <?php echo $aa_case_study_header; ?>
                    </h2>
                </div>
                <div class="aa-case-study-paragraph ps-5 pt-3 ms-4">
                    <p class="ps-2">
                        <?php echo $aa_case_study_paragraph; ?>
                    </p>
                </div>
                <div class="aa-case-study-left-desc ps-5 pt-5 ms-4">
                    <p class="ps-2">
                        <?php echo $aa_case_study_left_desc; ?>
                    </p>
                </div>
                
                <div class="aa-case-study-left-bullets ps-5 ms-4 pt-3 row g-0 pb-5 mb-5">
                    <?php
                    if ( have_rows( 'aa_case_study_left_bullets' ) ) :
                        while ( have_rows( 'aa_case_study_left_bullets' ) ) : the_row();
                            $aa_case_study_left_bullet_percentage = get_sub_field( 'aa_case_study_left_bullet_percentage' ) !== '' ? get_sub_field( 'aa_case_study_left_bullet_percentage' ) : '';
                            $aa_case_study_left_bullet_desc = get_sub_field( 'aa_case_study_left_bullet_desc' ) !== '' ? get_sub_field( 'aa_case_study_left_bullet_desc' ) : '';
                            ?>
                            <div class="col-4">
                                <div class="aa-case-study-left-bullet-percentage ps-2"><?php echo $aa_case_study_left_bullet_percentage; ?></div>
                                <div class="aa-case-study-left-bullet-desc ps-2"><?php echo $aa_case_study_left_bullet_desc; ?></div>
                            </div>
                        <?php
                        endwhile;
                    endif; ?>
                </div>
            </div>
            <div class="col-12 col-md-5 p-5 mt-3 mt-md-5 aa-case-study-right-bullets">
                <?php
                if ( have_rows( 'aa_case_study_right_bullets' ) ) : ?>
                    <div class="row g-0">
                    <?php while ( have_rows( 'aa_case_study_right_bullets' ) ) : the_row();
                            $aa_case_study_right_bullet_percentage = get_sub_field( 'aa_case_study_right_bullet_percentage' ) !== '' ? get_sub_field( 'aa_case_study_right_bullet_percentage' ) : '';
                            $aa_case_study_right_bullet_desc = get_sub_field( 'aa_case_study_right_bullet_desc' ) !== '' ? get_sub_field( 'aa_case_study_right_bullet_desc' ) : '';
                            ?>
                            
                                <div class="col-6">
                                    <div class="aa-case-study-right-bullet-percentage"><?php echo $aa_case_study_right_bullet_percentage; ?></div>
                                    <div class="aa-case-study-right-bullet-desc"><?php echo $aa_case_study_right_bullet_desc; ?></div>
                                </div>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <div class="aa-case-study-highlights pt-5">
                    <?php echo $aa_case_study_right_highlights; ?>
                </div>
            </div>
        </div>
    </div>
</section>