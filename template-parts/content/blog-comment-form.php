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
                    <input type="text"
                           name="author"
                           class="form-control input-mf"
                           id="comment-author"
                           placeholder="Name *"
                           min="3"
                           max="75"
                           required>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <input type="email"
                           name="email"
                           class="form-control input-mf"
                           id="comment-email"
                           placeholder="Email *"
                           required>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <input type="url"
                           name="url"
                           class="form-control input-mf"
                           id="comment-url"
                           placeholder="Website">
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <textarea id="comment_text"
                              name="comment"
                              class="form-control input-mf"
                              placeholder="Comment *"
                              name="message"
                              cols="45"
                              rows="8"
                              min="10"
                              max="500"
                              required></textarea>
                </div>
            </div>
            <input type="hidden" name="comment_post_ID" value="<?= get_the_ID() ?>" id="comment_post_ID" />
            <input type="hidden" name="comment_parent" id="comment_parent" value="0" />
            <div class="col-md-12">
                <button type="submit" class="button btn-block button-a button-big button-rouded">
                    <span class="fa fa-paper-plane-o"></span> Send Comment
                </button>
            </div>
        </div>
    </form>
</div>