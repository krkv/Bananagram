<img src="<?php echo uploads_url() . $selected_image->file_name; ?>" alt="Yet another banana picture" class="img-responsive banana">

<div class="comments">

    <p class="text-center">
        <a class="btn btn-default" href="<?php echo uploads_url() . $selected_image->file_name; ?>" title="Full size picture"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> Open full size</a>
    </p>

    <?php if ($selected_image->description): ?>
        
        <h3>Description: </h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo $selected_image->description ?>
            </div>
            <div class="panel-footer">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Uploader
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo $selected_image->timestamp ?>
            </div>
        </div>
        
    <?php endif; ?>

    <?php echo form_open('comment/add'); ?>
    <?php echo form_hidden('image_id', $selected_image->id); ?>

    <div class="form-group">
        <label for="comment_text">Add a comment:</label>
        <textarea class="form-control" name="comment_text" id="comment_text" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Add</button>
    <?php echo form_close() ?>

    <?php if ($image_comments): ?>
        <h3>Comments: </h3>
    <?php endif; ?>

    <?php foreach ($image_comments as $comment): ?>

        <div class="panel panel-default">
            <div class="panel-body">
                <?php echo $comment->comment_text; ?>
            </div>
            <div class="panel-footer">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Anonymous
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo $comment->timestamp; ?>
            </div>
        </div>

    <?php endforeach ?>

</div>

<footer class="footer">
    <p>This website was created for demonstrational purpose by <a href="http://rodion.xyz" title="Personal website of Rodion Kryuchkov">Rodion Kryuchkov</a></p>
</footer>

</div>