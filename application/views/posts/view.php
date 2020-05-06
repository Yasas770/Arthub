<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>
<a style="background-color: skyblue" class="btn btn-default pull-left " href="<?php echo base_url();?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/' . $post['id']); ?>
<input style="margin-left:50%"  type='submit' value='Delete' class='btn btn-danger'>
</form>

