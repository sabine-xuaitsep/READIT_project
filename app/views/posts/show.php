<?php 
/*
  ./app/views/posts/show.php 

  Available VARIABLES:
    - $post ARRAY(id, title, created_at, resume, image, content, author_id, categorie_id)
    - $tags ARRAY(ARRAY(id, name))
    - $author ARRAY(id, lastname, firstname, biography, image)
*/
?>

<p class="mb-5">
  <img src="assets/images/<?php echo $post['image']; ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<p><?php echo $post['content']; ?></p>

<!-- tag cloud -->
  <?php 
    include_once '../app/controllers/tagsController.php'; 
    \App\Controllers\tagsController\indexByPostIdAction($conn, $post['id']);
  ?>
<!-- END tag cloud -->

<!-- author details -->
<?php include '../app/views/authors/show.php'; ?>
<!-- END author details -->

<div class="pt-5 mt-5">
  <!-- comments list -->
  <?php 
    include_once '../app/controllers/commentsController.php'; 
    \App\Controllers\commentsController\indexByPostIdAction($conn, $post['id']);
  ?>
  <!-- END comments list -->

  <!-- comment form -->
  <?php include '../app/views/comments/_addForm.php'; ?>
  <!-- END comment form -->

</div>
