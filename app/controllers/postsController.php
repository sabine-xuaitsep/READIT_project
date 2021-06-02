<?php
/* 
  ./app/controllers/postsController.php
*/

function indexAction (PDO $conn) {
  include_once '../app/models/postsModel.php';
  $posts = findAll($conn);

  GLOBAL $content, $title;
  $title = "Blog";
  ob_start();
    include '../app/views/posts/index.php';
  $content = ob_get_clean();
}

function showAction (PDO $conn, int $id) {
  include_once '../app/models/postsModel.php';
  $post = findOneById($conn, $id);
  include_once '../app/models/tagsModel.php';
  $tags = findAllTagsByPostId($conn, $id);
  include_once '../app/models/authorModel.php';
  $author = findOneAuthorByPostId($conn, $id);

  GLOBAL $content, $title;
  $title = $post['title'];
  ob_start();
    include '../app/views/posts/show.php';
  $content = ob_get_clean();
}