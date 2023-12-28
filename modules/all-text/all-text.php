<?php 
/**
 * Module Name: All Text
 */
$headline = get_sub_field('at_headline');
$description = get_sub_field('at_description');
$link = get_sub_field('at_link');
?>
<style>
.all-text-wrapper {
    background-color: #ffffff;
    color: #53565A;
}
.all-text-wrapper .container {

}
.all-text-container {
    padding: 2em 0;
}
.all-text-headline {
    color: #53565A;
    font-family: 'Eurostile-Bold';
    font-size: 2.25em;
    letter-spacing: 0;
    margin-bottom: 0.5em;
}
.all-text-description {
    font-family: 'MyriadPro-Regular';
    font-size: 1.125em;
    width: 50%;
}
a.at-link {
    color: #A3A8AA;
    display: inline-block;
    font-family: 'MyriadPro-Italic';
    font-size: 1.125em;
    margin-top: 30px;
}
a.at-link::after{
    content: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-arrow.png');
    display: inline-block;
    width: 40px;
    height: 0;
    margin-left: 1em;
}
i.bi-arrow-right {
    color: #A3A8AA;
    font-size: 1.125em;
    margin-left: 0.5em;
}
i.bi-arrow-right::before {
    width: 30px;
}
</style>
<div class="all-text-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-text-container">
                    <?php
                    if ( $headline ) : ?>
                    <h2 class="all-text-headline"><?php echo $headline; ?></h2>
                    <?php endif; ?>
                    <?php
                    if ( $description ) : ?>
                    <div class="all-text-description"><?php echo $description; ?></div>
                    <?php endif; ?>
                    <?php 
                    if ( $link ) : ?>
                    <a href="<?php echo $link['url']; ?>" class="at-link"><?php echo $link['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>