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

<article class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="row">
        <?php
        if (filter_var($thumbnailUrl, FILTER_VALIDATE_URL)) { ?>
        <div class="col">
            <div style="height: 10rem;">
                    <?php printf('<img class="d-block rounded w-100 h-100" style="object-fit: cover;" src="%s" alt="%s"', $thumbnailUrl, $postTitle); ?>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="col">
            <span class="d-inline-block mb-4 small text-muted"><?php echo $postDate; ?></span>
            <h3 class="mb-4 h3 font-semibold font-heading"><a href="<?php echo $postUrl; ?>"
                                                              class="blog-post-title"><?php echo $postTitle; ?></a></h3>
        </div>
    </div>
</article>