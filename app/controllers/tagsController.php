<?php
/* 
  ./app/controllers/tagsController.php
*/

namespace App\Controllers\TagsController;
use \App\Models\TagsModel;

/**
 * indexByPostIdAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function indexByPostIdAction (\PDO $conn, int $id) {
  // asking comments by post id to commentsModel
  include_once '../app/models/tagsModel.php';
  $tags = TagsModel\findAllByPostId($conn, $id);

  // load comments/indexByPostId directly
  include '../app/views/tags/_indexByPostId.php';
}