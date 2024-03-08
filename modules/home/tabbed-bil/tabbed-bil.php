<?php
/**
* Module Name: Tabbed Bulleted Image Left
*/
$tbil_top_text = get_sub_field('tbil_top_text') !== '' ? get_sub_field('tbil_top_text') : 'none';
?>
<section id="section_tabbed-bulleted-image-left" class="py-5">
    <style>
        .container-fluid {
            padding: 0;
        }
        .tbil-top-text {
            line-height: 1em;
            position: relative;
            outline: 0;
            border: 0;
            color: #A3A8AA;
            text-align: left;
            height: 1.5em;
        }
        .tbil-top-text::before{
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 52px;
            height: 1px;
            background: #A3A8AA;
            z-index: 1;
        }
        .tbil-top-text::after{
            color: #A3A8AA;
            content: attr(data-content);
            display: inline-block;
            font-family: "eurostile", sans-serif;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.5em;
            padding-left: 80px;
            position: relative;
            line-height: 22px;
            text-transform: uppercase;
            z-index: 0;
        }
        a.tbil-nb-link::after{
            content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
            transition: 0.3s;
        }
        a.tbil-nb-link:hover::after{
            margin-left: 1.5em;
        }
        .tbil-tab-active {
            color: #003A70;
            font-family: 'eurostile', sans-serif;
            font-size: 1.17em;
            font-weight: 700;
            letter-spacing: 0.5em;
            text-transform: uppercase;
        }
        .tbil-headline {
            color: #53565A;
            font-family: 'eurostile', sans-serif;
            font-size: clamp(1.625rem,1.009rem + 2.488vw,2.875rem);
            font-weight: 800;
            line-height: 0.75em;
            text-align: left;
        }
        .tbil-paragraph {
            color: #53565A;
            font-family: 'myriad-pro', sans-serif;
            font-size: 1.5em;
            line-height: 1.5em;
            text-align: left;
            padding-top: 1em;
            padding-bottom: 2em;
        }
        .tbil-nb-percentage{
            color: <?php echo $bullet_color; ?>;
            font-family: 'eurostile', sans-serif;
            font-size: 3.75em;
            font-weight: 800;
            letter-spacing: 0;
            line-height: 0.75em;
            text-transform: uppercase;
        }   
        .tbil-nb-percentage-header{
            color: <?php echo $bullet_color; ?>;
            font-family: 'eurostile', sans-serif;
            font-size: 2em;
            letter-spacing: 0;
        }   
        .tbil-nb-link{
            color: #A3A8AA;
            font-family: 'myriad-pro', sans-serif;
            font-size: 1.5em;
            font-style: italic;
            line-height: 1.5em;
            text-align: center;
            padding-top: 1em;
            padding-bottom: 2em;
        }
        .nav-tabs {
            border-bottom: 0;
            justify-content: flex-start;
            padding-left: 80px;
        }
        .nav-tabs .nav-item {
            margin-bottom: 0;
            position: relative;
        }
        .nav-tabs .nav-link {
            border: 0;
            font-family: 'eurostile', sans-serif;
            font-size: 1.33em;
            font-weight: 700;
            margin-bottom: 0;
        }
        .nav-tabs li .nav-link{
            padding-left: 50px;
        }
        .nav-tabs li:first-child .nav-link{
            padding-left: 0;
        }
        .nav-tabs .nav-link.active {
            border: 0;
            border-radius: 0;
            color: #003A70;
        }
        .nav-tabs li .nav-link.active::before{
            content: '';
            position: absolute;
            top: 0;
            left: 1px;
            width: 51px;
            height: 1px;
            background: #003A70;
        }
        .nav-tabs li:not(:first-child) .nav-link.active::before{
            left: 50px;
        }
        @media screen and (max-width: 768px) {
            .tbil-top-text::before{
                width: 20px;
            }
            .tbil-top-text::after { 
                font-size: 14px;
                letter-spacing: 0.25em;
                padding-left: 40px;
            }
            .nav-tabs {
                padding-left: 0px;
            }
            .nav .nav-link {
                font-size: 1em;
            }
            .tbil-tab-active {
                font-size: 0.875em;
                letter-spacing: 0.25em;
            }
            .tbil-paragraph {
                font-size: 1.0em;
                line-height: 1.25em;
            }
            .tbil-nb-percentage {
                font-size: 2.5em;
            }
            .tbil-nb-percentage-header {
                font-size: 1.5em;
            }
            .tbil-nb-link {
                font-size: 1em;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="row g-0">
            <div class="top-text-container col-lg-12 pb-5">
                <div class="tbil-top-text col-6" data-content="<?php echo $tbil_top_text; ?>"></div>
            </div>
        </div>
        <div class="row g-0">
            <div id="tabbed-bil-tabs" class="pb-4 pb-md-5">
                <ul class="nav nav-tabs col-12 col-md-7 justify-content-center justify-content-md-end" id="tabbed-bil" role="tablist">
                    <?php 
                    if (have_rows( 'tbil_tabs' ) ) : 
                        while ( have_rows( 'tbil_tabs' ) ) : the_row();
                        $tbil_tab_label = get_sub_field('tbil_tab_label') !== '' ? get_sub_field('tbil_tab_label') : '';
                        $row_index = get_row_index();
                        if ( $row_index == 1 ) {
                            $active = 'active';
                        } else {
                            $active = '';
                        }
                        ?>
                        <li class="nav-item">
                            <button class="nav-link <?php echo $active; ?>" id="<?php echo strtolower( str_replace( ' ', '-', $tbil_tab_label ) ); ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo strtolower( str_replace( ' ', '-', $tbil_tab_label ) ); ?>" type="button" role="tab" aria-controls="<?php echo strtolower( str_replace( ' ', '-', $tbil_tab_label ) ); ?>" aria-selected=""><?php echo $tbil_tab_label; ?></button>
                        </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="tab-content" id="tbil-nb-tabs-content">
                <?php 
                if (have_rows( 'tbil_tabs' ) ) : 
                    while ( have_rows( 'tbil_tabs' ) ) : the_row();
                        $tbil_tab_label = get_sub_field('tbil_tab_label') !== '' ? get_sub_field('tbil_tab_label') : '';
                        $tbil_bg_grey = get_sub_field('tbil_background_grey') !== '' ? get_sub_field('tbil_background_grey') : '';
                        $tbil_image_video_id = get_sub_field('tbil_image_video') !== '' ? get_sub_field('tbil_image_video') : '';
                        $srcset = get_image_srcset($tbil_image_video_id);
                        $alt_text = get_image_alt_text($tbil_image_video_id);
                        $tbil_header_text = get_sub_field('tbil_header_text') !== '' ? get_sub_field('tbil_header_text') : '';
                        $tbil_paragraph = get_sub_field('tbil_paragraph') !== '' ? get_sub_field('tbil_paragraph') : '';
                        $tbil_bullet_color = get_sub_field('tbil_bullet_color') !== '' ? get_sub_field('tbil_bullet_color') : '';
                        $bullet_index = get_row_index();
                        if ( $bullet_index == 1 ) {
                            $bullet_active = 'active show';
                        } else {
                            $bullet_active = '';
                        }
                ?>
                <div class="tab-pane fade <?php echo $bullet_active; ?>" id="<?php echo strtolower( str_replace( ' ', '-', $tbil_tab_label ) ); ?>" role="tabpanel" aria-labelledby="<?php echo strtolower( str_replace( ' ', '-', $tbil_tab_label ) ); ?>-tab">
                    <div class="row g-0 justify-content-center d-flex">
                        <div class="col-12 col-md-6">
                            <img src="<?php echo esc_url(wp_get_attachment_url($tbil_image_video_id)); ?>" srcset="<?php echo esc_attr($srcset); ?>" alt="<?php echo $alt_text; ?>" class="img-fluid h-100 object-fit-cover image-bg">
                        </div>
                        <div class="col-12 col-md-6 px-5">
                            <div class="tbil-tab-active pt-3 pt-md-5">
                                <?php echo $tbil_tab_label; ?>
                            </div>
                            <h2 class="tbil-headline pt-3"><?php echo $tbil_header_text; ?></h2>
                            <?php if ( $tbil_paragraph !== '' ) : ?>
                            <p class="tbil-paragraph"><?php echo $tbil_paragraph; ?></p>
                            <?php endif; ?>
                        <?php
                        if ( have_rows( 'tbil_numbered_bullet' ) ) :
                            while ( have_rows( 'tbil_numbered_bullet' ) ) : the_row();
                                $tbil_tab_percentage = get_sub_field('bil_nb_percentage') !== '' ? get_sub_field('bil_nb_percentage') : '';
                                $tbil_tab_percentage_header = get_sub_field('bil_nb_percentage_header') !== '' ? get_sub_field('bil_nb_percentage_header') : '';
                                $tbil_tab_link = get_sub_field('bil_nb_bullet_link') !== '' ? get_sub_field('bil_nb_bullet_link') : '';
                            ?>
                            <div class="tbil-nb-percentage"><?php echo $tbil_tab_percentage; ?></div>
                            <div class="tbil-nb-percentage-header pb-4"><?php echo $tbil_tab_percentage_header; ?></div>
                            <a class="tbil-nb-link" href="<?php echo $tbil_tab_link['url']; ?>"><?php echo $tbil_tab_link['title']; ?></a>
                        </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
