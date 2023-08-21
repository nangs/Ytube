<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AIO_Video_Downloader_Default
 */
$postTitle = get_the_title();
$thumbnailUrl = get_the_post_thumbnail_url();
$postDate = get_the_date();
$postExcerpt = get_the_excerpt();
$postUrl = get_the_permalink();
$postId = get_the_ID();
$isDownloader = get_post_meta($postId, 'show_download_form', true) == '1';
?>

<article class="container mt-8">
    <div class="row align-items-center">
        <div class="col-12 mb-5 mb-lg-0">
            <?php
            if (!$isDownloader) {
                printf('<h1 class="mt-8 mb-8 mb-lg-12 text-center">%s</h1>', $postTitle);
                echo $postTitle;
            }
            ?>
            <div class="text-center"><?php echo get_option('aiodl_ad_area_3'); ?></div>
            <?php the_content(); ?>
            <div class="text-center"><?php echo get_option('aiodl_ad_area_4'); ?></div>
        </div>
    </div>
</article>