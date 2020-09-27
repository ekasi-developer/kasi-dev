<div class="card card-blog">

    <div class="card-img">
        <a href="blog-single.html">
            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?= the_title() ?>" class="img-fluid cart-blog-img">
        </a>
    </div>
    
    <div class="card-body">

        <div class="card-category-box">
            <?php

            $category = get_the_category();

            if(isset($category[0]->name)):

            ?>
                <div class="card-category">
                    <h6 class="category"><?= $category[0]->name ?></h6>
                </div>
            <?php

            endif;

            ?>
        </div>

        <h3 class="card-title">
            <a href="<?= get_permalink() ?>">
                <?= the_title() ?>
            </a>
        </h3>

        <p class="card-description">
            <?php
            
            $content = strip_tags(get_the_content());

            echo wp_trim_words($content, 20);
            
            ?>
        </p>

    </div>
    
    <div class="card-footer">
        <div class="post-author">
            <!-- <a href="#">
                <img src="<?= get_template_directory_uri() ?>/assets/img/my-self.png" alt="" class="avatar rounded-circle">
                <span class="author">Themba Lucas Ngubeni</span>
            </a> -->
            <span class="font-weight-bold">
                <span class="fa fa-eye"></span>
                Reading Time
            </span>
        </div>
        <div class="post-date font-weight-bold">
            <span class="ion-ios-clock-outline"></span>
            <?php
            
            $words = strip_tags(get_the_content());
            $words_count = str_word_count($words);
            $reading_time = ceil($words_count / 150);

            echo $reading_time . ' min';
            
            ?>
        </div>
    </div>
    
</div>