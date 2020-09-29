<div class="widget-sidebar">
    <h5 class="sidebar-title">Recent Post</h5>
    <div class="sidebar-content">
        <ul class="list-sidebar">
            <?php 

            $latestArgs = [
                'limit' => 5
            ];
            $latest = new WP_Query($latestArgs);

            while($latest->have_posts()): $latest->the_post();

            ?>

                <li>
                    <a href="<?= permalink_link() ?>"><?= the_title() ?></a>
                </li>
            
            <?php

            endwhile;

            wp_reset_query();

            ?>

        </ul>
    </div>
</div>