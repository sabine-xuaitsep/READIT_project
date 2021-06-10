<?php 
/*
  ./app/views/tags/_index.php 

  Available VARIABLES:
    - $tags ARRAY(id, name)
*/
?>

<div class="sidebar-box ftco-animate">
  <h3>Tag Cloud</h3>
  <div class="tagcloud">
    <?php foreach($tags as $tag): ?>
      <a href="#" class="tag-cloud-link"><?php echo $tag['name']; ?></a>
    <?php endforeach; ?>
  </div>
</div>