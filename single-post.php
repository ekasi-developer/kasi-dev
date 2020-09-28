<?php get_header(); ?>

<div class="intro intro-single route bg-image" style="background-image: url(<?= get_template_directory_uri() ?>/assets/background/soweto-power-towers.png)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Blog Post</h2>
                <ol class="breadcrumb d-flex justify-content-center font-weight-bolder text-white">
                    <?php

                    $category = get_the_category();
                    
                    if(isset($category[0]->name)):

                    ?>
                        <li class="breadcrumb-item">
                            <span>Category</span>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#"><?= $category[0]->name ?></a>
                        </li>
                    <?php

                    endif;

                    ?>
                </ol>
            </div>
        </div>
    </div>
</div>

<main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
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
                    <div class="box-comments">
                        <div class="title-box-2">
                            <h4 class="title-comments title-left">Comments (4)</h4>
                        </div>
                        <ul class="list-comments">
                            <li>
                                <div class="comment-avatar">
                                    <img class="img-thumbnail" src="assets/img/my-self.png" alt="">
                                </div>
                                <div class="comment-details">
                                    <h4 class="comment-author">Themba Lucas Ngubeni</h4>
                                    <span>18 Sep 2017</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque ipsam temporibus maiores quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                                    </p>
                                    <!-- <a href="3">Reply</a> -->
                                </div>
                            </li>
                            <li>
                                <div class="comment-avatar">
                                    <img class="img-thumbnail" src="assets/img/testimonial-4.jpg" alt="">
                                </div>
                                <div class="comment-details">
                                    <h4 class="comment-author">Carmen Vegas</h4>
                                    <span>18 Sep 2017</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque ipsam temporibus maiores quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis, veritatis deserunt.
                                    </p>
                                    <!-- <a href="3">Reply</a> -->
                                </div>
                            </li>
                            <li class="comment-children">
                                <div class="comment-avatar">
                                    <img class="img-thumbnail" src="assets/img/my-self.png" alt="">
                                </div>
                                <div class="comment-details">
                                    <h4 class="comment-author">Themba Lucas Ngubeni</h4>
                                    <span>18 Sep 2017</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque ipsam temporibus maiores quae.
                                    </p>
                                    <!-- <a href="3">Reply</a> -->
                                </div>
                            </li>
                            <li>
                                <div class="comment-avatar">
                                    <img class="img-thumbnail" src="assets/img/my-self.png" alt="">
                                </div>
                                <div class="comment-details">
                                    <h4 class="comment-author">Themba Lucas Ngubeni</h4>
                                    <span>18 Sep 2017</span>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque ipsam temporibus maiores quae natus libero optio.
                                    </p>
                                    <!-- <a href="3">Reply</a> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="form-comments">
                        <div class="title-box-2">
                            <h3 class="title-left">
                                Leave a Reply
                            </h3>
                        </div>
                        <form class="form-mf" action="https://localhost/wp-comments-post.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="author" class="form-control input-mf" id="inputName" placeholder="Name *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="url" name="url" class="form-control input-mf" id="inputUrl" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <textarea id="textMessage" name="comment" class="form-control input-mf" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="comment_post_ID" value="<?= get_the_ID() ?>" id="comment_post_ID" />
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0" />
                                <div class="col-md-12">
                                    <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
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

                                ?>

                            </ul>
                        </div>
                    </div>
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
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Single Section -->

</main>
<!-- End #main -->

<?php get_footer() ?>