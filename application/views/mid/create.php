<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('mid/create'); ?>

    <label for="mid">Mid</label>
    <input type="input" name="mid" /><br />

    <input type="submit" name="submit" value="Add Mid" />

</form>