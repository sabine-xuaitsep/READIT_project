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
<?php include '../app/views/tags/indexByPostId.php'; ?>
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

  <div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a comment</h3>
    <form action="#" class="p-5 bg-light" method="post">
      <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <input type="hidden" name="postId" value="4" />
        <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
      </div>

    </form>
  </div>
</div>
