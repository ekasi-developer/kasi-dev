<div class="widget-sidebar sidebar-search">
    <h5 class="sidebar-title">Search</h5>
    <div class="sidebar-content">
        <form action="<?= site_url('blog') ?>" method="GET">
            <div class="input-group">
                <input type="text" name="term" class="form-control" placeholder="Search for blog..." aria-label="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary btn-search" type="submit">
                        <span class="ion-android-search"></span>
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>