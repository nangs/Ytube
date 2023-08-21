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
?>


<div class="card col-sm-12 col-md-4 col-lg-3 border-0" style="width: 18rem">
    <?php
    if (filter_var($thumbnailUrl, FILTER_VALIDATE_URL)) {
        printf('<img class="card-img-top" src="%s" alt="%s"', $thumbnailUrl, $postTitle);
    }
    ?>
    <div class="card-body">
        <span class="d-inline-block mb-4 small text-muted"><?php echo $postDate; ?></span>
        <h3 class="mb-4 h3 font-semibold font-heading"><a href="<?php echo $postUrl; ?>"
                                                          class="blog-post-title"><?php echo $postTitle; ?></a></h3>
    </div>
</div>