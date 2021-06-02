<?php 
/*
  ./app/views/tags/indexByPostId.php 

  Available VARIABLES:
    - $tags ARRAY(ARRAY(id, name))
*/
?>

<div class="tag-widget post-tag-container mb-5 mt-5">
  <div class="tagcloud">
  <?php foreach($tags as $tag): ?>
      <a href="#" class="tag-cloud-link"><?php echo $tag['name']; ?></a>
    <?php endforeach; ?>
  </div>
</div>