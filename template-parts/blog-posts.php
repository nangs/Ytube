<section class="py-20" id="blog-posts">
    <div class="container">
        <div class="max-w-3xl mx-auto mb-16 text-center">
            <h2 class="mb-10"><?php pll_e('Blog Posts'); ?></h2>
        </div>
        <div class="row">
            <?php
                /* Start the Loop */
                while (have_posts()) :
                    the_post();
                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    get_template_part('template-parts/content', 'home');
                endwhile;
                $nav = get_the_posts_pagination(array(
                    'screen_reader_text' => __('A')
                ));
                $nav = str_replace('<h2 class="screen-reader-text">A</h2>', '', $nav);
                $nav = str_replace('page-numbers', 'btn btn-sm btn-outline-danger', $nav);
                $nav = str_replace('navigation pagination', 'justify-content-center', $nav);
                $nav = preg_replace('/href="(.*?)"/', 'href="$1#blog-posts"', $nav);
                printf('<div class="text-center">%s</div>', $nav);
            ?>
        </div>
    </div>
</section><!-- #main -->