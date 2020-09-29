
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