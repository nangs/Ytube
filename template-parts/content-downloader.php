<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AIO_Video_Downloader_Default
 */
$showBlogPosts = get_option('aiodl_show_blog') == 'on';
$showAbout = get_option('aiodl_show_about') == 'on';
$showHowtoDownload = get_option('aiodl_show_howto_download') == 'on';
$showSupported = get_option('aiodl_show_supported') == 'on';
$showFeatures = get_option('aiodl_show_features') == 'on';
$themeUrl = get_template_directory_uri();
$thumbnailUrl = get_the_post_thumbnail_url();
?>
    <div class="text-center" id="ad-area-2"><?php echo get_option('aiodl_ad_area_2'); ?></div>
    <div class="py-0 overflow-hidden" id="result" style="display: none"></div>
    <article class="container mt-8">
        <div class="row align-items-center">
            <div class="col-12">
                <div>
                    <?php
                    if ($thumbnailUrl != '') {
                        printf('<img class="d-block rounded w-100 h-100" style="max-height: 20rem;object-fit: scale-down" src="%s" alt="%s"', $thumbnailUrl, $postTitle);
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 mb-5 mb-lg-0">
                <?php the_content(); ?>
                <div class="text-center"><?php echo get_option('aiodl_ad_area_4'); ?></div>
            </div>
        </div>
    </article>
<?php
if ($showHowtoDownload) {
    include_once __DIR__ . '/howto-download.php';
}
if ($showSupported) {
    include_once __DIR__ . '/supported-sources.php';
}
if ($showFeatures) {
    include_once __DIR__ . '/features.php';
}