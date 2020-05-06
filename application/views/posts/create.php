<h2><?= $title; ?></h2>



<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>

<div class="form-group">
    <label>Title</label>
    <input style="width: 50%" type="text" class="form-control" name = 'title'  placeholder="Add title">
</div>
<label>Body</label>
<div class="form-group">
    <textarea id="editor1" style="width: 50%;  height:200px" type="text" class="eform-control"  name="body" placeholder="Add body"></textarea>
</div>
<button style="background-color: skyblue" type="submit" class="btn btn-default">Submit</button>
</form>