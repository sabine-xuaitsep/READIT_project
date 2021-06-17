<?php 
/*
  ./app/views/categories/_index.php 

  Available VARIABLES:
    - $categories ARRAY(id, name)
*/
?>

<div class="categories">
    <h3>Categories</h3>
    <?php foreach($categories as $category): ?>
      <li><a href="#"><?php echo $category['name']; ?> <span class="ion-ios-arrow-forward"></span></a></li>
    <?php endforeach; ?>
  </div>