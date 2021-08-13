<?php
/* 
  ./app/controllers/tagsController.php
*/

namespace App\Controllers\TagsController;
use \App\Models\TagsModel;
use \App\Models\PostsModel;

/**
 * indexAction
 *
 * @param \PDO $conn
 * @return void
 */
function indexAction (\PDO $conn) {
  // asking tags to tagsModel
  include_once '../app/models/tagsModel.php';
  $tags = TagsModel\findAll($conn);
  
  // load tags/_index directly
  include '../app/views/tags/_index.php';
}


/**
 * indexByPostIdAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function indexByPostIdAction (\PDO $conn, int $id) {
  // asking tags by post id to tagsModel
  include_once '../app/models/tagsModel.php';
  $tags = TagsModel\findAllByPostId($conn, $id);

  // load tags/_indexByPostId directly
  include '../app/views/tags/_indexByPostId.php';
}


/**
 * showAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function showAction (\PDO $conn, int $id) {
  // asking one tag by id to tagsModel
  include_once '../app/models/tagsModel.php';
  $tag = TagsModel\findOneById($conn, $id);
  // asking all posts by tag id to postsModel
  include_once '../app/models/postsModel.php';
  $posts = PostsModel\findAllByTagId($conn, $id);

  // load posts/index view in $content, $tag['name'] in $title
  GLOBAL $content, $title;
  $title = $tag['name'];
  ob_start();
    include '../app/views/posts/index.php';
  $content = ob_get_clean();
}