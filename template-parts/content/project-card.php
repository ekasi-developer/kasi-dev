<?php

$post_meta_data = get_post_meta(get_the_ID());

?>

<div class="work-box">

    <a href="<?= $feature_image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
        data-lightbox="<?php the_title() ?>"
        data-tile="OrangeFarmNews Home Page.">

        <div class="work-img">
            <img src="<?= $feature_image ?>" alt="<?= the_title() ?>" class="img-fluid">
        </div>

        <div class="work-content">
            <div class="row">
                <div class="col-sm-8">
                    <h2 class="w-title">
                        
                        <i class="ion-link btn-link"></i>

                        <?php if(isset($post_meta_data['website'][0]) AND $post_meta_data['website'][0] != ''): ?>

                            <span class="portfilio-link-btn" value="<?= $post_meta_data['website'][0] ?>">
                                <?php the_title() ?>
                            </span>

                        <?php else: ?>

                            <span><?php the_title() ?></span>
                        
                        <?php endif; ?>

                    </h2>
                    <div class="w-more">
                        <p class="w-date d-inline">

                            <?php
                            
                            if(isset($post_meta_data['langugues'][0])):

                                $langugues = explode(',', $post_meta_data['langugues'][0]);
                            
                                for($i = 0; $i < count($langugues); $i++):

                            ?>

                                <span class="badge badge-dark"><?= $langugues[$i] ?></span>

                            <?php

                                endfor;

                            endif;

                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="w-like">
                        <span class="ion-social-github portfilio-link-btn" value="https://github.com/lucas11776/orangefarmnews"></span>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <?php
    
    if(class_exists('Dynamic_Featured_Image')): 

        global $dynamic_featured_image;
        
        $featured_images = $dynamic_featured_image->get_featured_images();
        
        for($i = 0; $i < count($featured_images); $i++):
    
    ?>

        <a href="<?= $featured_images[$i]['full'] ?>" data-lightbox="<?= the_title() ?>" data-tile="<?= the_title() ?>"></a>

    <?php

        endfor;

    endif; 

    ?>
</div>