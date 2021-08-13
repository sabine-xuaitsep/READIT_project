<?php
/* 
  ./app/controllers/tagsController.php
*/

namespace App\Controllers\TagsController;
use \App\Models\TagsModel;


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