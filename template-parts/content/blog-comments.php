<div class="box-comments">
    <div class="title-box-2">
        <h4 class="title-comments title-left">Comments (<?= get_comments_number() ?>)</h4>
    </div>
    <ul class="list-comments">
        <?php
        
        $commentsArgs = ['post_id' => get_the_ID()];
        $comments = get_comments($commentsArgs);

        for($i = 0; $i < count($comments); $i++):

        ?>

            <li>
                <div class="comment-avatar">
                    <img class="img-thumbnail" src="<?= get_template_directory_uri() ?>/assets/img/profile-picture.png" alt="">
                </div>
                <div class="comment-details">

                    <h4 class="comment-author">
                        <?= $comments[$i]->comment_author ?>
                    </h4>

                    <span>
                        <?= date('l d M Y', strtotime($comments[$i]->comment_date)) ?>
                    </span>

                    <p>
                        <?= $comments[$i]->comment_content ?>
                    </p>

                    <!-- <a href="3">Reply</a> -->
                </div>
            </li>

        <?php 

        endfor;

        ?>
    </ul>
</div>