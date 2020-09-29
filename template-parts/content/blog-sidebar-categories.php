<div class="widget-sidebar widget-tags">
    <h5 class="sidebar-title">Categories</h5>
    <div class="sidebar-content">
        <ul>
            <?php 

            $categories = get_categories();
            
            for($i = 0; $i <= count($categories); $i++):

                if($categories[$i]->name != ''):

            ?>

                <li>
                    <a href="<?= site_url('blog?category=' . $categories[$i]->name) ?>">
                        <?= $categories[$i]->name ?>
                    </a>
                </li>

            <?php

                endif;
                
            endfor;

            ?>
        </ul>
    </div>
</div>