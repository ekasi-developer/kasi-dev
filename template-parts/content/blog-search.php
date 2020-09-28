<!-- ======= Blogs Search ======= -->
<div id="blog-search" class="blog-search route bg-image" style="background-image: url(<?= get_template_directory_uri() ?>/assets/background/johannesburg-4322256_1920.jpg);">
    <div class="overlay"></div>
    <div class="blog-search-content display-table">
        <div class="table-cell">
            <div class="row col justify-content-center text-center">
                <div class="col-10 col-sm-10 col-md-8 col-lg-6">
                    <h1 class="blog-search-title mt-0 pt-0 mb-4 text-white font-weight-lighter">
                        Search for a blog post.
                    </h1>
                    <form action="<?= site_url('blog') ?>" class="input-group input-group-lg mb-3" id="blog-search-form" method="get">
                        <input type="text" name="term" class="form-control" placeholder="Search for a blog post..." value="<?= sanitize_text_field($_GET['term']) ?>">
                        <div class="input-group-append">
                            <button class="btn pl-3 pr-4" type="submit" id="blogs-search">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Search Section -->