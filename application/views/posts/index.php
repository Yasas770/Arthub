<h2><?= $title ?></h2>
<p>this is ART hub 1.0</p>
<?php foreach($posts as $post) : ?></php>
     <h3><?php echo $post['title'];?> </h3>
     <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
     <?php echo $post['body']; ?>
     <br><br>
     <p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">read more</a></p>
<?php endforeach;  ?>