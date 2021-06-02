<?php 
/*
  ./app/views/authors/show.php 

  Available VARIABLES:
    - $author ARRAY(id, lastname, firstname, biography, image)
*/
?>

<div class="about-author d-flex p-4 bg-light">
  <div class="bio mr-5">
    <img src="assets/images/<?php echo $author['image']; ?>" alt="Image placeholder" class="img-fluid mb-4">
  </div>
  <div class="desc">
    <h3><?php echo $author['firstname'] . ' ' . $author['lastname']; ?></h3>
    <p><?php echo $author['biography']; ?></p>
  </div>
</div>