    <div class="upload-text">

        <?php echo $error; ?>
        <?php echo validation_errors(); ?>
        <?php echo form_open_multipart('upload/do_upload'); ?>

        <div class="form-group">
            <label for="userfile">Select your picture file</label>
            <input type="file" name="userfile" id="userfile">
            <p class="help-block">Supported file formats: JPG, GIF, PNG. Maximum file size: 5 megabytes.</p>
        </div>

        <div class="form-group">
            <label for="description">Provide a description (optional)</label>
            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            <p class="help-block">Maximum description length: 255 characters.</p>
        </div>

        <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Send away!</button>
        <?php echo form_close() ?>

    </div>

    <footer class="footer">
        <p>This website was created for demonstrational purpose by <a href="http://rodion.xyz" title="Personal website of Rodion Kryuchkov">Rodion Kryuchkov</a></p>
    </footer>

</div>