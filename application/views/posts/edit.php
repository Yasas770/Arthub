<h2><?= $title; ?></h2>



<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">


<div class="form-group">
    <label>Title</label>
    <input style="width: 50%" type="text" class="form-control" name = 'title'  placeholder="Add title" value="<?php echo $post['title']; ?>" >
</div>
<label>Body</label>
<div class="form-group">
    <textarea id="editor1" style="width: 50%;  height:200px" type="text" class="eform-control"  name="body" placeholder="Add body" ><?php echo $post['body']; ?></textarea>
</div>
<button style="background-color: skyblue" type="submit" class="btn btn-default">Submit</button>
</form>