<section class="py-20">
    <div class="container">
        <div class="max-w-3xl mx-auto mb-16 text-center">
            <h2 class="mt-8 mb-10"><?php pll_e('Supports The Most Popular Sources'); ?></h2>
            <p class="lead text-muted"><?php pll_e('You can check regularly updated supported sources list.'); ?></p>
        </div>
        <div class="row justify-content-center">
            <?php
            $downloaders = All_in_One_Video_Downloader_Downloaders::$downloaders;
            $siteUrl = get_site_url();
            foreach ($downloaders as $downloader) {
                if (get_option('aiodl_downloader_' . $downloader['slug']) != 'on') {
                    unset($downloader);
                    continue;
                }
                $pageSlug = get_option('aiodl_downloader_slug_' . $downloader['slug']);
                if ($pageSlug == '') {
                    $pageSlug = '#';
                } else {
                    $pageSlug = $siteUrl . '/' . $pageSlug . '/';
                }
                printf('<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 p-4"><div class="bg-light rounded py-4 text-center"><a href="%s" class="text-decoration-none text-dark"><img class="d-block mx-auto lazy" height="36" width="36" data-src="%s/assets/sources/%s.svg" alt="%s video downloader" title="%s">%s</a></div></div>', $pageSlug, $themeUrl, $downloader['slug'], $downloader['name'], $downloader['name'], $downloader['name']);
            }
            ?>
        </div>
    </div>
</section>