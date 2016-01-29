    <div class="row">

        <?php if ($images): ?>

            <?php foreach ($images as $image): ?>

                <div class="col-xs-12 col-sm-6 col-md-4">

                    <a href="<?php echo base_url('gallery/image/' . $image->id); ?>" class="thumbnail">
                        <img src="<?php echo thumbs_url() . $image->thumb_name; ?>">
                    </a>

                </div>

            <?php endforeach ?>

        <?php endif; ?>

    </div>

    <footer class="footer">
        <p>This website was created for demonstrational purpose by <a href="http://rodion.xyz" title="Personal website of Rodion Kryuchkov">Rodion Kryuchkov</a></p>
    </footer>

</div>




