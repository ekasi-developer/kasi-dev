<div class="post-box">
    <div class="post-thumb">
        <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" class="img-fluid" alt="<?= the_title() ?>">
    </div>
    <div class="post-meta">
        <h1 class="article-title"><?= the_title() ?></h1>
        <ul>
            <li>
                <span class="ion-ios-calendar"></span>
                <a><?= get_the_date('l d M Y') ?></a>
            </li>
            
            <?php
            
            $category = get_the_category();

            if(isset($category[0]->name)):

            ?>

                <li>
                    <span class="ion-pricetag"></span>
                    <a href="#"><?= $category[0]->name ?></a>
                </li>

            <?php

            endif;

            ?>
            <li>
                <span class="ion-chatbox"></span>
                <a href="#"><?= get_comments_number() ?></a>
            </li>
        </ul>
    </div>
    <div class="article-content">
        <?php
        
        if(have_posts()):
            
            while(have_posts()): the_post();

        ?>

            <?= the_content() ?>

        <?php

            endwhile;

        endif;
        
        ?>
    </div>
</div>