<?php
/* 
  ./app/controllers/postsController.php
*/

namespace App\Controllers\PostsController;
use \App\Models\PostsModel;
use \App\Models\AuthorsModel;


/**
 * indexAction
 *
 * @param \PDO $conn
 * @return void
 */
function indexAction (\PDO $conn) {
  // asking last 10 posts to postsModel
  include_once '../app/models/postsModel.php';
  $posts = PostsModel\findAll($conn);

  // load posts/index view in $content
  GLOBAL $content, $title;
  $title = "Blog";
  ob_start();
    include '../app/views/posts/index.php';
  $content = ob_get_clean();
}


/**
 * showAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function showAction (\PDO $conn, int $id) {
  // asking one post by id to postsModel
  include_once '../app/models/postsModel.php';
  $post = PostsModel\findOneById($conn, $id);
  // asking author by post id to authorsModel
  include_once '../app/models/authorsModel.php';
  $author = AuthorsModel\findOneById($conn, $post['author_id']);

  // load posts/show view in $content, $post['title] in $title
  GLOBAL $content, $title;
  $title = $post['title'];
  ob_start();
    include '../app/views/posts/show.php';
  $content = ob_get_clean();
}