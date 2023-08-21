<section class="py-20">
    <div class="container">
        <div class="row mb-n12 mb-lg-n20">
            <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-20">
                <div class="d-flex">
                <span class="flex-shrink-0 d-flex align-items-center justify-content-center me-6 bg-success rounded-circle"
                      style="width: 48px; height: 48px;">
                </span>
                    <div>
                        <h3 class="mb-4 h4"><?php pll_e('Download Videos from Multiple Sources'); ?></h3>
                        <p><?php pll_e('Video Downloader Script offers you to download videos in multiple formats including MP4, M4A, 3GP from multiple sources which includes'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-20">
                <div class="d-flex">
                <span class="flex-shrink-0 d-flex align-items-center justify-content-center me-6 bg-info rounded-circle"
                      style="width: 48px; height: 48px;">
                </span>
                    <div>
                        <h3 class="mb-4 h4"><?php pll_e('Supported Websites'); ?></h3>
                        <p><?php echo implode(', ', array_column($downloaders, 'name')); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-12 mb-lg-20">
                <div class="d-flex">
                <span class="flex-shrink-0 d-flex align-items-center justify-content-center me-6 bg-danger rounded-circle"
                      style="width: 48px; height: 48px;">
                </span>
                    <div>
                        <h3 class="mb-4 h4"><?php pll_e('Download Audios'); ?></h3>
                        <p><?php pll_e('You can download audio files if they are available.'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>