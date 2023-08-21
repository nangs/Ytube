<?php
/**
 * Template part for displaying posts
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
$postCategories = get_the_category();
$postTags = get_the_tags();
?>
<article class="container mt-8">
    <div class="row align-items-center">
        <div class="col-12">
            <div>
                <?php
                if ($thumbnailUrl != '') {
                    printf('<img class="d-block rounded w-100 h-100" style="max-height: 20rem;object-fit: scale-down" src="%s" alt="%s">', $thumbnailUrl, $postTitle);
                }
                ?>
            </div>
        </div>
        <div class="col-12 mb-5 mb-lg-0">
            <span class="small text-info fw-bold"><?php echo $postDate; ?></span>
            <h1 class="mt-8 text-center"><?php echo $postTitle; ?></h1>
            <div class="mt-4 mb-8 mb-lg-12 text-center">
                <?php
                if (!empty($postCategories)) {
                    foreach ($postCategories as $category) {
                        printf('<a href="%s" class="btn btn-primary btn-sm rounded-pill mx-1">%s</a>', get_category_link($category->term_id), $category->name);
                    }
                }
                ?>
            </div>
            <div class="text-center"><?php echo get_option('aiodl_ad_area_3'); ?></div>
            <?php the_content(); ?>
            <div class="mt-4 mb-8 mb-lg-12 text-center">
                <?php
                if (!empty($postTags)) {
                    foreach ($postTags as $tag) {
                        printf('<a href="%s" class="btn btn-outline-primary btn-sm rounded-pill mx-1">%s</a>', get_tag_link($tag->term_id), $tag->name);
                    }
                }
                ?>
            </div>
            <div class="text-center"><?php echo get_option('aiodl_ad_area_4'); ?></div>
        </div>
    </div>
</article>