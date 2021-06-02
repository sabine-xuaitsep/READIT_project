<?php
/* 
  ./app/controllers/commentsController.php
*/

namespace App\Controllers\CommentsController;
use \App\Models\CommentsModel;

/**
 * indexByPostIdAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function indexByPostIdAction (\PDO $conn, int $id) {
  // asking comments by post id to commentsModel
  include_once '../app/models/commentsModel.php';
  $comments = CommentsModel\findAllByPostId($conn, $id);

  // load comments/indexByPostId directly
  include '../app/views/comments/indexByPostId.php';
}