<?php
/**
 * Module Name: About Us Quote
 * Description: Template for About Us Quote Module.
 */
$ab_quote_bg = '';
$ab_quote_bg = get_sub_field( 'ab_quote_bg' ) ? get_sub_field( 'ab_quote_bg' ) : '';
$ab_quote_text = '';
$ab_quote_text = get_sub_field( 'ab_quote_text' ) ? get_sub_field( 'ab_quote_text' ) : '';
$ab_quote_text_color = '';
$ab_quote_text_color = get_sub_field( 'ab_quote_text_color' ) ? get_sub_field( 'ab_quote_text_color' ) : '';
$ab_by_line = '';
$ab_by_line = get_sub_field( 'ab_by_line' ) ? get_sub_field( 'ab_by_line' ) : '';
?>
<section id="section_pflx-about-us-quote-wrapper" class="p-0" style="background-color: <?php echo $ab_quote_bg; ?>">
    <style>
        .about-us-quote {
            padding-top: 5rem;
            padding-bottom: 5rem;
            position: relative;
        }
        .ab-quote-text p {
            font-family : "Eurostile-Bold";
            font-size : 35px;
            line-height : 36px;
            color : #53565A;
            color : rgb(83, 86, 90);
            padding-top: 0;
        }
        .ab-by-line p {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            line-height : 25px;
            color : #53565A;
            color : rgb(83, 86, 90);
            margin-bottom: 0;
        }
        .ab-quote-container::after {
            width: 100%;
            height: 100%;
            display: block;
            content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/quote-under.png');
        }
    </style>
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-5">
                <div class="ab-quote-container py-5 my-5">
                    <div class="ab-quote-text"> 
                        <p>&ldquo;<?php echo $ab_quote_text; ?>&rdquo;</p>
                    </div>
                    <div class="ab-by-line">
                        <p><?php echo $ab_by_line; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
